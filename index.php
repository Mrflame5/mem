<?php

$file = "ban.apk";

if (file_exists($file)) {

    header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
    header("Cache-Control: public"); // ����� ��� internet explorer
    header("Content-Type: application/octet-stream"); // application/octet-stream - application/zip
    header("Content-Transfer-Encoding: Binary");
    header("Content-Length:".filesize($file));
    header("Content-Disposition: attachment; filename=" . basename($file));

    readfile($file);
    die();
} else {
    die(".");
}


?>