<?php
class article_toolbar_small extends Plugin {

	private $host;

	function about() {
		return array(1.1,
			"Small toolbar for easy access to previous/next articles",
			"shrick", false);
	}

	function init($host) {
		$this->host = $host;

		$host->add_hook($host::HOOK_TOOLBAR_BUTTON, $this);
	}

	function HOOK_TOOLBAR_BUTTON() {
		require_once dirname(__FILE__) . "/toolbar_body.php";
	}

  function api_version() {
    return 2;
  } 

}
?>
