<?php
define('HOST', 'localhost:3307');
define('USER', 'root');
define('PASSWORD', '');
define('BDD', 'valentindoche');
try{
    $pdo = new PDO("mysql:host=".HOST.";dbname=".BDD, USER, PASSWORD);
} catch (PDOException $e){
    print "erreur !! : " . $e->getMessage()  . "<br>"; die();
}

# BLOG

function blogExist($slug) {
    global $pdo;
    $payload = [$slug];
    if (isset($_SESSION['is_connected'])){
        $statement = $pdo->prepare("SELECT * FROM post WHERE slug=?;");
    }else{
        $statement = $pdo->prepare("SELECT * FROM post WHERE slug=? AND publish=1;");
    }
    $statement->execute($payload);
    $result = $statement->fetch();
    if ($result['slug'] === $slug){
        return true;
    }else{
        return false;
    }
}
function blogTitle($slug) {
    global $pdo;
    $payload = [$slug];
    $statement = $pdo->prepare("SELECT * FROM post WHERE slug=?;");
    $statement->execute($payload);
    $result = $statement->fetch();
    return $result['title'];
}
function blogMetadescription($slug) {
    global $pdo;
    $payload = [$slug];
    $statement = $pdo->prepare("SELECT * FROM post WHERE slug=?;");
    $statement->execute($payload);
    $result = $statement->fetch();
    return $result['meta_description'];
}
function blogContent($slug){
    global $pdo;
    $payload = [$slug];
    $statement = $pdo->prepare("SELECT * FROM post WHERE slug=?;");
    $statement->execute($payload);
    $result = $statement->fetch();
    return $result['content'];
}
function blogDate($slug){
    $month = ['Oups !!!', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    global $pdo;
    $payload = [$slug];
    $statement = $pdo->prepare("SELECT * FROM post WHERE slug=?;");
    $statement->execute($payload);
    $result = $statement->fetch();
    $date = explode('-', $result['date_created']);
    return $date[2]." ".$month[intval($date[1])]." ".$date[0];
}
function blogAll($publish){
    global $pdo;
    $payload = [$publish];
    $statement = $pdo->prepare("SELECT * FROM post WHERE publish>=? ORDER BY id DESC;");
    $statement->execute($payload);
    return $statement->fetchAll();
}

function blogAdd($title, $slug, $meta_description, $short_description, $content, $image, $publish){
    global $pdo;
    $payload = [$title, $slug, $meta_description, $short_description, $content, $image, strintBoolToInt($publish)];
    $statement = $pdo->prepare("INSERT INTO post (title, slug, meta_description, short_description, content, image, publish) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $ask = $statement->execute($payload);
    if ($ask){
        return true;
    }else{
        return false;
    }
}
function blogID($id){
    global $pdo;
    $payload = [$id];
    $statement = $pdo->prepare("SELECT * FROM post WHERE id = ?");
    $statement->execute($payload);
    return $statement->fetch();
}
function blogUpdate($title, $slug, $meta_description, $short_description, $content, $image, $publish, $id){
    global $pdo;
    $payload = [$title, $slug, $meta_description, $short_description, $content, $image, strintBoolToInt($publish), $id];
    $statement = $pdo->prepare("UPDATE post SET title = ?, slug = ?, meta_description = ? , short_description = ?, content = ?, image = ?, publish = ?  WHERE id=?");
    $ask = $statement->execute($payload);
    if ($ask){
        return true;
    }else{
        return false;
    }
}
function blogDelete($id){
    global $pdo;
    $payload = [$id];
    $statement = $pdo->prepare("DELETE FROM post WHERE id=?");
    $ask = $statement->execute($payload);
    if ($ask){
        return true;
    }else{
        return false;
    }
}

# WORK

function workCategories(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM categories ORDER BY name;");
    $statement->execute();
    return $statement->fetchAll();
}
function workAll($publish){
    global $pdo;
    $payload = [$publish];
    $statement = $pdo->prepare("SELECT * FROM work WHERE publish>=? ORDER BY id DESC;");
    $statement->execute($payload);
    return $statement->fetchAll();
}
function workExist($slug) {
    global $pdo;
    $payload = [$slug];
    if (isset($_SESSION['is_connected'])){
        $statement = $pdo->prepare("SELECT * FROM work WHERE slug=?;");
    }else{
        $statement = $pdo->prepare("SELECT * FROM work WHERE slug=? AND publish=1;");
    }
    $statement->execute($payload);
    $result = $statement->fetch();
    if ($result['slug'] === $slug){
        return true;
    }else{
        return false;
    }
}
function workTitle($slug) {
    global $pdo;
    $payload = [$slug];
    $statement = $pdo->prepare("SELECT * FROM work WHERE slug=?;");
    $statement->execute($payload);
    $result = $statement->fetch();
    return $result['title'];
}
function workMetadescription($slug) {
    global $pdo;
    $payload = [$slug];
    $statement = $pdo->prepare("SELECT * FROM work WHERE slug=?;");
    $statement->execute($payload);
    $result = $statement->fetch();
    return $result['meta_description'];
}
function workContent($slug){
    global $pdo;
    $payload = [$slug];
    $statement = $pdo->prepare("SELECT * FROM work WHERE slug=?;");
    $statement->execute($payload);
    $result = $statement->fetch();
    return $result['content'];
}
function workDate($slug){
    $month = ['Oups !!!', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    global $pdo;
    $payload = [$slug];
    $statement = $pdo->prepare("SELECT * FROM work WHERE slug=?;");
    $statement->execute($payload);
    $result = $statement->fetch();
    $date = explode('-', $result['date_created']);
    return $date[2]." ".$month[intval($date[1])]." ".$date[0];
}
function workAdd($title, $slug, $categories, $content, $image, $publish, $meta_description){
    global $pdo;
    $payload = [$title, $slug, $categories, $content, $image, strintBoolToInt($publish), $meta_description];
    $statement = $pdo->prepare("INSERT INTO work (title, slug, categories, content, image, publish, meta_description) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $ask = $statement->execute($payload);
    if ($ask){
        return true;
    }else{
        return false;
    }
}
function workUpdate($title, $slug, $categories, $content, $image, $publish, $meta_description, $id){
    global $pdo;
    $payload = [$title, $slug, $categories, $content, $image, strintBoolToInt($publish), $meta_description, $id];
    $statement = $pdo->prepare("UPDATE work SET title = ?, slug = ?, categories = ?, content = ?, image = ?, publish = ?, meta_description = ? WHERE id = ?");
    $ask = $statement->execute($payload);
    if ($ask){
        return true;
    }else{
        return false;
    }
}
function workID($id){
    global $pdo;
    $payload = [$id];
    $statement = $pdo->prepare("SELECT * FROM work WHERE id = ?");
    $statement->execute($payload);
    return $statement->fetch();
}
function workDelete($id){
    global $pdo;
    $payload = [$id];
    $statement = $pdo->prepare("DELETE FROM work WHERE id=?");
    $ask = $statement->execute($payload);
    if ($ask){
        return true;
    }else{
        return false;
    }
}
# LOGIN
function login($username){
    global $pdo;
    $payload = [$username];
    $statement = $pdo->prepare("SELECT * FROM user WHERE username=?;");
    $statement->execute($payload);
    $result = $statement->fetch();
    if ($result['username'] === $username){
        return $result;
    }else{
        return false;
    }
}

# USER
function getName($username){
    global $pdo;
    $payload = [$username];
    $statement = $pdo->prepare("SELECT * FROM user WHERE username=?;");
    $statement->execute($payload);
    $result = $statement->fetch();
    return $result['first_name']." ".$result['last_name'];
}

# MEDIA
function mediaAll(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM media ORDER BY id DESC");
    $statement->execute();
    return $statement->fetchAll();
}
function mediaUpdate($id, $alt){
    global $pdo;
    $payload = [$alt, $id];
    $statement = $pdo->prepare("UPDATE media SET alt = ? WHERE id=?");
    $ask = $statement->execute($payload);
    if ($ask){
        return true;
    }else{
        return false;
    }
}
function mediaAdd($filename, $alt, $type){
    global $pdo;
    $payload = [$filename, $alt, $type];
    $statement = $pdo->prepare("INSERT INTO media (filename, alt, type) VALUES (?, ?, ?)");
    $ask = $statement->execute($payload);
    if ($ask){
        return true;
    }else{
        return false;
    }
}
function mediaDelete($id){
    global $pdo;
    $payload = [$id];
    $statement = $pdo->prepare("DELETE FROM media WHERE id=?");
    $ask = $statement->execute($payload);
    if ($ask){
        return true;
    }else{
        return false;
    }
}

#Categories
function cateAll(){
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM categories ORDER BY name");
    $statement->execute();
    return $statement -> fetchAll();
}
function cateID($id){
    global $pdo;
    $payload = [$id];
    $statement = $pdo->prepare("SELECT * FROM categories WHERE id = ?");
    $statement->execute($payload);
    return $statement -> fetch();
}
function cateDelete($id){
    global $pdo;
    $payload = [$id];
    $statement = $pdo->prepare("DELETE FROM categories WHERE id=?");
    $ask = $statement->execute($payload);
    if ($ask){
        return true;
    }else{
        return false;
    }
}
function cateAdd($name){
    global $pdo;
    $payload = [$name];
    $statement = $pdo->prepare("INSERT INTO categories (name) VALUES (?)");
    $ask = $statement->execute($payload);
    if ($ask){
        return true;
    }else{
        return false;
    }
}