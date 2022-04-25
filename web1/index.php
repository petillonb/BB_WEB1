<?php
require("server/database.php");
require("lib/scan_directory.php");

join_database();
register_shutdown_function("shutdown");


?>
<!DOCTYPE html>
<html>

<head>
    <title>SiteWeb</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main class="main">
        <div class="column menu">
            <h1 class="menu-header">
                Site Web</h1>
            <ul>
                <?php
                $array = get_all_files("pages");
                foreach ($array as $k => $v) {
                ?>
                    <li class="menu-link <?php echo isset($_GET["page"]) && $_GET["page"] == $v ? "menu-link-active" : ""  ?>">


                        <a class="menu-link-a" href="<?= "index.php?page=", $v; ?>"> <?php echo ucfirst($v); ?> </a>
                    </li>
                <?php } ?>
            </ul>
            <div class="menu-footer">
                <p style="margin:auto"> Louis BAJARD, 2021-2022</p>
            </div>
        </div>
        <div class="column content">
            <?php
            if (isset($_GET["page"])) {

                // $include($_GET["page"]);
            ?>
                <h1><?php echo ucfirst($_GET["page"]) ?></h1>
                <div>
                    <?php

                    if (in_array($_GET["page"], get_all_files("pages"))) {
                        include "pages/" . $_GET["page"] . ".php";
                    } else { ?>
                        <h1>404 Not Found</h1>
                    <?php
                    }
                    ?>
                </div>

            <?php
            } else {
            ?>
                <h1>404 Not Found</h1>
            <?php
            } ?>

        </div>
    </main>

</body>

</html>