<?php
function admin_head($title){ ?>
    <!doctype html>
    <html lang="en">
    <head>
        <!--Meta Tags-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimum-scale=1">
        <meta name="author" content="Valentin Doche" />
        <meta name="robots" content="noindex">
        <!--Favicons-->
        <link rel="shortcut icon" href="/theme/assets/images/favicon.webp">
        <!--Page Title-->
        <title><?=$title?></title>
        <!-- Materialize  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Google Icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Custom Style -->
        <link href="/admins/assets/css/custom.css" rel="stylesheet">
        <!-- JQUEry -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Prism -->
        <link rel="stylesheet" type="text/css" href="/theme/assets/css/prism.css">
        <script src="/theme/assets/js/prism.js" data-manual></script>
        <!-- TinyMCE -->
        <script src="https://cdn.tiny.cloud/1/zp947sxbj41o172m9yi96ifx9xyc5j1irie1khg0dr21n4cl/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    </head>
<?php
}