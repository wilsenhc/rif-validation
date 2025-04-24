![](https://banners.beyondco.de/RIF%20Validation.png?theme=light&packageManager=composer+require&packageName=wilsenhc%2Frif-validation&pattern=circuitBoard&style=style_1&description=&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Fwww.php.net%2Fimages%2Flogos%2Fnew-php-logo.svg)

# A Validation class to check if a RIF is valid

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wilsenhc/rif-validation.svg?style=flat-square)](https://packagist.org/packages/wilsenhc/rif-validation)
![Tests](https://github.com/wilsenhc/rif-validation/actions/workflows/run-tests.yml/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/wilsenhc/rif-validation.svg?style=flat-square)](https://packagist.org/packages/wilsenhc/rif-validation)

This package provides a class to validate a RIF (Registro Único de Información Fiscal).

## Overview
The `rif-validation` library provides a simple and efficient way to validate RIF (Registro de Información Fiscal) numbers in PHP.
This library includes methods to check the validity of RIF numbers and retrieve error messages for invalid entries.

## Installation
You can install the library using Composer. Run the following command in your terminal:

```
composer require wilsenhc/rif-validation
```

## Usage
To use the `Validation` class, include the autoloader and create an instance of the class:

```php
require 'vendor/autoload.php';

use Wilsenhc\RifValidation\RifValidator;

$validator = new RifValidator();

if ($validator->isValid('RIF_NUMBER')) {
    echo "The RIF number is valid.";
} else {
    echo "The RIF number is NOT valid.";
}
```

## Methods
- `isValid($rif)`: Validates the provided RIF number.

## Contributing
Contributions are welcome! Please fork the repository and submit a pull request for any improvements or bug fixes.

## License
This project is licensed under the MIT License. See the LICENSE file for more details.
