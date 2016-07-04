<!DOCTYPE html>
<html>
    <head>
        <title>Assign-1-Q3</title>
        <meta charset="UTF-8">
    </head>
    <body>
    
    <h1>Please select your favorite color</h1>
        
        
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        
    <?php
        $blue =isset($_POST['blue']) ? $_POST['blue'] : '';
        $green =isset($_POST['green']) ? $_POST['green'] : '';
        $yellow =isset($_POST['yellow']) ? $_POST['yellow'] : '';
        $red =isset($_POST['red']) ? $_POST['red'] : '';
    ?>
        
    <label for="color">Blue</label>    
    <input type="radio" name="blue" value="blue" <?php if (isset($_POST["blue"])){ $blue="<li>Blue</li>"; echo "checked"; } ?>>
    
    <label for="color">Green</label>     
    <input type="radio" name="green" value="green" <?php if (isset($_POST["green"])){ $green="<li>Green</li>"; echo "checked"; } ?>>
    
    <label for="color">Yellow</label>     
    <input type="radio" name="yellow" value="yellow" <?php if (isset($_POST["yellow"])){ $yellow="<li>Yellow</li>"; echo "checked"; } ?>>
     
    <label for="color">Red</label>     
    <input type="radio" name="red" value="red" <?php if (isset($_POST["red"])){ $red="<li>Red</li>"; echo "checked"; } ?>>
        
    <p><input type="submit" name="submit" value="Submit"></p>
    
    </form>    
        
    <?php

    if (isset($_POST["submit"]))
    {
        echo "<p> You have selected following colors: </p>";
        echo "<ol>";
        echo $blue;
        echo $green; 
        echo $yellow;
        echo $red;
        echo "</ol>";
    }

    ?>
        
                                        
    </body>
</html>