<?php 
	require_once( 'defines.php' );

	Class instagram_basic_display_api {
		private $_appId = INSTAGRAM_APP_ID;
		private $_appSecret = INSTAGRAM_APP_SECRET;
		private $_redirectUrl = INSTAGRAM_APP_REDIRECT_URI;
		private $_getCode = '';
		private $_apiBaseUrl = 'https://api.instagram.com/'

		public $authorizationUrl = '';

		function __construct( $params ) {
			$this->_getCode = $param['get_code'];

			// get an access token

			// get authorization url 
			$this->setAuthorizationUrl();
		}

		private function _setAuthorizationUrl() {
			$getVars = array(
				'app_id' => $this->_appId,
				'redirect_uri' => $this->_redirectUrl,
				'scope' => 'user_profile, user_media',
				'response_type' => 'code'
			);

			//create url
			$this->authorizationUrl = $this->_apiBaseUrl . 'oauth/authorize?' . http_build_query( $getVars );

		}
	}