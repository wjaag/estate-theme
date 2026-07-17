<?php


function estate_register_pattern_category(){

    register_block_pattern_category(
        'estate',
        [
            'label'=>'Estate Theme'
        ]
    );

}


add_action(
    'init',
    'estate_register_pattern_category'
);