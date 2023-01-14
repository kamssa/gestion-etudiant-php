<?php
require_once("connexion.php");
$nom= $_POST['nom'];
$email=$_POST['email'];
$nomPhoto= $_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name, "./images/$nomPhoto");
$req = "insert into etudiant(nom, email, photo) values('$nom', '$email', '$nomPhoto')";
mysqli_query($conn,$req);
?>

<html>
    <body>
    <table>
            <tr>
                <td>Nom:</td>
                <td><?php echo ($nom)?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo ($email)?></td>
            </tr>
            <tr>
                <td>Photo:</td>
                <td><img src="images/<?php echo ($nomPhoto)?>"></td>
            </tr>
            
        </table>
    </body>
</html>