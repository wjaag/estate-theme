<?php


function estate_property_schema(){


return [


'apartment'=>[


'area'=>[
'label'=>'Powierzchnia',
'unit'=>'m²'
],


'rooms'=>[
'label'=>'Liczba pokoi'
],


'floor'=>[
'label'=>'Piętro'
],


'elevator'=>[
'label'=>'Winda'
],


'balcony'=>[
'label'=>'Balkon'
]


],



'house'=>[


'area'=>[
'label'=>'Powierzchnia domu',
'unit'=>'m²'
],


'plot'=>[
'label'=>'Powierzchnia działki',
'unit'=>'m²'
],


'garage'=>[
'label'=>'Garaż'
],


'garden'=>[
'label'=>'Ogród'
]


],



'commercial'=>[


'area'=>[
'label'=>'Powierzchnia',
'unit'=>'m²'
],


'purpose'=>[
'label'=>'Przeznaczenie'
],


'parking'=>[
'label'=>'Parking'
]


]


];


}