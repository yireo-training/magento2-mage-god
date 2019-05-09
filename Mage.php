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
        throw new NotImplementedException();
    }

    /**
     * @return array
     */
    public static function getVersionInfo(): array
    {
        throw new NotImplementedException();
    }

    /**
     * @return string
     */
    public static function getEdition(): string
    {
        throw new NotImplementedException();
    }

    /**
     * @param $key
     * @param $value
     * @param bool $graceful
     */
    public static function register($key, $value, $graceful = false)
    {
        throw new NotImplementedException();
    }

    /**
     * @param $key
     * @param $value
     * @param bool $graceful
     */
    public static function unregister(string $key)
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $key
     * @return mixed
     */
    public static function registry(string $key)
    {
        throw new NotImplementedException();
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
        throw new NotImplementedException();
    }

    /**
     * @return array
     */
    public static function getEvents(): array
    {
        throw new NotImplementedException();
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
        throw new NotImplementedException();
    }

    /**
     * @param string $type
     * @param string $moduleName
     * @return string|null
     */
    public static function getModuleDir(string $type, string $moduleName)
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $path
     * @param null $store
     * @return mixed
     */
    public static function getStoreConfig(string $path, $store = null)
    {
        throw new NotImplementedException();
    }

    /**
     * @param $path
     * @param null $store
     * @return bool
     */
    public static function getStoreConfigFlag($path, $store = null): bool
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $type
     * @param null $secure
     * @return string
     * @throws NoSuchEntityException
     */
    public static function getBaseUrl($type = UrlInterface::URL_TYPE_LINK, $secure = null): string
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $route
     * @param array $params
     * @return string
     */
    public static function getUrl(string $route = '', array $params = array()): string
    {
        throw new NotImplementedException();
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
        throw new NotImplementedException();
    }

    /**
     * @param string $className
     * @return object
     */
    public static function getModel(string $modelClass = '', array $arguments = array())
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $className
     * @return object
     */
    public static function getSingleton(string $modelClass = '')
    {
        throw new NotImplementedException();
    }

    /**
     * @param $modelClass
     * @param array $arguments
     * @return object
     */
    public static function getResourceModel(string $modelClass, array $arguments = array())
    {
        throw new NotImplementedException();
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
        throw new NotImplementedException();
    }

    /**
     * @param string $modelClass
     * @return object
     */
    public static function getResourceSingleton(string $modelClass)
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $type
     * @return AbstractBlock
     */
    public static function getBlockSingleton(string $type): AbstractBlock
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $name
     * @return AbstractHelper
     */
    public static function helper(string $name): AbstractHelper
    {
        throw new NotImplementedException();
    }

    /**
     * @param string $exceptionClass
     * @param string $message
     * @param int $code
     * @return Exception
     */
    public static function exception(string $exceptionClass = '', string $message = '', int $code = 0): Exception
    {
        throw new NotImplementedException();
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
        throw new NotImplementedException();
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

}
