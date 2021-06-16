<?php
require('data.php');
for($i = 1; $i <5; $i++){
    $tableauGamers[] = getScore(1,$i);//remplis le tableau de score des gamers
    $tableauNonGamers[] = getScore(2, $i);//remplis le tableau de score des non-gamers
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
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>


</head>

<body>
    <header>
        <picture id="sound">
            <img src="img/sound_on" alt="icone son" id="son_on">
        </picture>
    </header>
    <div id="container">
        <p id="acuity_text">Blu blu blu blu blu blu</p>
        <div class="contain-canvas">
            <canvas id="acuity"></canvas>
        </div>
    <picture>
        <img src="img/arrow_left" alt="flèche vers la gauche" id="left_arrow">
    </picture>
    <picture>
        <img src="img/arrow_right" alt="flèche vers la droite" id="right_arrow">
    </picture>
        
    </div>
    
    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            
            var chartdata = {
                labels: ['Exp1','Exp2','Exp3', 'Exp4'],
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
   
</body>
<footer>
    <nav id="nav_container">
        <div id="part0">0</div>
        <div id="part1">1</div>
        <div id="part2">2</div>
        <div id="part3">3</div>
    </nav>
</footer>
</html>