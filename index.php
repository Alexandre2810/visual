<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>DataVisu</title>
    <!-- Css reset -->
	<link rel="stylesheet" href="https://meyerweb.com/eric/tools/css/reset/reset.css">
    <!-- Css -->
	<link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>


</head>
<body>
    <div id="container">
        <canvas id="acuity"></canvas>
    </div>

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
                        labels: ['Gamers','Non-Gamers','Exp1','Exp2','Exp3', 'Exp4'],
                        datasets: [
                            {
                                label: 'Visual Acuity Score',
                                data: score,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
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
                                    fontSize:40,
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

</body>
<footer>
    <div id="sound">
        <div id="icon_sound"></div>
        <span id="toggle">Yes</span>
    </div>
    <nav id="nav_container">
        <div id="part0">0</div>
        <div id="part1">1</div>
        <div id="part2">2</div>
        <div id="part3">3</div>
        <div id="part4">4</div>
    </nav>
</footer>
</html>