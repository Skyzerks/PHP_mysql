<?php
include_once 'repository/authModule.php';

$repositoryRoutes = [
//    'catalog',
    'user',
    'categories',
    'products'
];
foreach ($repositoryRoutes as $route){
    $path = 'repository/'.$route.'Repository.php';
    if(file_exists($path)) {
        include_once 'repository/' . $route . 'Repository.php';
    }
    else{
        cap($path, 'file');
        exit();
    }
}
//include_once 'repository/productsRepository.php';
//include_once 'repository/userRepository.php';
