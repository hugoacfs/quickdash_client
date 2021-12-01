# quickdash_client

This repo depends on this [API](https://github.com/hugoacfs/quickdash_api).

This project requires PHP version 7.4.

This project requires composer -> https://getcomposer.org/.

## Configuration and Setup:
1. To install packages: `$ composer install` or `$ php composer.phar install` - **THIS IS A REQUIREMENT**
2. Copy `config-dist.php` to `config.php`.

## Files

### -> config.php
- This file holds the configuration variable used throughout the code.
- ->`apipath` is used to create URL's to the API folder of quickdash_api (local development: `http://localhost/quickdash_api/api/`).
- ->`jspath` is used to create URL's to the public/dash.js folder of quickdash_client (local development: `http://localhost/quickdash_client/public/dash.js`).
- ->`corereferrer` the name given to your quickdash_client, you can choose.
- ->`standardtags` the standard tags that show in your index, you can choose.
- ->`faviconurl` the favicon URL, can be hosted anywhere you want.
- ->`debug` is used to display error messages, if set to `true`.
- The rest of the configuration file is used to load up mongodb dependencies.
