=== Plugin Name ===
Contributors: darbymanning
Donate link: https://creativelittledots.co.uk
Tags: lyrics, church, worship
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple plugin that can be used to display lyrics on a smartphone or tablet for worship times.

== Description ==

Using this plugin members of the congregation can access song lyrics on their smartphone or tablet, swiping left or
right to switch between songs.  Adding songs is as simple as creating a post, and the users have complete control of 
which words to display, so no more awkward waiting for the next page of lyrics, or accidentally jumping to the bridge
lyrics!

The overfall size of the page users view is super small (130kb), making the page load time as fast as possible.  This is
achieved by being extremely frugal with requests, and only loading the absolute dependencies for the page to load.

*How to use*

1. Add songs through the 'Hymnal' post-type that is created.
2. Visit `http://[your-site-address]/hymnal` to view the hymnal.

*Notes*

* Currently you will need to set songs as 'Draft' or 'Pending Review' status for them to be excluded from the hymnal.
* Output order can be defined by inputting a integer under Attributes > Order on the individual song edit page.
* In the future I plan to extend the plugin so you can add Services with a date, and attach the associated songs.
* Tags are currently not output on the front-end of the site, but are useful for organisation.


== Installation ==

1. Upload `hymnal.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add songs through the 'Hymnal' post-type that is created.
4. Visit `http://[your-site-address]/hymnal` to view the hymnal.

== Frequently Asked Questions ==

= Who is this for? =

Anyone who needs to display lyrics really.  It is primarily intended to be used for churches (such as small 'plants') and
small groups that are meeting together.


= Why is it so rubbish? =

It's just the initial release, I know it's extremely basic.

== Screenshots ==

1. Example of the front-end view of the hymnal for users.
2. List of Hymnal posts added.
3. Hymnal single post editor view.

== Changelog ==

= 1.0 =
* Initial commit, basic MVP.