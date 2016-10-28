<?php

namespace extensions\select2;
use \frameworks\adapt as adapt;

/* Prevent direct access */
defined('ADAPT_STARTED') or die;

$adapt = $GLOBALS['adapt'];

$adapt->dom->head->add(new adapt\html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => '/adapt/extensions/select2/static/css/select2.min.css')));
$adapt->dom->head->add(new html_script(array('type' => 'text/javascript', 'src' => '/adapt/extensions/select2/static/js/select2.min.js')));
$adapt->dom->head->add(
    new html_script("\$(document).ready(function(){ \$('.view.select2').select2(); });", array('type' => 'text/javascript'))
);





?>