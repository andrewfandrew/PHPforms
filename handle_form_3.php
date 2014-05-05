<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Feedback 3</title>
    </head>
    <body>
        <?php # Script 2.5 - handle_form_3.php
        // Print the submitted information:
        if ( !empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email']) ) {
            echo "<p>Thank you, <b>{$_POST['name']}</b>, for the following comments:<br />"
            . "<tt>{$_POST['comments']}</tt></p>"
            . "<p>We will reply to you at <i>{$_POST['email']}</i>.</p>\n";
        } else { // Missing form value.
            echo '<p>Please go back and fill out the form again.</p>';
        }
        ?>
    </body>
</html>
