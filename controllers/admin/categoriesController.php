<?php
if($_subAction=='categories'&&isset($_method)){
    switch ($_method){
        case 'create': {
            $category = null;

            if($_POST){
                $category = createCategory($pdo, $_POST['form']['title']);
                $_SESSION['flash_msg'] = 'Category created';
            }
            
            show('post'); //var_dump($_POST[null]);
            echo '<br>';

            view('admin/createCategory', ['category' => $category[0]]);
            unset($_POST);
            break;
        }
        case 'edit':{
            $id = $_GET['id'];
            $category = getCategory( $pdo, $id );

            view('admin/categoryEdit', ['category' => $category[0]]);
            break;
        }
        case 'delete':{
            $id = $_POST['id'];
            deleteCategory( $pdo, $id );

            header('location: /admin/categories');
            exit();
            break;
        }
        case 'update':{
            $id = $_POST['form']['id'];
            $res = saveCategory( $pdo, $_POST['form'] );


            if( $res && $_FILES['categoryImage'] ) {
                $fileName = 'categoryImage_'.$id.'.jpg';
                move_uploaded_file($_FILES['categoryImage']['tmp_name'], 'files/categoryImages/'.$fileName);
            }
            
            $_SESSION['flash_msg']='category updated';
            header('location: /admin/categories/?method=edit&id='.$_POST['form']['id']);
            exit();
            break;
        }
    }
}
else if($_subAction == 'categories'){

    $categories = getCategories($pdo);

    $allCategoriesCount = getCategoriesCount($pdo)[0]['categories_count']; //needs more fixes
    $pagination = [
        'pages_count' => ceil($allCategoriesCount / $_config['items_on_page'])
    ];
    
    view('admin/categories', ['categories' => $categories, 'pagination' => $pagination]);
}