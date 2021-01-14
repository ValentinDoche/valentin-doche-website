<?php
function api_media_delete(){
    if ($_SESSION['is_connected']){
        if (isset($_POST['id']) && isset($_POST['filename'])){
            if (unlink($_POST['filename'])){
                if (mediaDelete($_POST['id'])){
                    echo 'success';
                }else{
                    echo 'error';
                }
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