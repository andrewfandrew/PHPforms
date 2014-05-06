<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sorting arrays</title>
    </head>
    <body>
        <!-- Create an HTML table -->
        <table border="0" cellspacing="3" cellpadding="3" align="center">
            <tr>
                <td><h2>Rating</h2></td>
                <td><h2>Title</h2></td>
            </tr>
        
        <?php # Script 2.8 - sorting.php
        $films = array (
            'Casablanca' => 10,
            'To Kill A Mockingbird' => 10,
            'The English Patient' => 2,
            'Stranger Than Fiction' => 9,
            'Story of the Weeping Camel' => 5,
            'Donnie Darko' => 7
        );
        
        // Display the films in their original order:
        echo '<tr><td colspan="2"><b>In their original order:</b></td></tr>';
        foreach ($films as $title =>
                $rating) {
                    echo "<tr><td>$rating</td><td>$title</td></tr>\n";
        }
        
        // Display the films sorted by title:
        ksort($films);
        echo '<tr><td colspan="2"><b>Sorted by title:</b></td></tr>';
        foreach ($films as $title =>
                $rating) {
                    echo "<tr><td>$rating</td><td>$title</td></tr>\n";
        }
        
        // Display the films sorted by rating:
       arsort($films);
        echo '<tr><td colspan="2"><b>Sorted by rating:</b></td></tr>';
        foreach ($films as $title =>
                $rating) {
                    echo "<tr><td>$rating</td><td>$title</td></tr>\n";
        }
        ?>
        </table>
    </body>
</html>
