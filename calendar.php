<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calendar</title>
    </head>
    <body>
        <form action="calendar.php" method="post">
        <?php # Script 2.6 - calendar.php
        
        // This script makes three pull-down menus
        // for an HTML form: months, days, years.
        
        // Make the monthly array:
        $months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        
        // Make the days and years arrays:
        $days = range (1, 31);
        $years = range (2011, 2021);
        
        // Make the months pull-down menu:
        echo '<select name="month">';
        foreach ($months as $key =>
                $value) {
            echo "<option value=\"$key\">
                $value</option>\n";
        }
        echo '</select>';
        
        ?>
        </form>
    </body>
</html>
