<?php

/**
 * Plugin Name: Snap Tweet
 * Plugin URI: http://odai.me/snap-tweet/
 * Description: Turn snippets of text into tweet-able links.
 * Version: 1.0.1
 * Author: Odai Athamneh
 * Author URI: http://odai.me
 * License: GPL2
 */

/*  Copyright 2013 Odai Athamneh (email : me@odai.me)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License (license.txt)
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
    
    Twitter logo used in compliance with the Twitter Trademark and Content Display Policy.
    See https://twitter.com/logo for details.
*/

function snap_tweet_handler ( $atts, $content = null ) {
	$content_url = substr ( $content, 0, 100);
	return "<span class='snaptweet'><a href='http://twitter.com/home?status=&ldquo;" . $content_url . "...&rdquo;&nbsp;" . get_site_url() . "/?p=" . get_the_ID() . "' target='_blank'>" . $content . "<img src='" . plugins_url() . "/snap-tweet/twitter-bird-light-bgs.png' style='width:2.4em;height:auto;'></a></span>";
}

add_shortcode( 'snaptweet', 'snap_tweet_handler' );