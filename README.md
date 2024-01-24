# Hyvä Image Flipper

**Hyvä Image Flipper is a part of MageINIC Image Flipper extension that adds Hyvä features.** This extension extends Image Flipper definitions.

## 1. How to install

Run the following command in Magento 2 root folder:

```
composer require mageinic/hyva-image-flipper

php bin/magento maintenance:enable
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento maintenance:disable
php bin/magento cache:flush
```

**Note:**
Magento 2 Image Flipper requires installing [MageINIC Image Flipper](https://github.com/mageinic/image-flipper) in your Magento installation.

**Or Install via composer [Recommend]**
```
composer require mageinic/image-flipper
```

## 2. Get Support

- Feel free to [contact us](https://www.mageinic.com/contact.html) if you have any further questions.
- Like this project, Give us a **Star**
