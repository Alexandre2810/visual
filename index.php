<?php
require('data.php');
for($i = 0; $i <5; $i++){
    $tableauGamers[] = getScore(1,$i);//remplis le tableau de score des gamers
    $tableauNonGamers[] = getScore(2, $i);//remplis le tableau de score des non-gamers
}
for ($i = 1; $i < 5; $i++) {
    $listeGamers[] = getTask(1, $i); //remplis le tableau des tests des gamers
    $listeNonGamers[] = getTask(2, $i); //remplis le tableau des tests des non-gamers
}

for ($i = 1; $i < 4; $i++) {
    $listeCountry[] = getTCountry($i); //remplis le tableau pour nombre de personnes atteintes de problèmes de visions
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>DataVisu</title>
    <!-- Css reset -->
	<link rel="stylesheet" href="https://meyerweb.com/eric/tools/css/reset/reset.css">
    <!-- Css -->
	<link rel="stylesheet" href="css/test1.css">
	<link rel="stylesheet" href="css/test2.css">
	<link rel="stylesheet" href="css/test3.css">
	<link rel="stylesheet" href="css/global.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>


</head>

<body>
    <div id="container">
        <h1 class="intro">Les jeux videos ameliorent-ils la vue ?</h1>
        <h1 class="title1">L'acuite visuelle</h1>
        <h1 class="title2">La concentration</h1>
        <h1 class="title3">Part 3</h1>
        <picture>
            <img src="img/sound_on.png" alt="icone son" id="sound">
        </picture>
        <section class= text>
            <p class="test0_text">Le niveau d'acuite visuel mondial est en baisse. Il s'explique en partie par le nombre croissant des personnes habitants en ville mais aussi par l'omnipresence des ecrans dans la vie quotidienne. Quels moyens avons nous de disponible pour pouvoir reduire la croissance de cette evolution. Il sera sans doute difficile a croire mais les jeux videos peuvent nous aider a ameliorer la vue.</p>
            <p class="acuity_text">On mene une experience qui compare des gamers et des non-gamers. Le premier resultat est issu d’un test oculaire classique. Les gamers vont jouer a un shooter (50h sur 9 semaines) et les autres regardent la television. A l’issue les deux categories subissent 4 tests differents pour jauger leurs sensibilites aux contrastes. On remarque que les gamers ameliorent leur score.</p>
            <p class="test2_text">Bla bla bla bla bla bla</p>
            <p class="test3_text">Blo blo blo blo blo blo</p>
        </section>
        <div class="contain-canvas">
            <canvas id="acuity"></canvas>
        </div>
        <div class="contain-canvas2">
            <canvas id="concentration"></canvas>
        </div>
        <div class="contain-canvas3">
            <canvas id="visu"></canvas>
        </div>

        <div class="containertext">
            <p id="acuity_text1">A B C D E F</p>
            <p id="acuity_text2">G H I J K L</p>
            <p id="acuity_text3">M N O P Q R</p>
            <p id="acuity_text4">S T U V W</p>
            <p id="acuity_text5">X Y Z</p>
        </div>


        <div class="containertestv2">
            <p id="acuity_test1v2">ROUGE</p>
            <p id="acuity_test2v2">VERT</p>
            <p id="acuity_test3v2">ORANGE</p>
            <p id="acuity_test4v2">GRIS</p>
            <p id="acuity_test5v2">ROSE</p>
            <p id="acuity_test6v2">VIOLET</p>
            <p id="acuity_test7v2">NOIR</p>
            <p id="acuity_test8v2">JAUNE</p>
            <p id="acuity_test9v2">MARRON</p>
            <p id="acuity_test10v2">ORANGE</p>
            <p id="acuity_test11v2">JAUNE</p>
            <p id="acuity_test12v2">ROSE</p>
            <p id="acuity_test13v2">ROUGE</p>
            <p id="acuity_test14v2">GRIS</p>
            <p id="acuity_test16v2">VERT</p>
            <p id="acuity_test17v2">MARRON</p>
            <p id="acuity_test18v2">NOIR</p>
            <p id="acuity_test19v2">VIOLET</p>
            <p id="acuity_test20v2">JAUNE</p>
            <p id="acuity_test15v2">NOIR</p>
        </div>

        <div class="containertestv3">
            <p class="testv3">C</p>
            <p id="textacuitytest">Dans quelle direction voyez vous l'encoche du C ?</p>

            <picture>
                <img src="img/button_arrow_right.png" alt="flèche vers la droite" id="button_right_arrow">
            </picture>

            <picture>
                <img src="img/button_arrow_left.png" alt="flèche vers la droite" id="button_left_arrow">
            </picture>

            <picture>
                <img src="img/button_arrow_top.png" alt="flèche vers la droite" id="button_top_arrow">
            </picture>

            <picture>
                <img src="img/button_arrow_bot.png" alt="flèche vers la droite" id="button_bot_arrow">
            </picture>

        </div>

        <picture>
            <img src="img/arrow_left.png" alt="flèche vers la gauche" id="left_arrow">
        </picture>
        <picture>
            <img src="img/arrow_right.png" alt="flèche vers la droite" id="right_arrow">
        </picture>
            
        </div>
   
</body>
<footer>
    <nav id="nav_container">
        <img src="img/post-it-0.png" alt="post it 0"  id="part0">
        <img src="img/post-it-1.png	" alt="post it 1" id="part1">
        <img src="img/post-it-2.png" alt="post it 2" id="part2">
        <img src="img/post-it-3.png" alt="post it 3" id="part3">
    </nav>
    <span class="disclaimer">Ce site a été réalisé à des fins pédagogiques dans le cadre du cursus Bachelor Web de l’école HETIC. Les contenus et données présentés n'ont pas fait l'objet d'une demande de droit d'utilisation. Ce site ne sera en aucun cas exploité à des fins commerciales.</span>
    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            
            var chartdata = {
                labels: ['VisualAcuityScore','Exp1','Exp2','Exp3', 'Exp4'],
                datasets: [
                    {
                        label: 'Gamer',
                        data: [<?php echo implode($tableauGamers, ' , '); ?>],//afficher en php toute les valeurs du tableau gamers php dans un tableau js
                        backgroundColor: [
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 206, 86, 0.2))',
                            'rgba(255, 206, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                    },
                    {
                        label: 'Non-Gamer',
                        data: [<?php echo implode($tableauNonGamers,' , '); ?>],//afficher en php toute les valeurs du tableau non-gamers php dans un tableau js
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                    }
                ]
            };
            
            var graphTarget = $("#acuity");

            var barGraph = new Chart(graphTarget, {
                type: 'bar',
                data: chartdata,
                
                options: {
                    animation:{
                        duration:4000,
                        easing:'easeInBounce',
                    },
                    legend:{
                        labels:{
                            fontColor:'rgb(255, 255, 255)',
                            fontSize:30,
                        }
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontSize:14,
                                fontColor: "white",
                                beginAtZero: true
                            }
                        }],
                        xAxes: [{
                            ticks: {
                            fontColor: "white",
                            fontSize: 14,
                            stepSize: 1,
                            beginAtZero: true
                            }
                        }]
                    }
                }

            });
        };
</script>

<script>
        $(document).ready(function() {
            showGraph2();
        });


        function showGraph2() {

            var chartdata = {
                labels: ['Veryeasy', 'Easy', 'Medium', 'Hard'],
                datasets: [{
                        label: 'Gamer',
                        fill: false,
                        data: [<?php echo implode($listeGamers, ' , '); ?>], //afficher en php toute les valeurs du tableau gamers php dans un tableau js
                        backgroundColor: [
                            //  'rgba(255, 206, 86, 0.2)',
                            // 'rgba(255, 206, 86, 0.2)',
                            // 'rgba(255, 206, 86, 0.2)',
                            // 'rgba(255, 206, 86, 0.2)',
                            // 'rgba(255, 206, 86, 0.2))',
                            // 'rgba(255, 206, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            // 'rgba(54, 162, 235, 1)',
                            // 'rgba(255, 206, 86, 1)',
                            // 'rgba(75, 192, 192, 1)',
                            // 'rgba(153, 102, 255, 1)',
                            // 'rgba(255, 159, 64, 1)'
                        ],
                    },
                    {
                        label: 'Non-Gamer',
                        fill: false,
                        data: [<?php echo implode($listeNonGamers, ' , '); ?>], //afficher en php toute les valeurs du tableau non-gamers php dans un tableau js
                        backgroundColor: [
                            //  'rgba(255, 99, 132, 0.2)',
                            // 'rgba(255, 99, 132, 0.2)',
                            // 'rgba(255, 99, 132, 0.2)',
                            // 'rgba(255, 99, 132, 0.2)',
                            // 'rgba(255, 99, 132, 0.2)',
                            // 'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgb(75, 192, 192)',
                            // 'rgba(54, 162, 235, 1)',
                            // 'rgba(255, 206, 86, 1)',
                            // 'rgba(75, 192, 192, 1)',
                            // 'rgba(153, 102, 255, 1)',
                            // 'rgba(255, 159, 64, 1)'
                        ],
                    }
                ]
            };

            var graphTarget = $("#visu");

            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,
                options: {
                    responsive: true,
                    legend: {
                        labels: {
                            fontColor: 'rgb(255, 255, 255)',
                            fontSize: 30,
                        }
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontSize: 14,
                                fontColor: "white",
                                beginAtZero: true,
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                fontColor: "white",
                                fontSize: 14,
                                stepSize: 1,
                            }
                        }],
                    }
                }
            });
        };
    </script>
    <script>
        $(document).ready(function() {
            showGraph3();
        });
        function showGraph3() {

            var chartdata = {
                labels: ['1995', '2015', '2050'],
                datasets: [{
                        label: 'nombre de personnes en millions',
                        fill: false,
                        data: [<?php echo implode($listeCountry, ' , '); ?>], //afficher en php toute les valeurs de la table 5
                        backgroundColor: [
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            // 'rgba(255, 206, 86, 0.2)',
                            // 'rgba(255, 206, 86, 0.2))',
                            // 'rgba(255, 206, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            // 'rgba(75, 192, 192, 1)',
                            // 'rgba(153, 102, 255, 1)',
                            // 'rgba(255, 159, 64, 1)'
                        ],
                    }
                ]
            };

            var graphTarget = $("#concentration");

            var barGraph = new Chart(graphTarget, {
                type: 'bar',
                data: chartdata,
                options: {
                    responsive: true,
                    legend: {
                        labels: {
                            fontColor: 'rgb(255, 255, 255)',
                            fontSize: 30,
                        }
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontSize: 14,
                                fontColor: "white",
                                beginAtZero: true,
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                fontColor: "white",
                                fontSize: 14,
                                stepSize: 1,
                            }
                        }],
                    }
                }
            });
        };
    </script>
    <script src="js/index.js"></script>
    <script src="js/test3.js"></script>
</footer>
</html>