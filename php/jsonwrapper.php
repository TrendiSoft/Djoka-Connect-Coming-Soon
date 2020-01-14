<?php

/**
 * TRENDISOFT
 *
 * @package		TRENDISOFT
 * @author		BRENDA TIATI
 * @copyright           Copyright (c) 2019, TRENDISOFT.
 * @link		http://www.trendisoft.com/
 * @since		Version 1.1
 * @filesource
 */
/*
  | -------------------------------------------------------------------
  | jsonwrapper
  | -------------------------------------------------------------------
  | 
  |
 */

# In PHP 5.2 or higher we don't need to bring this in
if (!function_exists('json_encode')) {
	require_once 'jsonwrapper_inner.php';
} 
?>
