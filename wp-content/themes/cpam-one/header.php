<?php
/**
@name header.php
@author Vaelia
@abstract Set the header of view
*/
require_once("Classes/Menus/BootStrapMenu.php");
require_once("Classes/Menus/Walker/BootStrapMenuWalker.php");
$bootstrapMenu=new BootStrapMenu("top-menu");
?>
<!doctype html>
<html>
    <head>
    <meta charset="<?php bloginfo("charset");?>" >
    <meta
        name="viewport"
        content="width=device-width,
        initial-scale=1.0,
        maximum-scale=1.0">
        <!--insert style-->
        <link
            rel="sylesheet"
            href="<?php bloginfo("stylesheet_url");?>">
        <title>
        <?php bloginfo("name");?>
        </title>
        <?php
            wp_head();
        ?>
    </head>
    <body>
        <div class="container-fluid">
            <header>
            </header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#top-menu">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="top-menu">
                    <?php wp_nav_menu($bootstrapMenu->getOptions());?>
                
                </div>
            </nav>
    </body>
