<?php

   include('session.php');
   include ('PAGINATE.php');

   $type = $_SESSION['admin_type'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>producer</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="scripts/jquery-1.4.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    		



</head>

<body style="font-family: porschenext">
   
 
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: white;">
            <div class="navbar-header" style="float: right" >
                
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
                <ul class="nav navbar-top-links navbar-right" style="float: right;" >
                
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
                     </div>
            <!-- /.navbar-header -->
  <div  style="text-align: center;">
                <img style="width: 150px;   " src='this.src="../images/logo.jpg "' onerror='this.src="../images/logo.png"'   >                        
                </div>
             

                <?php
           include ('nav.php');
           
      ?>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <ol class="breadcrumb" style="background-color:transparent; float:right; ">
                      <li>Home&nbsp;</li>    
                      <li>&nbsp;producer&nbsp;</li>
                                           
                    </ol>
                        <h1 class="page-header">producer</h1>
                        <div id="table1">
                            
                                <button type="button" class="btn btn-success btn-lg" style="float:center" onclick="window.location='../pages/addproducer.php'">ADD PRODUCER</button><br><br><br>
                                                   
                        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            producer
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <div class="pull-left">
                                    <div class="select_sortby inline-block">
                                    <?php  
                                     $sql = "select * from producer   ";
				$result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));
                                    
                                    
                                    if (isset($_GET['page'])) {
                                    	$ppage = $_GET['page'];
                                    }
                                    else{
                                    	$ppage = 1;
                                    	
                                    }
                                    
                                     
                                    ?>
  
                                         
                                        
                               
                                        
                                        <br>
                                        <br>
                                      
                                        
                                     </div>
                                     
                                    </div><!-- End .select_sortby -->
                            <div class="dataTable_wrapper">
                               
                                <table class="table table-striped table-bproducered table-hover" id="dataTables-example" style="font-family: porschenext;">
                                    <thead>
                                        <tr>
                                            <th>Edit</th>
                                            <th>Company name</th>
                                            <th>Religion</th>
                                            <th>Primary business</th>
                                            <th>address</th>
                                            <th>phone</th>
                                            
                                            <th>email</th>
                                            <th>website</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <?php 
                                        $cnt=0;
                                        while(($row = mysqli_fetch_array($result))&&$cnt<=5)
                                        	
                                 	{
                                            
                                            echo "<tr>
        		                           <td><form action='editpageproducer.php' method='post'>
                                           <input type='hidden' name='pid' value=".$row[0].">
                                           <input type='submit' name='edit' value='Edit'/>
                                           </form>
                                           </td>
        		
                                            <td>" . $row[1] . "</td>
                                            <td>" . $row[4] . "</td>
    		                                <td>" . $row[5]. "</td>
                                            <td>" . $row[6] . "</td>
                                                    <td>" . $row[7] . "</td>
                                                        <td>" . $row[9] . "</td>
                                                    <td>" . $row[10] . "</td>";
                                     }  
                                        
                                        ?>
                                        
                                    </tbody>
                                      
                                </table>
                               
                            </div>
                            <!-- /.table-responsive -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>