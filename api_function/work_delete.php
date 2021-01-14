<?php
function api_work_delete(){
    if ($_SESSION['is_connected']){
        if (isset($_POST['work_id'])){
            if (workDelete($_POST['work_id'])){
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