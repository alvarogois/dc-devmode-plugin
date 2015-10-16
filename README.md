DC devmode plugin (Dave Clements')
=====================================

Simple WordPress plugin that disables some plugins from being activated in a development environment.

It's totally based on Dave Clements' tutorial on [Do it with WP](https://www.doitwithwp.com/deactivate-certain-plugins-development-servers/).

Installation
------------
* Drop in mu-plugins folder.
* Add this code to wp-config.php (before the `/* That's all…` line:


```
/**
 * Set up development environment
 */
if ( !defined('WP_ENV') )
	define('WP_ENV', 'dev');
```