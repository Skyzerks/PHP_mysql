<?php
include_once 'repository/authModule.php';

$repositoryRoutes = [
    'catalog',
    'user'
];
foreach ($repositoryRoutes as $route){
    include_once 'repository/'.$route.'Repository.php';
}
//include_once 'repository/catalogRepository.php';
//include_once 'repository/userRepository.php';
