<?php
class MarkAsRead extends Plugin {

	private $host;

	function about() {
		return array(
			0.3,
			"Google Reader like 'Mark as read' checkbox",
			"Elvizz", 
			false,
			"https://github.com/Elv1zz/ttrss_plugin-markasread"
		);
	}

	function init($host) {
		$this->host = $host;

		$host->add_hook($host::HOOK_ARTICLE_BUTTON, $this);
	}
	
	function api_version() {
		return 2;
	}
	
	function get_js() {
		return file_get_contents(dirname(__FILE__) . "/markasread.js");
	}

	function get_css() {
		return file_get_contents(dirname(__FILE__) . "/markasread.css");
	}

	function hook_article_button($line) {
		$myId = $line["id"];

		return "<span style='cursor: pointer; vertical-align: bottom;' onclick='markasreadClicked(event,$myId);'><span style='min-width: 15px; min-height: 15px;' class='markasread'><img src='plugins/markasread/trans.png' class='tagsPic' width='15' height='15' /></span>".__('Mark as read')."</span>";
	}

}
?>
