<?php 
include "../php/inc/tableaux.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cv Amaury</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
    <body>
        <section>
            <div>
                <img src="../images/amaury.png" alt="Amaury Profil">
            </div>

            <div class="contact">
            <h2>Contact</h2>
                <?php 
                foreach($contact as $key => $value){
                    ?>  <h3><?= $key ?></h3>
                        <p><?= $value ?><p>
                <?php    
                }
                ?>
            </div>

            <div class ="formation">
            <h2>Formation</h2>
            <?php 
                foreach($formation as $key => $value){
                    ?><h3 class = "date"><?= $key ?></h3> <?php
                    if(is_array($value)){
                        foreach($value as $key => $value){
                           ?>   <h3 class ="school"><?= $key ?></h3>
                                <p><?= $value ?></p>
                        <?php
                        }
                    }    
                }
                ?>
               
            </div>    
            <div class="competences">
                <h2>Compétences</h2>
                <?php 
                foreach($competences as $key => $value){
                    ?><ul><?= $key ?><?php
                    if(is_array($value)){
                        foreach($value as $key => $value){
                           ?>   <li><?= $value ?></li>
                                
                        <?php
                        }
                    }
                    ?></ul>
                    <?php    
                }
                ?>
            </div>
            <div class="langage">
                <h2>Langage</h2>
                <?php 
                foreach($langage as $key => $value){
                    ?>  <h3><?= $key ?></h3>
                        <p><?= $value ?><p>
                <?php    
                }
                ?>
            </div>
            <div>
                <h2 class="centre__interet">Centres d'intérêt</h2>
                <?php 
                foreach($centreInteret as $value){
                    ?> 
                        <p><?= $value ?><p>
                <?php    
                }
                ?>
            </div>
        </section>
        <main>
        <h1>Amaury CASCAN</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil vitae voluptatibus voluptatum. Quo ducimus voluptas eum.
            Sunt adipisci reprehenderit qui numquam ipsum necessitatibus beatae ipsam provident quidem? Iste error nemo, modi laborum, earum ex sequi temporibus repellendus 
            animi commodi illum.
            </p>
            <h2>Expérience</h2>
            <div>
                <?php 
                foreach($experience as $key =>$value){
                    ?> 
                        <h3><?= $key["année"] ?><h3>
                        <h3><?= $key["employeur"] ?></h3>
                <h4><?= $key["durée"] ?></h4>
                <p><?= $key["details"] ?></p>
                <?php    
                }
                ?>

            </div>
        </main>
    </body>
</html>
