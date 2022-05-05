<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    @yield('content')
    
    <form method="POST">
        
        <h4>Name</h4><input type="text" title="Nom" name="Nom" id="Nom" required><br><br>
        <h4>Firstname</h4><input type="text" title="Prenom" name="Prenom" id="  Prenom"required><br><br>
        <h4>Location</h4><input type="text" title="Localisation" name="Localisation" id="Localisation" required><br><br>
        <h4>Email</h4><input type="email" title="Email" name="Email" id="Email" required><br><br>
        <h4>Password</h4><input type="password" title="MDP" name="MDP" id="MDP" required><br><br>
        <h4>Confirm password</h4><input  type="password" title="CMDP" name="CMDP" id="CMDP" required><br><br>
        <input type="submit" value="Submit" name="Submit" id="submit">

    </form>
    <?php

   
    if(isset($_POST['Submit'])){

        extract($_POST);
        if (!empty($Nom) && !empty($Prenom) && !empty($Localisation) && !empty($Email) && !empty($MDP) && !empty($CMDP)){
            if($MDP == $CMDP){

                $options = [
                    'cost' => 12,
                ];


                $hashpass = password_hash($MDP, PASSWORD_BCRYPT, $options);
                include 'inscription.php';
                global $db;
        
                $q = $db->prepare("INSERT INTO etudiant(Nom,Prenom,Localisation,Adresse_mail,Mot_de_passe)VALUES(:Nom,:Prenom,:Localisation,:Adresse_mail,:Mot_de_passe)");
                $q->execute([
                    'Nom'=>$Nom,
                    'Prenom'=>$Prenom,
                    'Localisation'=>$Localisation,
                    'Adresse_mail'=>$Email,
                    'Mot_de_passe'=>$hashpass
            ]);
    
            }else{
                echo "Mot de passe invalide";
            }
            
            
            
        }else{
            echo "Les champs ne sont pas tous remplis";
        }
        
    }
    ?>  
</body>
</html>