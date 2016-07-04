<form action = '<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
    <p>
    </label for ="strFirstname">Firstname: </label>
    <input type="text" name="strFirstname" id="strFirstname">
    </p>

    <p>
    </label for ="strSurname">Surname: </label>
    <input type="text" name="strSurname" id="strSurname">
    </p>

    <p>
    </label for ="strUsername">Username: </label>
    <input type="text" name="strUsername" id="strUsername">
    </p>

    <p>
    </label for ="strPassword">Password: </label>
    <input type="text" name="strPassword" id="strPassword">
    </p>

    <p>
    <input name="Submitbtn" type="submit" value="submit"/>
    </p>
</form>

<?php


    if (isset($_POST["Submitbtn"]))
    {

        $strFirstname = $_POST["strFirstname"];
        $strSurname = $_POST["strSurname"];
        $strUsername = $_POST["strUsername"];
        $strPassword = $_POST["strPassword"];

        echo "<p>Greetings $strFirstname $strSurname</p>";
        echo "<p>Your username is $strUsername and your password is $strPassword</p>";
        echo "<p><hr> End of Lab-2 Script Processes<hr></p>";
    }

    else 
    {
        echo "<p>Please enter the fields</p>";
    }

?>