<?php
function api_post_modify(){
    if (isset($_SESSION['is_connected'])){
        if(isset($_POST['post_title']) && isset($_POST['post_slug']) && isset($_POST['post_content'])){
            if (blogUpdate(
                $_POST['post_title'],
                $_POST['post_slug'],
                $_POST['post_meta_description'],
                $_POST['post_short_description'],
                $_POST['post_content'],
                $_POST['post_image'],
                $_POST['post_publish'],
                $_POST['post_id']
            )){
                echo 'success';
            }else{
                echo 'error blog add';
            }
        }else{
            echo 'error isset';
        }
    }else{
        header('location:/403');
    }
}