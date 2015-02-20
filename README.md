# Error Handling in PHP

These files are from my Nomad PHP lightning talk, Error Handling in PHP.

Slides are here: http://ian.im/err
Joind.in link is here: https://joind.in/13615

## Usage

This code, which is a trivial example and *should not be used in a production environment*, should work on any PHP 5.4+
environment. Drop the three PHP files in a web-accessible directory, then point your browser to index.php. It should
give you "Hey dude" back. Replace "dude" with something else by passing in a value in the `name` URL parameter.

Now, make the code fail. Uncomment one or more statements in logic.php and watch the error/exception/shutdown handler
functions spring into action!
