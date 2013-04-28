<?php
class MarkAsRead extends Plugin {

	private $link;
	private $host;

	function about() {
		return array(0.1,
			"Google Reader like 'Mark as read' checkbox",
			"Elvizz", 
			false
			# "http://example.com"
		);
	}

	function init($host) {
		$this->link = $host->get_link();
		$this->host = $host;

		$host->add_hook($host::HOOK_ARTICLE_BUTTON, $this);
	}

	/* function get_js() {
		return file_get_contents(dirname(__FILE__) . "/mail.js");
	} */

	function hook_article_button($line) {
		$myId = $line["id"];
		$alreadyRead = 'checked';
		if ($line["unread"] == "t" || $line["unread"] == "1") {
			$alreadyRead = '';
		}
		return "<span onclick='javascript:toggleUnread($myId);' style='cursor: pointer; vertical-align: bottom;'><input id='articleread-$myId' type='checkbox' $alreadyRead> ".__('Mark as read')."</span>";
		# class='dijitReset dijitCheckBoxInput' role='checkbox'
	}
}
?>

