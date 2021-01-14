<?php
function api_work_modify(){
    if (isset($_SESSION['is_connected'])){
        if(isset($_POST['work_title']) && isset($_POST['work_slug']) && isset($_POST['work_content'])){
            if (workUpdate(
                $_POST['work_title'],
                $_POST['work_slug'],
                $_POST['work_categories'],
                $_POST['work_content'],
                $_POST['work_image'],
                $_POST['work_publish'],
                $_POST['work_meta_description'],
                $_POST['work_id']
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