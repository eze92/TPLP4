<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver;
require_once('vendor/autoload.php');


class ModificarAnecdota extends TestCase
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
     * Method testUntitledTestCase
     * @test
     */
    public function subirAnecdota()
    {
        
        $this->webDriver->get("http://turismonacionaleinternacional/modelo/agenda.php");

        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//button[@type='button']"))->click();
   
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("usuario"))->click();

        $this->webDriver->findElement(WebDriver\WebDriverBy::id("usuario"))->sendKeys("ezequiel");
     
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("anecdota"))->click();
     
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("anecdota"))->sendKeys("agrego primer anecdota");
      
        $this->webDriver->findElement(WebDriver\WebDriverBy::cssSelector("input[id=\"imagen\"]"))->sendKeys($this->getRutaImagen());

        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//button[@type='submit']"))->click();
		
		$this->webDriver->switchTo()->alert()->accept();
   
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(//button[@type='button'])[2]"))->click();
  
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("usuario"))->click();
  
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("usuario"))->sendKeys("pepe");
  
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("anecdota"))->click();
     
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//form[@action='modificarFuncion.php']"))->click();
     
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("anecdota"))->sendKeys("actualizo anecdota");
      
        $this->webDriver->findElement(WebDriver\WebDriverBy::cssSelector("input[id=\"imagen\"]"))->sendKeys($this->getRutaImagen2());
 
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//button[@type='submit']"))->click();
		
		$this->webDriver->switchTo()->alert()->accept();
		
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
        $nombre_fichero = __DIR__ .'../imagenes/board-361516_1920.jpg';
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
