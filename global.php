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
        <h1 class="title3">Drucker</h1>
        <picture>
            <img src="img/sound_on" alt="icone son" id="sound">
        </picture>
        <section class= text>
            <p class="test0_text">Le niveau d'acuite visuel mondial est en baisse. Il s'explique en partie par le nombre croissant des personnes habitants en ville mais aussi par l'omnipresence des ecrans dans la vie quotidienne. Quels moyens avons nous de disponible pour pouvoir reduire la croissance de cette evolution. Il sera sans doute difficile a croire mais les jeux videos peuvent nous aider a ameliorer la vue.</p>
            <p class="acuity_text">Ici, des joueurs de jeux videos ont ete compares a des non-joueurs au cours de plusieurs experiences. Les participants ont ete testes binoculairement avant les experiences et le groupe des joueurs a montre des resultats initiaux superieurs au non-joueurs. Nous avons mene une etude d'entrainement intensif ( 50h sur 9 semaines ) sur le groupe des non-joueurs. Les resultats des differentes experiences nous montrent que les jeux videos ameliorent la vision sur plusieurs points, les participants se sont considerablement ameliores.</p>
            <p class="test2_text">Bla bla bla bla bla bla</p>
            <p class="test3_text">Blo blo blo blo blo blo</p>
        </section>
        <div class="contain-canvas">
            <canvas id="acuity"></canvas>
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
                <img src="img/button_arrow_right" alt="flèche vers la droite" id="button_right_arrow">
            </picture>

            <picture>
                <img src="img/button_arrow_left" alt="flèche vers la droite" id="button_left_arrow">
            </picture>

            <picture>
                <img src="img/button_arrow_top" alt="flèche vers la droite" id="button_top_arrow">
            </picture>

            <picture>
                <img src="img/button_arrow_bot" alt="flèche vers la droite" id="button_bot_arrow">
            </picture>

        </div>

        <picture>
            <img src="img/arrow_left" alt="flèche vers la gauche" id="left_arrow">
        </picture>
        <picture>
            <img src="img/arrow_right" alt="flèche vers la droite" id="right_arrow">
        </picture>
            
        </div>
   
</body>
<footer>
    <nav id="nav_container">
        <img src="img/post-it-0" alt="post it 0"  id="part0">
        <img src="img/post-it-1" alt="post it 1" id="part1">
        <img src="img/post-it-2" alt="post it 2" id="part2">
        <img src="img/post-it-3" alt="post it 3" id="part3">
    </nav>
</footer>
    <script>
        $(document).ready(function () {
            showGraph();
        });

        

        function showGraph()
        {
            {
                $.get("data.php",
                function (data)
                {
                    console.log(data);
                    var joueurs = [];
                    var score = [];

                    for (var i in data) {
                        joueurs.push(data[i].joueurs);
                        score.push(parseFloat(data[i].score.replace(',','.')));
                    }
                    console.log(score)
                    var chartdata = {
                        labels: ['Exp1','Exp2','Exp3', 'Exp4'],
                        datasets: [
                            {
                                label: 'Gamer',
                                data: score,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(255, 99, 132, 0.2)',
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(255, 99, 132, 1)',
                                ],
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                borderWidth: 1
                            },
                            {
                                label: 'Non-Gamer',
                                data: score,
                                backgroundColor: [
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                ],
                                borderColor: [
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(54, 162, 235, 1)',
                                ],
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                borderWidth: 1
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
                });
            }
        
        }
    </script>
    <script src="js/index.js"></script>
</html>