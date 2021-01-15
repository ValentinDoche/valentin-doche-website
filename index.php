<?php /** @noinspection PhpIncludeInspection */
session_set_cookie_params(3600);
session_start();
session_regenerate_id();

if (isset($_GET["request"])){
    $request = $_GET["request"];
    $request = explode('/', $request);
}else{
    $request = '/';
}

# Include
foreach (glob('theme/*.php') as $filename){
    include $filename;
}
foreach (glob('theme/components/*.php') as $filename){
    include $filename;
}
foreach (glob('libs/*.php') as $filename){
    include $filename;
}
foreach (glob('admins/*.php') as $filename){
    include $filename;
}
foreach (glob('admins/components/*.php') as $filename){
    include $filename;
}
foreach (glob('api_function/*.php') as $filename){
    include $filename;
}

#Router

switch ($request[0]){
    case "/":
        head("Valentin Doche - WebDesigner - Broadcaster Producer - Event organizer");
        index();
        break;
    case "work":
        if (isset($request[1])){
            if (workExist($request[1])){
                head(workTitle($request[1])." | Valentin Doche", workMetadescription($request[1]));
                work($request[1]);
            }else{
                header('location:/404');
            }
        }else{
            head("Work | Valentin Doche");
            works();
        }
        break;
    case "blog":
        if (isset($request[1])){
            if (blogExist($request[1])){
                head(blogTitle($request[1])." | Valentin Doche", blogMetadescription($request[1]));
                post($request[1]);
            }else{
                header('location:/404');
            }

        }else{
            head("Blog | Valentin Doche");
            blog();
        }
        break;
    #ERROR CODE
    case 403:
        http_response_code(403);
        head("403 Error | Valentin Doche");
        error_html(403);
        break;
    case 404:
        http_response_code(404);
        head("404 Error | Valentin Doche");
        error_html(404);
        break;
    #ADMIN INTERFACE
    case 'admin':
        if (isset($request[1])){
            if (isset($_SESSION['is_connected'])){
                switch ($request[1]){
                    case "media":
                        switch ($request[2]){
                            case 'library':
                                admin_head("Media Library | Valentin Doche");
                                admin_media_library();
                                break;
                            case 'add':
                                admin_head("Media Add | Valentin Doche");
                                admin_media_create();
                                break;
                            default:
                                header('location:/admin');
                        }
                        break;
                    case 'post':
                        switch ($request[2]){
                            case 'all':
                                admin_head("Post All | Valentin Doche");
                                admin_post_all();
                                break;
                            case 'add':
                                admin_head("Post Add | Valentin Doche");
                                admin_post_add();
                                break;
                            case 'modify':
                                admin_head("Post Modify | Valentin Doche");
                                admin_post_modify(blogID($request[3]));
                                break;
                        }
                        break;
                    case 'work':
                        switch ($request[2]) {
                            case 'all':
                                admin_head("Work All | Valentin Doche");
                                admin_work_all();
                                break;
                            case 'add':
                                admin_head("Work Add | Valentin Doche");
                                admin_work_add();
                                break;
                            case 'modify':
                                admin_head("Work Modify | Valentin Doche");
                                admin_work_modify(workID($request[3]));
                                break;
                            case 'categories':
                                admin_head("Valentin Doche - Categories");
                                admin_cate_all();
                                break;
                            default:
                                header('location:/404');
                        }
                        break;
                }
            }elseif ($request[1] === "login"){
                if (isset($request[2])){
                    header('location:/admin/login');
                }else{
                    admin_head("Valentin Doche - Admin Login");
                    admin_login();
                }
            }else{
                header('location:/admin/login');
            }
        }else{
            if (isset($_SESSION['is_connected'])){
                admin_head("Valentin Doche - Admin Dashboard");
                admin_index();
            }else{
                header('location:/admin/login');
            }
        }
        break;
    #API INTERFACE
    case 'api':
        if (isset($request[1])){
            switch ($request[1]){
                case 'login':
                    api_login();
                    break;
                case 'logout':
                    api_logout();
                    break;
                case 'media':
                    switch ($request[2]){
                        case 'update':
                            api_media_update();
                            break;
                        case 'add':
                            api_media_create();
                            break;
                        case 'delete':
                            api_media_delete();
                            break;
                        default:
                            header("location:/403");
                            break;
                    }
                    break;
                case 'post':
                    switch ($request[2]){
                        case 'content':
                            api_post_content();
                            break;
                        case 'add':
                            api_post_create();
                            break;
                        case 'update':
                            api_post_modify();
                            break;
                        case 'delete':
                            api_post_delete();
                            break;
                        default:
                            header("location:/403");
                            break;
                    }
                    break;
                case 'work':
                    switch ($request[2]){
                        case 'content':
                            api_work_content();
                            break;
                        case 'add':
                            api_work_create();
                            break;
                        case 'update':
                            api_work_modify();
                            break;
                        case 'delete':
                            api_work_delete();
                            break;
                        default:
                            header("location:/403");
                            break;
                    }
                    break;
                case 'cate':
                    switch ($request[2]){
                        case 'add':
                            api_cate_create();
                            break;
                        case 'update':
                            #api_work_modify();
                            header("location:/403");
                            break;
                        case 'delete':
                            api_cate_delete();
                            break;
                        default:
                            header("location:/403");
                            break;
                    }
                    break;
                default:
                    header("location:/403");
                    break;
            }
        }else{
            header("location:/403");
        }
        break;
    default:
        header("location:/404");
        break;
}