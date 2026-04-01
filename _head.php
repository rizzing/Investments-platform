<?php
$isVerticalPage = true;

$theme = $_COOKIE['theme'] ?? 'light';
$isDark = $theme === 'dark';

$menuType = $_COOKIE['menuType'] ?? '';
$menuType = 'menu_hidden';

?>

<style>
    :root {
        --background-color: #F5F7FB;
        --primary-color: #ffffff;
        --secondary-color: #F4F4F4;
        --text-color: #000000;
        --text-color-light: #777B82;
        --theme-color: #0676DD;
        --color-red: #C00000;
        --color-green: #008000;
    }


   body.dark {
        --background-color: #14151A;
        --primary-color: #191B20;
        --secondary-color: #2A2D35;
        --text-color: #ffffff;
        --text-color-light: #c6c6c6;
        --theme-color: #0676DD;
        --color-red: #f75267;
        --color-green: #09FF74;
     }

</style>

<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/css/fonts.css">
<link rel="stylesheet" href="./assets/css/styles.css?v=<?=time()?>">
<link rel="stylesheet" href="./assets/css/responsive.css?v=<?=time()?>">

