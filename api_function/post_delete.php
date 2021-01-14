<?php
function api_post_delete(){
    if ($_SESSION['is_connected']){
        if (isset($_POST['post_id'])){
            if (blogDelete($_POST['post_id'])){
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