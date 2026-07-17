<?php


function estate_property_title(){

    return get_the_title();

}



function estate_property_price(){

    return get_post_meta(
        get_the_ID(),
        '_estate_price',
        true
    );

}



function estate_property_location(){

    return get_post_meta(
        get_the_ID(),
        '_estate_location',
        true
    );

}