<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibes</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/rotation_animation.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/control.css">
    <!-- <link rel="stylesheet" href="css/menu.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mediqueries.css">
</head>

<body>
    <h1>peace</h1>
    <div class="wrapper">

        <!-- changement de thème -->
        <div class="goutte dflex"><i class="fas fa-tint"></i>
            <div class="color">
                <div class="rouge"></div>
                <div class="bleu"></div>
                <div class="violet"></div>
                <div class="vert"></div>
                <div class="reset dflex"> reset color</div>
            </div>
        </div>
        <!-- navigation -->
        <header class="dflex">
            <i class="fas fa-peace"></i>
            <nav class="dflex">
                <a style="border-bottom: 1px solid white;" href="#">HOME</a>
                <a href="#">ABOUT</a>
                <a href="#">PORTEFOLIO</a>
                <a href="#">TESTIMONIALS</a>
                <a href="#">CONTACT</a>
                <a href="#">PAGE</a>
            </nav>
            <div class="none" id="menu"></div>
        </header>
        <!-- caroussel -->
        <main>
            <section class="banner dflex">
                <div class="slider">
                    <div class="slide">
                        <img src="img/sunrise.jpg" alt=""></div>
                    <div class="slide">
                        <img src="img/nature.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/nature2.jpg" alt=""></div>
                    <div class="slide">
                        <img src="img/nature3.jpg" alt="">
                    </div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1) ">&#10095;</a>

                <div class="position dflex flexwrap">
                    <h3>html template for crative folks and desing agencies</h3>
                    <p>far far away, behin the word mountains, far from the countrie Vokalia and Consontia,<br>there
                        live
                        the blind text</p>
                    <button>READ MORE</button>
                </div>
                <!-- FAQ -->
            </section>
            <section class="faq dflex">
                <article class="why  dflex flexwrap">
                    <h2>Why Choose Us ?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, quibusdam quasi quia quod harum
                        reiciendis velit incidunt laudantium ducimus ab voluptas dolores consequatur quaerat! Quasi hic
                        nulla soluta? Provident, maxime.</p>
                    <span>corporis ipsum natus ipsam dolorem, nemo, unde ad iste laborum veritatis facere <strong class="red  blue green purple">
                            placeat
                            voluptatibus!</strong></span>
                </article>
                <article class="what flexwrap dflex ">
                    <h2>What You Get</h2>
                    <div class="dflex flexwrap">
                        <i class="fab fa-wordpress red  blue green purple"></i>
                        <div>
                            <strong>COLORFULL & COMPACT</strong>
                            <h6>portefolio Wordpress Theme</h6>
                        </div>
                    </div>
                    <div class="dflex flexwrap ">
                        <i class="fas fa-cog red  blue green purple"></i>
                        <div>
                            <strong>EASY TO USE </strong>
                            <h6>Page Builder & Skins in Minutes</h6>
                        </div>
                    </div>
                    <div class="dflex flexwrap">
                        <i class="far fa-paper-plane red  blue green purple"></i>
                        <div>
                            <strong>CODED WITH SASS</strong>
                            <h6>Create Custom Skins in Minutes</h6>
                        </div>
                    </div>
                </article>
                <!-- menu accordeon -->
                <article class="acordeon dflex flexwrap">
                    <div>
                        <blockquote class="accordion"> NULLA CONSEQUATR MASSA</blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic recusandae nihil eum nulla, iure
                            tempore, dolorum quibusdam impedit nostrum, debitis fugiat suscipit eos? Porro, veritatis?
                        </p>
                    </div>
                    <div>
                        <blockquote class="accordion">VIVAMUS ELEMENTUM SEMPER</blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa cum blanditiis, expedita
                            excepturi possimus illum harum perferendis fugiat adipisci? Fuga magnam nostrum nihil totam
                            saepe!</p>
                    </div>
                    <div>
                        <blockquote class="accordion">ETIAM ULTRICIES NISI VEL</blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, doloremque iste mollitia
                            exercitationem aliquid possimus, laboriosam ex tempora ratione, neque dignissimos cum
                            nonatque iusto?</p>
                    </div>
                </article>
            </section>
            <!-- section gallerie -->
            <section class="gallery ">
                <article class="gallery-container container dflex flexwrap">
                    <div class="content  none filterDiv img  ">
                        <figure>
                            <img class="image1" src="img/img1.jpg" alt="">
                        </figure>
                    </div>
                    <div class=" filterDiv none audio content">
                        <figure>
                            <!-- image/ audio -->
                            <img class="image10" src="img/calypso_rose.jpg" alt="">
                            <span class=" blues dflex"> <img class="calypso " src="img/notes.png" alt="">
                            </span>
                            <!-- annimation musique -->
                            <div class=" animation1 none sound-animation">
                                <div class=" sound-icon">
                                    <div class="sound-wave">
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- controleur audio -->
                            <div class=" control1 control none red  blue green purple">
                                <div class="back10 ">&#9664;</div>
                                <div class="play">&#9654;</div>
                                <div class="pause">&#9612;&#9612;</div>
                                <div class="reset">&#9632;</div>
                                <div class="advence10">&#9654;</div>
                            </div>
                            <audio class="music1" onended="end( blues , control1 , animation1)" src="audio/calypso_blues.mp3"></audio>
                        </figure>
                    </div>
                    <div class=" filterDiv none  video content">
                        <figure>
                            <!-- video -->
                            <img src="img/video1.jpg" alt="">
                            <span class="dflex"><img class="video1" src="img/play.png" alt=""></span>
                        </figure>
                    </div>
                    <div class=" filterDiv none img content">
                        <figure>
                            <img class="image2" src="img/img2.jpg" alt="">
                        </figure>
                    </div>
                    <div class="  filterDiv none video content">
                        <figure>
                            <img src="img/video2.jpg" alt="">
                            <span class="dflex hover "><img class="video2" src="img/play.png" alt=""></span>
                        </figure>
                    </div>
                    <div class="filterDiv none audio content">
                        <figure>
                            <!-- image/audio -->
                            <img class="image9" src="img/nina.jpg" alt="">
                            <span class=" simone dflex hover"><img class="nina " src="img/notes.png" alt="">
                            </span>
                            <!-- animation audio -->
                            <div class="animation2 none sound-animation">
                                <div class=" sound-icon">
                                    <div class="sound-wave">
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                        <i class="bar bgred bggreen bgblue bgpurple"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- controleur -->
                            <div id="control2" class=" control2 none control red  blue green purple">
                                <div class="back10 ">&#9664;</div>
                                <div class="play">&#9654;</div>
                                <div class="pause">&#9612;&#9612;</div>
                                <div class="reset">&#9632;</div>
                                <div class="advence10">&#9654;</div>
                            </div>

                            <audio class="music2" onended="end(simone , control2 , animation2)" src="audio/nina.mp3"></audio>
                        </figure>
                    </div>
                    <div class=" filterDiv none  img content">
                        <figure>
                            <img class="image3" src="img/img3.png" alt="">
                        </figure>
                    </div>
                    <div class=" filterDiv none img content">
                        <figure>
                            <img class="image4" src="img/img4.jpg" alt="">
                        </figure>
                    </div>
                    <div class="filterDiv none img content">
                        <figure>
                            <img class="image5" src="img/img5.jpg" alt="">
                        </figure>
                    </div>
                    <div class="filterDiv none img content">
                        <figure>
                            <img class="image6" src="img/img6.jpg" alt="">
                        </figure>
                    </div>
                    <div class="filterDiv none img content">
                        <figure>
                            <img class="image7" src="img/img7.jpg" alt="">
                        </figure>
                    </div>
                    <div class="filterDiv none img content">
                        <figure>
                            <img class="image8" src="img/img8.jpg" alt="">
                        </figure>
                    </div>
                </article>
                <article class="trie dflex">
                    <!-- filtre de la galerie -->
                    <div id="myBtnContainer">
                        <span class="btn active" onclick="filterSelection('all')">ALL</span>
                        <span class="btn" onclick="filterSelection('video')">VIDEO</span>
                        <span class="btn" onclick="filterSelection('img')">IMAGE</span>
                        <span class="btn" onclick="filterSelection('audio')">AUDIO</span>
                    </div>
                    <!-- button pour afficher tout le contenue  -->
                    <button>LOAD MORE</button>
                </article>
            </section>
            <section class="modal none">
                <div class="close">&#10010;</div>
            </section>
            <!--  section commentaire -->
            <section class="testimonials dflex flexwrap ">
                <H2> CLIENT TESTIMONIALS</H2>
                <div class="trait bgred  bgblue bggreen bgpurple"></div>
                <article class="dflex flexwrap">
                    <img src="img/avatarH.jpg" alt>
                    <blockquote>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam cum minus earum? Maxime
                        laborum
                        blanditiis earum saepe minus praesentium aut, asperiores tenetur dignissimos deleniti, obcaecati
                        quo, recusandae itaque veritatis voluptate?
                        <p><strong>Tommy Mars, </strong> Designer</p>
                    </blockquote>
                </article>
                <article class="reverse dflex flexwrap ">
                    <img src="img/avatarF.png" alt>
                    <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, quod fugiat
                        reiciendis
                        delectus maiores illo eveniet, veritatis enim, consectetur cumque nisi illum sequi. Dolorem enim
                        harum veniam tenetur assumenda? Perspiciatis!
                        <p><strong>Floor Simons, </strong> startup CEO</p>
                    </blockquote>
                </article>
                <!-- section  hoirizon -->
                <article class="dflex flexwrap">
                    <img src="img/avatarH.jpg" alt>
                    <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quam mollitia,
                        dolores dolorum
                        nisi quis eos adipisci est fugiat amet odit, alias fuga sit suscipit quisquam impedit nostrum
                        soluta eum.
                        <p><strong>Mick Neil, </strong> Rock Star</p>
                    </blockquote>
                </article>
            </section>
            <section class="horizons dflex flexwrap">
                <H2>New horizons</H2>
                <div class="trait  bgred bgblue bggreen bgpurple"></div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem eum officia provident obcaecati
                    beatae voluptate repellat, tempora perspiciatis aperiam architecto repellendus distinctio,
                    pariatur
                    aspernatur et similique quo quia aut! Rem.</p>
                <button>Buy Vibes on THEMESFOREST</button>
            </section>
           <!-- formulaire de contact -->
            <?php
            if (isset($_SESSION["success"])) {
                echo $_SESSION["success"];
            } else if (isset($_SESSION['error'])) {
                echo $_SESSION["error"];
            }
            ?>

            <section class="form dflex flexwrap">

                <h2>GET IN TOUCH</h2>
                <div class="trait bgred  bgblue bggreen bgpurple"></div>

                <form action="php/contact.php" method="POST">


                    <div class=" formulaire dflex">
                        <div class="left">
                            <label class='required' for="name">Your Name </label>
                            <input type="text" name="name" required>
                            <label class='required' for="mail">Your EMAIL </label>
                            <input type="email" required name="mail">
                            <label class="required" for="phone">Your Phone </label>
                            <input type="tel" name="phone" required>
                        </div>
                        <div class="right">
                            <label class='required' for="subject">SUBJECT </label>
                            <input type="text" required name="sujet">
                            <label class='required' for="message">MESSAGE </label>
                            <textarea name="message" cols="30" rows="10"></textarea>
                            <input type="submit" value="send">
                        </div>
                    </div>
                </form>
            </section>
            <section class="infos dflex">
        <!-- derniere section -->
             <article class="about dflex flexwrap">
                <h3>ABOUT VIBES</h3>
                    <div class="trait bgred  bglue bggreen bgpurple"></div>
                    <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aspernatur nobis quo ipsam
                        distinctio dolorem</P>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis earum modi vitae! Ipsum tempora
                        sapiente, at </p>
                </article>
                <article class="news dflex flexwrap">
                    <h3>NEWLETTER</h3>
                    <div class="trait bgred  bgblue bggreen bgpurple"></div>
                    <p><strong>VIBES</strong> containts fully working <strong>MailChimp</strong></p>
                    <span>subscribe form</span>
                    <input type="text" placeholder="Your Email Adress">
                    <button>subscribe</button>
                </article>
 <!-- footer -->
            </section>
        </main>
        <footer class="dflex">
            <p>buy this theme on ThemeForest.net</p>
            <article>
                <a href="#">home</a>
                <a href="#">element</a>
                <a href="#">documentation</a>
            </article>
        </footer>
    </div>
    <script src="js/menu.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/acordeon.js"></script>
    <script src="js/modal-content.js"></script>
    <script src="js/audio.js"></script>
    <script src="js/categorie.js"></script>
    <script src="js/loadMore.js"></script>
    <script src="js/goutte_menu.js"></script>
    <script src="js/changeColor.js"></script>
</body>

</html>