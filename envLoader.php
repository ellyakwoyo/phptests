<?php
  
  class LoadEnv {
    function loadEnv($filePath) {
      if (!file_exists($filePath)) {
          die(".env file not found!");
      }
  
      $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
      foreach ($lines as $line) {
          if (strpos(trim($line), '#') === 0) continue;
          list($key, $value) = explode('=', $line, 2);
          putenv(trim($key) . '=' . trim($value));
      }
  }
  }
?>