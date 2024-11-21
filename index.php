<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>
        <link rel="stylesheet" href="projet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <body>
        <div id="page">
            <header>
                <h1>My Site</h1>
                <div class="menu-hamburger">
                    &#9776; <!-- Symbole de l'icône hamburger -->
                </div>
                <ul class="burger">
                    <li><a href="#Home">Accueil</a></li>
                    <li><a href="#Team">Equipe</a></li>
                    <li><a href="#Contact">Contact</a></li>
                </ul>
            </header>
            <script>
                const menuHamburger = document.querySelector(".menu-hamburger");
                const navLinks = document.querySelector(".burger");
                menuHamburger.addEventListener('click', () => {
                    navLinks.classList.toggle('mobile-menu');
                });
            </script>
            <section id="panorama">
                <img class="panorama" src="images/panorama.jpg" alt="Panorama">
            </section>
            <nav>
                <img class="log" src="images/img.jpg" alt="logiciel">
            </nav>
            <section id="about">
                <div class="infos">
                    <h2>Qui sommes nous</h2>
                    <p>
                        Fondée en 2004, MyEntreprise est spécialisée dans le domaine de
                        l’imagerie médicale et de l’intelligence artificielle. <br>Nous développons et commercialisons des
                        solutions logicielles pour accompagner les professionnelles de santé, tels que les
                        radiologues, les oncologues et les chirurgiens, dans le suivi des patients, que ce soit
                        pour les diagnostiques, la prise de décision et le suivi thérapeutique. <br><br>Notre objectif
                        principal est l’innovation, permettant des diagnostics plus rapides et sécurisés, de
                        meilleurs résultats pour assurer le suivi du patient, un flux de travail plus efficace pour
                        les cliniciens ainsi que plus de valeur dans l’utilisation des images et l’analyse des
                        données. <br><br>Nous comptons aujourd’hui 70 salariés, dont 15 à Shanghai. Le siège est
                        situé à Montpellier, au coeur d’un environnement d’innovation et de medtech.
                    </p>
                </div>
            </section>
            <section id="team">
                <h2>Notre équipe</h2>
                <?php
                    $json_file = file_get_contents('data_equipe.json');
                    $json_dec = json_decode($json_file, true); 
                    $json_lengh = count($json_dec)
                ?>
                <div class="box">
                    <?php
                        for ($i = 3; $i < 9; $i++){
                            $data = $json_dec[$i] ?>
                            <div class="person">
                                
                                <img class="prs" src="<?php echo $data['url']; ?>" alt="img_pers">
                                <?php 
                                    echo "<br><br><a>".$data['name']."</a><br><br>";
                                    echo "<a>".$data['age']." ans</a><br>";
                                    echo "<a>".$data['job']."</a><br>";
                                    echo "<a>".$data['anciennete']." ans d'ancienneté</a>";
                                ?>
                            </div>
                        <?php } ?>
                </div>
            </section>
            <section id="text">
                <div class="infos">
                    <h2>A propos</h2>
                    <p>
                        A l’heure où le monde de l’imagerie médicale ne parle que d’intelligence artificielle, notre objectif est de la mettre à portée de main ! <br>Nous permettons aux radiologues de se concentrer sur la qualité des soins, en intégrant l’intelligence artificielle au sein de leurs outils de travail quotidiens, au service des besoins cliniques. <br>Nos applications cliniques utilisent nativement l’IA et répondent à des critères de sélection exigeants. <br><br> Nous proposons un outil de visualisation avancée accessible à distance, permettant l’interprétation de tous types d’images, que ce soit pour des pathologies cardiaques, vasculaires, pulmonaires, etc. <br><br>Simple d'utilisation, pratique, accessible et certifié, nos solutions sont à portée de tous les professionnels de santé ! Nous travaillons chaque jour pour apporter plus de fonctionnalités et ainsi faciliter la vie des médecins etc.
                    </p>
                </div>
            </section>
            <section id="image">
                <div class="box2">
                    <img src="images/radio.png" alt="radio" class="image">
                    <img src="images/ia.png" alt="img ia" class="image">
                    <img src="images/myrian.png" alt="img myrian" class="image">
                    <img src="images/liflow.png" alt="img liflow" class="image">
                </div>
            </section>
            <footer>
                <h3>Nous contacter</h3>
                <ul class="contact">
                    <li><i class="fa-solid fa-phone fa-sm"></i> 06 00 00 00 00</li>
                    <li><i class="fa-solid fa-envelope fa-sm"></i> myentreprise@gmail.com</li>
                    <li><i class="fa-brands fa-facebook fa-lg"></i> @myentreprise</li>
                </ul>
            </footer>
        </div>
    </body>
</html>
