<?php

require_once __DIR__.'/router.php';


get('/', 'pages/index.php');
get('/create-card', 'pages/create-card.php');
get('/settings', 'pages/settings.php');
get('/profile', 'pages/profile.php');
get('/catalog', 'pages/catalog.php');
get('/payment', 'pages/payment.php');

get('/sign-up', 'pages/auth/sign-up.php');
get('/sign-in', 'pages/auth/sign-in.php');

post('/sign-in', 'pages/sign-in.php');
post('/sign-up', 'pages/sign-up.php');

any('/404','pages/404.php');
