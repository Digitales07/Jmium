

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

    <title>Add auditor</title>
    <style>
    .content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>
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
	
    
$idpro = $_POST['proid'];
$idprod = $_POST['prodid'];





	        $cn = $_POST['company_name'];
		$rel = $_POST['religion'];
		$pb= $_POST['primary_business'];
		$ad = $_POST['address'];
		$email =$_POST['email'];
		$p1 = $_POST['phone1'];
		$p2 = $_POST['phone2'];
		$web = $_POST['website'];
		$ab = $_POST['allied_business'];
		$aff = $_POST['affiliations'];
		$at = $_POST['annual'];
		$shift = $_POST['shift'];
		$scope = $_POST['scope'];
		$ntn = $_POST['ntn'];
		$gst = $_POST['gst'];
		$ps = $_POST['ps'];
                $ms = $_POST['ms'];
                $np = $_POST['no_of_products'];
                $halal = $_POST['halal_assunace_system'];
                
                
		
		
		
		$queryp = "update producer set `producer_company_name` = '$cn' ,  `producer_owner_religion` = '$rel' , `producer_primary_business` = '$pb', `producer_address` = '$ad' , `producer_phone` = '$p1', `producer_phone2` = '$p2', `producer_email` ='$email' , `producer_website` = '$web', `producer_allied_business` = '$ab', `producer_affiliations` = '$aff', `producer_annual_turnover` = '$at' , `producer_ntn` = '$ntn', `producer_gst` = '$gst', `producer_shift` = '$shift', `producer_scope` = '$scope' , `producer_no_products` = '$np', `producer_ps` = '$ps' , `producer_ms` = '$ms',  `producer_has` = '$halal' where producer_id= $idpro";
	if(mysqli_query($conn,$queryp))
		{
                }
            
                $mn = $_POST['mn'];
		$md = $_POST['md'];
		$mp = $_POST['mp'];
		$me = $_POST['me'];
               
            
            
            $querym = "update management set `management_name` = '$mn' , `management_designation` ='$md', `management_phone`='$mp', `management_email`='$me' where management_producers=$idpro";
            
                    
            
                $et = $_POST['et'];
		$ep = $_POST['ep'];
		$el = $_POST['el'];
		$eq = $_POST['eq'];
                $ea = $_POST['ea'];
                $eo = $_POST['eo'];
               
            
            
           $querye =  "update employee set`employee_total`='$et', `employee_production`='$ep', `employee_logistic`='$el', `employee_quality`='$eq', `employee_admin`='$ea', `employee_others`='$eo' where employee_producer=$idpro";
            
         
		$tpt = $_POST['tpt'];
		$tpn = $_POST['tpn'];
		$tpa = $_POST['tpa'];
                $tpc = $_POST['tpc'];
                
               
            
            
           $querytp =  "Update third_party set  `third_party_name`='$tpn', `third_party_contact`='$tpc', `third_party_address`='$tpa', `third_party_task`='$tpt' where third_party_producer=$idpro";
            
           	$pname = $_POST['pname'];
		$pdet = $_POST['pdet'];
		
                
               
            
            
           $querypr =  "update product set `product_brand_name`='$pname', `product_detail`='$pdet' where product_producer= $idpro and product_id = $idprod ";
          
               
               
               
                $in = $_POST['in'];
		$ipn = $_POST['ipn'];
		$ipc = $_POST['ipc'];
                $ipa = $_POST['ipa'];
		
                $isn = $_POST['isn'];
		$isc = $_POST['isc'];
                $isa = $_POST['isa'];
		$ihn = $_POST['ihn'];
                $ihc = $_POST['ihc'];
                $iha = $_POST['iha'];
                
               
            
            
           $queryi =  "update ingredient set  `ingredient_name`='$in', `ingredient_producer_name`='$ipn', `ingredient_producer_contact` ='$ipc', `ingredient_producer_address`='$ipa', `ingredient_supplier_name` ='$isn', `ingredient_supplier_contact`='$isc', `ingredient_supplier_address`='$isa', `ingredient_halal_name`='$ihn', `ingredient_halal_contact`='$ihc', `ingredient_halal_address`='$iha' where ingredient_product_id=$idprod";
            
       
             $pn = $_POST['in'];
		$ppn = $_POST['ipn'];
		$ppc = $_POST['ipc'];
                $ppa = $_POST['ipa'];
		
                $psn = $_POST['isn'];
		$psc = $_POST['isc'];
                $psa = $_POST['isa'];
		$phn = $_POST['ihn'];
                $phc = $_POST['ihc'];
                $pha = $_POST['iha'];
                
               
            
            
           $querypac =  "update packaging set  `packaging_name` ='$pn' , `packaging_producer_name`='$ppn', `packaging_producer_contact`='$ppc', `packaging_producer_address`='$ppa', `packaging_supplier_name`='$psn', `packaging_supplier_contact`='$psc', `packaging_supplier_address`='$psa', `packaging_halal_name`='$phn', `packaging_halal_contact`='$phc', `packaging_halal_address`='$pha' where packaging_product=$idprod ";
            
              
		$sp = $idprod;
		$saddress = $_POST['saddress'];
		$sphope = $_POST['sphone'];
                $semail = $_POST['semail'];
                $sauditor = $_POST['sauditor'];
               
            
            
           $querysite =  "update site set   `site_address`='$saddress', `site_phone`='$sphope', `site_email`='$semail', `site_auditor`='$sauditor' where site_product=$idprod and site_producer=$idpro";
            
         if(mysqli_query($conn,$querym)&&mysqli_query($conn,$querysite)&&mysqli_query($conn,$querytp)&&mysqli_query($conn,$querye)&&mysqli_query($conn,$querypac)&&mysqli_query($conn,$queryi)&&mysqli_query($conn,$querypr))
		{
			
			?>
			<script type="text/javascript">
			window.location.href = '../pages/producer.php';
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
                      <li>&nbsp;producer&nbsp;</li>
                      <li>&nbsp;Add producer&nbsp;</li>                      
                    </ol>
                        <h1 class="page-header">EDIT PRODUCER</h1>   
              


<?php 
$i=0;


$idproducer = null;
$cid = null;
$pid = null;
if(isset($_POST['edit']))
{
$idproducer = $_POST['pid'];


}		
$queryp = "select * from producer where producer_id='$idproducer'";
$runp = mysqli_query($conn, $queryp)  or die("Error in Selecting " . mysqli_error($conn));
while ($rowp = mysqli_fetch_array($runp)) {
        $proucerid = $rowp[0];
        $cn = $rowp[1];
		$rel = $rowp[4];
		$pb= $rowp[5];
		$ad = $rowp[6];
		$email = $rowp[9];
		$p1 = $rowp[7];
		$p2 = $rowp[8];
		$web = $rowp[10];
		$ab = $rowp[11];
		$aff = $rowp[12];
		$at = $rowp[13];
		$shift = $rowp[16];
		$scope = $rowp[17];
		$ntn = $rowp[14];
		$gst = $rowp[15];
		$ps = $rowp[19];
        $ms = $rowp[20];
        $np = $rowp[18];
        $halal = $rowp[25];
    
}
		
            
            $querym = "select * from management where management_producers='$idproducer'";
                $runm = mysqli_query($conn, $querym)  or die("Error in Selecting " . mysqli_error($conn));
                while ($rowm = mysqli_fetch_array($runm)) {
               $mn = $rowm['management_name'];
		$md = $rowm['management_designation'];
		$mp = $rowm['management_phone'];
		$me = $rowm['management_email'];
    
}
            
                
               
            
            
                 $querye = "select * from employee where employee_producer='$idproducer'";
                $rune = mysqli_query($conn, $querye)  or die("Error in Selecting " . mysqli_error($conn));
                while ($rowe = mysqli_fetch_array($rune)) {
              $et = $rowe[2];
		$ep = $rowe[3];
		$el = $rowe[4];
		$eq = $rowe[5];
                $ea = $rowe[6];
                $eo = $rowe[7];
    
}
                    
            
                
               
            
            
            
         
		
                
                            $querytp = "select * from third_party where third_party_producer='$idproducer'";
                $runtp = mysqli_query($conn, $querytp)  or die("Error in Selecting " . mysqli_error($conn));
                while ($rowtp = mysqli_fetch_array($runtp)) {
              
                $tpt = $rowtp[5];
		$tpn = $rowtp[2];
		$tpa = $rowtp[4];
                $tpc = $rowtp[3];
    
}
               
            
         
           	
		
                
                                   $querypr = "select * from product where product_producer='$idproducer'";
                $runpr = mysqli_query($conn, $querypr)  or die("Error in Selecting " . mysqli_error($conn));
                while ($rowpr = mysqli_fetch_array($runpr)) {
              
                    
                $prid =     $rowpr[0];
                $pname = $rowpr[1];
		$pdet = $rowpr[2];
		
    
}
            
            
         
               
               
               
                
                
                $querypi = "select * from ingredient where ingredient_product_id='$prid'";
                $runpi = mysqli_query($conn, $querypi)  or die("Error in Selecting " . mysqli_error($conn));
                while ($rowpi = mysqli_fetch_array($runpi)) {
              
                $in = $rowpi[2];
		$ipn = $rowpi[3];
		$ipc = $rowpi[4];
                $ipa = $rowpi[5];
		
                $isn = $rowpi[6];
		$isc = $rowpi[7];
                $isa = $rowpi[8];
		$ihn = $rowpi[9];
                $ihc = $rowpi[10];
                $iha = $rowpi[11];
		 
		
    
}
                
               
            
            
          $queryppi = "select * from packaging where packaging_product ='$prid'";
                $runppi = mysqli_query($conn, $queryppi)  or die("Error in Selecting " . mysqli_error($conn));
                while ($rowppi = mysqli_fetch_array($runppi)) {
              
                $pn  = $rowppi[2];
		$ppn = $rowppi[3];
		$ppc = $rowppi[4];
                $ppa = $rowppi[5];;
		
                $psn = $rowppi[6];
		$psc = $rowppi[7];
                $psa = $rowppi[8];
		$phn = $rowppi[9];
                $phc = $rowppi[10];
                $pha = $rowppi[11];
		 
		
    
} 
       
             
                
               
            
            
            $querys = "select * from site where site_product='$prid'";
                $runs = mysqli_query($conn, $querys)  or die("Error in Selecting " . mysqli_error($conn));
                while ($rows = mysqli_fetch_array($runs)) {
              
                $sp = $prid;
		$saddress = $rows[3];
		$sphope = $rows[4];
                $semail = $rows[5];
                $sauditor = $rows[6];
		 
		
    
} 
   
              
		
               
            
      



	
	

?>


<style>
h2{
    text-decoration:underline;
    background-color:#67E636;
}
.content{
    position:relative;
    border: 1px #67E636 solid;
 
}

form{
    display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 2px;
  padding:5px

}

.collapsible{
    background-color:inherit;
    font-size:40px; 
    border:none;
    height:5px;
    margin-bottom:4px;
    outline:none;
    padding:none;
}
</style>

<div class="col-lg-12">
<div class="col-lg-6" >
<h2 style="display:inline-block" >Edit Producer:</h2> <button style="display:inline-block" class = "collapsible" type="button" onclick='toggle(this)' id="edit">+ </button>
   <div class ="content">                       
<form enctype="multipart/form-data"  action="editpageproducer.php" method="post" >
 Company name:  <input type="text"  name="company_name" style="float:right;" value="<?php echo $cn; ?>" >

<br>
<br>
Owner Religion:  <input type="text" name="religion" style="float:right;" value="<?php echo $rel; ?>" >

<br>
<br>
Primary business:  <input type="text" name="primary_business" style="float:right;" value="<?php echo $pb; ?>" >
<br>
<br>
 
 

Address:  <input type="text" name="address" style="float:right;" value="<?php echo $ad; ?>" >
<br>
<br>
Email:  <input type="text" name="email" style="float:right;" value="<?php echo $email; ?>" >
<br>
<br>

Phone number:  <input type="text" name="phone1" style="float:right;"  value="<?php echo $p1; ?>" >
<br>
<br>
Secondary phone number:  <input type="text" name="phone2" style="float:right;" value="<?php echo $p2; ?>" >
<br>
<br>
Website:  <input type="text" name="website" style="float:right;" value="<?php echo $web; ?>" >
<br>
<br>

Allied businesses:  <input type="text" name="allied_business" style="float:right;" value="<?php echo $ab; ?>" >
<br>
<br>
Affiliations:  <input type="text" name="affiliations" style="float:right;" value="<?php echo $aff; ?>" >
<br>
<br>
Annual Turn over:  <input type="text" name="annual" style="float:right;" value="<?php echo $at; ?>" >
<br>
<br>
NTN #:  <input type="text" name="ntn" style="float:right;" value="<?php echo $ntn; ?>" >
<br>
<br>
GST #:  <input type="text" name="gst" style="float:right;" value="<?php echo $gst; ?>" >
<br>
<br>

Shift timings:  <input type="text" name="shift"  style="float:right;" value="<?php echo $shift; ?>" ></input> 
<br>
<br>




Scope of operations:  <textarea type="text" name="scope"  style="float:right;" > <?php echo $scope; ?> </textarea>
<br>
<br>
<br>


no of products to certify:  <input type="text" name="no_of_products" style="float:right;" value="<?php echo $np; ?>" >
<br>
<br>
PS 3733:  <input type="text" name="ps" style="float:right;" value="<?php echo $ps; ?>" >
<br>
<br>
MS1500:  <input type="text" name="ms" style="float:right;" value="<?php echo $ms; ?>" >
<br>
<br>



 
 
Halal assurance system:  <textarea type="text" name="halal_assunace_system"  style="float:right;" ><?php echo $halal; ?></textarea>
<br>

</div>
</div>

<div class="col-lg-6" >
<h2 style="display:inline-block"> Employees:</h2> <button style="display:inline-block" class = "collapsible" type="button">+ </button>
   <div class ="content">
<h3 style="display:inline-block"> Management:</h3> <button style="display:inline-block" class = "collapsible" type="button">+ </button>
   <div class ="content">
<br>

Name:  <input type="text" name="mn" style="float:right;" value="<?php echo $mn; ?>" >

<br>
<br>

Designation:  <input type="text" name="md" style="float:right;" value="<?php echo $md; ?>" >

<br>
<br>
phone:  <input type="text" name="mp" style="float:right;" value="<?php echo $mp; ?>" >

<br>
<br>
email:  <input type="text" name="me" style="float:right;" value="<?php echo $me; ?>" >
</div>
<br>
<br>
<br>


<h3 style="display:inline-block"> Strength:</h3> <button style="display:inline-block" class = "collapsible" type="button">+ </button>
   <div class ="content">
Total no of employees:  <input type="text" name="et" style="float:right;" value="<?php echo $et; ?>" >

<br>
<br>

No of production employees:  <input type="text" name="ep" style="float:right;" value="<?php echo $ep; ?>" >

<br>
<br>

No of logistic employees:  <input type="text" name="el" style="float:right;" value="<?php echo $el; ?>" >

<br>
<br>

No of quality assurance employees:  <input type="text" name="eq" style="float:right;" value="<?php echo $eq; ?>" >

<br>
<br>

No of administrative employees:  <input type="text" name="ea" style="float:right;" value="<?php echo $ea; ?>" >

<br>
<br>

No of other employees:  <input type="text" name="eo" style="float:right;" value="<?php echo $eo; ?>" >

<br>
<br>
</div>
</div>
</div>

<div class="col-lg-6" >
<h2 style="display:inline-block"> Third party company (if any):</h2> <button style="display:inline-block" class = "collapsible" type="button">+ </button>
   <div class ="content">

Task:  <input type="text" name="tpt" style="float:right;" value="<?php echo $tpt; ?>" >

<br>
<br>

Name:  <input type="text" name="tpn" style="float:right;" value="<?php echo $tpn; ?>" >

<br>
<br>

Address:  <input type="text" name="tpa" style="float:right;" value="<?php echo $tpa; ?>" >

<br>
<br>

Contact:  <input type="text" name="tpc" style="float:right;" value="<?php echo $tpc; ?>" >

<br>
<br>
</div>
</div>

<div class="col-lg-6" >
<h2 style="display:inline-block"> Products:</h2>  <button style="display:inline-block" class = "collapsible" type="button">+ </button>
   <div class ="content">

Name:  <input type="text" name="pname" style="float:right;" value="<?php echo $pname; ?>" >

<br>
<br>

Detail:  <input type="text" name="pdet" style="float:right;" value="<?php echo $pdet; ?>" >

<br>
<br>
</div>
</div>
<br>
<div class="col-lg-6" >
<h2 style="display:inline-block"> Ingredients:</h2> <button style="display:inline-block" class = "collapsible" type="button">+ </button>

   <div class ="content">

Name:  <input type="text" name="in" style="float:right;" value="<?php echo $in; ?>" >

<br>
<br>

Producer name:  <input type="text" name="ipn" style="float:right;" value="<?php echo $ipn; ?>" >

<br>
<br>
Producer contact:  <input type="text" name="ipc" style="float:right;" value="<?php echo $ipc; ?>" >

<br>
<br>

Producer address:  <input type="text" name="ipa" style="float:right;" value="<?php echo $ipa; ?>" >

<br>
<br>

supplier name:  <input type="text" name="isn" style="float:right;" value="<?php echo $isn; ?>" >

<br>
<br>
supplier contact:  <input type="text" name="isc" style="float:right;"value="<?php echo $isc; ?>" >

<br>
<br>

supplier address:  <input type="text" name="isa" style="float:right;" value="<?php echo $isa; ?>" >

<br>
<br>

Halal certified by name:  <input type="text" name="ihn" style="float:right;"  value="<?php echo $ihn; ?>">

<br>
<br>
Halal certified by contact:  <input type="text" name="ihc" style="float:right;" value="<?php echo $ihc; ?>" >

<br>
<br>

Halal certified by address:  <input type="text" name="iha" style="float:right;" value="<?php echo $iha; ?>" >

<br>
<br>
<br>
<br>
</div>
</div>

<div class="col-lg-6" >
<h2 style="display:inline-block"> Packaging:</h2> <button style="display:inline-block" class = "collapsible" type="button">+ </button>
   <div class ="content">

Name:  <input type="text" name="pn" style="float:right;" value="<?php echo $pn; ?>" >

<br>
<br>

Producer name:  <input type="text" name="ppn" style="float:right;" value="<?php echo $ppn; ?>" >

<br>
<br>
Producer contact:  <input type="text" name="ppc" style="float:right;" value="<?php echo $ppc; ?>" >

<br>
<br>

Producer address:  <input type="text" name="ppa" style="float:right;" value="<?php echo $ppa; ?>" >

<br>
<br>

supplier name:  <input type="text" name="psn" style="float:right;" value="<?php echo $psn; ?>" >

<br>
<br>
supplier contact:  <input type="text" name="psc" style="float:right;"  value="<?php echo $psc; ?>">

<br>
<br>

supplier address:  <input type="text" name="pa" style="float:right;" value="<?php echo $psa; ?>" >

<br>
<br>

Halal certified by name:  <input type="text" name="phn" style="float:right;" value="<?php echo $phn; ?>" >

<br>
<br>
Halal certified by contact:  <input type="text" name="phc" style="float:right;" value="<?php echo $phc; ?>" >

<br>
<br>

Halal certified by address:  <input type="text" name="pha" style="float:right;" value="<?php echo $pha; ?>" >

<br>
<br>
<br>
<br>
</div>
</div>
<div class="col-lg-6" >
<h2 style="display:inline-block "> Site:</h2> <button style="display:inline-block" class = "collapsible" type="button"> + </button>
   <div class ="content">

Product:  <input type="text" name="sproduct" style="float:right;" value="<?php echo $sp; ?>" >

<br>
<br>

Address:  <input type="text" name="saddress" style="float:right;" value="<?php echo $saddress; ?>" >

<br>
<br>
phone:  <input type="text" name="sphone" style="float:right;" value="<?php echo $sphope; ?>" >

<br>
<br>
email:  <input type="text" name="semail" style="float:right;" value="<?php echo $semail; ?>" >

<br>
<br>

auditor:  <input type="text" name="sauditor" style="float:right;" value="<?php echo $sauditor; ?>" >

<br>
<br>
<br>
<br>

<input type="hidden" name="proid" style="float:right;" value="<?php echo $proucerid; ?>" >
<input type="hidden" name="prodid" style="float:right;" value="<?php echo $prid; ?>" >
</div>
</div>
<br>
<br>
<div align ='center' class="col-lg-10" >
		<input type='submit' name='submit' value='SAVE' style="background-color: lightgreen; /* Green */
    border: none;
    color: white;
    margin-top:3%;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;">

</div>
		
		</form>
		

		<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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

<script>
var coll = document.getElementsByClassName("collapsible");

var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");

    var content = this.nextElementSibling;
    if (content.style.display == "block") {
      content.style.display = "none";
      this.innerHTML = "+";
    } else {
      content.style.display = "block";
      this.innerHTML = "-";
    }
  });
}
</script>    
    <!-- /#wrapper -->
<script type="text/javascript">
        document.getElementById("txt_1").value = getSavedValue("txt_1");    // set the value to this input
        document.getElementById("txt_2").value = getSavedValue("txt_2");   // set the value to this input
        /* Here you can add more inputs to set value. if it's saved */

        //Save the value function - save it to localStorage as (ID, VALUE)
        function saveValue(e){
            var id = e.id;  // get the sender's id to save it . 
            var val = e.value; // get the value. 
            localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 
        }

        //get the saved value function - return the value of "v" from localStorage. 
        function getSavedValue  (v){
            if (!localStorage.getItem(v)) {
                return "";// You can change this to your defualt value. 
            }
            return localStorage.getItem(v);
        }
</script>
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
