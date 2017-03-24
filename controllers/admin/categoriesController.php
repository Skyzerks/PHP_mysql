<?php
if($_subAction=='categories'&&isset($_method)){
    switch($_method){
        case 'create':{
            
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