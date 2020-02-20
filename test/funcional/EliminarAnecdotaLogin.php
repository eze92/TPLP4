<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver;
require_once('vendor/autoload.php');


class EliminarAnecdotaLogin extends TestCase
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
    public function testEliminarAnecdota()
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

        $this->webDriver->findElement(WebDriver\WebDriverBy::name("anecdota"))->click();

        $this->webDriver->findElement(WebDriver\WebDriverBy::name("anecdota"))->sendKeys("La pase muy bien");

        $this->webDriver->findElement(WebDriver\WebDriverBy::cssSelector("input[id=\"imagen\"]"))->sendKeys($this->getRutaImagen());

        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("//button[@type='submit']"))->click();

        $this->webDriver->switchTo()->alert()->accept();

        $this->webDriver->findElement(WebDriver\WebDriverBy::xpath("(//button[@type='button'])[3]"))->click();

        $this->webDriver->switchTo()->alert()->accept();

        $this->assertFalse($this->existeArchivo());
    }

    private function getRutaImagen()
    {
        return __DIR__ . '/imagenprueba/nature-1547302_1920.jpg';
    }

    private function existeArchivo() 
    { 
        $nombre_fichero = __DIR__ .'../../../imagenes/nature-1547302_1920.jpg';
        if (!file_exists($nombre_fichero)) {
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
