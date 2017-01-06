# EoPassbookBundle

[![Build Status](https://travis-ci.org/eymengunay/PassbookBundle.png)](https://travis-ci.org/eymengunay/PassbookBundle)
[![Latest Stable Version](https://poser.pugx.org/eo/passbook-bundle/v/stable.png)](https://packagist.org/packages/eo/passbook-bundle)
[![Total Downloads](https://poser.pugx.org/eo/passbook-bundle/downloads.png)](https://packagist.org/packages/eo/passbook-bundle)

[![knpbundles.com](http://knpbundles.com/eymengunay/PassbookBundle/badge-short)](http://knpbundles.com/eymengunay/PassbookBundle)

EoPassbookBundle integrates the [php-passbook](http://eymengunay.github.io/php-passbook) library into Symfony2. 

**Note**: See php-passbook documentation for more information on obtaining your p12 and wwdr certificates.

## Prerequisites
This version of the bundle requires Symfony 2.1+

## Installation

### Step 1: Download EoPassbookBundle using composer
Add EoPassbookBundle in your composer.json:
```
{
    "require": {
        "eo/passbook-bundle": "dev-master"
    }
}
```

Now tell composer to download the bundle by running the command:
```
$ php composer.phar update eo/passbook-bundle
```
Composer will install the bundle to your project's vendor/eo directory.

### Step 2: Enable the bundle
Enable the bundle in the kernel:
```
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Eo\PassbookBundle\EoPassbookBundle(),
    );
}
```

### Step 3: Configure the EoPassbookBundle
Now that you have properly installed and enabled EoPassbookBundle, the next step is to configure the bundle to work with the specific needs of your application.

Add the following configuration to your `config.yml` file
```
# app/config/config.yml
eo_passbook:
    pass_type_identifier:       PASS-TYPE-IDENTIFIER
    team_identifier:            TEAM-IDENTIFIER
    organization_name:          ORGANIZATION-NAME
    p12_certificate:            /path/to/p12/certificate
    p12_certificate_password:   P12-CERTIFICATE-PASSWORD
    wwdr_certificate:           /path/to/wwdr/certificate
    output_path:                /path/to/save/pkpass
    icon_file:                  /path/to/iconfile
```
All configuration values are required to use the bundle.

### Step 4 (Optional): Import EoPassbookBundle routing files
To browse the simple usage example you have to import the following file in your `routing.yml`:
```
# app/config/routing.yml
eo_passbook_sample:
    resource: "@EoPassbookBundle/Resources/config/routing/sample.xml"
```
You will now be able to access the example controller from: `http://domain.tld/passbook/sample`


## Usage

This bundle currently adds only a single service, `pass_factory`
```
// Getting pass_factory service is straightforward:
$factory = $this->get('pass_factory');
```

See php-passbook documentation for the rest.

The following documents are available:
* [PHP-Passbook Documentation](http://eymengunay.github.io/php-passbook)
* [PHP-Passbook API DOC](http://eymengunay.github.io/php-passbook/api)

## License
This bundle is under the MIT license. See the complete license in the bundle:
```
Resources/meta/LICENSE
```

## Reporting an issue or a feature request
Issues and feature requests related to this bundle are tracked in the Github issue tracker https://github.com/eymengunay/PassbookBundle/issues. PHP-Passbook related issues and requests should be opened under php-passbook library repository: https://github.com/eymengunay/php-passbook/issues
