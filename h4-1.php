<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
            <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet"/> 
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
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
                
                <div class="row">
                    <div class="column1" style="background-color:#f7f7f6;">
                        <div class="button-blok">
                            <button  onclick="window.location.href='h4-1.php'" class="button-b">BLOK 1</button>
                            <button  onclick="window.location.href='h4-2.php'" class="button-b">BLOK 2</button>
                            <button  onclick="window.location.href='h4-3.php'"class="button-b">BLOK 3</button>
                            <button  onclick="window.location.href='h4-4.php'"class="button-b">BLOK 4</button>
                        </div>
                    </div>
                    <div class="column2" style="background-color:#f7f7f6;">
                        <table id="data" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Suhu</th>
                                    <th>Kelembapan</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include 'connect.php';
                                
                                    $no_urut = 0;

                                    $sql = 'SELECT * FROM logdata ORDER BY id ASC';

                                    $query = mysqli_query($conn, $sql); 
   

                                    while ($row = mysqli_fetch_object($query)) {

                                        $no_urut++;
                                        
                                ?>
                                    
                                   
                                        <tr>
                                            <td><?php echo $no_urut ?></td>
                                            <td><?php echo $row->suhu; ?></td>
                                            <td><?php echo $row->kelembapan; ?></td>
                                            <td><?php echo $row->created_date; ?></td>
                                        </tr>
                                

                                       
                                

                                <?php
                                    }
                                    if (!mysqli_num_rows($query)) {
                                        echo '<tr><td colspan="5" class="text-center">Tidak ada data.</td></tr>';
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
        </body>
    </html> 
    <br/><br/>

    <style>
    * {
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

    #desc{
        border: 30px;
        border-style: solid;
        border-color: #93db74;
        background-color: #93db74;
        font-family: Arial, Helvetica, sans-serif;
    }

    .column1 {
        float: left;
        width: 30%;
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

    .column2 {
        float: right;
        width: 70%;
        margin-top: 30px;
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
        display: block;
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
        padding-bottom: 25px;
        padding-top: 5px;
    }

    .button-b {
        background-color: #93db74;
        border: none;
        color: black;
        padding: 10px 90px;
        text-align: center;
        text-decoration: none;
        display: block;
        margin: 90px 85px 80px;
        cursor: pointer;
        border-radius: 16px;
        position: center;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size:12px;
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

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
        <!-- <script src="https://cdn.datatables.net/searchpanes/2.1.0/js/dataTables.searchPanes.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script> -->
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
        </script>
        <script>
          $(document).ready(function () {
            $('#data').DataTable();
        });
        </script>
</html>