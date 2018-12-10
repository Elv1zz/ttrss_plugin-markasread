function markasreadClicked(evt, articleId) {
	try {
		// turn off "event bubbling" for this click.
		// this is to avoid toggling the Unread state twice
		// first by this method and 
		// second by the onclick event of the article row.
		// (onclick of the row only marks the article as read, 
		//  not unread again)
		// code from: http://www.quirksmode.org/js/events_order.html
		var e = evt || window.event;
		e.cancelBubble = true;
		if (e.stopPropagation) e.stopPropagation();

		// toggle the articles unread state
		//  Unread will become Read
		//  Read will become Unread
		Headlines.toggleUnread(articleId);

	} catch (except) {
		exception_error("markasreadClicked", except);
	}
}

