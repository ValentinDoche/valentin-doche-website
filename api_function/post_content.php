<?php
function api_post_content(){
    if (isset($_POST['post_id'])){
        echo blogID($_POST['post_id'])['content'];
    }else{
        echo 'error';
    }
}

