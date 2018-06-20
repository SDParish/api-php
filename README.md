# StuRents API Helper

Install using composer:

    php composer.phar require sturents/api

#### Wait, what's Composer?

Composer is the de-facto package manager for PHP projects. If you haven't used it before it is very simple to set up.

1. Visit the [Composer download page](https://getcomposer.org/download/) and follow instructions to download composer into your project root.
1. You should now have a file called `composer.phar` in your project root. You can run [various commands](https://getcomposer.org/doc/03-cli.md) using this file.
1. Start by running `php composer.phar init` to create your `composer.json` file. This file stores all your project configuration and dependencies.
1. Now either run the command at the top of the readme to install the StuRents API, or add `"sturents/api": "*"` to the `"require"` object inside your `composer.json` file.

To use Composer dependencies inside a PHP file is simple - just the following to the top of your file:

    require_once __DIR__.'/vendor/autoload.php';

Now you can create or use any object without having to worry about requiring its files - Composer and PHP's autoloader will handle that for you.

## Send a property to StuRents

_V1.3 does not allow sending properties; please check v1.4 for a modern ORM library, or 1.2 or previous can be accessed from the releases page_
    
## Fetch data from StuRents

    $sturents_fetch = new \Sturents\Api\FetchFromSturents(LANDLORD_ID, PUBLIC_KEY);
    try {
        $properties = $sturents_fetch->fetchProperties();
    }
    catch (\Exception $e){
       echo "A problem happened: ".$e->getMessage();
    }
    
    echo count($properties) // echo, e.g. 1
    echo $properties[0]->getAddress()->getRoad() // echo e.g. Test Street;
    
    
    
    
