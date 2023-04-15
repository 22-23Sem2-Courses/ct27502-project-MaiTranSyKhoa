<?php
    include "../model/pdo.php";
    //connectdb();
    session_start();
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'login':
                include "../view/header_client.php";
                include "../view/login.php";
                break;
            case 'header_client':
                include "../view/header_clinet.php";
                break;
            case 'code_login':
                include "../model/code_login.php";
                break;
            case 'header':
                include "../view/header.php";
                include "../view/home.php";
                break;
            case 'home_client':
                include "../view/header_client.php";
                include "../view/home_client.php";
                break;
            case 'edit':
                include "../view/edit.php";
                break;
            case 'code_delete':
                include "../model/code_delete.php";
                break;
          
            case 'code_edit':
                include "../model/code_edit.php";
                break;
            case 'register':
                include "../view/header_client.php";
                include "../view/register.php";
                include "../model/code_register.php";
                break;
            case 'add':
                include "../view/header.php";
                include "../view/add.php";
                break;
            case 'code_add':
                include "../model/code.php";
                break;
            case 'fetch':
                include "../view/header.php";
                include "../view/fetch.php";
                break;
            case 'fetch_client':
                include "../view/header_client.php";
                include "../view/fetch_client.php";
                break;
            case 'code_donhang':
                include "../model/code_donhang.php";
                break;
            case 'fetch_donhang':
                include "../view/header_client.php";
                include "../view/fetch_donhang.php";
                break;
            case 'delete_order':
                include "../model/delete_order.php";
                break;
            case 'xulythanhtoan':
                include "../model/xulythanhtoan.php";
                break;
            case 'donhangdadat':
                include "../view/header_client.php";
                include "../view/donhangdadat.php";
                break;
            case 'thanhtoan':
                include "../model/thanhtoan.php";
                break;
            case 'logout':
                include "../view/header_client.php";
                unset($_SESSION['username']);
                include "../view/home_client.php";
                break;
            case 'code_search':
                include "../view/header_client.php";
                include "../view/search.php";
                break;
            default:
                include "../view/header_client.php";
                include "../view/home_client.php";
                break;
        }
    }else{
        include "../view/header_client.php";
        include "../view/home_client.php";
    }
    include "../view/footer.php";

?>