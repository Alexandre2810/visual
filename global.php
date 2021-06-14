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
    <div id="container">
        <img src="img/sound_on" alt="icone son" id="sound">
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
</html>