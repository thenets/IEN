<?php
// ============================================
// 		Get Assets Path
// Tutorial: http://stackoverflow.com/questions/19820314/codeigniter-assets-folder-best-practice
// ============================================
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('asset_url()')) {
	function asset_url() {
		return base_url().'assets/';
	}
}