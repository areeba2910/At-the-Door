<?php

//if you got any deprecated error in above php 5.5 version just uncomment below line to hide those warnings
//error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
date_default_timezone_set('Asia/Kolkata');
$con = mysqli_connect("localhost", "root", "", "handyman") or die("Error " . mysqli_error($connection));