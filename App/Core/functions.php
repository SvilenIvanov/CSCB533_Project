<?php

function show($item){
  echo "<pre>";
  print_r($item);
  echo "</pre>";

}
function escape($item){
  return addslashes($item);
}
