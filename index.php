<?php
  session_start();
  require_once('config.php');
  require_once('connection.php');
  require_once('helpers.php');

  $request_uri = $_SERVER[ 'REQUEST_URI' ];
  $current_uri = str_replace($base_url, '', $request_uri);
  
  $controller = '';
  $action     = '';
  switch ($current_uri) {
    case '/':
      $controller = 'pages';
      $action     = 'home';
      break;

    case '/about':
      $controller = 'pages';
      $action = 'about';
      break;

    case '/login':
      $controller = 'users';
      $action = 'login';
      break;

    case '/logout':
      $controller = 'users';
      $action = 'logout';
      break;

    case '/register':
      $controller = 'users';
      $action = 'register';
      break;

    case '/admin/users':
      $controller = 'users';
      $action = 'admin_users';
      break;

    case '/account':
      $controller = 'users';
      $action = 'account';
      break;

    case '/admin/products':
      $controller = 'products';
      $action = 'admin_index';
      break;

    case '/admin/products/add':
      $controller = 'products';
      $action = 'admin_add';
      break;

    case '/checkout':
      $controller = 'orders';
      $action = 'checkout';
      break;

    case '/checkout/success':
      $controller = 'orders';
      $action = 'checkout_success';
      break;

    case '/checkout/cancel':
      $controller = 'orders';
      $action = 'checkout_cancel';
      break;

    case '/dashboard':
      $controller = 'pages';
      $action = 'dashboard';
      break;

    default:
      if (preg_match('/\/product\?id=.*/', $current_uri)) {
        $controller = 'products';
        $action = 'view';
      }
      break;
  }


  require_once('routes.php');
  require_once('views/layout.php');

  