<?php

	/* =====================================
		  (i)  cPanel User Access Info
	===================================== */

	define('cP_user', '___change_me___');
	define('cP_pass', '___change_me___');
	define('cp_svIP', '___change_me___');


	/* =====================================
			/!\   Do not touch this!
	===================================== */
	## cP-API Library
	require('inc/php/api/cpaneluapi.php');

	## Conection to server
	$cPanel = new cpanelAPI(cP_user, cP_pass, cp_svIP);

	## Get Content from AJAX
	$json = json_decode(file_get_contents('php://input'));
?>