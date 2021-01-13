<?php
function api_media_update(){
    if (isset($_SESSION['is_connected'])){
        if (isset($_POST['id']) && isset($_POST['alt'])){
            if (mediaUpdate($_POST['id'],$_POST['alt'])){
                echo 'success';
            }else{
                echo 'error';
            }
        }
    }else{
        echo 'error';
    }
}
