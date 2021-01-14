<?php
function api_work_create(){
    if (isset($_SESSION['is_connected'])){
        if(isset($_POST['work_title']) && isset($_POST['work_slug']) && isset($_POST['work_content'])){
            if (workAdd(
                $_POST['work_title'],
                $_POST['work_slug'],
                $_POST['work_categories'],
                $_POST['work_content'],
                $_POST['work_image'],
                $_POST['work_publish'],
                $_POST['work_meta_description']
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