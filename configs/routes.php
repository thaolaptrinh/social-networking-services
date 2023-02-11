<?php

// <!-- client -->
$routes[''] = 'client/home';
$routes['default_controller'] = 'client/home';

// Auth
$routes['login'] = 'client/home/login';
$routes['logout'] = 'client/home/logout';
$routes['recovery'] = 'client/home/recovery';

// Home
$routes['services'] = 'client/home/services';
$routes['order'] = 'client/home/order';
$routes['balance'] = 'client/home/balance';
$routes['orders'] = 'client/home/orders';

$routes['api_docs'] = 'client/home/api_docs';
$routes['settings'] = 'client/home/settings';

$routes['upgrade'] = 'client/home/upgrade';


$routes['balance'] = 'client/home/balance';
$routes['balance_history'] = 'client/home/balance_history';



// <!-- admin -->
$routes['admin'] = 'admin/home';
$routes['admin/login'] = 'admin/auth/login';

$aside_admin  = [
  [
    'name' => 'Bảng điều khiển',
    'path' => '/admin',
    'icon' => 'fas fa-tachometer-alt'

  ],

  [
    'name' => 'Thành viên',
    'path' => '/admin/users',
    'icon' => 'fas fa-user-alt'
  ],


  [
    'name' => 'Quản lý dịch vụ',
    'icon' => 'fas fa-thumbs-up',
    'sub_nav' => [
      [
        'name' => 'Danh mục',
        'icon' => 'far fa-circle',
        'path' =>  '/admin/category-list'
      ],
      [
        'name' => 'Gói dịch vụ',
        'icon' => 'far fa-circle',
        'path' =>  '/admin/service-list'
      ],
      [
        'name' => 'Đơn hàng',
        'icon' => 'far fa-circle',
        'path' =>  '/admin/order-list'
      ],
    ]
  ],

  [
    'name' => 'Lịch sử',
    'icon' => 'fas fa-history',
    'sub_nav' => [
      [
        'name' => 'Nhật ký hoạt động',
        'icon' => 'far fa-circle',
        'path' =>  '/admin/logs'
      ],
      [
        'name' => 'Biến động số dư',
        'icon' => 'far fa-circle',
        'path' =>  '/admin/dong-tien'
      ],
      [
        'name' => 'Lịch sử nạp thẻ',
        'icon' => 'far fa-circle',
        'path' =>  '/admin/nap-the'
      ],
      [
        'name' => 'Lịch sử nạp bank',
        'icon' => 'far fa-circle',
        'path' =>  '/admin/history-bank'
      ],
      [
        'name' => 'Lịch sử nạp momo',
        'icon' => 'far fa-circle',
        'path' =>  '/admin/history-momo'
      ],
    ]
  ],

  [
    'name' => 'Ngân hàng',
    'path' => '/admin/bank-list',
    'icon' => 'fas fa-university'
  ],

  [
    'name' => 'QL cấp bậc',
    'path' => '/admin/rank-list',
    'icon' => 'fas fa-layer-group'
  ],
  [
    'name' => 'Cài đặt menu',
    'path' => '/admin/menu-list',
    'icon' => 'fas fa-bars'
  ],
  [
    'name' => 'Giao diện',
    'path' => '/admin/theme',
    'icon' => 'fas fa-image'
  ],
  [
    'name' => 'Kết nối API',
    'path' => '/admin/connect-api',
    'icon' => 'fas fa-wifi'
  ],

  [
    'name' => 'Cài đặt hệ thống',
    'path' => '/admin/settings',
    'icon' => 'fas fa-cog'
  ]



];
