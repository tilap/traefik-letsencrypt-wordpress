<?php
defined('ABSPATH') or die("you do not have acces to this page!");

add_filter('cmplz_known_iframe_tags', 'cmplz_openstreetmaps_iframetags');
function cmplz_openstreetmaps_iframetags($tags){
        $tags[] = 'openstreetmap.org';

    return $tags;
}