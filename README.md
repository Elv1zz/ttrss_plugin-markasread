"Mark as read" plugin for tt-rss
================================
This plugin for Tiny Tiny RSS (tt-rss) adds a checkbox in the article footer to mark an article as read and unread just like in dicontinued Google Reader. 

Installation
------------

### Using git ###
Just checkout the code into your plugins folder like this:

```sh
$ cd /path/to/your/tt-rss
$ git clone git://github.com/Elv1zz/ttrss_plugin-markasread plugins/markasread
```

Then go to tt-rss preferences and enable the plugin.

### Without using git ###
Manually download, extract and copy the archive like this:
```sh
$ cd /tmp
$ wget https://github.com/Elv1zz/ttrss_plugin-markasread/archive/master.zip
$ unzip master.zip
$ mkdir /path/to/your/tt-rss/plugins/markasread
$ cp ttrss_plugin-markasread-master/* /path/to/your/tt-rss/plugins/markasread
```

Then go to tt-rss preferences and enable the plugin.

Current status
--------------
This version of the plugin is fully working: Marking articles as read and unread works correctly. Also the unread status is reflected correctly when it gets changes by other means (like clicking in the article, mark all as read, mark-as-read from the context menu).

Any additional issues, problems or feature request can be found or made in the GitHub [issue tracker](https://github.com/Elv1zz/ttrss_plugin-markasread/issues).

Browser compatibility:
----------------------

| Browser          | Version   | State    |
| ---------------- | --------- | -------- |
| Chromium         | 26        | works    |
| Epiphany         | 2.30      | works    |
| FireFox          |           | untested |
| Internet Explorer|           | untested |
| Opeara           |           | untested |
| Safari           |           | untested |

Copyright
---------
Elv1zz (Elvizz), 2013

