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
        <div id="all-data-container">
            <div id="data-container">
                <p class="acuity_text">0 - Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam vel debitis aperiam illum nam. Consequuntur officiis, nam, reprehenderit possimus enim nihil, sunt et vero laborum magni incidunt deleniti eveniet corrupti.</p>
                <div class="contain-canvas">
                    <canvas class="acuity"></canvas>
                </div>
            </div>
            <div id="data-container">
                <p class="acuity_text">1 - Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam vel debitis aperiam illum nam. Consequuntur officiis, nam, reprehenderit possimus enim nihil, sunt et vero laborum magni incidunt deleniti eveniet corrupti.</p>
                <div class="contain-canvas">
                    <canvas class="acuity"></canvas>
                </div>
            </div>
            <div id="data-container">
                <p class="acuity_text">2 - Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam vel debitis aperiam illum nam. Consequuntur officiis, nam, reprehenderit possimus enim nihil, sunt et vero laborum magni incidunt deleniti eveniet corrupti.</p>
                <div class="contain-canvas">
                    <canvas class="acuity"></canvas>
                </div>
            </div>
            <div id="data-container">
                <p class="acuity_text">3 - Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam vel debitis aperiam illum nam. Consequuntur officiis, nam, reprehenderit possimus enim nihil, sunt et vero laborum magni incidunt deleniti eveniet corrupti.</p>
                <div class="contain-canvas">
                    <canvas class="acuity"></canvas>
                </div>
            </div>
            <div id="data-container">
                <p class="acuity_text">4 - Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam vel debitis aperiam illum nam. Consequuntur officiis, nam, reprehenderit possimus enim nihil, sunt et vero laborum magni incidunt deleniti eveniet corrupti.</p>
                <div class="contain-canvas">
                    <canvas class="acuity"></canvas>
                </div>
            </div>
        </div>
        <picture>
            <img src="img/arrow_left" alt="flèche vers la gauche" id="left_arrow">
        </picture>
        <picture>
            <img src="img/arrow_right" alt="flèche vers la droite" id="right_arrow">
        </picture>
    </div>
<footer>
    <nav id="nav_container">
        <div id="part0">0</div>
        <div id="part1">1</div>
        <div id="part2">2</div>
        <div id="part3">3</div>
        <div id="part4">4</div>
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

        let position = 0
        if (position == 0) {
                document.querySelector('#left_arrow').style.display = "none"
        }

        document.querySelector('#right_arrow').addEventListener('click', () => {
            position -= 100
            document.querySelector('#all-data-container').style.transform = `translateX(${position}%)`
            if (position == 0) {
                document.querySelector('#left_arrow').style.display = "none"
            } else {
                document.querySelector('#left_arrow').style.display = "block"
            }
        })

        document.querySelector('#left_arrow').addEventListener('click', () => {
            position += 100
            document.querySelector('#all-data-container').style.transform = `translateX(${position}%)`
            if (position == 0) {
                document.querySelector('#left_arrow').style.display = "none"
            } else {
                document.querySelector('#left_arrow').style.display = "block"
            }
        })

        document.querySelectorAll('#nav_container > *').forEach( element => {
            element.addEventListener('click', () => {
                switch (element.getAttribute('id')) {
                    case ('part0'):
                        position = 0
                        break;
                    case ('part1'):
                        position = -100
                        break;
                    case ('part2'):
                        position = -200
                        break;
                    case ('part3'):
                        position = -300
                        break;
                    case ('part4'):
                        position = -400
                        break;
                    default:
                        break;
                }
                document.querySelector('#all-data-container').style.transform = `translateX(${position}%)`
                if (position == 0) {
                    document.querySelector('#left_arrow').style.display = "none"
                } else {
                    document.querySelector('#left_arrow').style.display = "block"
                }
            })
        })
        
    </script>
</body>
</html>