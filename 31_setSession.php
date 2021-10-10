<?php

session_start();
echo("Setting sessions name and dream.<br>");
$_SESSION['name']="Arko Ghosh Dastidar";
$_SESSION['dream']="Pilot";
echo("Session variables set<br>");
// session_unset(); This will unset the session variables.
// session_destroy();This will destroy the session.
?>