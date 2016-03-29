

<?php
//Controller du panier
//Accès à la variable de session cart
//Ajout d'un produit au panier
//Suppression d'un produit
//Cout du panier
//Recherche d'un produit
//Génération de la page de récap du panier en fonction de son contenu

    class CartsController
    {
        public static function update_carts()
        {
            $_SESSION['cart'] = array();

            foreach ($_POST as $id => $qty) {
                $_SESSION['cart'][$id] = $qty;
            }
        }

        private static function _array_find($arr, $predicate)
        {
            $elements = array_filter($arr, $predicate);
            $element = null;
            if (isset($elements) && count($elements) == 1) {
                $element = array_values($elements)[0];
            }

            return $element;
        }

        public static function add($productId)
        {
            if (!isset($_SESSION['cart'][$productId])) {
                $_SESSION['cart'][$productId] = 1;
            } else {
                ++$_SESSION['cart'][$productId];
            }

            return $_SESSION['cart'][$productId];
        }

        public static function remove($productId)
        {
            if (!isset($_SESSION['cart'][$productId])) {
                return;
            } elseif ($_SESSION['cart'][$productId] > 0) {
                --$_SESSION['cart'][$productId];
            }

            return $_SESSION['cart'][$productId];
        }

        public static function total_cost()
        {
            $cart = $_SESSION['cart'];
            $products = $GLOBALS['products'];
            $total = 0;
            foreach ($cart as $id => $qty) {
                $product = self::_array_find($products, function ($product) use ($id) {
                    return $product->get_id() == $id;
                });
                if(isset($product)){
                    $total += $product->get_price() * $qty;
                }
            }

            return $total;
        }

        public static function find_cart_products()
        {
            $cart = $_SESSION['cart'];
            $products = $GLOBALS['products'];

            $cart_products = [];

            foreach ($cart as $id => $qty) {
                $product = self::_array_find($products, function ($product) use ($id) {
                    return $product->get_id() == $id;
                });

                if(isset($product)){
                    $product->set_qty($qty);
                    array_push($cart_products, $product);
                }

            }

            return $cart_products;
        }

        public static function gen_table_product()
        {
            $cart_products = self::find_cart_products();

            $trs = '';

            foreach ($cart_products as $cart_product) {
                $trs .= '<tr class="product-row" data-productid="'.$cart_product->get_id().'">';

                // On cherche l'image du produit
                $trs .= '<td><img class="cart-img" src="ressources/'.$cart_product->get_id().'.png" /></td>';

                // On cherche le nom du produit
                $trs .= '<td>
                    <div class="row">
                        <div class="col-md-12">';
                $trs .= $cart_product->get_name();
                $trs .= '</div>
                    </div>
                    
                </td>';

                // On cherche la quantité du produit
                $trs .= '<td>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="number" class="pro-qty" id="'.$cart_product->get_id().'" name="qty" value="'.$cart_product->get_qty().'">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-remove">
                                <span class="glyphicon glyphicon-trash"></span> Remove item
                            </div>
                        </div>
                    </div>
                </td>';

                // On cherche le prix unitaire du produit
                $trs .= '<td class="product-price ">$'.$cart_product->get_price().'</td>';

                // On cherche le cout total du produit quantité*prix unitaire
                $trs .= '<td class="product-total ">= $'.$cart_product->get_price() * $cart_product->get_qty().'</td>';

                $trs .= '</tr>';
            }

            return $trs;
        }
    }
