<?php

use App\Controllers\Actions;
use App\Controllers\Auth;
use App\Controllers\Categories;
use App\Controllers\Message;

use App\Controllers\Orders;
use App\Controllers\Photos;
use App\Controllers\Users;
use App\Services\Router;

Router::Page('/login', 'login');
Router::Page('/portfolio', 'portfolio');
Router::Page('/cantacts', 'cantacts');
Router::Page('/shop', 'shop');
Router::Page('/about', 'about');
Router::Page('/', 'home');
Router::Page('/admin', 'admin');
Router::Page('/profile', 'profile');
Router::Page('/userorder', 'profileOrders');
Router::Page('/messages', 'messages');
Router::Page('/users', 'users');
Router::Page('/orders', 'orders');
Router::Page('/photos', 'photos');

Router::Post('/auth/login', Auth::class, 'login', true);
Router::Post('/auth/logout', Auth::class, 'logout', false);
Router::Post('/auth/register', Auth::class, 'register', true, true);
Router::Post('/message', Message::class, 'send', true);
Router::Post('/messages/update', Message::class, 'update', true);
Router::Post('/admin/categories', Categories::class, 'add', true);
Router::Post('/profile/order', Orders::class, 'send', true);
Router::Post('/profile/order/update', Orders::class, 'fullupdate', true);
Router::Post('/orders/update', Orders::class, 'update', true);
Router::Post('/users/update', Users::class, 'update', true);
Router::Post('/photos/delete', Photos::class, 'delete', true);
Router::Post('/actions/add', Actions::class, 'send', true, true);
Router::Post('/photo/add', Photos::class, 'send', true, true);
Router::Post('/photo/edit', Photos::class, 'edit', true, true);
Router::enable();
