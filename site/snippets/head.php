<!doctype html>
<html lang="en">

    <head>
        <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="description" content="<?php echo html($site->description()) ?>" />
        <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
        <meta name="robots" content="index, follow" />
        <link rel="shortcut icon" href="">
        <link rel="stylesheet" href="/assets/zen/css/normalize.css" />
        <link rel="stylesheet" href="/assets/zen/css/main.css" />
        
        <!-- HTML5 Element Fix -->
        <!--[if lt IE 9]>
            <script>
                document.createElement('header');
                document.createElement('nav');
                document.createElement('section');
                document.createElement('article');
                document.createElement('aside');
                document.createElement('footer');
            </script>
        <![endif]-->
        
        <!-- IE7 Font Awesome Fix -->
        <!--[if IE 7]>
            <link rel="stylesheet" href="" />
        <![endif]-->
    </head>

    <body>