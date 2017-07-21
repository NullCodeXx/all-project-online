<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Djaafar BOUMAZA</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        
        img {
            height: 110%;
            width: 105%;
            position: fixed;
            z-index: 1;
            margin-top: -4%;
            margin-left: -2%;
            /* Fouté l'image */
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
            filter: blur(5px);
        }
        
        @font-face {
            src: url("../fontface/LobsterTwo-Bold.otf");
            font-family: "LobsterTwo-Bold.otf";
        }
        
        .sectionNav {
            margin: 0;
            max-width: 80%;
            height: 50vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 3%;
            margin-left: 10%;
        }
        
        .divNav {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }
        
        .h1Nav {
            color: #ffffff;
            text-shadow: 5px 10px 12px black, 5px 6px 7px #2c3e50;
            text-align: center;
            position: relative;
            z-index: 2;
            font-family: "LobsterTwo-Bold.otf";
            letter-spacing: 3px;
            font-size: 2em;
        }
        
        .ulNav {
            list-style: none;
            text-align: center;
        }
        
        .ulNav .liNav {
            display: inline;
            position: relative;
            z-index: 2;
            /*button*/
            border: 1px solid #ffffff;
            background-color: rgba(0, 0, 0, 0.2);
            padding: 15px;
            margin-left: 10px;
            letter-spacing: 2px;
            border-radius: 10px;
            font-size: 1em;
            font-size: 2em;
            width: 100%;
            height: 100%;
        }
        
        .ulNav .liNav:hover {
            display: inline;
            position: relative;
            z-index: 2;
            /*button*/
            border: 1px solid #ffffff;
            background-color: rgba(100, 100, 100, 0.6);
            padding: 15px;
            margin-left: 10px;
            letter-spacing: 2px;
            border-radius: 10px;
            font-size: 2em;
        }
        
        .liNav .aNav {
            text-decoration: none;
            color: #ffffff;
            text-align: center;
            font-size: 1em;
            padding: 15px;
        }
        
        .liNav .aNav:hover {
            color: #ffffff;
        }
        /*Volet deroulant*/
        
        .main {
            height: 100%;
            width: 0%;
            position: absolute;
            display: flex;
            align-items: center;
            flex-direction: column;
            background-color: #3C3C3C;
            color: #fff;
            transition: 0.5s;
        }
        
        .insidemain {
            font-family: 'Roboto', sans-serif;
            transition: 0.3s;
            opacity: 0;
        }
        
        .scrollmain {
            padding-right: 5%;
            padding-left: 5%;
        }
        
        .scrollmain:vertical {
            display: none;
        }
        /*VOLET DEROULANT END*/
        /*Volet deroulant
        
        .main {
            height: 100%;
            width: 0%;
            position: absolute;
            display: flex;
            align-items: center;
            flex-direction: column;
            background-color: #3C3C3C;
            color: #fff;
            transition: 0.5s;
        }
        
        .insidemain {
            font-family: 'Roboto', sans-serif;
            transition: 0.3s;
            opacity: 0;
        }
        
        .scrollmain {
            /*overflow: auto;*/
        /*padding-right: 5%;
            padding-left: 5%;
        }
        
        .scrollmain:vertical {
            display: none;
        }
        /*VOLET DEROULANT END*/
    </style>
</head>

<body>
    <?php

        // Afficher les dossier.
        $scan = scandir("../Project");
        foreach($scan as $directory) {
            if(!is_dir($directory)) {
                echo "<ul>";
                echo "<li><button>$directory</button></li>";
                echo "</ul>";
            }
        }
    ?>

        <img src="wallindex.jpg" alt="wallpaper street">
        <main class="mainNav">
            <section class="sectionNav">
                <div class="divNav">
                    <h1 class="h1Nav">Djaafar BOUMAZA</h1>
                    <ul class="ulNav">
                        <li class="liNav"><a href="#" class="aNav"><button type="submit">Index</button></a></li>
                        <li class="liNav"><a href="#" class="aNav">GitHub</a></li>
                        <li class="liNav"><a href="#" class="aNav">Serveur</a></li>
                        <li class="liNav"><a href="#" class="aNav">Contact</a></li>
                    </ul>
                </div>
            </section>
        </main>

        <!--VOLET DEROULANT -->
        <section class="main">
            <h2 class="insidemain">INDEX ALL</h2>
            <hr class="insidemain" style="width: 80%;">
            <div class="scrollmain">
                <ul>
                    <li><a href="#" alt="" title="Project" class="insidemain">Projet 1</a></li>
                    <li><a href="#" alt="" title="Project" class="insidemain">Projet 2</a></li>
                    <li><a href="#" alt="" title="Project" class="insidemain">Projet 3</a></li>
                    <li><a href="#" alt="" title="Project" class="insidemain">Projet 4</a></li>
                    <li><a href="#" alt="" title="Project" class="insidemain">Projet 5</a></li>
                </ul>
            </div>
        </section>
        <script>
            window.load = init(); //Declenche les elements une fois que le document est charger.

            function init() {
                //Servira pour la condition, lorsque je click 1 fois.
                let click = 1;
                //Cible le button. // Ajoute moi les évenements sur ce button.
                let button = document.querySelector(".button").addEventListener("click", function() {
                    //Cible la section menu.
                    let main = document.body.querySelector(".main");
                    //Cible tout les elements à l'interieur du menus.
                    let inside = document.querySelectorAll(".insidemain");
                    //Cible le volet deroulant a l'interieur du menus.
                    let scrollMain = document.querySelector(".scrollmain");
                    //Ajout de plusieurs click pour la condition.
                    click += 1;
                    //Ajout de la condition.
                    if (click % 2 === 0) {
                        main.style.width = "30%";
                        main.style.backgroundColor = "red";
                        console.log("2");
                        setTimeout(function() {
                            scrollMain.style.overflow = "auto";
                        }, 100);
                        for (let i = 0; i < inside.length; i++) {
                            inside[i].style.opacity = "1";
                        }
                    } else {
                        main.style.width = "0%";
                        main.style.backgroundColor = "blue";
                        scrollMain.style.overflow = "hidden";
                        for (let i = 0; i < inside.length; i++) {
                            inside[i].style.opacity = "0";
                        }
                    }
                })
            }
        </script>
        <!--Deroulant end-->

</body>

</html>