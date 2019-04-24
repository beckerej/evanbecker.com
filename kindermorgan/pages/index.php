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
    <meta name="description" content="Software for Kinder Morgan">
    <meta name="author" content="Evan Becker">

    <title>Daily Milorganite Production - Form</title>

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
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li> -->
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
                    <img src="../img/logo.png" width="80%"><center><h1><strong>FORM</strong></h1></center>
                </div>
            </div>
            <?php
                $success = false;
                if(isset($_POST['submit'])){
                    $success = true;

                    // $con = @mysqli_connect('localhost', 'root', 'secret', 'test');
                    $con = @mysqli_connect('localhost', 'Test', 'thomas89', 'Test');
                    if (!$con) {
                        $success = false;
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        exit();
                    }
                    $_operator = $_POST['operator'] == "" ? 'No Name' : $_POST['operator'];
                    $_5pdpc = $_POST['5pdpc'] == "" ? '0' : $_POST['5pdpc'];
                    $_5pddt = $_POST['5pddt'] == "" ? '0' : $_POST['5pddt'];
                    $_36pdpc = $_POST['36pdpc'] == "" ? '0' : $_POST['36pdpc'];
                    $_36pddt = $_POST['36pddt'] == "" ? '0' : $_POST['36pddt'];
                    $_50pdpc = $_POST['50pdpc'] == "" ? '0' : $_POST['50pdpc'];
                    $_50pddt = $_POST['50pddt'] == "" ? '0' : $_POST['50pddt'];
                    $_1000pdpc = $_POST['1000pdpc'] == "" ? '0' : $_POST['1000pdpc'];
                    $_1000pddt = $_POST['1000pddt'] == "" ? '0' : $_POST['1000pddt'];
                    $_2000pdpc = $_POST['2000pdpc'] == "" ? '0' : $_POST['2000pdpc'];
                    $_2000pddt = $_POST['2000pddt'] == "" ? '0' : $_POST['2000pddt'];
                    $_50pdggpc = $_POST['50pdggpc'] == "" ? '0' : $_POST['50pdggpc'];
                    $_50pdggdt = $_POST['50pdggdt'] == "" ? '0' : $_POST['50pdggdt'];
                    $_1000pdggpc = $_POST['1000pdggpc'] == "" ? '0' : $_POST['1000pdggpc'];
                    $_100pdggdt = $_POST['100pdggdt'] == "" ? '0' : $_POST['100pdggdt'];
                    $_2000pdggpc = $_POST['2000pdggpc'] == "" ? '0' : $_POST['2000pdggpc'];
                    $_200pdggdt = $_POST['200pdggdt'] == "" ? '0' : $_POST['200pdggdt'];
                    $_36calipc = $_POST['36calipc'] == "" ? '0' : $_POST['36calipc'];
                    $_36calidt = $_POST['36calidt'] == "" ? '0' : $_POST['36calidt'];
                    $_36marypc = $_POST['36marypc'] == "" ? '0' : $_POST['36marypc'];
                    $_36marydt = $_POST['36marydt'] == "" ? '0' : $_POST['36marydt'];
                    $_36canpc = $_POST['36canpc'] == "" ? '0' : $_POST['36canpc'];
                    $_36candt = $_POST['36candt'] == "" ? '0' : $_POST['36candt'];
                    $_50canpc = $_POST['50canpc'] == "" ? '0' : $_POST['50canpc'];
                    $_50candt = $_POST['50candt'] == "" ? '0' : $_POST['50candt'];
                    $_1tcanpc = $_POST['1tcanpc'] == "" ? '0' : $_POST['1tcanpc'];
                    $_1tcandt = $_POST['1tcandt'] == "" ? '0' : $_POST['1tcandt'];
                    $_pst = $_POST['pst'] == "" ? '0' : $_POST['pst'];
                    $_pet = $_POST['pet'] == "" ? '0' : $_POST['pet'];
                    $_dt = $_POST['dt'] == "" ? '0' : $_POST['dt'];
                    $_tpt = $_POST['tpt'] == "" ? '0' : $_POST['tpt'];
                    $_datetime = $_POST['datetime'];

                    $sql = "INSERT INTO reports (operator, 5pdpc, 5pddt, 36pdpc, 36pddt, 50pdpc, 50pddt, 1000pdpc, 1000pddt, 2000pdpc, 2000pddt, 50pdggpc, 50pdggdt, 1000pdggpc, 100pdggdt, 2000pdggpc, 200pdggdt, 36calipc, 36calidt, 36marypc, 36marydt, 36canpc, 36candt, 50canpc, 50candt, 1tcanpc, 1tcandt, pst, pet, dt, tpt, datetime)
                    VALUES ('" . $_operator . "', '" . $_5pdpc . "', '" . $_5pddt . "', '" . $_36pdpc . "', '" . $_36pddt . "', '" . $_50pdpc . "', '" . $_50pddt . "', '" . $_1000pdpc . "', '" . $_1000pddt . "', '" . $_2000pdpc . "', '" . $_2000pddt . "', '" . $_50pdggpc . "', '" . $_50pdggdt . "', '" . $_1000pdggpc . "', '" . $_100pdggdt . "', '" . $_2000pdggpc . "', '" . $_200pdggdt . "', '" . $_36calipc . "', '" . $_36calidt . "', '" . $_36marypc . "', '" . $_36marydt . "', '" . $_36canpc . "', '" . $_36candt . "', '" . $_50canpc . "', '" . $_50candt . "', '" . $_1tcanpc . "', '" . $_1tcandt . "', '" . $_pst . "', '" . $_pet . "', '" . $_dt . "', '" . $_tpt . "', '" . $_datetime . "')";

                    if (mysqli_query($con, $sql)){
                    
                    }else{
                        $success = false;
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                    }

                    // Close connection
                    mysqli_close ($con);

                    if($success){
                    echo '<div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            The form has been submitted! Your form information will now show up on <a href="table.php">Table</a> and <a href="report.php">Report</a>!
                        </div>';
                    }
                    else{
                        echo '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                The form did not successfully upload. Please make sure you connected to the Database correctly.
                            </div>';
                    }
                }
                
            ?>
            <!-- /.row -->
            <div class="row">
                <form role="form" action="index.php" method="post">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="form-group col-md-3 col-xs-12">
                            <label>Operator</label>
                            <input name="operator" type="text" class="form-control">
                            <hr></hr>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-1 col-xs-4">
                            <center><div class="ProductCat">Product-Wt/Gr</div></center>
                        </div>
                        <div class="col-md-2 col-xs-4">
                            <center><div class="ProductCat">Daily Palletizer Counter</div></center>
                        </div>
                        <div class="col-md-2 col-xs-4">
                            <center><div class="ProductCat">Daily Tons</div></center>
                        </div>
                    </div>
                    <br>
                    <center>
                        <div class="row">
                            <div class="col-md-1 col-xs-4"><div class="Product"><br>5# PD</div></div>
                            <div class="col-md-2 col-xs-4"><input name="5pddt" type="text" class="form-control" placeholder="0"></div>
                            <div class="col-md-2 col-xs-4"><input name="5pdpc" type="text" class="form-control" placeholder="0"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-xs-4"><div class="Product"><br>36# PD</div></div>
                            <div class="col-md-2 col-xs-4"><input name="36pdpc" type="text" class="form-control" placeholder="0"></div>
                            <div class="col-md-2 col-xs-4"><input name="36pddt" type="text" class="form-control" placeholder="0"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-xs-4"><div class="Product"><br>50# PD</div></div>
                            <div class="col-md-2 col-xs-4"><input name="50pdpc" type="text" class="form-control" placeholder="0"></div>
                            <div class="col-md-2 col-xs-4"><input name="50pddt" type="text" class="form-control" placeholder="0"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-xs-4"><div class="Product"><br>1000# PD</div></div>
                            <div class="col-md-2 col-xs-4"><input name="1000pdpc" type="text" class="form-control" placeholder="0"></div>
                            <div class="col-md-2 col-xs-4"><input name="1000pddt" type="text" class="form-control" placeholder="0"></div>
                        </div>     
                        <div class="row">
                            <div class="col-md-1 col-xs-4"><div class="Product"><br>2000# PD</div></div>
                            <div class="col-md-2 col-xs-4"><input name="2000pdpc" type="text" class="form-control" placeholder="0"></div>
                            <div class="col-md-2 col-xs-4"><input name="2000pddt" type="text" class="form-control" placeholder="0"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-xs-4"><div class="Product"><br>50# PD GG</div></div>
                            <div class="col-md-2 col-xs-4"><input name="50pdggpc" type="text" class="form-control" placeholder="0"></div>
                            <div class="col-md-2 col-xs-4"><input name="50pdggdt" type="text" class="form-control" placeholder="0"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-xs-4"><div class="Product"><br>1000# PD GG</div></div>
                            <div class="col-md-2 col-xs-4"><input name="1000pdggpc" type="text" class="form-control" placeholder="0"></div>
                            <div class="col-md-2 col-xs-4"><input name="100pdggdt" type="text" class="form-control" placeholder="0"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-xs-4"><div class="Product"><br>2000# PD GG</div></div>
                            <div class="col-md-2 col-xs-4"><input name="2000pdggpc" type="text" class="form-control" placeholder="0"></div>
                            <div class="col-md-2 col-xs-4"><input name="200pdggdt" type="text" class="form-control" placeholder="0"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-xs-4"><div class="Product"><br>36# California</div></div>
                            <div class="col-md-2 col-xs-4"><input name="36calipc" type="text" class="form-control" placeholder="0"></div>
                            <div class="col-md-2 col-xs-4"><input name="36calidt" type="text" class="form-control" placeholder="0"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-xs-4"><div class="Product"><br>36# Maryland</div></div>
                            <div class="col-md-2 col-xs-4"><input name="36marypc" type="text" class="form-control" placeholder="0"></div>
                            <div class="col-md-2 col-xs-4"><input name="36marydt" type="text" class="form-control" placeholder="0"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-xs-4"><div class="Product"><br>36# Canada</div></div>
                            <div class="col-md-2 col-xs-4"><input name="36canpc" type="text" class="form-control" placeholder="0"></div>
                            <div class="col-md-2 col-xs-4"><input name="36candt" type="text" class="form-control" placeholder="0"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-xs-4"><div class="Product"><br>50# Canada</div></div>
                            <div class="col-md-2 col-xs-4"><input name="50canpc" type="text" class="form-control" placeholder="0"></div>
                            <div class="col-md-2 col-xs-4"><input name="50candt" type="text" class="form-control" placeholder="0"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 col-xs-4"><div class="Product"><br>1T Canada</div></div>
                            <div class="col-md-2 col-xs-4"><input name="1tcanpc" type="text" class="form-control" placeholder="0"></div>
                            <div class="col-md-2 col-xs-4"><input name="1tcandt" type="text" class="form-control" placeholder="0"></div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="form-group col-md-1"></div> <!-- Hack to ensure center on desktop & mobile -->
                            <div class="form-group col-md-2 col-xs-6">
                                <label>Pallet Start Time</label>
                                <input name="pst" type="time" class="form-control">
                            </div>

                            <div class="form-group col-md-2 col-xs-6">
                                <label>Pallet End Time</label>
                                <input name="pet" type="time" class="form-control">
                            </div>
                        </div>   
                        
                        <br>

                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-1 col-xs-3">
                                <label>Down Time</label>
                                <input name="dt" type="text" class="form-control" placeholder="0">
                            </div>

                            <div class="form-group col-md-1 col-xs-3">
                                <label>Prod. Time</label>
                                <input name="tpt" type="text" class="form-control" placeholder="0">
                            </div>

                            <div class="form-group col-md-2 col-xs-6">
                                <label>Date Time</lable>
                                <input type="datetime-local" class="form-control" name="datetime" value="<?php date_default_timezone_set("America/Chicago"); echo date("Y-m-d\TH:i:s",time()); ?>"/>
                            </div>
                        </div>
                        
                        <br>

                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="form-group col-md-4 col-xs-12">
                                <input name="submit" type="submit" class="form-control">
                            </div>
                        </div> 
                    </center>    
                </form>
            </div>
            <!-- /.row -->
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
