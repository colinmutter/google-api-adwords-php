AdWords API PHP Client
============================

Current versions supported: 

 - 4.7.0 (v201306, v201309)
 - 4.5.1 (v201302, v201306)
 - 4.4.1 (v201209, v201302, v201306)
 - 4.4.0 (v201209, v201302, v201306)
 - 4.2.1 (v201209, v201302)

Added composer.json, and registered with packagist so that you can have convenient versions of the adwords api client added to your projects.


To install

    composer require cmutter/google-adwords-api

or add this to your composer.json, and ```composer update``` 

```  
{
    "require": {
        "cmutter/google-adwords-api": "4.7.0"
    }
}
```


Symfony 2.x Autoloader Notice
============================
The AdWords client library in the 4.x series started requiring users to add the path of their libraries to the PHP include_path.  This PSR-0 non-compliance necessitates the use of the deprecated "include-path" option in Composer.  Don't worry, it's taken care of, and Composer says they're not getting rid of the option anytime soon.


Credits
============================

The complete documentation for AdWords and DoubleClick Ad Exchange Buyer API is
available from [http://www.google.com/apis/adwords/developer/index.html](http://www.google.com/apis/adwords/developer/index.html)

See Google's [README](https://github.com/colinmutter/adwords-php-client/blob/master/README) for additional information


