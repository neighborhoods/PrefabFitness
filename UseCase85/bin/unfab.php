#!/usr/bin/env php
<?php

$rootDir = dirname(__FILE__, 2);

cleanDir("$rootDir/fab", "$rootDir/src");

function cleanDir(string $fabDir, string $srcDir)
{
    $fabbedFiles = scandir($fabDir);

    foreach ($fabbedFiles as $path) {
        if ($path === '.' || $path === '..') {
            continue;
        }

        if (realpath("$srcDir/$path")) {
            if (is_dir("$srcDir/$path")) {
                cleanDir("$fabDir/$path", "$srcDir/$path");
            } else {
                unlink("$fabDir/$path");
            }
        }
    }
}
