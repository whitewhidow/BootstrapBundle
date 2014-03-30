BootstrapBundle
===============



Will include jquery, bootstrap and font-awsome.


### Step 1: Download BBITBootstrapBundle using composer

Add BBITBootstrapBundle in your composer.json:

```js
{
    "require": {
        "bbit/bootstrap-bundle": "dev-master",
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update bbit/bootstrap-bundle
```

Composer will install the bundle to your project's `vendor/BBIT` directory.

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new BBIT\BootstrapBundle\BBITBootstrapBundle(),
    );
}
```


### Usage in TWIG template:

``` twig
{{ insertBootstrap() }}
```
