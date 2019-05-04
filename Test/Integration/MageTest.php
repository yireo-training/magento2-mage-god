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
        $this->assertEquals('2.3.1', Mage::getVersion(), 'eq');
    }

    public function testGetVersionInfo()
    {
        $version = Mage::getVersion();
        $versionInfo = Mage::getVersionInfo();
        $this->assertNotEmpty($versionInfo);
        $this->assertEquals(2, $versionInfo['major']);
        $this->assertContains($version, implode('.', $versionInfo));
    }

    public function testGetEdition()
    {
        $this->assertEquals('Community', Mage::getEdition());
    }

    public function testRegister()
    {
        Mage::register('registerTest', 'foobar');
        $registry = Mage::getSingleton(Registry::class);
        $value = $registry->registry('registerTest');
        $this->assertEquals('foobar', $value);
    }

    public function testUnregister()
    {
        Mage::register('unregisterTest', 'foobar');
        $registry = Mage::getSingleton(Registry::class);
        $value = $registry->registry('unregisterTest');
        $this->assertEquals('foobar', $value);
        Mage::unregister('unregisterTest');
        $value = $registry->registry('unregisterTest');
        $this->assertEmpty($value);
    }

    public function testRegistry()
    {
        $registry = Mage::getSingleton(Registry::class);
        $registry->register('registryTest', 'foobar');
        $value = Mage::registry('registryTest');
        $this->assertEquals('foobar', $value);
    }

    public function testSetRoot()
    {
        $this->expectException(NotImplementedException::class);
        Mage::setRoot('foobar');
    }

    public function testGetRoot()
    {
        $rootFolder = Mage::getRoot();
        $this->assertTrue(is_dir($rootFolder));
    }

    public function testGetEvents()
    {
        /** @var EventCollection $eventCollection */
        $eventCollection = $this->objectManager->get(EventCollection::class);
        $eventCollection->getEventByName('foobar');

        $events = Mage::getEvents();
        $this->assertArrayHasKey('foobar', $events);
    }

    public function testObjects()
    {
        $this->expectException(NotImplementedException::class);
        Mage::objects('foobar');
    }

    public function testGetBaseDir()
    {
        $baseDir = Mage::getBaseDir('var');
        $this->assertTrue(is_dir($baseDir));
    }

    public function testGetModuleDir()
    {
        $moduleDir = dirname(dirname(__DIR__));
        $this->assertSame($moduleDir, Mage::getModuleDir('module', 'Yireo_MageGod'));
    }

    /**
     * @magentoAdminConfigFixture foo/bar/hello world
     */
    public function testGetStoreConfig()
    {
        $this->assertEquals('world', Mage::getStoreConfig('foo/bar/hello'));
    }

    /**
     * @magentoAdminConfigFixture foo/bar/bool 1
     */
    public function testGetStoreConfigFlag()
    {
        $this->assertTrue(Mage::getStoreConfigFlag('foo/bar/bool'));
    }

    public function testGetBaseUrl()
    {
        $this->assertNotEmpty(Mage::getBaseUrl());
    }

    public function testGetUrl()
    {
        $this->assertContains('customer/account/login', Mage::getUrl('customer/account/login'));
    }

    public function testGetDesign()
    {
        $this->expectException(NotImplementedException::class);
        Mage::getDesign();
    }

    public function testGetConfig()
    {
        $this->expectException(NotImplementedException::class);
        Mage::getDesign();
    }

    public function testAddObserver()
    {
        $this->expectException(NotImplementedException::class);
        Mage::getDesign();
    }

    public function testDispatchEvent()
    {
        $this->expectException(NotImplementedException::class);
        Mage::getDesign();
    }

    public function testGetModel()
    {
    }


    public function testGetSingleton()
    {
    }

    public function testGetResourceModel()
    {
    }


    public function testGetControllerInstance()
    {
    }

    public function testGetResourceSingleton()
    {
    }

    public function testGetBlockSingleton()
    {
    }

    public function testHelper()
    {
    }

    public function testException()
    {
        $exception = Mage::exception(\Exception::class, '[TEST] exception', 9001);

        $this->assertEquals('[TEST] exception', $exception->getMessage());
        $this->assertEquals(9001, $exception->getCode());
        $this->assertInstanceOf(\Exception::class, $exception);
    }

    public function testThrowException()
    {
        $this->expectException(NotImplementedException::class);
        Mage::throwException('[TEST] exception message');
    }

    public function testApp()
    {
        $this->expectException(NotImplementedException::class);
        Mage::app();
    }

    public function testInit()
    {
        $this->expectException(NotImplementedException::class);
        Mage::init();
    }

    public function testRun()
    {
        $this->expectException(NotImplementedException::class);
        Mage::run();
    }

    public function testIsInstalled()
    {
        $this->expectException(NotImplementedException::class);
        Mage::isInstalled();
    }

    public function testLog()
    {
        $this->expectException(NotImplementedException::class);
        Mage::log('[TEST] message');
    }

    public function testLogException()
    {
        $this->expectException(NotImplementedException::class);
        Mage::logException(new \Exception);
    }

    public function testSetIsDeveloperMode()
    {
        $this->expectException(NotImplementedException::class);
        Mage::setIsDeveloperMode('developer');
    }

    public function testGetIsDeveloperMode()
    {
        $this->expectException(NotImplementedException::class);
        Mage::getDesign();
    }

    public function testPrintException()
    {
        $this->expectException(NotImplementedException::class);
        Mage::printException(new \Exception);
    }

    public function testGetScriptSystemUrl()
    {
        $this->expectException(NotImplementedException::class);
        Mage::getScriptSystemUrl('skin');
    }

    public function testSetIsDownloader()
    {
        $this->expectException(NotImplementedException::class);
        Mage::setIsDownloader();
    }

    public function testIsFinal()
    {
        $this->assertTrue((new \ReflectionClass(Mage::class))->isFinal(), 'The class should be final');
    }
}

// MageTest ... Fest
