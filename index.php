<!DOCTYPE html>
<html>
<head>
<title>Creating Dynamic Data Graph using PHP and Chart.js</title>
<style type="text/css">
BODY {
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>


</head>
<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
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
                                label: 'Score',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: score
                            }
                        ]
                    };
                    
                    var graphTarget = $("#graphCanvas");

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
</html>