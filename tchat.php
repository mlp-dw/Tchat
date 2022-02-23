<?php session_start(); 
// ON CONNECTE A LA BDD
include "./utils/connexionBDD.php";


// VOIR LES Membres
include "process/process_see_users.php";


?>

<?php include "utils/header.php"; ?>
<?php include "utils/alerts.php";?>

<!------------------------------------------------------------------------------------------------------------------------------------>
<!--NAV DU COMPTE--->

<div class="m-3 d-flex flex-column justify-content-center align-items-start">
    <nav class="nav nav-pills nav-fill m-3 d-flex w-50">
    <a class="nav-link bg-primary text-white" style="--bs-bg-opacity: .5;" href="./account.php">Compte</a>
    <a class="nav-link active" aria-current="page" href="./tchat.php">Tchat</a>
    <?php if(isset($_SESSION["pseudo"])){?>
                <a href="process/process_logout.php" class="nav-link bg-danger text-white align-self-end">Deconnexion</a></li>
            <?php } 
        ?>
    </nav>
</div>

<h1 class="text-center">Tchat de <?= $_SESSION["pseudo"]?></h1>
<!------------------------------------------------------------------------------------------------------------------------------------>
<div class="d-flex ">
    <section class="tchat col-6"> 


    <?php //Affichage message du tchat
        include './utils/connexionBDD.php'
    ?>  

    
            <div class="messages border border-primary mx-auto w-75 h-25 m-3 overflow-scroll">
                <div id="messages-section">
                <!-- LE JS VA CE FAIRE ICI -->
                </div>
            </div>




        <div class="user-inputs mx-auto w-50 d-flex flex-column">

            <form action="process/process_add_message.php" method="post">

                <textarea class="form-control" name="content" placeholder="Write something..."></textarea>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-primary my-2">Envoyer</button>
                </div>

            </form>

        </div>

    </section>

    <section class="col-6">
        <div class="border border-primary mx-auto w-75 m-3 overflow-auto">
                <h3 class="m-3">MEMBRE</h3>
                <?php foreach ($users as $user) {
                    ?>

                    <div class="container d-flex flex-column justify-content-center align-items-center text-center">
                        <div class="bg-success rounded-pill bg-opacity-25 m-2 p-2 w-50">
                            <span class="fw-bold fs-5 "> <?= $user["pseudo"]?></span>
                        </div>
                    </div>
                    
                    <?php
                }
                ?>
        </div>

    </section>
</div>


<!----------------------------------------------------------------------------------------------------------------------------------->
<?php include "utils/footer.php"; ?>