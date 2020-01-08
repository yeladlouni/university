<?php 
    $target_dir = "../data";
    $target_file = $target_dir.basename($_FILES['picture']['name']);
    $uploadOK = true;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(isset($_POST['submit'])) {
        if($imageFileType == "png" || $imageFileType == "jpeg") {
            $check = getimagesize($_FILES['picture']['tmp_name']);

            if($check !== false) {
                echo "Le fichier est une image".$check['mime'];
                $uploadOK = true;

                if(move_uploaded_file($_FILES['picture']['tmp_name'], $target_file)) {
                    echo "Le upload de l'image ".basename( $_FILES["fileToUpload"]["name"])." s'est terminé avec succès";
                } else {
                    echo "Le upload du fichier " .basename( $_FILES["fileToUpload"]["name"]). "s'est terminé en échec.";
                }
            } else {
                $uploadOK = false;
            }
        } 
        
        
    }

?>