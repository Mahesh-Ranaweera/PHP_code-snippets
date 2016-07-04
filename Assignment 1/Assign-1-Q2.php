<!DOCTYPE html>
<html>
    <head>
        <title>Assign-1-Q2</title>
        <meta charset="UTF-8">
    </head>
    <body>
    
    <h1>Please select your favorite color</h1>
        
        
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        
    <?php
         $color =isset($_POST['color']) ? $_POST['color'] : '';
    ?>
        
    <label for="color">Blue</label>    
    <input type="radio" name="color" value="blue" <?php if (isset($color) && $color=="blue"){ echo "checked"; } ?> checked>
    
    <label for="color">Green</label>     
    <input type="radio" name="color" value="green" <?php if (isset($color) && $color=="green"){ echo "checked"; } ?>>
    
    <label for="color">Yellow</label>     
    <input type="radio" name="color" value="yellow" <?php if (isset($color) && $color=="yellow"){ echo "checked"; } ?>>
     
    <label for="color">Red</label>     
    <input type="radio" name="color" value="red" <?php if (isset($color) && $color=="red"){ echo "checked"; } ?>>
        
    <p><input type="submit" name="submit" value="Submit"></p>
    
    </form>    
        
    <?php

        if (isset($_POST["submit"]))
        {
            echo "<p>Your favourite color is: $color</p>";   
        }

    ?>
        
                                        
    </body>
</html>