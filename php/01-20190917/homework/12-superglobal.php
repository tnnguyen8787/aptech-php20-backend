<?php
echo "<a href=\"./\">BACK</a>";
/* 12. --- SUPERGLOBALS ---
 *
 * There are built-in variables that are always available in all scopes
 * $GLOBALS
 * $_SERVER
 * $_REQUEST
 * $_POST
 * $_GET
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
 *
 */

echo "<h1>12. SUPERGLOBALS</h1>";

/*
 * EXERCISE 1 : Display your directory to file name and your host.
 *
 */

/*
 * SUGGESTION :
 *
 * echo $_SERVER['SCRIPT_FILENAME'];
 * echo "<br>";
 * echo $_SERVER['HTTP_HOST'];
 *
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
?>

<p>EXERCISE SuperGlobal: Display your directory to file name and your host.</p>
<?php

function globalVariables () {
 $GLOBALS = "abcGlobal";
 $_SERVER = "abcServer";
 $_REQUEST = "request";
 $_POST = "post";
 $_GET = "get";
 $_FILES = "files";
 $_ENV = "evn";
 $_COOKIE = "cookies";
 $_SESSION = "session";

 echo $GLOBALS . "<br>" . $_SERVER . "<br>" . $_REQUEST . "<br>" . $_POST . "<br>" . $_GET . "<br>" . $_FILES . "<br>" . $_ENV . "<br>" . $_COOKIE . "<br>" . $_SESSION;
}

globalVariables();


?>