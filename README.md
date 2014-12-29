![](http://i.imgur.com/8SZWa2h.gif)


#Installation
* Make a MySQL database and import init.sql.
* Copy `includes/config.example.php` to `includes/config.php` and get editing.
* Edit `.htaccess`

On a fresh Ubuntu/Debian installation you will likely want `apt-get install apache2 php5 php5-curl php5-mysql mysql-server mysql-client` and configure your `php.ini` as follows:

````
display_errors = On
display_startup_errors = On
error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE
````

It is also possible to use nginx, and a sample `rewrite.conf` is available, but this is currently not officially supported.

#"Support"
If you have any questions you can try your luck on the issue tracker or `##minichan @ irc.freenode.net`. Note that development is primarily geared towards running a functional [http://minichan.org](http://minichan.org) so your feature requests may not be a priority. Pull requests are welcome if they are discussed on the issue tracker or IRC (with r04r) first.

And yes. The code is shit. :-)

#Branches
This repository consists of three branches:

* `master`: The main development branch. The code on this branch should work, but may not be fully functional or stable when development is happening. If you intend to submit pull requests base them off of this branch.
* `testing`: The testing branch, this branch may have its history rewritten and it's highly recommended you do not use it in any way other than testing upcoming features. A running copy of the code for this branch can be found on http://test.minichan.org
* `minichan`: The main stable branch. The code on this branch is used for http://minichan.org
