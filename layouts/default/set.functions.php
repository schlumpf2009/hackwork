<?php

/*
 * Core functions
 */

// `encrypt`
//
// Encrypts `$str` with base64.
function encrypt($str) {
  echo base64_encode($str);
}

// `decrypt`
//
// Decrypts `$str` with base64.
function decrypt($str) {
  echo base64_decode($str);
}

// `cfile`
//
// Checks for current file. Change the target class name if necessary.
function cfile($file) {
  if (strpos($_SERVER['PHP_SELF'], $file)) {
    echo 'class="active"';
  }
}

// `fcount`
//
// Counts number of files in a directory. `$dir` must be without a trailing
// slash.
function fcount($dir) {
  $i = 0;
  foreach (glob($dir . '/*') as $file) {
    if (!is_dir($file)) {
      $i++;
    }
  }
  echo $i;
}

// `feedparse`
//
// Parses RSS or Atom feed.
function feedparse($url) {
  $feed = fopen($url, 'r');
  $data = stream_get_contents($feed);
  fclose($feed);
  echo $data;
}

// `randomize`
//
// Selects a random value from array.
function randomize($array) {
  echo $array[array_rand($array)];
}

// `undot`
//
// Removes dots from string.
function undot($string) {
  $dot = str_replace($string, '', '.');
}