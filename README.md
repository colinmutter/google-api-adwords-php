AdWords API PHP Client
============================

Current versions supported: 

 - 4.2.1 (v201209, v201302)

Added composer.json, and registered with packagist so that you can have convenient versions of the adwords api client added to your projects.


To install

    composer require cmutter/google-adwords-api

or add this to your composer.json, and ```composer update``` 

```  
{
    "require": {
        "cmutter/google-adwords-api"": "4.2.1"
    }
}
```

Symfony 2.x Notice
============================
The AdWords client library in the 4.x series started requiring users to add the path of their libraries to the PHP include_path.  Even with the autoloader in symfony, the fact that the library uses require_once(path) means that you will need to add this to your **app/autoload.php** :

```
$path = dirname(__FILE__) . '/../vendor/cmutter/google-adwords-api/src';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
```

It seems suboptimal, but if anyone has a better idea, please submit an issue or PR.

Credits
============================

The complete documentation for AdWords and DoubleClick Ad Exchange Buyer API is
available from [http://www.google.com/apis/adwords/developer/index.html](http://www.google.com/apis/adwords/developer/index.html)

See Google's [README](https://github.com/colinmutter/adwords-php-client/blob/master/README) for additional information


