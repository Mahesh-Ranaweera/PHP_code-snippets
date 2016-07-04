<!DOCTYPE html>
<html>
    <head>
        <title>Assign-1-Q5</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <style>
            img{
				margin: 0;
			}
            .box_div{
                width:240px;
                height:268px;
                border: 1px solid #2196f3;
            }
                
        </style>
    
    <h1>Chessboard</h1>  
    <div class="box_div">
        <table width="240px" height="240px" cellspacing="0" cellpadding="0" border="0">  
        <?php

        //$intX = X axis      
        //$intY = Y axis
        for ($intX=1; $intX <=8; $intX++)
            {
                echo "<tr>";

                $intY=1;
                while($intY <=8)
                {
                    $axisXY = $intY + $intX;

                    if($axisXY%2==0)
                    {
                        echo "<td>";
                        echo "<img src='assets/blackSquare.gif' width='30px' height='30px'>";
                        echo "</td>";
                    }
                    else
                    {
                        echo "<td>";
                        echo "<img src='assets/whiteSquare.gif' width='30px' height='30px'>";
                        echo "</td>";
                    }
                    $intY++;
                }
                echo "</tr>";
            }

        ?>
        </table> 
        </div>
                                        
    </body>
</html>