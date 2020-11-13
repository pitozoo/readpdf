<?php

/**
 * This file is part of ReadPdf
 *
 * @package   pitozoo\ReadPdf
 */



// @phpstan-ignore-next-line
spl_autoload_register(function ($class) {
  if (strpos($class, 'pitozoo\ReadPdf\\') === 0) {
    $filename = str_replace('\\', DIRECTORY_SEPARATOR, substr($class, 16)) . '.php';
    $fullpath = __DIR__ . DIRECTORY_SEPARATOR . $filename;
    if (is_file($fullpath)) {
      /** @noinspection PhpIncludeInspection */
      require_once $fullpath;
    }
  }
});
