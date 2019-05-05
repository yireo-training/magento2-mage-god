<?php
declare(strict_types=1);

namespace Yireo\MageGod;

use Exception;

use Magento\Framework\App\Bootstrap;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\ProductMetadata;
use Magento\Framework\Component\ComponentRegistrar;
use Magento\Framework\Event\Collection as EventCollection;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\Exception\FileSystemException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Filesystem\DirectoryList;
use Magento\Framework\Registry;
use Magento\Framework\UrlFactory;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\AbstractBlock;
use Magento\Framework\View\LayoutInterface;

use Magento\Store\Model\StoreManagerInterface;
use Yireo\MageGod\Exception\NotImplementedException;

/**
 * Class Mage
 * @package Yireo\MageGod
 */
final class Mage
{
    /**
     * @return string
     */
    public static function getVersion(): string
    {
        /** @var ProductMetadata $productMetaData */
        $productMetaData = self::getSingleton(ProductMetadata::class);
        return $productMetaData->getVersion();
    }

    /**
     * @return array
     */
    public static function getVersionInfo(): array
    {
        $version = explode('.', self::getVersion());
        return [
            'major' => $version[0],
            'minor' => $version[1],
            'patch' => $version[2],
            'revision' => '',
            'stability' => '',
            'number' => '',
        ];
    }

    /**
     * @return string
     */
    public static function getEdition(): string
    {
        return ProductMetadata::EDITION_NAME;
    }

    /**
     * @param $key
     * @param $value
     * @param bool $graceful
     */
    public static function register($key, $value, $graceful = false)
    {
        /** @var Registry $registry */
        $registry = self::getSingleton(Registry::class);
        return $registry->register($key, $value, $graceful);
    }

    /**
     * @param $key
     * @param $value
     * @param bool $graceful
     */
    public static function unregister(string $key)
    {
        /** @var Registry $registry */
        $registry = self::getSingleton(Registry::class);
        $registry->unregister($key);
    }

    /**
     * @param string $key
     * @return mixed
     */
    public static function registry(string $key)
    {
        /** @var Registry $registry */
        $registry = self::getSingleton(Registry::class);
        return $registry->registry($key);
    }

    /**
     * @param null $appRoot
     * @throws NotImplementedException
     */
    public static function setRoot($appRoot = null)
    {
        throw new NotImplementedException();
    }

    /**
     * @return string
     */
    public static function getRoot(): string
    {
        /** @var DirectoryList $directoryList */
        $directoryList = Mage::getSingleton(DirectoryList::class);
        return $directoryList->getRoot();
    }

    /**
     * @return array
     */
    public static function getEvents(): array
    {
        /** @var EventCollection $eventCollection */
        $eventCollection = Mage::getSingleton(EventCollection::class);
        return $eventCollection->getAllEvents();
    }

    /**
     * @param null $key
     * @throws NotImplementedException
     */
    public static function objects($key = null)
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $type
     * @return string
     * @throws FileSystemException
     */
    public static function getBaseDir(string $type = 'base')
    {
        /** @var DirectoryList $directoryList */
        $directoryList = Mage::getSingleton(DirectoryList::class);
        return $directoryList->getPath($type);
    }

    /**
     * @param string $type
     * @param string $moduleName
     * @return string|null
     */
    public static function getModuleDir(string $type, string $moduleName)
    {
        /** @var ComponentRegistrar $componentRegistrar */
        $componentRegistrar = Mage::getSingleton(ComponentRegistrar::class);
        return $componentRegistrar->getPath($type, $moduleName);
    }

    /**
     * @param string $path
     * @param null $store
     * @return mixed
     */
    public static function getStoreConfig(string $path, $store = null)
    {
        /** @var ScopeConfigInterface $scopeConfig */
        $scopeConfig = Mage::getSingleton(ScopeConfigInterface::class);
        return $scopeConfig->getValue($path, ScopeConfigInterface::SCOPE_TYPE_DEFAULT, $store);
    }

    /**
     * @param $path
     * @param null $store
     * @return bool
     */
    public static function getStoreConfigFlag($path, $store = null): bool
    {
        return (bool)self::getStoreConfig($path, $store);
    }

    /**
     * @param string $type
     * @param null $secure
     * @return string
     * @throws NoSuchEntityException
     */
    public static function getBaseUrl($type = UrlInterface::URL_TYPE_LINK, $secure = null): string
    {
        /** @var StoreManagerInterface $storeManager */
        $storeManager = self::getObjectManager()->get(StoreManagerInterface::class);
        return $storeManager->getStore()->getBaseUrl();
    }

    /**
     * @param string $route
     * @param array $params
     * @return string
     */
    public static function getUrl(string $route = '', array $params = array()): string
    {
        /** @var UrlFactory $urlFactory */
        $urlFactory = self::getObjectManager()->get(UrlFactory::class);
        return $urlFactory->create()->getUrl($route, $params);
    }

    /**
     * @throws NotImplementedException
     */
    public static function getDesign()
    {
        throw new NotImplementedException();
    }

    /**
     * @throws NotImplementedException
     */
    public static function getConfig()
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $eventName
     * @param callable $callback
     * @param array $data
     * @param string $observerName
     * @param string $observerClass
     * @throws NotImplementedException
     */
    public static function addObserver(string $eventName, callable $callback, array $data = array(), string $observerName = '', string $observerClass = '')
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $name
     * @param array $data
     */
    public static function dispatchEvent(string $name, array $data = array())
    {
        /** @var ManagerInterface $eventManager */
        $eventManager = Mage::getSingleton(ManagerInterface::class);
        $eventManager->dispatch($name, $data);
    }

    /**
     * @param string $className
     * @return object
     */
    public static function getModel(string $modelClass = '', array $arguments = array())
    {
        return self::getObjectManager()->create($modelClass, $arguments);
    }

    /**
     * @param string $className
     * @return object
     */
    public static function getSingleton(string $modelClass = '')
    {
        return self::getObjectManager()->get($modelClass);
    }

    /**
     * @param $modelClass
     * @param array $arguments
     * @return object
     */
    public static function getResourceModel(string $modelClass, array $arguments = array())
    {
        return self::getModel($modelClass, $arguments);
    }

    /**
     * @param string $className
     * @param $request
     * @param $response
     * @param array $invokeArgs
     * @return object
     */
    public static function getControllerInstance(string $className, $request, $response, array $invokeArgs = array())
    {
        return new $className($request, $response, $invokeArgs);
    }

    /**
     * @param string $modelClass
     * @return object
     */
    public static function getResourceSingleton(string $modelClass)
    {
        return self::getSingleton($modelClass);
    }

    /**
     * @param string $type
     * @return AbstractBlock
     */
    public static function getBlockSingleton(string $type): AbstractBlock
    {
        $layout = self::getObjectManager()->get(LayoutInterface::class);
        return $layout->getBlockSingleton($type);
    }

    /**
     * @param string $name
     * @return AbstractHelper
     */
    public static function helper(string $name): AbstractHelper
    {
        return self::getSingleton($name);
    }

    /**
     * @param string $exceptionClass
     * @param string $message
     * @param int $code
     * @return Exception
     */
    public static function exception(string $exceptionClass = '', string $message = '', int $code = 0): Exception
    {
        return new $exceptionClass($message, $code);
    }

    /**
     * @param string $message
     * @param null $messageStorage
     * @throws NotImplementedException
     */
    public static function throwException(string $message, $messageStorage = null)
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $code
     * @param string $type
     * @param array $options
     * @throws NotImplementedException
     */
    public static function app(string $code = '', string $type = 'store', array $options = array())
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $code
     * @param string $type
     * @param array $options
     * @param array $modules
     * @throws NotImplementedException
     */
    public static function init($code = '', $type = 'store', $options = array(), $modules = array())
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $code
     * @param string $type
     * @param array $options
     * @throws NotImplementedException
     */
    public static function run($code = '', $type = 'store', $options = array())
    {
        throw new NotImplementedException();
    }

    /**
     * @param array $options
     * @throws NotImplementedException
     */
    public static function isInstalled($options = array())
    {
        throw new NotImplementedException();
    }

    /**
     * @param $message
     * @param null $level
     * @param string $file
     * @param bool $forceLog
     * @throws NotImplementedException
     */
    public static function log($message, $level = null, $file = '', $forceLog = false)
    {
        throw new NotImplementedException();
    }

    /**
     * @param Exception $e
     * @throws NotImplementedException
     */
    public static function logException(Exception $e)
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $mode
     * @throws NotImplementedException
     */
    public static function setIsDeveloperMode(string $mode)
    {
        throw new NotImplementedException();
    }

    /**
     * @return bool
     */
    public static function getIsDeveloperMode(): bool
    {
        /** @var Bootstrap $bootstrap */
        $bootstrap = self::getObjectManager()->get(Bootstrap::class);
        return $bootstrap->isDeveloperMode();
    }

    /**
     * @param Exception $e
     * @param string $extra
     * @throws NotImplementedException
     */
    public static function printException(Exception $e, $extra = '')
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $folder
     * @param bool $exitIfNot
     * @throws NotImplementedException
     */
    public static function getScriptSystemUrl(string $folder, bool $exitIfNot = false)
    {
        throw new NotImplementedException();
    }

    /**
     * @param mixed $flag
     * @throws NotImplementedException
     */
    public static function setIsDownloader($flag = null)
    {
        throw new NotImplementedException();
    }

    /**
     * @return ObjectManager
     */
    protected static function getObjectManager(): ObjectManager
    {
        return ObjectManager::getInstance();
    }
}
