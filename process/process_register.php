<?php

//on teste si tous les champs du formulaire sont remplits
if (
    isset($_POST['pseudo']) && !empty($_POST['pseudo'])	
    && isset($_POST['password'])&& !empty($_POST['password'])
    )
    {
    // ON SE CONNECTE A LA BDD
        
    include "../utils/connexionBDD.php";
        
    // ON VERIFIE QUE LE PSEUDO N'EXISTE PAS DÉJà
       
    $pseudo = $mysqlConnection->prepare("SELECT * FROM users WHERE pseudo = ?");
    $pseudo->execute([$_POST['pseudo']]);
    $user = $pseudo->fetch();
            
    if($user){
        header("Location: ../register.php?error=Ce pseudo existe déjà");
    }
    //---------------------------------------------------------------------------------------------
    // SINON ON LE CREE
    else{
        $pdoStmnt = $mysqlConnection->prepare("INSERT INTO users ( pseudo, password ) VALUES (?,?)");
        $isSuccess = $pdoStmnt->execute([$_POST["pseudo"], $_POST["password"]]);
                    
        if (!$isSuccess) {
            header("Location: ../register.php?error=Echec lors de la création de votre compte"); 
        }else{
            header("Location: ../login.php?success=Votre compte à bien été créé. !");
        }
    
    }
        
}
else{
    header("Location: ../register.php?error=Le formulaire n'est pas valide"); 
}




