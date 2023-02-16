<?php
include("../controllers/Utilisateurs.index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="asset/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- Création formulaire choix ville -->
    <div style="border: 2px solid black;margin-top:5%;margin-inline:25%; margin-bottom:5%; text-align: center;
            font-size: x-large;
            background-color:gainsboro;"">
        <h1 style="font-size: xx-large; margin-top:2%;  text-decoration:underline">Création d'un profil</h1>
        <form action="" method="post" name="formUtilisateur" id="formUtilisateur">
            <br>
            <!--Formulaire pseudo-->
            <label>Entrez votre Pseudo</label>
            <input type="text" name="pseudo" value="" id="pseudo" style="text-align: left; background-color: white;">
            <?php
            if (isset($error["pseudo"])) { ?>
                <div class="alert alert-danger" role="alert" style="color: red;">
                    <p><?php echo $error["pseudo"]; ?></p>
                </div>
            <?php } ?>
            <?php if (isset($pseudoExiste)) { ?>
                <div class="alert alert-danger" role="alert" style="color: red;">
                    <p><?= $pseudoExiste ?></p>
                </div>
            <?php } ?>
            <br><br>
            <!--Formulaire email-->
            <label>Entrez votre Email</label>
            <input type="email" name="email" id="email" style="background-color: white;text-align: left;">
            <?php
            if (isset($error["email"])) { ?>
                <div class="alert alert-danger" role="alert" style="color: red;">
                    <p><?php echo $error["email"]; ?></p>
                </div>
            <?php } ?><br><br>
            <?php if (isset($emailExiste)) { ?>
                <div class="alert alert-danger" role="alert" style="color: red;">
                    <p><?= $emailExiste ?></p>
                </div>
            <?php } ?>
            <!--Formulaire mot de passe  -->
            <label >Entrez votre mot de passe</label>
            <input type="password" name="MotDepasse" id="motdepasse" style="text-align: left;background-color: white "><br><br>
            <?php
            if (isset($error["MotDepasse"])) { ?>
            <div class="alert alert-danger" role="alert" style="color: red;">
                <p><?php echo $error["MotDepasse"]; ?></p>
            </div>
            <?php } ?>
            <!-- <label>Choisissez votre ville :&nbsp</label>
            <select name="id_citie" id="id_citie" style="background-color: white;">
                <option value="" id="ville">--Choisissez votre ville--</option>
                <?php foreach ($res0 as $key0 => $value0) {

                ?>
                    <option value="<?php echo $value0["id"] ?>" style="text-align: left; "> <?php echo $value0["name"] ?></option>
                <?php
                }  ?>
            </select> -->
            <br><br>

            <button type="submit" value="send" name="send" id="send" style=" background-color:royalblue; color:white; height:50px ;padding-left:1%; padding-right:1%; margin-bottom:2%">Insérer données</button>
    </div>
    
    <div id="divboucle">
        <p> <?=boucle()?></p>
    </div>

</body>
</html>