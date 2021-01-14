<?php
function api_login(){
    if (!empty($_POST['twofa'])){
        echo true;
    }else{
        if (isset($_POST['username']) && isset($_POST['password'])){
            $login = login($_POST['username']);
            if (is_array($login)){
                if (password_verify($_POST['password'], $login['password'])){
                    if ($login['2FA_enabled']){
                        echo 'OKStep1';
                    }else{
                        echo 'success';
                        $_SESSION['is_connected'] = 1;
                        $_SESSION['username'] = $login['username'];
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
}