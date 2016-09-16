<?php
/*
** This file is included by all other PHP scripts. It makes sure that you are
** logged in, and if not, it displays a message and exits. It also defines the
** various constants used by this application, to avoid hard-coding things in
** the application.
*/
session_start();

define(TEXTFILENAME_IN,"TEXTFILENAME_IN.txt");
define(TEXTFILENAME_OUT,"TEXTFILENAME_OUT.txt");

?>
