<?php
$dbhost = 'sql109.epizy.com';
$dbuser = 'epiz_32093697';
$dbpass = 'pl5AuEakiCrjZLr';
$dbname = 'epiz_32093697_simpeg';
$koneksi = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($koneksi->connect_error) {
    die('Oops!! Koneksi Gagal : ' . $koneksi->connect_error);
}
