<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="bg-1">
    <div id="nav-block" class="container flex-between">
        <div id="brand">
            <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>"  >Restaurant</a></span>
        </div>
        <input type="checkbox" id="burger-input">
        <label for="burger-input" id="burger-label"><span></span></label>
        <nav id="nav-main">
            <ul class="list-row">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

