<?php
/*
*
* Debug mode:
* Toggles if the errors are displayed or hidden
* 0 = errors are not displayed(Production value)
* 1 = display errors
*/
error_reporting(E_ALL);
ini_set('display_errors', 1);

/*
* Index.php is just place to set various configration options.
* After setting the config options, we load another file core.php
* which actually set the ball rolling
*/
require_once('app/core.php');

/*
* END of index.php
* The closing tag(?>) is omitted on purpose. In PHP only source files, It
* is not required by PHP, and omitting it prevents the accidental
* injection of trailing white space into  the response
[1] http://framework.zend.com/manual/en/coding-standard.php-file-formatting.html
[2] http://www.sitepoint.com/should-you-close-your-php-code-tags/
*
*/

