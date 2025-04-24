# rif-validation

## Overview
The `rif-validation` library provides a simple and efficient way to validate RIF (Registro de Información Fiscal) numbers in PHP. This library includes methods to check the validity of RIF numbers and retrieve error messages for invalid entries.

## Installation
You can install the library using Composer. Run the following command in your terminal:

```
composer require wilsenhc/rif-validation
```

## Usage
To use the `Validation` class, include the autoloader and create an instance of the class:

```php
require 'vendor/autoload.php';

use Wilsenhc\RifValidation\Validation;

$validator = new Validation();

if ($validator->isValid('RIF_NUMBER')) {
    echo "The RIF number is valid.";
} else {
    echo $validator->getErrorMessage();
}
```

## Methods
- `isValid($rif)`: Validates the provided RIF number.
- `getErrorMessage()`: Returns the error message if the RIF number is invalid.

## Contributing
Contributions are welcome! Please fork the repository and submit a pull request for any improvements or bug fixes.

## License
This project is licensed under the MIT License. See the LICENSE file for more details.