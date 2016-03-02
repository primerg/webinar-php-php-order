<?php
  require_once('models/user.php');
  require_once('models/product.php');

  class PagesController {
    public function home() {
      $products = Product::all();
      return view('views/pages/home.php', compact('products'));
    }

    public function about() {
      return view('views/pages/about.php');
    }

    public function error() {
      return view('views/pages/error.php');
    }

    public function dashboard() {
      $products = Product::all();
      $users = User::all();
      return view('views/pages/dashboard.php', compact('products', 'users'));
    }
  }