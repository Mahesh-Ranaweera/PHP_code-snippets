<!doctype html>

<html>
	<head>
		<title>Assign-1-Q4.3</title>
		<meta charset="UTF-8">
	</head>

	<body>
        <form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
          
            <p>
                <label for="intDeposite"> Deposite: </label>
                <input type="text" name="Deposite" id="strDeposite"/>
            </p>

            <p>
                <label for="intYears"> Years  : </label>
                <input type="text" name="Years" id="strYears"/>
            </p>

            <p>
                <label for="intInterest"> Interest : </label>
                <input type="text" name="Interest" id="strInterest"/>
            </p>

            <p>
                <input type= "submit" name="submit" value="submit"/>
            </p>
            
        </form>    
		
		<?php
			
			if (isset($_POST["submit"]))
			{
                 $Deposite = $_POST["Deposite"];
			     $Years = $_POST["Years"];
			     $Interest = $_POST["Interest"];
			
			     $intAmount = $Deposite * pow((1 + $Interest),$Years);
                
                echo "<p>Deposite : $Deposite</p>";
                echo "<p>Years    : $Years</p>";
                echo "<p>Interest : $Interest</p>";
				echo "<p> The amount is: CAD ";
                printf ("%.02lf\n", $intAmount);
			}
		?>
		
	</body>
</html>