<?php
$connect = new mysqli('localhost', 'root', '', 'thuchanh');
if ($connect->connect_errno) {
    die('connect database false!!!');
}