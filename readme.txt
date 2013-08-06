=== fVote ===
Contributors: theode
Donate link: http://www.wp-plugin-dev.com/donate
Tags: voting,poll,vote,questionary
Requires at least: 3.0
Tested up to: 3.6-beta2-24227
Stable tag: 0.5
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

A plugin for specific niche questions your vistors can vote for.

== Description ==

Ever needed a voting plugin which acts like a question matrix?
Here is your solution. You don't need any options in the backend and you can include this in any post or page.

It is based on shortcodes:
[fVote question="Do you like?" subject="rats,cats,squirrels" remarks="much,little,not" button="vote for your pet!" thanks="Thank you"]

and to see the results as percent.
[fVote_results question="Do you like?" total_votes="total votes"]

Hopefully somebody needs that for something.


== Installation ==

1. Upload 'fVote' folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Insert shortcodes from readme.txt to get started.

== Frequently asked questions ==

= Where it is storing it's results? =
It creates a special table called wp_fvote inside your WordPress installation.

= How can I get rid of the fVote results table? =
Just Drop wp_fVote it with phpmyadmin or go to the main plugin file and uncomment line 39 (register_deactivation_hook) during its active.


= Where can I read more? =
http://www.wp-plugin-dev.com/fVote/

= Where can I get support? =
Contact us at http://www.wp-plugin-dev.com/support-contact/

== Screenshots ==

1. The voting unit
2. the results unit

== Changelog ==

= 0.5 =  Initial release