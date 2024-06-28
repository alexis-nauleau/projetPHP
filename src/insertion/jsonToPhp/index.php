<?php
$dataJsonFrance = file_get_contents(__DIR__ . '/franceinfo.json');
$dataPhpFrance = json_decode($dataJsonFrance);

$dataJsonlemonde = file_get_contents(__DIR__ . '/lemonde.json');
$dataPhplemonde = json_decode($dataJsonlemonde);

$dataJsonSymfony = file_get_contents(__DIR__ . '/Symfony.json');
$dataPhpSymfony = json_decode($dataJsonSymfony);