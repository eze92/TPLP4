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
