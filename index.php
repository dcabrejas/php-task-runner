<?php

function isPhpFile($current, $key, $iterator) {
    return $current->isFile() && $current->getExtension() === 'php';
}

$tasksIterator = new CallbackFilterIterator((new DirectoryIterator(__DIR__ . '/tasks')), 'isPhpFile');

foreach ($tasksIterator as $task) {
    include $task->getPathName();
}
