<?php

    /**
     *
     */
    class Product
    {

        private $id;
        private $price;
        private $name;
        private $qty;

        function __construct($id, $price, $name)
        {
            $this->id = $id;
            $this->price = $price;
            $this->name = $name;
        }

        // function __construct()
        // {
        //     $this->$id = 0;
        //     $this->$price = 0;
        //     $this->$name = "";
        // }

        public function get_id(){
            return $this->id;
        }

        public function get_price(){
            return $this->price;
        }

        public function get_name(){
            return $this->name;
        }

        public function get_qty(){
            return $this->qty;
        }

        public function set_id($id){
            $this->id = $id;
        }

        public function set_price($price){
             $this->price = $price;
        }

        public function set_name($name){
            $this->name = $name;
        }

        public function set_qty($qty){
            $this->qty = $qty;
        }

    }


 ?>
