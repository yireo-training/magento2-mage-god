# Yireo MageGod
Little package that re-introduces the Magento 1 `Mage` class back into Magento 2.

## Installation
Run the following commands:

    composer require yireo/magento2-mage-god@dev
    ./bin/magento module:enable Yireo_MageGod
    ./bin/magento setup:upgrade

## Using it in your code
```php
use Yireo\MageGod\Mage;
use Magento\Catalog\Model\Product;
use Magento\Customer\Model\Session as CustomerSession;

class Example
{
    public function getProduct()
    {
        $product = Mage::getModel(Product::class);
        $product->load(42);
        return $product;
    }
    
    public function getCustomerSession()
    {
         $customerSession = Mage::getSingleton(CustomerSession::class);
         return $customerSession;
    }
}
```

## Sidenotes
This might not be a very serious project.