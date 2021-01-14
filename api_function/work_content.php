<?php
function api_work_content(){
    if (isset($_SESSION['is_connected'])){
        if (isset($_POST['work_id'])){
            echo workID($_POST['work_id'])['content'];
        }else{
            echo 'error';
        }
    }else{
        header('location:/403');
    }
}

