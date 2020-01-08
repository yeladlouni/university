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
           <table>
               <?php
                    class Student {
                        function Student($cne, $first_name, $last_name, $birth_date, $address) {
                            $this->cne = $cne;
                            $this->first_name = $first_name;
                            $this->last_name = $last_name;
                            $this->birth_date = $birth_date;
                            $this->address = $address;
                        }

                        function check_age() {
                            return -$this->birth_date + new DateTime() < 30 * 365; 
                        }
                    }  
                    
                    $students = array(
                        new Student("1020029", "test", "test", "30/01/1990", "200 rue test"),
                        new Student("1020029", "test", "test", "30/01/1990", "200 rue test"),
                        new Student("1020029", "test", "test", "30/01/1990", "200 rue test"),
                        new Student("1020029", "test", "test", "30/01/1990", "200 rue test")    
                    );

                    if (empty($_POST['cne'])) {
                        echo "<form><input ></form>";
                        
                    } else {
                        echo "<table></table>";
                        for ($i=0; $i < count($students); $i++) {
                            
                        }
                    }
                ?>
           </table>
        </div>
    </body>
</html>