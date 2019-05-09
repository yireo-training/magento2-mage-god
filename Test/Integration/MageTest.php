<?php
declare(strict_types=1);

namespace Yireo\MageGod\Test\Integration;

use Magento\Framework\Event\Collection as EventCollection;
use Magento\Framework\Registry;

use Magento\TestFramework\ObjectManager;

use PHPUnit\Framework\TestCase;

use Yireo\MageGod\Exception\NotImplementedException;
use Yireo\MageGod\Mage;

/**
 * Class MageTest
 * @package Yireo\MageGod\Test\Integration
 */
class MageTest extends TestCase
{
    /**
     * @var ObjectManager
     */
    private $objectManager;

    protected function setUp()
    {
        $this->objectManager = ObjectManager::getInstance();
    }

    public function testGetVersion()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetVersionInfo()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetEdition()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testRegister()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testUnregister()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testRegistry()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testSetRoot()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetRoot()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetEvents()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testObjects()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetBaseDir()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetModuleDir()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    /**
     * @magentoAdminConfigFixture foo/bar/hello world
     */
    public function testGetStoreConfig()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    /**
     * @magentoAdminConfigFixture foo/bar/bool 1
     */
    public function testGetStoreConfigFlag()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetBaseUrl()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetUrl()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetDesign()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetConfig()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testAddObserver()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testDispatchEvent()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetModel()
    {
        $this->markTestSkipped('Nothing to see here');
    }


    public function testGetSingleton()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetResourceModel()
    {
        $this->markTestSkipped('Nothing to see here');
    }


    public function testGetControllerInstance()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetResourceSingleton()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetBlockSingleton()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testHelper()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testException()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testThrowException()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testApp()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testInit()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testRun()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testIsInstalled()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testLog()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testLogException()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testSetIsDeveloperMode()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetIsDeveloperMode()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testPrintException()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testGetScriptSystemUrl()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testSetIsDownloader()
    {
        $this->markTestSkipped('Nothing to see here');
    }

    public function testIsFinal()
    {
        $this->assertTrue((new \ReflectionClass(Mage::class))->isFinal(), 'The class should be final');
    }
}

// MageTest ... Fest
