<?php
/*
** This is the "home" page of the site. It includes a mix of PHP, assuming that there would before
** some type of setup needed, and may also do some cleanup, if the same page is invoked at the end,
** for example, during a logout or finish operation.
*/

session_start();

//TODO: Write a function that removes all the session vars used by this app and call it at exit...
unset($_SESSION['SESSION_VARIABLES_TO_CLEAR']);

//session_destroy();      //TODO: Not sure if this is correct yet, but it allowed me to clear all the crap... Research...

// This uses the uber-unflexible static home page method; this file is generated by the build system
// and contains mostly static information.

include ('inc/_index.html');				// display the home page

?>
