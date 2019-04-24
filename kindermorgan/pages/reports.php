<!--

    Created By: Evan Becker
    Visit www.evanbecker.com for freelancing information!

    Notes:

-->
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daily Milorganite Production - Report</title>

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
                    <img src="../img/logo.png" width="80%"><center><h1><strong>REPORTS</strong></h1></center>
                    
                </div>
            </div><br>

            

            <?php
                $con = @mysqli_connect('localhost', 'Test', 'thomas89', 'Test');
                if (!$con) {
                    $success = false;
                    exit();
                }

                $sql = "SELECT id, operator, 5pdpc, 5pddt, 36pdpc, 36pddt, 50pdpc, 50pddt, 1000pdpc, 1000pddt, 2000pdpc, 2000pddt, 50pdggpc, 50pdggdt, 1000pdggpc, 100pdggdt, 2000pdggpc, 200pdggdt, 36calipc, 36calidt, 36marypc, 36marydt, 36canpc, 36candt, 50canpc, 50candt, 1tcanpc, 1tcandt, pst, pet, dt, tpt, datetime FROM reports";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="row">';
                            echo '<form>';
                                echo '<h4>' . "<strong>Report:</strong> " . $row['datetime'] . '</h4>';
                                echo '<div class="row">';
                                    echo '<div class="form-group col-md-3 col-xs-9"><label>Operator</label><input name="operator" type="text" class="form-control" placeholder="' . $row['operator']  .'" disabled></div>';
                                echo '</div>';
                                echo '<div class="row"><div class="col-md-1 col-xs-3"><center><div class="ProductCat">Product-Wt/Gr</div></center></div><div class="col-md-2 col-xs-4"><center><div class="ProductCat">Daily Palletizer Counter</div></center></div><div class="col-md-2 col-xs-4"><center><div class="ProductCat">Daily Tons</div></center></div></div><br>';
                                echo '<center>';
                                echo '  <div class="row">                
                                            <div class="col-md-1 col-xs-4"><div class="Product"><br>5# PD</div></div>
                                            <div class="col-md-2 col-xs-4"><input name="5pddt" type="text" class="form-control" placeholder="' . $row['5pddt']  .'" disabled></div>
                                            <div class="col-md-2 col-xs-4"><input name="5pdpc" type="text" class="form-control" placeholder="' . $row['5pdpc']  .'" disabled></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 col-xs-4"><div class="Product"><br>36# PD</div></div>
                                            <div class="col-md-2 col-xs-4"><input name="36pdpc" type="text" class="form-control" placeholder="' . $row['36pdpc']  .'" disabled></div>
                                            <div class="col-md-2 col-xs-4"><input name="36pddt" type="text" class="form-control" placeholder="' . $row['36pddt']  .'" disabled></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 col-xs-4"><div class="Product"><br>50# PD</div></div>
                                            <div class="col-md-2 col-xs-4"><input name="50pdpc" type="text" class="form-control" placeholder="' . $row['50pdpc']  .'" disabled></div>
                                            <div class="col-md-2 col-xs-4"><input name="50pddt" type="text" class="form-control" placeholder="' . $row['50pddt']  .'" disabled></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 col-xs-4"><div class="Product"><br>1000# PD</div></div>
                                            <div class="col-md-2 col-xs-4"><input name="1000pdpc" type="text" class="form-control" placeholder="' . $row['1000pdpc']  .'" disabled></div>
                                            <div class="col-md-2 col-xs-4"><input name="1000pddt" type="text" class="form-control" placeholder="' . $row['1000pddt']  .'" disabled></div>
                                        </div>     
                                        <div class="row">
                                            <div class="col-md-1 col-xs-4"><div class="Product"><br>2000# PD</div></div>
                                            <div class="col-md-2 col-xs-4"><input name="2000pdpc" type="text" class="form-control" placeholder="' . $row['2000pdpc']  .'" disabled></div>
                                            <div class="col-md-2 col-xs-4"><input name="2000pddt" type="text" class="form-control" placeholder="' . $row['2000pddt']  .'" disabled></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 col-xs-4"><div class="Product"><br>50# PD GG</div></div>
                                            <div class="col-md-2 col-xs-4"><input name="50pdggpc" type="text" class="form-control" placeholder="' . $row['50pdggpc']  .'" disabled></div>
                                            <div class="col-md-2 col-xs-4"><input name="50pdggdt" type="text" class="form-control" placeholder="' . $row['50pdggdt']  .'" disabled></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 col-xs-4"><div class="Product"><br>1000# PD GG</div></div>
                                            <div class="col-md-2 col-xs-4"><input name="1000pdggpc" type="text" class="form-control" placeholder="' . $row['1000pdggpc']  .'" disabled></div>
                                            <div class="col-md-2 col-xs-4"><input name="100pdggdt" type="text" class="form-control" placeholder="' . $row['100pdggdt']  .'" disabled></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 col-xs-4"><div class="Product"><br>2000# PD GG</div></div>
                                            <div class="col-md-2 col-xs-4"><input name="2000pdggpc" type="text" class="form-control" placeholder="' . $row['2000pdggpc']  .'" disabled></div>
                                            <div class="col-md-2 col-xs-4"><input name="200pdggdt" type="text" class="form-control" placeholder="' . $row['200pdggdt']  .'" disabled></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 col-xs-4"><div class="Product"><br>36# California</div></div>
                                            <div class="col-md-2 col-xs-4"><input name="36calipc" type="text" class="form-control" placeholder="' . $row['36calipc']  .'" disabled></div>
                                            <div class="col-md-2 col-xs-4"><input name="36calidt" type="text" class="form-control" placeholder="' . $row['36calidt']  .'" disabled></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 col-xs-4"><div class="Product"><br>36# Maryland</div></div>
                                            <div class="col-md-2 col-xs-4"><input name="36marypc" type="text" class="form-control" placeholder="' . $row['36marypc']  .'" disabled></div>
                                            <div class="col-md-2 col-xs-4"><input name="36marydt" type="text" class="form-control" placeholder="' . $row['36marydt']  .'" disabled></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 col-xs-4"><div class="Product"><br>36# Canada</div></div>
                                            <div class="col-md-2 col-xs-4"><input name="36canpc" type="text" class="form-control" placeholder="' . $row['36canpc']  .'" disabled></div>
                                            <div class="col-md-2 col-xs-4"><input name="36candt" type="text" class="form-control" placeholder="' . $row['36candt']  .'" disabled></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 col-xs-4"><div class="Product"><br>50# Canada</div></div>
                                            <div class="col-md-2 col-xs-4"><input name="50canpc" type="text" class="form-control" placeholder="' . $row['50canpc']  .'" disabled></div>
                                            <div class="col-md-2 col-xs-4"><input name="50candt" type="text" class="form-control" placeholder="' . $row['50candt']  .'" disabled></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1 col-xs-4"><div class="Product"><br>1T Canada</div></div>
                                            <div class="col-md-2 col-xs-4"><input name="1tcanpc" type="text" class="form-control" placeholder="' . $row['1tcanpc']  .'" disabled></div>
                                            <div class="col-md-2 col-xs-4"><input name="1tcandt" type="text" class="form-control" placeholder="' . $row['1tcandt']  .'" disabled></div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class="form-group col-md-1"></div> <!-- Hack to ensure center on desktop & mobile -->
                                            <div class="form-group col-md-2 col-xs-6">
                                                <label>Pallet Start Time</label>
                                                <input name="pst" type="time" class="form-control" placeholder="' . $row['pst']  .'" disabled>
                                            </div>

                                            <div class="form-group col-md-2 col-xs-6">
                                                <label>Pallet End Time</label>
                                                <input name="pet" type="time" class="form-control" placeholder="' . $row['pet']  .'" disabled>
                                            </div>
                                        </div>   
                                        
                                        <br>

                                        <div class="row">
                                            <div class="form-group col-md-1"></div> <!-- Hack to ensure center on desktop & mobile -->
                                            <div class="form-group col-md-2 col-xs-6">
                                                <label>Down Time</label>
                                                <input name="dt" type="text" class="form-control" placeholder="' . $row['dt']  .'" disabled>
                                            </div>

                                            <div class="form-group col-md-2 col-xs-6">
                                                <label>Production Time</label>
                                                <input name="tpt" type="text" class="form-control" placeholder="' . $row['tpt']  .'" disabled>
                                            </div>
                                        </div>
                                        
                                        <br>

                                        <div class="row">
                                            <div class="form-group col-md-5 col-xs-5">
                                                <hr></hr>
                                                <br>
                                            </div>
                                        </div>';
                                echo '</center>';
                            echo '</form>';
                        echo '</div>';
                    }
                }
                else{
                    echo '<div class="row"><div class="col-md-5 col-xs-12"><div class="alert alert-danger">You must first create reports using the <a href="form.php">Form</a> link!</div></div></div>';
                }
                $con->close();
            ?>
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
