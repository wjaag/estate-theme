<?php


function estate_search_args($params = []){


$args = [

'post_type'=>'estate_offer',

'posts_per_page'=>12

];


return $args;


}