<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit</title>

    <link rel="stylesheet" href="css/produit.css">
</head>
<body>
    
    <header>
        <?php
            require ('../HTMLpart/navbar.php');
        ?>
        <div class="principale">
             <!--======debut div item 1-->
            <div class="d1">
                <img src="images/bg1.png"   >
            </div>

            <!--======fin div item 1-->

            <!--======debut div item 1-->
            <div class="d2">
                <ul>
                    <li><img src="../images/10 Workout Headphones That Will Actually Stay on Your Ears — Finally!.jpg" alt="" height="50px" width="50px"></li>
                    <li><img src="../images/52 Christmas Gifts For Teenage Boys 2023 • Absolute Christmas.jpg" alt="" height="50px" width="50px"></li>
                    <li><img src="../images/casque.jpg" alt="" height="50px" width="50px"></li>
                </ul>
            </div>

            <!--======fin div item 1-->

            <!--======debut div item 1-->
            <div class="d3">
                <h1>Headset Beevo HM760 <br>
                    Black version
                </h1>

                <label for="color">color :</label>
                <button type="submit" name="color" class="colorblack"></button>
                <button type="submit" name="color" class="colorgreen"></button>
                <button type="submit" name="color" class="colorblue"></button> 
                <br>
                <p>$ <span>138,99</span></p> <br>
                <button  class="buy" type="submit">BUY NOW</button>

                <!--======= carateristique  description  commentaire-->
                
                <ul class="pre_buy">
                    <li class="caracteristique">
                        <button type="button">caracterisque</button>
                        <ul class="caract">
                            <li>sony WH-10000XMA</li><br>
                            <li>type : wipset</li><br>
                            <li>marque : BEEVO </li><br>
                            <li>sony WH-10000XMA</li><br>
                            <li>type : wipset</li><br>
                            <li>marque : BEEVO </li><br>
                        </ul>
                    </li>

                    <li class="Description">
                        <button type="button">Description</button>
                        <ul class="descrip">
                            <li>sony WH-10000XMA</li><br>
                            <li>type : wipset</li><br>
                            <li>marque : BEEVO </li><br>
                            <li>sony WH-10000XMA</li><br>
                            <li>type : wipset</li><br>
                            <li>marque : BEEVO </li><br>
                        </ul>
                    </li>


                    <li class="commentaire">
                        <button type="button">commentaire</button>
                        <ul class="comment">
                            <li>sony WH-10000XMA</li><br>
                            <li>type : wipset</li><br>
                            <li>marque : BEEVO </li><br>
                            <li>sony WH-10000XMA</li><br>
                            <li>type : wipset</li><br>
                            <li>marque : BEEVO </li><br>
                        </ul>
                    </li>
                </ul>
            </div>
      </div>
    </header>

    <section>
        <h1>you will also interested</h1>
        <div class="autre_produit">
            <div class="produit3">
                <img src="images/10 Workout Headphones That Will Actually Stay on Your Ears — Finally!.jpg" alt="" height="200px" width="130px">
                    <div>
                        <h6>BLP PRO</h6>
                        <ul><li>prix : $123</li>
                        <li><button type="button">Buy</button></li></ul>
                    </div>
            </div>

            <div class="produit3">
            <img src="images/10 Workout Headphones That Will Actually Stay on Your Ears — Finally!.jpg" alt="" height="200px" width="130px">
                    <div>
                        <h6>BLP PRO</h6>
                        <ul><li>prix : $123</li>
                        <li><button type="button">Buy</button></li></ul>
                    </div>
            </div>

            <div class="produit3">
                <img src="images/10 Workout Headphones That Will Actually Stay on Your Ears — Finally!.jpg" alt="" height="200px" width="130px">
                    <div>
                        <h6>BLP PRO</h6>
                        <ul><li>prix : $123</li>
                        <li><button type="button">Buy</button></li></ul>
                    </div>
            </div>
        </div>
    </section>

     <!--======= footer=========-->
 <footer>
    <ul class="L1">
        <li>Shopping & payement</li>
        <li>Managment & picture</li>
        <li>Contact Us</li>
    </ul>

    <ul class="L2">
        <li><a href="#"><img src="images/Facebook.jpg" alt="reseaux sociaux" ></a></li>
        <li><a href="#"><img src="images/Logo WhatsApp.jpg" alt="reseaux sociaux" ></a></li>
        <li><a href="#"><img src="images/Snapchat.jpg" alt="reseaux sociaux" ></a></li>
    </ul>

    <ul class="L3">
        <li>Design & Developpment by <span>Pichou</span></li>
        <li> contact : +237-657-743-782</li>
    </ul>
    <p> @ 2023-2024 <span>Bluepod</span> ManyFactures and self of accessoires for casque bluetooth and airpods </p>
</footer>
</body>
</html>