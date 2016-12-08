# Simple API client example class

This is example of simple API client class. Part of __Code Advent 2016__ calendar.

## Installation

### Prerequisities

* PHP
* Composer
* GIT

### How to install

* Clone this repository
* ```cd <your folder name>``` and ```composer install```

## Using library

```php
use Jdmaymeow\Api;

$api = new Api();

//set data for POST
$data = [
    'name' => 'martin',
    'server' => 'test'
];

$api->setData($data);

$api->setProtocol('http');

//set method to post and set headers
$api->setMethod('POST');
$api->setHeaders("Accept-language: en\r\nAuth-Key: ".md5(time())."\r\nContent-type: application/x-www-form-urlencoded");

//run API call
$api->setSocket('http://localhost:1212/server.php');

var_dump($api->go());
```

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## History

TODO: Write history

## Credits

 * jdmaymeow

## License

MIT
