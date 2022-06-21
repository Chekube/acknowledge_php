
<?php 
    if (!isset($_POST["submit"])){
        header('Location: index.php');
    }

    if ($_POST["password"] != $_POST["confirmpassword"]){
        header('Location: index.php?msg=01');
    }
?> 

<!DOCTYPE html>
<html>
<head>
<title>Acknowledgement</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Acknowledgement</h1>
        </header>
        <div class="form">
            <p>
                <label>Name: <?php echo $_POST["fullname"] ?></label>
            </p>

            <p>
                <label>Email: <?php echo $_POST["email"] ?></label>
            </p>

            <p>
                <label>Password: <?php echo $_POST["password"] ?></label>
            </p>

            <p>
                <label>Gender: <?php echo $_POST["gender"] ?></label>
            </p>

            <p>
                <label>Date of Birth: <?php echo $_POST["dateofbirth"] ?></label>
            </p>

            <p>
                 <label>Hobbies: 
                     <?php
                         if (isset ($_POST["hobbies"] )) {
                             $hobbies = implode(", ", $_POST ["hobbies"]);
                             echo $hobbies;
                         }
                     ?>
                </label>
            </p>

            <p>
                <label>Favorite Color: 
                    <span style='color:<?php echo $_POST["color"] ?>; background-color:<?php echo $_POST["background-color"] ?>'>
                        <?php echo $_POST["favoritecolor"] ?>;
                    </span>
                </label>
            </p>
            <p>
                <label>Zodiac: <?php echo $_POST["zodiac"] ?></label>
            </p>
            <br>
            <p>
            <?php
                    if ($_FILES["portrait"]["error"] == 0) {
                        move_uploaded_file($_FILES["portrait"]["tmp_name"], "images/" . $_FILES ["portrait"]["name"]);
                    }
                    
                    $dir = dir("images");
                        
                while (($file = $dir->read()) != false) {
                        if ($file != '.' and $file != '..') {
                            echo "<img src='images/" . $file . "' class='thumbnail'>";
                        }
                    }                
                    $dir->close();
            ?>
            </p>    
        </div>
    </div>
</body>
</html>