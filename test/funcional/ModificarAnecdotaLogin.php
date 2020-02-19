<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver;
require_once('vendor/autoload.php');


class ModificarAnecdotaLoginTest extends TestCase
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
     * Method testModificarAnecdotaLogin
     * @test
     */
    public function testModificarAnecdotaLogin()
    {
        $this->webDriver->get("http://turismonacionaleinternacional/index.php");

        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Login"))->click();

        $this->webDriver->findElement(WebDriver\WebDriverBy::id("inputUsuario"))->click();

        $this->webDriver->findElement(WebDriver\WebDriverBy::id("inputUsuario"))->sendKeys("eze92");

        $this->webDriver->findElement(WebDriver\WebDriverBy::id("inputPassword"))->click();

        $this->webDriver->findElement(WebDriver\WebDriverBy::id("inputPassword"))->sendKeys("12345");

        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//button[@type='submit']"))->click();

        $this->webDriver->switchTo()->alert()->accept();


        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//button[@type='button']"))->click();
   
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("usuario"))->click();

        $this->webDriver->findElement(WebDriver\WebDriverBy::id("usuario"))->sendKeys("eze92");
     
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("anecdota"))->click();
     
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("anecdota"))->sendKeys("Viaje muy bien");
      
        $this->webDriver->findElement(WebDriver\WebDriverBy::cssSelector("input[id=\"imagen\"]"))->sendKeys($this->getRutaImagen());

        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//button[@type='submit']"))->click();

        $this->webDriver->switchTo()->alert()->accept();

        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(//button[@type='button'])[2]"))->click();

        $this->webDriver->findElement(WebDriver\WebDriverBy::id("usuario"))->click();

        $this->webDriver->findElement(WebDriver\WebDriverBy::name("anecdota"))->click();

        $this->webDriver->findElement(WebDriver\WebDriverBy::name("anecdota"))->sendKeys("La pase muy bien , fue mejor de lo esperado");
       
        $this->webDriver->findElement(WebDriver\WebDriverBy::cssSelector("input[id=\"imagen\"]"))->sendKeys($this->getRutaImagen2());

        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//button[@type='submit']"))->click();

        $this->webDriver->switchTo()->alert()->accept();    

        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Salir"))->click();
        
        $this->webDriver->switchTo()->alert()->accept();    

        $this->assertSame('board-361516_1920.jpg',$this->nombreArchivo());
    }

    public function testConsultarTamanio(){
        $this->webDriver->get("http://turismonacionaleinternacional/index.php");
        $this->assertSame(735016,$this->tamanioArchivo());

    }

    public function testConsultarNombre(){
         $this->webDriver->get("http://turismonacionaleinternacional/index.php");
         $this->assertSame('board-361516_1920.jpg',$this->nombreArchivo()); 
    }

    private function getRutaImagen()
    {
        return __DIR__ . '/imagenprueba/nature-1547302_1920.jpg';
    }
    
     private function getRutaImagen2()
    {
        return __DIR__ . '/imagenprueba/board-361516_1920.jpg';
    }

    private function nombreArchivo()
    {
        $nombre_fichero = __DIR__ .'../../../imagenes/board-361516_1920.jpg';
        $nombreArchivo = basename($nombre_fichero);

        return $nombreArchivo;
    } 
    
    private function tamanioArchivo()
    {
        $nombre_fichero = __DIR__ .'../../../imagenes/board-361516_1920.jpg';
        $tamanio_imagen = filesize($nombre_fichero);

        return $tamanio_imagen;
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
