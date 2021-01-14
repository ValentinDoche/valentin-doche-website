<?php
function head($title, $metadescription="Valentin Doche is a student in Web Marketing and Computer Science. Freelance, he is your partner for a digital transition. Future Specialization in E-Sport"){ ?>
    <!doctype html>
    <html lang="en">
        <head>
            <!--Meta Tags-->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=0.8, user-scalable=no, minimum-scale=0.8">
            <meta name="description" content="<?=$metadescription?>" />
            <meta name="author" content="Valentin Doche" />
            <!--Favicons-->
            <link rel="shortcut icon" href="/theme/assets/images/favicon.webp">
            <!--Page Title-->
            <title><?=$title?></title>
            <!-- Bootstrap  -->
            <link rel="stylesheet" href="/theme/assets/css/bootstrap.css">
            <!-- Animate.css -->
            <link rel="stylesheet" href="/theme/assets/css/animate.css">
            <!-- Awesome Fonts-->
            <link rel="stylesheet" href="/theme/assets/css/all.min.css">
            <!-- Flexslider  -->
            <link rel="stylesheet" href="/theme/assets/css/flexslider.css">
            <!--Main Styles Css-->
            <link rel="stylesheet" href="/theme/assets/css/style.css">
            <!-- Prism -->
            <link rel="stylesheet" type="text/css" href="/theme/assets/css/prism.css">
            <script src="/theme/assets/js/prism.js"></script>
        </head>
<?php
}
