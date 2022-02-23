<?php session_start(); 
// ON CONNECTE A LA BDD
include "./utils/connexionBDD.php";

?>

<?php include "utils/header.php"; ?>
<?php include "utils/alerts.php";?>
<div class="m-3 d-flex flex-column justify-content-center align-items-start">
    <nav class="nav nav-pills nav-fill m-3 d-flex w-50">
    <a class="nav-link active " aria-current="page" href="./account.php">Compte</a>
    <a class="nav-link  bg-primary text-white" style="--bs-bg-opacity: .5;" href="./tchat.php">Tchat</a>
    <?php if(isset($_SESSION["pseudo"])){?>
                <a href="process/process_logout.php" class=" nav-link bg-danger text-white align-self-end">Deconnexion</a></li>
            <?php } 
        ?>
    </nav>
</div>

<h1 class="text-center">Votre compte <?= $_SESSION["pseudo"]?></h1>
<div class="m-3 d-flex flex-column justify-content-center align-items-center">
<br>
    <a href="../tchat/tchat.php" class="btn btn-outline-primary">Go tchat !</a>
<br>

    <div id="carouselExampleControls" class="carousel slide d-flex justify-content-center w-50" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.wanimo.com/veterinaire/wp-content/uploads/2015/07/images_articles_lapin_lapin-regarde.jpg" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="https://www.risavr.ca/wp-content/uploads/2021/02/lapin-int.jpg" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="https://cdn.radiofrance.fr/s3/cruiser-production/2020/08/376e41b6-8e52-4dfd-abfd-bf47f6864701/838_lapins.jpg" class="d-block w-100" alt="...">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
<?php include "utils/footer.php"; ?>