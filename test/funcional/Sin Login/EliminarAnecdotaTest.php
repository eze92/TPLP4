<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver;
require_once('vendor/autoload.php');

class EliminarAnecdotaTestTest extends TestCase
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
     * Method testEliminarAnecdotaTest
     * @test
     */
    public function eliminarAnecdota()
    {
 
        $this->webDriver->get("http://turismonacionaleinternacional/index.php");
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Agenda"))->click();
        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(//button[@type='button'])[3]"))->click();
		$this->webDriver->switchTo()->alert()->accept();
        $this->assertFalse($this->existeArchivo());

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
