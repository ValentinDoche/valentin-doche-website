<?php
function api_logout(){
    session_destroy();
    echo 'success';
}