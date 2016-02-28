=== Plugin Name ===
Contributors: arikogan
Tags: rest, api
Tested up to: 4.3
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A plugin to add date_query to the list of allowed filters for the REST API so we can filter by date after/before.

== Description ==

[WP REST API](http://v2.wp-api.org/) plugin provides the ability to interact with a WordPress installation through a REST API. When retrieving posts, a use case would be to filter them based on they publish date by before/after a certain date. In WordPress this can be achieved using the [date_query](http://codex.wordpress.org/Class_Reference/WP_Query#Date_Parameters) parameter. However, the parameter is not part of the whitelisted parameters of WP REST API. A workaround is to add it ourselves as discussed [here](https://github.com/WP-API/WP-API/issues/389). This plugin adds the date_query param to the whitelist not modifying the theme of WordPress but by using a very small and simple plugin. This allows to change and upgrade themes freely and still keep the whitelisting of the parameter.

After installing WP REST API and this plugin, you should be able to run queries like the below,

`/wp-json/wp/v2/posts?filter[date_query][after]=2016-02-26T12:38:36`
`/wp-json/wp/v2/posts?filter[date_query][before]=2016-02-27T14:28:15`

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/date_query` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress

== Frequently Asked Questions ==

== Changelog ==

= 0.1 =
* First version.