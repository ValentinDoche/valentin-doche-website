<?php
function api_cate_delete(){
    if ($_SESSION['is_connected']){
        if (isset($_POST['cate_id'])){
            if (cateDelete($_POST['cate_id'])){
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