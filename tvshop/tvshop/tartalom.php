<?php
switch ($menu){
    case 'login':
        require_once './login.php';
        break;
    case 'logout':
        require_once './logout.php';
        break;
    case 'regist':
        require_once './regist.php';
        break;
    case 'payment':
        require_once './payment.php';
        break;
    case 'home':
        require_once './home.php';
        break;
    case 'body':
        require_once './body.php';
        break;
    case 'products':
        require_once './products.php';
        break;
    
    default:
        require_once './index.php';
        break;
}
