<?php
$host = 'localhost';
$user = 'root';
$pswd = '';
$dbname = 'contoh_login';

$conn = new mysqli($host,$user,$pswd,$dbname);
session_start();