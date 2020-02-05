<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver;
require_once('vendor/autoload.php');

class subirAnecdotaTest extends TestCase
{

    private $webDriver;


    private $baseUrl;

    public function setUp():void
    {
        $desiredCapabilities = WebDriver\Remote\DesiredCapabilities::chrome();
        $desiredCapabilities->setCapability('trustAllSSLCertificates', true);
        $this->webDriver = WebDriver\Remote\RemoteWebDriver::create('http://localhost:4444/wd/hub', $desiredCapabilities);
    }


    public function subirAnecdota()
    {
      
        $this->webDriver->get("http://turismonacionaleinternacional/modelo/agenda.php");
     
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//button[@type='button']"))->click();
       
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("usuario"))->click();
      
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("usuario"))->sendKeys("ezequiel");
       
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("anecdota"))->click();
   
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("anecdota"))->sendKeys("probando cargar una anecdota");
     
        $this->webDriver->findElement(WebDriver\WebDriverBy::cssSelector("input[id=\"imagen\"]"))->sendKeys($this->getRutaImagen());

        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//button[@type='submit']"))->click();
    
		$this->webDriver->switchTo()->alert()->dismiss();	

        $this->assertTrue($this->existeArchivo());

        $this->assertSame(735016,$this->tamanioArchivo());

        $this->assertSame('board-361516_1920.jpg',$this->nombreArchivo());

    }
	 private function getRutaImagen()
    {
        return __DIR__ . '/imagenprueba/board-361516_1920.jpg';
    }
    
    private function existeArchivo() 
    { 
        $nombre_fichero = __DIR__ .'../imagenes/board-361516_1920.jpg';
        if (file_exists($nombre_fichero)) {
             return true;
         } else {
             return false;
        }
    }

    private function tamanioArchivo()
    {
        $nombre_fichero = __DIR__ .'../imagenes/board-361516_1920.jpg';
        $tamanio_imagen = filesize($nombre_fichero);

        return $tamanio_imagen;
    } 
    private function nombreArchivo()
    {
        $nombre_fichero = __DIR__ .'../imagenes/board-361516_1920.jpg';
        $nombreArchivo = basename($nombre_fichero);

        return $nombreArchivo;
    }   

    public function tearDown():void
    {
        $this->webDriver->close();
    }

    private function getSelect(WebDriver\Remote\RemoteWebElement $element): WebDriver\WebDriverSelect
    {
        return new WebDriver\WebDriverSelect($element);
    }

   
}
