<?php
if($_subAction=='orders'&&isset($_method)){
    switch ($_method){
        case 'create': {
            $order = null;
            if($_POST){
                $order = createOrder($pdo, $_POST['form']['user_id'], $_POST['form']['product_ids'], $_POST['form']['status']);
                $_SESSION['flash_msg'] = 'Product created';
            }
            else{


//            show('post'); //var_dump($_POST[null]);
//            echo '<br>';

                view('admin/createOrder', ['order' => $order[0]]);
            }
            break;
        }
        case 'edit':{
            $id = $_GET['id'];
            $order = getOrder( $pdo, $id );
            $order['user_name']= getUser($pdo, $order['user_id'])['name'];

            view('admin/orderEdit', ['order' => $order]);
            break;
        }
        case 'delete':{
            $id = $_POST['id'];
            deleteOrder( $pdo, $id );

            header('location: /admin/orders');
            exit();
            break;
        }
        case 'update':{
            $id = $_POST['form']['id'];

            $res = saveOrder( $pdo, $_POST['form'] );
            
            $_SESSION['flash_msg']='order information updated';
            header('location: /admin/orders/?method=edit&id='.$_POST['form']['id']);
            exit();
            break;
        }
    }
}
else if($_subAction == 'orders'){

    $orders = getOrders($pdo);

    $allOrdersCount = getOrdersCount($pdo)[0]['orders_count']; //needs more fixes
    $pagination = [
        'pages_count' => ceil($allOrdersCount / $_config['items_on_page'])
    ];

//    var_dump($allProductsCount);
//    var_dump($_config['items_on_page']);
//    var_dump($pagination);

    foreach ($orders as $key => $order){
        //adding new field to array
        $orders[$key]['user_name'] = getUser($pdo, $order['user_id'])['name'];
    }

    view('admin/orders', ['orders' => $orders, 'pagination' => $pagination]);
}