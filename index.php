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
                        labels: joueurs,
                        datasets: [
                            {
                                label: 'Test clinic',
                                data: score,
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
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
                            scales: {
                                yAxes: [{
                                    ticks: {
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