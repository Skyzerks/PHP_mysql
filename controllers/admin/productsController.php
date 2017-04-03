<?php
if($_subAction=='products'&&isset($_method)){
    switch ($_method){
        case 'create': {
            //$product = null;
            if($_POST){
                $product= createProduct($pdo, $_POST['form']['title'], $_POST['form']['description'], $_POST['form']['price'], $_POST['form']['category_id'] );
                $_SESSION['flash_msg'] = 'Product created';

                header('location: /admin/products');
                exit();
            }
            else{

//              show('post'); //var_dump($_POST[null]);
//              echo '<br>';
                $options = [
                    'categories' => getCategories($pdo)
                ];

                view('admin/createProduct', ['product' => $product[0], 'options'=>$options]);
            }
            break;
        }
        case 'edit':{
            $id = $_GET['id'];
            $product = getProduct( $pdo, $id );

            view('admin/productEdit', ['product' => $product[0]]);
            break;
        }
        case 'delete':{
            $id = $_POST['id'];
            deleteProduct( $pdo, $id );

            header('location: /admin/products');
            exit();
            break;
        }
        case 'update':{
            $id = $_POST['form']['id'];
            $res = saveProduct( $pdo, $_POST['form'] );

            
            if( $res && $_FILES['productImage'] ) {
                $fileName = 'productImage_'.$id.'.jpg';
                move_uploaded_file($_FILES['productImage']['tmp_name'], 'files/productImages/'.$fileName);
            }
            
            $_SESSION['flash_msg']='product information updated';
            header('location: /admin/products/?method=edit&id='.$_POST['form']['id']);
            exit();
            break;
        }
    }
}
else if($_subAction == 'products'){

    $products = getProducts($pdo);

    $allProductsCount = getProductsCount($pdo)[0]['products_count']; //needs more fixes
    $pagination = [
        'pages_count' => ceil($allProductsCount / $_config['items_on_page'])
    ];

//    var_dump($allProductsCount);
//    var_dump($_config['items_on_page']);
//    var_dump($pagination);
    view('admin/products', ['products' => $products, 'pagination' => $pagination]);
}