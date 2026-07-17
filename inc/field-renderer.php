<?php


function estate_render_fields($type){


$schema =
estate_property_schema();


if(
!isset($schema[$type])
){

return;

}



echo '<div class="details-grid">';



foreach(
$schema[$type]
as $key=>$field
){


$value =
get_post_meta(
get_the_ID(),
'_estate_'.$key,
true
);



if(!$value){

continue;

}



echo '<div>';

echo '<span>';

echo esc_html(
$field['label']
);


echo '</span>';



echo '<strong>';

echo esc_html(
$value
);



if(isset($field['unit'])){

echo ' ';

echo esc_html(
$field['unit']
);

}



echo '</strong>';


echo '</div>';



}



echo '</div>';

}