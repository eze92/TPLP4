<?php

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver;
require_once('vendor/autoload.php');

class ProbandoIngresarDatosTest extends TestCase
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
     * Method testProbandoIngresarDatos
     * @test
     */
    public function testProbandoIngresarDatosYMandarEmail()
    {
        $this->webDriver->get("http://turismonacionaleinternacional/index.php");
		
		$this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Contacto"))->click();
		
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("nombre"))->click();
		
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("nombre"))->sendKeys("Ezequiel");
		
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("apellido"))->sendKeys("Ledesma");
		
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("email"))->sendKeys("ezequiel.ledesma026@gmail.com");
		
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("telefono"))->click();
		
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("telefono"))->sendKeys("47347866");
		
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("mensaje"))->click();
		
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("mensaje"))->sendKeys("Estoy probando ingresar datos en el formulario");
		
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("submit"))->click();
		
		$this->webDriver->switchTo()->alert()->dismiss();	
		
		$this->assertStringContainsString('Ezequiel', $this->webDriver-getAttribute("nombre"));
	
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
