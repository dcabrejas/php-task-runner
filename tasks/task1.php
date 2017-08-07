<?php

namespace Task1;

/**
 * Remove sql files from the home directory
 */
function removeSQLBackupsFromHomeDirectory()
{
    $regexIterator = new \RegexIterator((new \DirectoryIterator('/home/www-data')), '/\.sql/');

    foreach ($regexIterator as $sqlMatch) {
        /** @var $sqlMatch \DirectoryIterator */
        if ($sqlMatch->isFile()) {
            unlink($sqlMatch->getPathName());
            echo date("Y-m-d H:i:s") . " " . $sqlMatch->getPathName() . " file has been deleted.\n";
        }
    }
}

removeSQLBackupsFromHomeDirectory();
