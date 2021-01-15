<?php
function api_cate_create(){
    if (isset($_SESSION['is_connected'])){
        if(isset($_POST['cate_name'])){
            if (cateAdd(
                $_POST['cate_name']
            )){
                echo 'success';
            }else{
                echo 'error';
            }
        }else{
            echo 'error';
        }
    }else{
        header('location:/403');
    }
}