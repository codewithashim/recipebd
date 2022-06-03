<?php
include("Class/function.php");
$obj = new adminRecipe();
session_start();
$id = $_SESSION['adminID'];
if ($id == null) {
    header("location: ./index.php");
}
if (isset($_GET['adminlogout'])) {
    if ($_GET['adminlogout'] == 'logout') {
        $obj->adminLogout();
    }
}

?>


<!-- include header -->
<?php
include_once("./include/header.php");
?>

<?php
include_once("./include/topnav.php");
?>

<body class="sb-nav-fixed" >
    <div id="layoutSidenav" style="background: whitesmoke;">
        <!-- include side nav -->
        <?php
        include_once("./include/sidenav.php");
        ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <?php
                    if (isset($view)) {
                        if ($view == "dashboard") {
                            include_once("./view/desh_vew.php");
                        } elseif ($view == "add_category") {
                            include("view/add_cetagory_view.php");
                        } elseif ($view == "add_recipe") {
                            include("view/add_recipe_view.php");
                        } elseif ($view == "manage_cetagory") {
                            include("./view/maneg_cetagory.php");
                        } elseif ($view == "manage_recipe") {
                            include("view/manage_recipe_view.php");
                        }
                    }
                    ?>
                </div>
            </main>
            <?php
            // include_once("./include/desfooter.php");
            ?>
        </div>
    </div>

    <?php
    include_once("./include/script.php");
    ?>

    </html>