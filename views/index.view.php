<html>
    <head>
        <title><?php $pageTitle ?></title>
    </head>
    <body>
        <?php
            echo "<h1>";
            if (isset($_POST['name'])) {
                echo $_POST['name'];
            } else {
                echo "This is a test page!";
            }
            echo "</h1>";
        ?>
        
        <form method="post">
            <label for="name">Name: </label>
            <input type="text" value="John" id="name" name="name"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>