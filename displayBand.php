<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <title>Display Page</title>
            <link href="./style.css" type="text/css" rel="stylesheet">
                <meta charset="utf-8">
                </head>
<?php

// bandSuscribe is the table with id, First Name, Last Name and Email Address.


$servername = "mysql.truman.edu";
$username = "ab7324";
$password = "oomaifai";
$dbname = "ab7324CS315";
$dbhost = "localhost";




try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,
                    array(PDO::ATTR_EMULATE_PREPARES => false,
                          PDO:: ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION));

    // set the PDO error mode to exception
  
    $stmt = $conn->prepare("SELECT * FROM bandSuscribe;");
    $stmt->execute();
    $result = $stmt -> fetch();

    ?>
                <table>
                    <tr>
                        <td>
                            <?=$result[0]?>
                        </td>
                        <td>
                            <?=$result[1]?>
                        </td>
                        <td>
                            <?=$result[2]?>
                        </td>
                        <td>
                            <?=$result[3]?>
                        </td>
                    </tr>
                </table>
                <?php
    while ($result = $stmt -> fetch()){
      ?>
                <table>
                    <tr>
                        <td>
                            <?=$result[0]?>
                        </td>
                        <td>
                            <?=$result[1]?>
                        </td>
                        <td>
                            <?=$result[2]?>
                        </td>
                        <td>
                            <?=$result[3]?>
                        </td>
                    </tr>
                </table>
                <?php
     }
   }
   
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

   ?>
            </body>
        </html>