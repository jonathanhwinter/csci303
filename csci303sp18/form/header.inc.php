<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 18/01/30
 * Time: 11:28
 */

//turn on error reporting for debugging - page 699
error_reporting(E_ALL);
ini_set('display_errors', '1');

//set the time zone
ini_set('date.timezone', 'America/New_York');
date_default_timezone_set('America/New_York');

//set current time
$rightnow = time();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Jonathan Winters</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
        <header>
            <h1>Linux Distros</h1>
            <nav><?php require_once "nav.inc.php"; ?></nav>
        </header>
        <main>
            <h2><?php echo $pagename; ?></h2>
