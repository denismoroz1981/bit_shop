<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Bootstrap block -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
    <div class="col-md-12" style="border:1px solid black; padding: 5px;">
        <!-- Heading -->
        <p>Heading</p>
    </div>
    <div class="row">
        <div class="col-md-8" style="border:1px solid black; padding: 5px;">
            <!-- Block with embedded web-site -->
            <p>Block with web-site</p>
            <?php
                echo file_get_contents($_GET["link"]);
            ?>

        </div>
        <div class="col-md-4" style="border:1px solid black; padding: 5px;">
            <!-- Block with search and GET/POST results -->
            <p>Block with serch and GET/POST results</p>
            <form action="index.php" method="get">
                <input type="text" name = "link" id="link" placeholder="http://www.web-site.net" size="50">
                <button>GO!</button>

            </form>
            <?php
            //$_GET["link"]=$_GET;
            echo $_GET["link"];
            echo $_GET;
            echo $_POST;
            ?>
        </div>

    </div>


</div>

</body>
</html>