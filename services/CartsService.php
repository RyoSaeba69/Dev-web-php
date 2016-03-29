<?php

    class CartsService {

        public static function addProduct($id) {
        }

        public static function total(){
            $cart = $_SESSION['cart'];

            $total = 0;

            foreach ($cart as $id => $qty){
                $total += $qty;
            }
            return $total;
        }

        public static function totalCost(){
            $cart = $_SESSION['cart'];

            $total = 0;

            foreach ($cart as $id => $qty){
                $total += $qty;
            }
            return $total;
        }

    }

 ?>
