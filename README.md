# Simple Data Validation
[![Latest Stable Version](http://img.shields.io/packagist/v/devtoolboxuk/simplevalidator.svg)](https://packagist.org/packages/devtoolboxuk/simplevalidator)

## Table of Contents

- [Installation](#Installation)
- [Usage](#Usage)
- [Maintainers](#Maintainers)
- [License](#License)

## Installation

Install Composer
```sh
$ php -r "readfile('https://getcomposer.org/installer');" | php && php composer.phar install
```

```sh
$ composer require devtoolboxuk/simplevalidator
```

Then include Composer's generated vendor/autoload.php to enable autoloading:


## Usage

```sh
require 'vendor/autoload.php';

use devtoolboxuk/simplevalidator
```

### Email Validation


``` php
$validationService = new ValidatorService();
$email = 'test@test.com';
$validationService->isEmailValid($email); //Returns Boolean
```


## Maintainers

[@DevToolboxUk](https://github.com/devtoolboxuk).


## License
[MIT](LICENSE) © DevToolboxUk