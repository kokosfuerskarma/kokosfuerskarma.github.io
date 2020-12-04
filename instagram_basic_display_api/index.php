<? php
	require_once( 'instagram_basic_display_api.php');

	$params = array(
		'get_code' => isset( $_GET['code'] ) ? $_GET['code'] : ''
	);
	$ig = new instagram_basic_display_api( $params )
?>
<h1>Instagram Basic Disply API</h1>
<a href="<?php echo $ig->authorizationUrl; ?>">
	Authorize w/Instgram
	
</a>