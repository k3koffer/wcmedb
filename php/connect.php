<?php

$connect = mysqli_connect( 'localhost', 'root', '', 'coroner');

if (!$connect) {
    die('Error connect to database');
}