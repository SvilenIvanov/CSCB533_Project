<?php

function show($item){
  echo "<pre>";
  print_r($item);
  echo "</pre>";

}
function escape($item){
  return addslashes($item);
}
function generateRandomString($maxLength, $minLength = 4) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $length = rand($minLength, $maxLength);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
