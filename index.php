<?php
session_start();
session_regenerate_id();

if (isset($_GET["request"])){
    $request = $_GET["request"];
    $request = explode('/', $request);
}else{
    $request = '/';
}


# Include
include 'theme/head.php';
include "theme/index.php";

#Router
?>
<!doctype html>
<html lang="en">
<?php
switch ($request[0]){
    case "/":
        head("Valentin Doche - WebDesigner - Broadcaster Producer - Event organizer");
        index();
        break;
    #ERROR CODE
    case 403:
        http_response_code(403);
        head("403 Error");
        break;
    default:
        http_response_code(404);
        head("404 Error");
}
?>
</html>
