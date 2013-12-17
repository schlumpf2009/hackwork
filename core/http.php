<?php

/**
 * HTTP helper
 *
 * Hackwork's HTTP error thrower.
 */

/*
 * Headers
 */

// Set base charset
ini_set('default_charset', 'utf-8');

/*
 * Compression
 */
  
// Enable Zlib compression
ini_set('zlib.output_compression', 1);

// Set the compression level
//
// -1  => server's choice
// 0   => no compression
// 1-6 => predefined compression
ini_set('zlib.output_compression_level', -1);