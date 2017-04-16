<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
    </head>
    <body>
        <form action="files.php" method="post">
            <fieldset>
                <legend><affir><b>Sign In</b></affir></legend>
                Username:&nbsp<input type="username" name="username" class="text" placeholder="Username...">
                <br />
                Password:&nbsp<input type="password" name="password" class="text" placeholder="Password...">
                <br />
                <input type="submit" name="submit" class="button" value="Sign In">
                <br />
                <p><a href="students.php">
                    <?php
                    
                    if ($_POST["username"] != "") {
                        
                        if ($_POST["username"] == "MeDogCharlie" && $_POST["password"] == "nh200677") {
                            
                            echo "Here" . " " . "are" . " " . "the" . " " . "files" . " " . "Master" . ".";
                            
                        }
                        
                        else {
                            
                            
                            
                        }
                        
                    }
                    
                    else {
                        
                        
                        
                    }
                    
                    ?>
                </a></p>
                <p><a href="students.php">
                    <?php
                    
                    if ($_POST["username"] != "") {
                        
                        if ($_POST["username"] == "Employee112205" && $_POST["password"] == "natestkd502211") {
                            
                            echo "Hello" . " " . "Employee" . "!";
                            
                        }
                        
                        else {
                            
                            
                            
                        }
                        
                    }
                    
                    else {
                        
                        
                        
                    }
                    
                    ?>
                </a></p>
            </fieldset>
        </form>
    </body>
</html>
