<?php

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver;
require_once('vendor/autoload.php');

class ProbandoLaPagTest extends TestCase
{
    /**
     * @var WebDriver\Remote\RemoteWebDriver
     */
    private $webDriver;

    /**
     * @var string
     */
    private $baseUrl;
	
    protected $url = 'https://turismonacionaleinternacional';

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
     * Method testProbandoLaPag
     * @test
     */
   /* public function testProbandoLaPag()
    {
        // open | http://turi/ | 
        $this->webDriver->get("http://turi/");
        // click | link=Contacto | 
        $this->webDriver->findElement(WebDriver\WebDriverBy::linkText("Contacto"))->click();
        // click | id=nombre | 
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("nombre"))->click();
        // type | id=nombre | Ezequiel
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("nombre"))->sendKeys("Ezequiel");
        // type | id=apellido | Ledesma
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("apellido"))->sendKeys("Ledesma");
        // type | id=email | ezequiel.ledesma026@gmail.com
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("email"))->sendKeys("ezequiel.ledesma026@gmail.com");
        // click | id=telefono | 
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("telefono"))->click();
        // type | id=telefono | 47347866
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("telefono"))->sendKeys("47347866");
        // click | id=mensaje | 
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("mensaje"))->click();
        // type | id=mensaje | Se prueba escribiendo un mensaje 
        $this->webDriver->findElement(WebDriver\WebDriverBy::id("mensaje"))->sendKeys("Se prueba escribiendo un mensaje");
        // click | name=submit | 
        $this->webDriver->findElement(WebDriver\WebDriverBy::name("submit"))->click();
    }
*/
		public function probandoContenidoEncabezadoDeLaPagina()
    {
        $this->webDriver->get($this->url);
        $this->assertStringContainsString('turi', $this->webDriver->getTitle());
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
