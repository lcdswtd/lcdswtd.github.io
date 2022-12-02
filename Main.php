<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="resources/style.css">
    <title>WKU Second Hand Trading System</title>
</head>
<div class="title">
    <div class="icon">
        <img src="resources/pictures/logo_cn.png" width="300">
    </div>
    <div class="main_title_text">
        <font style="line-height: 78px" size="10" color="black">WKU Second Hand Trading System</font>
    </div>
    <form class="search" action="Search.php" method="post">
        <input class="button" type="submit" value="Search">
    </form>
    <form class="search" action="Login.php" method="post">
        <input class="button" type="submit" value="Login">
    </form>
</div>
<div class="selection">
    <div class="selection_center">
        <form class="sort1" action="selection/Major.php" method="post">
            <input class="button_selection" type="submit" value="Major">
        </form>
        <form class="sort1" action="selection/Grade.php" method="post">
            <input class="button_selection" type="submit" value="Grade">
        </form>
        <form class="sort1" action="selection/Course.php" method="post">
            <input class="button_selection" type="submit" value="Course">
        </form>
    </div>
</div>

<?php
