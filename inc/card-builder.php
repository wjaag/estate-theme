<?php


function estate_card_type(){


$type = get_post_meta(
    get_the_ID(),
    '_estate_type',
    true
);


return $type ?: 'property';


}



function estate_card_transaction(){


return get_post_meta(
    get_the_ID(),
    '_estate_transaction',
    true
);


}



function estate_card_badge(){


$type =
estate_card_transaction();


switch($type){


case 'sale':

return 'Na sprzedaż';


case 'rent':

return 'Wynajem';


default:

return 'Oferta';

}


}



function estate_card_price_label(){


$type =
estate_card_transaction();


if($type === 'rent'){

return ' / miesiąc';

}


return '';

}