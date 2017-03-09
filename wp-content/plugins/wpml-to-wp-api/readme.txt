=== Plugin Name ===
Contributors: ryuheixys
Donate link: http://y-designs.com
Tags: wpml,wp-rest-api,json-api,multilanguage
Requires at least: 4.2.1
Tested up to: 4.2.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows you to request a language with your WP-API and WPML site.

== Description ==

Plugin will allow you to fetch the WP-API (WP-JSON-API) call with a "lang" variable.  It will retrieve the right content from WPML/WP.

This only works with WPML and WP-API installed.  I tested only with the latest version as of now:
* WPML 3.1.9.6
* WP REST API 1.2.1

== Installation ==

Install the plugin as you would with any WordPress plugin in your wp-content/plugins/ directory or equivalent.
Then:
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Make a call to "http://yoursite/wp-json/posts/?lang=ja" (in my case, its ja for Japanese, but it could be fr if you're French!)

== Frequently Asked Questions ==

= Is this guaranteed to work =

No. I threw it together in 5 minutes

= What about foo bar? =

If you want foo bar fixed, email me at info@y-designs.com 
You bet your butt you can pay me for it ;) 

== Screenshots ==

1. No screenshots since this works in the background.

== Changelog ==

= 0.1 =
* Initial release no guarantees

== Upgrade Notice ==

No upgrades will happen at this time.