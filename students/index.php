<!DOCTYPE html>
<html>
    <head>
        <title>Liste des étudiants</title>
        <link rel="stylesheet" href="../assets/css/styles.css" />
        <script src="../assets/js/script.js"></script>
    </head>
    <body onload="change_color()">
        <div class="content">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
               <?php
                    include 'student.php';
                    
                    $fstudents = fopen('../data/students.csv', 'r') or die('Fichier inaccessible.');
                   
                    $students = array();

                    while(!feof($fstudents)) {
                        $line = fgets($fstudents);
                        if(!$line == "") {
                            $list = explode(";", $line);
                            $student = new Student($list[0], $list[1], $list[2], $list[3], $list[4], $list[5]);
                            array_push($students, $student);
                        }                       
                    }

                    fclose($fstudents);

                    echo "<table>";
                    echo "<tr><td>CNE</td><td>Nom</td><td>Date de naissance
                    </td><td>Addresse</td><td>Email</td><td>Tél.</td></tr>";
                    for($i = 0; $i < count($students); $i++) {
                        echo "<tr><td>".$students[$i]->cne."</td>".
                        "<td>".$students[$i]->name."</td>".
                        "<td>".$students[$i]->birthDate."</td>".
                        "<td>".$students[$i]->address."</td>".
                        "<td>".$students[$i]->mobile."</td>".
                        "<td>".$students[$i]->email."</td></tr>";
                    }
                    echo "</table>";
                ?>
           
        </div>
    </body>
</html>