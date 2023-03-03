<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
            <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet"/> 
        </head>
        <body>
                <header class="header-area header-sticky">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <nav class="main-nav">
                                    <ul class="nav">
                                        <li><img src="asset/Logo 2.png" alt="logo felova"  width="50px" height="50px"></li>
                                        <li><button  onclick="window.location.href='h2.php'" class="bt"><img src="asset/Icon-Dashboard.png" alt="dashboard" class="responsive" width="50px" height="50px"></button></li>
                                        <li><button  onclick="window.location.href='h3-1.php'" class="bt"><img src="asset/Icon-Grafik.png" alt="grafik" class="responsive" width="50px" height="50px"></button></li>
                                        <li><button  onclick="window.location.href='h4-1.php'" class="bt"><img src="asset/Icon-Tables.png" alt="table" class="responsive" width="50px" height="50px"></button></li>
                                        <li><button  onclick="window.location.href='h5.php'" class="bt"><img src="asset/Icon-Aboutus.png" alt="About Us" class="responsive" width="50px" height="50px"></button></li>
                                        <span class="responsive" style="float: right"> <h5 id="time"></h5></span>
                                    </ul>  
                                    
                                </nav>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="button-blok">
                    <button  onclick="window.location.href='h3-1.php'" class="button-b">BLOK 1</button>
                    <button  onclick="window.location.href='h3-2.php'" class="button-b">BLOK 2</button>
                    <button  onclick="window.location.href='h3-3.php'"class="button-b">BLOK 3</button>
                    <button  onclick="window.location.href='h3-4.php'"class="button-b">BLOK 4</button>
                </div>

                <div class="row">
                    <div class="column" style="background-color:#f7f7f6;">
                        <div class="kiri-1">
                                <h4 class="klm">
                                    <img src="asset/6.png" alt="Kelembapan" class="responsive" width="50px" height="50px" style="float: right">
                                    Kelembapan
                                </h4>
                                <br>
                                <p>Kelembapan rata-rata tanaman Vanili di Blok 3</p>
                                <progress id="file" value="89" max="100"> 89 </progress>
                        </div>   
                        <div class="kiri-2">
                            <h4 class="temp">
                                <img src="asset/7.png" alt="Kelembapan" class="responsive" width="50px" height="50px" style="float: right">
                                Suhu <br>
                            </h4>
                                <br>
                                <p>Suhu rata-rata tanaman Vanili di Blok 3</p>
                                <progress id="file" value="60" max="100"> 60 </progress>
                        </div>
                    
                      
                    </div>
                    <div class="column" style="background-color:#f7f7f6;">
                        <figure class="highcharts-figure">
                            <div id="container"></div>
                            <p class="highcharts-description">
                                ini testing
                            </p>
                        </figure>
                        
                    </div>
                </div>
        </body>
    </html> 
    <br/><br/>

    <style>* {
        box-sizing: border-box;
    }
    body {
        margin:0px;
        font-size: 14px;
        background: rgba(246,247,247,1);
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    li {
        float:left;
        margin: 5px;
      
    }

    li a{
        display: block;
        color: white;
        padding: 5px 5px;
        font-size: 5px;
    }

    .responsive {
        max-width: 100%;
        height: auto; 
    }

    #time{
        margin: 10px;
        padding: 5px 5px;
        border: 5px;
        border-color: #fefefe;
        background-color: #fefefe;
        border-style: solid;
        border-radius: 30px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: small;
    }

    nav {
        padding: 5px 5px;
        font-size: 64px;
        text-decoration: none;
        border: 10px;
        margin: 0px;
        background-color: #2bd56b;
        width: 100%;
        height: 80px;
    }

    .kiri-1{
        margin-top: 30px;
        border: 30px;
        border-style: solid;
        border-color: #e7e7e6;
        background-color: #e7e7e6;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: lighter;
        font-size: medium;
    }

    .kiri-2 {
        margin-top: 10px;
        border: 30px;
        border-style: solid;
        border-color: #e7e7e6;
        background-color: #e7e7e6;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: lighter;
        font-size: medium;

    }
    .column {
        float: left;
        width: 50%;
        margin-top: 0px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 24px;
        opacity: 1;
        text-align: justify;
        padding-right: 50px;
        padding-left: 50px;
        height: 80px;
        background-color: #2bd56b
    }

    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    .button {
        display: inline-block;
    }

    .bt{
        border-radius: 50%;
        border: 0px;
        background-color: #2bd56b;
        cursor: pointer;
        padding-bottom: 5px ;
    }

    .bt:active{
        background-color: #f7f7f6;
        border-bottom-left-radius: 1px;
        border-bottom-right-radius: 1px;
        padding: 5px;
        padding-bottom: 10px;
        padding-top: 5px;
    }

    .button-b {
        background-color: #93db74;
        border: none;
        color: black;
        padding: 10px 80px;
        text-align: center;
        text-decoration: none;
        display: inline;
        margin: 20px 85px 10px;
        cursor: pointer;
        border-radius: 16px;
        position: center;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        
    }

    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 360px;
        max-width: 800px;
        margin: 1em auto;
        margin-top: 30px;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #ebebeb;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }


    .button-b:hover {
        background-color: #c1ff72;
    }


    @media screen and (max-width: 800px) {
        .left, .main, .right {
        width: 100%; /* The width is 100%, when the viewport is 800px or smaller */}
    }

    @media screen and (max-width: 900px) {
        nav {
            width: 100%;
            height: auto;
            position: relative;
        }
        
        nav li a {
            float: left;
            padding: 15px;
        }
        

        @media screen and (max-width: 400px) {
            #time{
                float: center;

            }
        }
    }
    </style>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        `use strict`;
        function refreshTime() {
        const timeDisplay = document.getElementById("time");
        const dateString = new Date().toLocaleString();
        const formattedString = dateString.replace(", ", " - ");
        timeDisplay.textContent = formattedString;
        }
        setInterval(refreshTime, 1000);

        var datetime = new Date().getDay();
        console.log(datetime); // it will represent date in the console of developers tool
        document.getElementById("time").textContent = datetime; //it will print on html page

        `use strict`
        var datetime = new Date().getMonth() + 1;
        console.log(datetime); // it will represent date in the console of  developers tool
        document.getElementById("time").textContent = datetime; // represent on html page

        Highcharts.chart('container', {
        title: {
            text: 'ini tes grafik blok 1',
            align: 'center'
        },

        subtitle: {
            text: 'Source: <a href="https://irecusa.org/programs/solar-jobs-census/" target="_blank">IREC</a>',
            align: 'left'
        },

        yAxis: {
            title: {
                text: 'Number of Employees'
            }
        },

        xAxis: {
            accessibility: {
                rangeDescription: 'Range: 2010 to 2020'
            }
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 2010
            }
        },

        series: [{
            name: 'Installation & Developers',
            data: [43934, 48656, 65165, 81827, 112143, 142383,
                171533, 165174, 155157, 161454, 154610]
        }, {
            name: 'Manufacturing',
            data: [24916, 37941, 29742, 29851, 32490, 30282,
                38121, 36885, 33726, 34243, 31050]
        }, {
            name: 'Sales & Distribution',
            data: [11744, 30000, 16005, 19771, 20185, 24377,
                32147, 30912, 29243, 29213, 25663]
        }, {
            name: 'Operations & Maintenance',
            data: [null, null, null, null, null, null, null,
                null, 11164, 11218, 10077]
        }, {
            name: 'Other',
            data: [21908, 5548, 8105, 11248, 8989, 11816, 18274,
                17300, 13053, 11906, 10073]
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

        });




    </script>
</html>