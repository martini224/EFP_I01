<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>

    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container-fluid mt-3 mb-5">
    <div class="row">
    <?php
        include 'category.php';
        include 'listHelper.php';

        $listhelper = new ListHelper();

        if(isset($_GET["delete"]) && $_GET["delete"] == 'true') {
            $listhelper->deleteUserArticles();
        }

    
        $categories = $listhelper->getCategories();

    ?>
    </div>
</div>



</body>
</html>