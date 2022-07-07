<?php
   include('session.php');
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

    <title>Edit</title>

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

</head>

<body>
                         <?php
if(isset($_POST['submit']))
	{
		
		$n = $_POST['name'];
		$u = $_POST['username'];
		$p = $_POST['pass'];
		$c = $_POST['contact'];
		$email = $_POST['email'];
		$des = $_POST['designation'];
		$cid = $_POST['cid'];
		
		
		
		echo $cid;
	
	
		
		
		$queryc = "UPDATE `auditor` SET `auditor_name`='$n',`auditor_username`='$u',`auditor_password`='$p',`auditor_contact`='$c',`auditor_email`='$email',`auditor_designation`='$des' where auditor_id='$cid'";
	if(mysqli_query($conn,$queryc))
		{
			
			?>
			<script type="text/javascript">
			window.location.href = '../pages/auditor.php';
			</script>
			<?php 
   }
			
	}

?> 
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
             
            <!-- /.navbar-top-links -->

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
                      <li>&nbsp;Admin&nbsp;</li>
                      <li>&nbsp;Edit Admin&nbsp;</li>                      
                    </ol>
                        <h1 class="page-header">Edit Admin</h1>   
              
<?php 
$idauditor = null;

if(isset($_POST['edit']))
{
$idauditor = $_POST['idc'];
}

$query = "SELECT * FROM auditor where auditor_id='$idauditor'"; 

$run = mysqli_query($conn, $query)  or die("Error in Selecting " . mysqli_error($conn));

$name = null;
$dis =  null;
$type = null;



while($row=mysqli_fetch_array($run))
{
	
	$username= $row[5];
	$password = $row[6];
        $name = $row[1];
        $contact = $row[7];
	$email = $row[2];
	$designation = $row[3];
	
	
	
}
?>






                        <div class="col-lg-4">
                        <form action="editpageauditor.php" method="post">
Name:  <input type="text" name="name"  style="float:right;" value="<?php echo $name; ?>" required="required">

<br>
<br>
Email:  <input type="text" name="email"  style="float:right;" value="<?php echo $email; ?>" required="required">
<br>
<br>
Contact:  <input type="text" name="contact"  style="float:right;" value="<?php echo $contact; ?>" required="required">
<br>
<br>
Designation:  <input type="text" name="designation"  style="float:right;" value="<?php echo $designation; ?>" required="required">
<br>
<br>
Username:  <input type="text" name="username"  style="float:right;" value="<?php echo $username; ?>" required="required">

<br>
<br>
Password:  <input type="text" name="pass"  style="float:right;" value="<?php echo $password; ?>" required="required">

<br>
<br>
<br>
<br>
 

<input type='hidden' name='cid'  value=<?php echo $idauditor; ?> >


		<div align ='center' colspan='6' >
		<input type='submit' name='submit' value='submit' ></div>
		
		</form>
		

    </div>
                    </div>                
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
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
