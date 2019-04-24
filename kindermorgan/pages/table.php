<!--

    Created By: Evan Becker
    Visit www.evanbecker.com for freelancing information!

    Notes:

-->
<!DOCTYPE html>
<?php
        $con = @mysqli_connect('localhost', 'Test', 'thomas89', 'Test');
        if (!$con) {
            $success = false;
            exit();
        }
?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daily Milorganite Production - Table</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Daily Milorganite Production</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-edit fa-fw"></i> Form</a>
                        </li>
                        <li>
                            <a href="table.php"><i class="fa fa-table fa-fw"></i> Table</a>
                        </li>
                        <li>
                            <a href="reports.php"><i class="fa fa-files-o fa-fw"></i> Reports</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-4">
                    <img src="../img/logo.png" width="80%"><h1><center><strong>TABLE</strong></h1></center>
                </div>
            </div><br>
                
                        <?php
                        
                            $sql = "SELECT operator, 5pdpc, 5pddt, 36pdpc, 36pddt, 50pdpc, 50pddt, 1000pdpc, 1000pddt, 2000pdpc, 2000pddt, 50pdggpc, 50pdggdt, 1000pdggpc, 100pdggdt, 2000pdggpc, 200pdggdt, 36calipc, 36calidt, 36marypc, 36marydt, 36canpc, 36candt, 50canpc, 50candt, 1tcanpc, 1tcandt, pst, pet, dt, tpt, datetime FROM reports";
                            $result = $con->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example"><thead><tr><th>Operator</th><th>Date/Time</th><th>5# PD</th><th>36# PD</th><th>50# PD</th><th>1000# PD</th><th>2000# PD</th><th>50# PDGG</th><th>1000# PDGG</th><th>2000# PDGG</th><th>36# California</th><th>36# Maryland</th><th>36# Canada</th><th>50# Canada</th><th>1T Canada</th><th>pst</th><th>pet</th><th>dt</th><th>tpt</th></tr>';

                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>"; 
                                    echo '<td>' . $row['operator'] .'</td>';
                                    echo '<td>' . $row['datetime'] .'</td>';
                                    echo '<td>' . $row['5pdpc'] . " - " . $row['5pddt'] .'</td>';
                                    echo '<td>' . $row['36pdpc'] . " - " . $row['36pddt'] .'</td>';
                                    echo '<td>' . $row['50pdpc'] . " - " . $row['50pddt'] .'</td>';
                                    echo '<td>' . $row['1000pdpc'] . " - " . $row['1000pddt'] .'</td>';
                                    echo '<td>' . $row['2000pdpc'] . " - " . $row['2000pddt'] .'</td>';
                                    echo '<td>' . $row['50pdggpc'] . " - " . $row['50pdggdt'] .'</td>';
                                    echo '<td>' . $row['1000pdggpc'] . " - " . $row['100pdggdt'] .'</td>';
                                    echo '<td>' . $row['2000pdggpc'] . " - " . $row['200pdggdt'] .'</td>';
                                    echo '<td>' . $row['36calipc'] . " - " . $row['36calidt'] .'</td>';
                                    echo '<td>' . $row['36marypc'] . " - " . $row['36marydt'] .'</td>';
                                    echo '<td>' . $row['36canpc'] . " - " . $row['36candt'] .'</td>';
                                    echo '<td>' . $row['50canpc'] . " - " . $row['50candt'] .'</td>';
                                    echo '<td>' . $row['1tcanpc'] . " - " . $row['1tcandt'] .'</td>';
                                    echo '<td>' . $row['pst'] .'</td>';
                                    echo '<td>' . $row['pet'] .'</td>';
                                    echo '<td>' . $row['dt'] .'</td>';
                                    echo '<td>' . $row['tpt'] .'</td>';
                                    echo "</tr>";
                                }
                                
                            }else{
                                echo '<div class="row"><div class="col-md-5 col-xs-12"><div class="alert alert-danger">You must first create reports using the <a href="form.php">Form</a> link!</div></div></div>';
                            }

                            // Close connection
                            mysqli_close ($con);
                        ?>
                    </thead>
                </table

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!-- <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>

</body>

</html>
