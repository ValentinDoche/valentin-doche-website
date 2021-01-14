<?php
function api_media_create(){
    if (isset($_SESSION['is_connected'])){
        if (isset($_POST['alt']) && isset($_FILES['file']['name'])){

            $location = "uploads/".bin2hex(random_bytes(3)).".".$_FILES['file']['name'];
            if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
                if (mediaAdd($location, $_POST['alt'], $_FILES['file']['type'])){
                    echo 'success';
                }else {
                    echo 'error';
                }
            }else{
                echo 'error';
            }

        }else{
            echo 'error';
        }
    }else{
        header('location:/404');
    }
}
