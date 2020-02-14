<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver;
require_once('vendor/autoload.php');

class AgregarAnecdotaNewTest extends TestCase
{
    /**
     * @var WebDriver\Remote\RemoteWebDriver
     */
    private $webDriver;

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * init webdriver
     */
    public function setUp():void
    {
       $desiredCapabilities = WebDriver\Remote\DesiredCapabilities::chrome();
        $desiredCapabilities->setCapability('trustAllSSLCertificates', true);
        $this->webDriver = WebDriver\Remote\RemoteWebDriver::create('http://localhost:4444/wd/hub', $desiredCapabilities);
    }

    /**
     * Method testAgregarAnecdotaNew
     * @test
     */
    public function testAgregarAnecdotaNew()
    {
        // open | http://turismonacionaleinternacional/index.php | 
        $this->webDriver->get("http://turismonacionaleinternacional/index.php");
        // click | link=Login | 
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Login"))->click();
        // click | id=inputUsuario | 
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("inputUsuario"))->click();
        // type | id=inputUsuario | eze92
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("inputUsuario"))->sendKeys("eze92");
        // click | id=inputPassword | 
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("inputPassword"))->click();
        // type | id=inputPassword | 12345
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("inputPassword"))->sendKeys("12345");
        // click | //button[@type='submit'] | 
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//button[@type='submit']"))->click();
        // click | //button[@type='button'] | 
		
		$this->webDriver->switchTo()->alert()->accept();	

		
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//button[@type='button']"))->click();
        // click | id=usuario | 
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("usuario"))->click();
        // type | id=usuario | Viaje muy bien 
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("usuario"))->sendKeys("Viaje muy bien");
        // click | //form[@action='agregarFuncion.php'] | 
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//form[@action='agregarFuncion.php']"))->click();
        // click | name=anecdota | 
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("anecdota"))->click();
        // type | name=anecdota | plplp
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("anecdota"))->sendKeys("plplp");
        // click | id=imagen | 
       // $this->webDriver->findElement(WebDriver\WebDriverBy::id("imagen"))->click();
        // type | id=imagen | C:\fakepath\board-361516_1920.jpg
        $this->webDriver->findElement(WebDriver\WebDriverBy::cssSelector("input[id=\"imagen\"]"))->sendKeys($this->getRutaImagen());
        // click | //button[@type='submit'] | 
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//button[@type='submit']"))->click();
        // click | link=Salir | 
		$this->webDriver->switchTo()->alert()->accept();	
		
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Salir"))->click();
		
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
        $nombre_fichero = __DIR__ .'../../../imagenes/board-361516_1920.jpg';
        if (file_exists($nombre_fichero)) {
             return true;
         } else {
             return false;
        }
    }

    private function tamanioArchivo()
    {
        $nombre_fichero = __DIR__ .'../../../imagenes/board-361516_1920.jpg';
        $tamanio_imagen = filesize($nombre_fichero);

        return $tamanio_imagen;
    } 
    private function nombreArchivo()
    {
        $nombre_fichero = __DIR__ .'../../../imagenes/board-361516_1920.jpg';
        $nombreArchivo = basename($nombre_fichero);

        return $nombreArchivo;
    }   

    /**
     * Close the current window.
     */
    public function tearDown():void
    {
        $this->webDriver->close();
    }

    /**
     * @param WebDriver\Remote\RemoteWebElement $element
     *
     * @return WebDriver\WebDriverSelect
     * @throws WebDriver\Exception\UnexpectedTagNameException
     */
    private function getSelect(WebDriver\Remote\RemoteWebElement $element): WebDriver\WebDriverSelect
    {
        return new WebDriver\WebDriverSelect($element);
    }
}
