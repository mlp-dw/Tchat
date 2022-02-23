<?php session_start(); 
 
// ON CONNECTE L'UTILISATEUR A SA SESSION--SON COMPTE

if(
    isset($_POST["pseudo"]) && !empty($_POST["pseudo"]) && isset($_POST["password"]) && !empty($_POST["password"])
    )
    {
       
        include "../utils/connexionBDD.php";
    
       
        $pdoStmnt = $mysqlConnection->prepare("SELECT * FROM users WHERE pseudo = ? AND password = ?");
        $isSuccess = $pdoStmnt->execute([$_POST["pseudo"], $_POST['password']]);

        $user = $pdoStmnt->fetch();

        $_SESSION['pseudo'] = $user["pseudo"];
        $_SESSION['password'] = $user["password"];
        $_SESSION["id"] = $user["id"];

        if (!$isSuccess) {
            header("Location: ../login.php?error=Echec lors de la création de votre compte"); 
        }else{
            header("Location: ../account.php?success=Bienvenue sur votre compte !");
        }
        
    }
else{
    header("Location: ../login.php?error=Echec lors de la connexion");

}


?>
