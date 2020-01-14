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
 */

require_once 'JSON/JSON.php';

function json_encode($arg)
{
	global $services_json;
	if (!isset($services_json)) {
		$services_json = new Services_JSON();
	}
	return $services_json->encode($arg);
}

function json_decode($arg)
{
	global $services_json;
	if (!isset($services_json)) {
		$services_json = new Services_JSON();
	}
	return $services_json->decode($arg);
}

?>
