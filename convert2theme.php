<?php

$themesFolder = './themes';

$termFiles = glob('./*.terminalrc');

if (!file_exists($themesFolder) || !is_dir($themesFolder)) {
  mkdir($themesFolder);
}

foreach ($termFiles as $f) {
  $body = file_get_contents($f);
  $body = str_replace('[Configuration]', '', $body);
  $body = trim($body);
  
  $themeName = str_replace('.terminalrc', '', $f);
  $themeName = str_replace('./', '', $f);
  $body = "[Scheme]\nName=$themeName\n" . $body;

  $themeFile = $themesFolder . '/' . $themeName . '.theme';
  file_put_contents($themeFile, $body);

  echo "\nConvert $f -> $themeFile";
}

echo "\n\nConvert complete.\n\n";

