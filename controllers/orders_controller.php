<?php
  class OrdersController {
    public function checkout() {
      // $products = Product::all();
      $products = [];
      return view('views/orders/checkout.php', compact('products'));
    }


    public function checkout_success() {
      return view('views/orders/checkout_success.php');
    }


    public function checkout_cancel() {
      return view('views/orders/checkout_cancel.php');
    }
  }