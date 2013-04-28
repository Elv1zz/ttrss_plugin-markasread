"Mark as read" plugin for tt-rss
================================
This plugin for Tiny Tiny RSS (tt-rss) adds a checkbox in the article footer to mark an article as read just like in dicontinued Google Reader. 

Installation
------------
Just checkout the code into your plugins folder like this:

```sh
$ cd /path/to/your/tt-rss
$ git clone git://github.com/Elv1zz/ttrss_plugin-markasread plugins/markasread
```

Then go to preferences and enable the plugin.

Current status
--------------
This is the first working version of "Mark as read" plugin for tt-rss. 
You can mark an article as read using the checkbox. The initial state of the checkbox is set correctly and reflects the aticle state as long as you use the checkbox to toggle it. When different means to mark the article as read are used (like clicking in the article, mark all as read, mark-as-read from the context menu), the checkbox gets out of sync.

Todo
----
1. Add synchronization of unread state modified and displayed by checkbox and the one modified by clicking on an article
 -> this could become possible with new javascript hook-system in tt-rss 1.7.9

Copyright
---------
Elv1zz (Elvizz), 2013

