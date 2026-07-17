<?php


class Estate_Property {


    private $id;


    public function __construct($id = null){

        $this->id =
        $id ?? get_the_ID();

    }


    public function title(){

        return get_the_title(
            $this->id
        );

    }


    public function price(){

        return get_post_meta(
            $this->id,
            '_estate_price',
            true
        );

    }


    public function location(){

        return get_post_meta(
            $this->id,
            '_estate_location',
            true
        );

    }


    public function image(){

        return get_the_post_thumbnail_url(
            $this->id,
            'large'
        );

    }


}