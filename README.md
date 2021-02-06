# modulr-hmac-laravel
A php client that handles HMAC auth to Modulr API for use with Laravel (tested with 8.26.0)

based on https://github.com/crowdproperty/modulr-hmac-php-client

## Installation

Installation is done via Composer:

composer require alexbirtwell/modulr-hmac-laravel

### Laravel

After updating composer, add the service provider to the providers array in `config/app.php`:

```php
'providers' => [
    ...
    AlexBirtwell\ModulrHmacLaravel\ModulrServiceProvider::class,
    ...
];
```



Publish the package config to your application with the following artisan commands:

```sh
php artisan vendor:publish --provider="AlexBirtwell\ModulrHmacLaravel\ModulrServiceProvider" 
```

## Configuration

The vedor publish command will generate a `modulr` config file located in your `config` folder.  You may changes these values in your `.env` file.

Available config options are:

**MODULR_API_NAME** - Not required 

**MODULR_API_KEY** - API Key provided by Modulr Finance

**MODULR_HMAC_SECRET** - HMAC Secret provided by Modulr Finance

**MODULR_ENVIRONMENT** - Which envirnment to use.  Defaults to sandbox

**MODULR_DEBUG** - Enable debug mode.  Defaults to false

##Example

```php
<?php
namespace App\Http\Controllers;

use AlexBirtwell\ModulrHmacLaravel\Facades\ModulrApi;
use AlexBirtwell\ModulrHmacLaravel\Model\Address;
use AlexBirtwell\ModulrHmacLaravel\Model\Associate;
use AlexBirtwell\ModulrHmacLaravel\Model\Customer;

class DemoController extends BaseController
{

    public function __construct()
    {
        $customer = new Customer();

        $customer->setTcsVersion(1);
        $customer->setExpectedMonthlySpend(0);
        $customer->setType('INDIVIDUAL');

        $associate = new Associate();
        $associate->setVerificationStatus('EXVERIFIED');
        $associate->setEmail('email@emailaddress.com');
        $associate->setPhone('07777777777');
        $associate->setFirstName('First');
        $associate->setLastName('Last');
        $associate->setDateOfBirth('1970-01-18');
        $associate->setType('INDIVIDUAL');
        $associate->setApplicant(true);

        $address = new Address();
        $address->setAddressLine1('Address1');
        $address->setAddressLine2('Address2');
        $address->setPostCode('Postcode');
        $address->setPostTown('town');
        $address->setCountry('GB');

        $associate->setHomeAddress($address);

        $customer->setAssociates([$associate]);

        $response = ModulrApi::customers()->createCustomer((string) $customer);

        var_dump($response);
    }
}
```
