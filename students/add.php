<?php
    include('student.php');

    $nameError = $mobileError = $emailError = $birthDateError = "";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cne = $_POST['cne'];
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $birthDate = $_POST['birth_date'];
        $address = $_POST['address'];

        $student = new Student($cne, $name, $birthDate, $address, $email, $mobile);

        if(!$student->check_name()) {
            $nameError = "Le nom saisi est invalide";
        }

        if(!$student->check_birth_date()) {
            $birthDateError = "L'étudiant doit avoir au moins 15ans et ne doit pas dépasser 30ans.";
        }

        if(!$student->check_mobile()) {
            $mobileError = "Le format du tél. saisi est incorrect.";
        }

        if(!$student->check_email()) {
            $emailError = "Le format de l'email saisi est incorrect.";
        }
    }
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Ajout d'un étudiant</title>
<link rel="stylesheet" href="../assets/css/styles.css"/>
</head>
<body>
<div class="content">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<label for="cne">CNE</label>
<input type="text" name="cne"/><br>
<label for="name">Nom</label>
<span class="error"><?php echo $nameError; ?></span><br>
<input type="text" name="name"/><br>
<label for="birth_date">Date de naissance</label>
<input type="text" name="birth_date"/><span class="error"><?php echo $birthDateError; ?></span><br>
<label for="address">Adresse</label>
<input type="text" name="address"/><br>
<label for="email">Email</label>
<span class="error"><?php echo $emailError; ?></span><br>
<input type="text" name="email"/><br>
<label for="mobile">Tél</label>
<input type="text" name="mobile"/>
<span class="error"><?php echo $mobileError; ?></span><br>
<input type="submit" value="Envoyer"/>
</form>   
</div>
</body>
</html>