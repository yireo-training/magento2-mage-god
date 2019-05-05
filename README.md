# Yireo MageGod
Little package that re-introduces the Magento 1 `Mage` class back into Magento 2.

## Disclaimer
We do **NOT** recommend for this package to be used in the wild: This is an educational gimmick, not meant for real-life. You might say that a `Mage` class in M2 would make migration from M1 to M2 easier, but it does not: The M2 code is hugely different, that any M1 extension or theme or custom code needs to be rewritten. And we highly recommend to do this rewrite properly, taking advantage of the modern structure of M2. This `Mage` class is not part of that. It is just a joke. 

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
