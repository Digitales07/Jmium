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

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  


    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>

<body>
<?php
                         
                         
if(isset($_POST['submit']))
	{
	
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
                
                
		
		
		
		$queryp = "INSERT INTO producer (`producer_company_name`,  `producer_owner_religion`, `producer_primary_business`, `producer_address`, `producer_phone`, `producer_phone2`, `producer_email`, `producer_website`, `producer_allied_business`, `producer_affiliations`, `producer_annual_turnover`, `producer_ntn`, `producer_gst`, `producer_shift`, `producer_scope`, `producer_no_products`, `producer_ps`, `producer_ms`,  `producer_has`, `producer_username` , `producer_password`,`producer_review`,`producer_approved`,`producer_approved_by`,`producer_review_by`,`producer_category`) VALUES ( '$cn','$rel','$pb','$ad','$p1','$p2','$email','$web','$ab','$aff','$at','$ntn','$gst','$shift','$scope','$np','$ps','$ms','$halal','1','1','1','1','1','1','1')";
        
        if(mysqli_query($conn,$queryp))
		{
            
            $producer_id = mysqli_insert_id($conn);

            
               
            
        $mn = $_POST['mn'];
		$md = $_POST['md'];
		$mp = $_POST['mp'];
		$me = $_POST['me'];
               
            
            
            $querym = "INSERT INTO management( `management_producers`, `management_name`, `management_designation`, `management_phone`, `management_email`,`producer_id`) VALUES ('$producer_id', '$mn', '$md', '$mp', '$me','0')";
            
                    
            
                $et = $_POST['et'];
		$ep = $_POST['ep'];
		$el = $_POST['el'];
		$eq = $_POST['eq'];
                $ea = $_POST['ea'];
                $eo = $_POST['eo'];
               
            
            
           $querye =  "INSERT INTO employee(`employee_producer`, `employee_total`, `employee_production`, `employee_logistic`, `employee_quality`, `employee_admin`, `employee_others`) VALUES ( '$producer_id','$et', '$ep' , '$el', '$eq', '$ea', '$eo' )";
            
         
		$tpt = $_POST['tpt'];
		$tpn = $_POST['tpn'];
		$tpa = $_POST['tpa'];
                $tpc = $_POST['tpc'];
                
               
            
            
           $querytp =  "INSERT INTO third_party( `third_party_producer`, `third_party_name`, `third_party_contact`, `third_party_address`, `third_party_task`) VALUES ('$producer_id','$tpn','$tpc','$tpa','$tpt')";
            
           	$pname = $_POST['pname'];
		$pdet = $_POST['pdet'];
		
                
               
            
         
           $querypr =  "INSERT INTO product( `product_producer`, `product_brand_name`, `product_detail`) VALUES ('$producer_id','$pname','$pdet')";
            if(mysqli_query($conn,$querypr))
            {
                $product_id = mysqli_insert_id($conn);
            }
            else {
                echo "Error creating Claim table: " . mysqli_error($conn);
                }
            $queryi =  "INSERT INTO ingredient (  `ingredient_product_id`,`ingredient_name`, `ingredient_producer_name`, `ingredient_producer_contact`, `ingredient_producer_address`, `ingredient_supplier_name`, `ingredient_supplier_contact`, `ingredient_supplier_address`, `ingredient_halal_name`, `ingredient_halal_contact`, `ingredient_halal_address`)";
            
            $number1 = count($_POST["in"]);
            echo $number1;
            

            if ($number1 > 1){
                for($i=0; $i<$number1; $i++){
                $in = $_POST['in'][$i];
		$ipn = $_POST['ipn'][$i];
		$ipc = $_POST['ipc'][$i];
                $ipa = $_POST['ipa'][$i];
		
                $isn = $_POST['isn'][$i];
		$isc = $_POST['isc'][$i];
                $isa = $_POST['isa'][$i];
		$ihn = $_POST['ihn'][$i];
                $ihc = $_POST['ihc'][$i];
                $iha = $_POST['iha'][$i];
                
                $queryi .= "VALUES ('$product_id','$in','$ipn','$ipc','$ipa','$isn','$isc','$isa','$ihn','$ihc','$iha' );";   
            
            
           
        
        
        }          } 
        else{
             $i=0;
            $in = $_POST['in'][$i];
		$ipn = $_POST['ipn'][$i];
		$ipc = $_POST['ipc'][$i];
                $ipa = $_POST['ipa'][$i];
		
                $isn = $_POST['isn'][$i];
		$isc = $_POST['isc'][$i];
                $isa = $_POST['isa'][$i];
		$ihn = $_POST['ihn'][$i];
                $ihc = $_POST['ihc'][$i];
                $iha = $_POST['iha'][$i];

            $queryi .= "VALUES ('$product_id','$in','$ipn','$ipc','$ipa','$isn','$isc','$isa','$ihn','$ihc','$iha' );";
        }
            
             $pn = $_POST['pn'];
		$ppn = $_POST['ppn'];
		$ppc = $_POST['ppc'];
        $ppa = $_POST['ppa'];
        $psn = $_POST['psn'];
		$psc = $_POST['psc'];
                $psa = $_POST['psa'];
		$phn = $_POST['phn'];
                $phc = $_POST['phc'];
                $pha = $_POST['pha'];
                
               
            
            
           $querypac =  "INSERT INTO packaging( `packaging_product`, `packaging_name`, `packaging_producer_name`, `packaging_producer_contact`, `packaging_producer_address`, `packaging_supplier_name`, `packaging_supplier_contact`, `packaging_supplier_address`, `packaging_halal_name`, `packaging_halal_contact`, `packaging_halal_address`) VALUES ('$product_id','$pn','$ppn','$ppc','$ppa','$psn','$psc','$psa','$phn','$phc','$pha' )";
            
              
		$sp = $product_id;
		$saddress = $_POST['saddress'];
		$sphope = $_POST['sphone'];
                $semail = $_POST['semail'];
                $sauditor = $_POST['sauditor'];
               
            
            
           $querysite =  "INSERT INTO site(`site_producer`, `site_product`, `site_address`, `site_phone`, `site_email`, `site_auditor`) VALUES ( '$producer_id','$sp', '$saddress' , '$sphope', '$semail', '$sauditor' )";}
        echo($queryi);
         if(mysqli_query($conn,$querym)&&mysqli_query($conn,$querysite)&&mysqli_query($conn,$querytp)&&mysqli_query($conn,$querye)&&mysqli_query($conn,$querypac)&& mysqli_multi_query($conn,$queryi))
		{
			
			?>
			<script type="text/javascript">
            alert("success");
			//window.location.href = '../pages/producer.php';
			</script>
			<?php 
   }
   else{
    echo "Error : " . mysqli_error($conn);
}}
		
        

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
                        <h1 class="page-header">ADD PRODUCER</h1>   
              



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
.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
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

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>



<div class="col-lg-12" >
<div class="col-lg-6" >
<h2 style="display:inline-block" >Add Producer:</h2> <button style="display:inline-block" class = "collapsible" type="button" onclick='toggle(this)' id="edit">+ </button>
   <div class ="content">
   
<form   action="addproducer.php" method="POST">
Company name:  <input type="text" name="company_name" style="float:right;" onkeyup="saveValue(this);" required="required">

<br>
<br>
Owner Religion:  <input type="text" name="religion" style="float:right;" required="required" >

<br>
<br>
Primary business:  <input type="text" name="primary_business" style="float:right;" required="required">
<br>
<br>
 
 

Address:  <input type="text" name="address" style="float:right;" required="required">
<br>
<br>
Email:  <input type="text" name="email" style="float:right;" required="required">
<br>
<br>

Phone number:  <input type="number" name="phone1" style="float:right;" required="required">
<br>
<br>
Secondary phone number:  <input type="number" name="phone2" style="float:right;" required="required">
<br>
<br>
Website:  <input type="text" name="website" style="float:right;" required="required">
<br>
<br>

Allied businesses:  <input type="text" name="allied_business" style="float:right;" required="required">
<br>
<br>
Affiliations:  <input type="text" name="affiliations" style="float:right;" required="required">
<br>
<br>
Annual Turn over:  <input type="number" name="annual" style="float:right;" required="required">
<br>
<br>
NTN #:  <input type="number" name="ntn" style="float:right;"  >
<br>
<br>
GST #:  <input type="number" name="gst" style="float:right;"  >
<br>
<br>

Shift timings:  <textarea type="text" name="shift"  style="float:right;" required="required"></textarea>
<br>
<br>
<br>
<br>
<br>



Scope of operations:  <textarea type="text" name="scope"  style="float:right;" required="required"></textarea>
<br>
<br>
<br>
<br>

no of products to certify:  <input type="number" name="no_of_products" style="float:right;" required="required">
<br>
<br>
PS 3733:  <input type="number" name="ps" style="float:right;" required="required">
<br>
<br>
MS1500:  <input type="number" name="ms" style="float:right;" required="required">
<br>
<br>



 
 
Halal assurance system:  <textarea type="text" name="halal_assunace_system"  style="float:right;" required="required"></textarea>
</div>
</div>



<div class="col-lg-6" >
<h2 style="display:inline-block"> Employees:</h2> <button style="display:inline-block" class = "collapsible" type="button">+ </button>
   <div class ="content">
<h3 style="display:inline-block"> Management:</h3> <button style="display:inline-block" class = "collapsible" type="button">+ </button>
   <div class ="content">
Name:  <input type="text" name="mn" style="float:right;" required="required">

<br>
<br>

Designation:  <input type="text" name="md" style="float:right;" required="required">

<br>
<br>
phone:  <input type="number" name="mp" style="float:right;" required="required">

<br>
<br>
email:  <input type="text" name="me" style="float:right;" required="required">
</div>
<br>
<br>
<br>

<h3 style="display:inline-block"> Strength:</h3> <button style="display:inline-block" class = "collapsible" type="button">+ </button>
<div class ="content">

<br>
<br>
<br>
Total no of employees:  <input type="number" name="et" style="float:right;" required="required">

<br>
<br>

No of production employees:  <input type="number" name="ep" style="float:right;" required="required">

<br>
<br>

No of logistic employees:  <input type="number" name="el" style="float:right;" required="required">

<br>
<br>

No of quality assurance employees:  <input type="number" name="eq" style="float:right;" required="required">

<br>
<br>

No of administrative employees:  <input type="number" name="ea" style="float:right;" required="required">

<br>
<br>

No of other employees:  <input type="number" name="eo" style="float:right;" required="required">

<br>
<br>

</div>
</div>
</div>
<div class="col-lg-6" >
<h2 style="display:inline-block"> Third party company (if any):</h2> <button style="display:inline-block" class = "collapsible" type="button">+ </button>
   <div class ="content">

<h2> Third party company if any:</h2>
<br>
<br>

Task:  <input type="text" name="tpt" style="float:right;" required="required">

<br>
<br>

Name:  <input type="text" name="tpn" style="float:right;" required="required">

<br>
<br>

Address:  <input type="text" name="tpa" style="float:right;" required="required">

<br>
<br>

Contact:  <input type="number" name="tpc" style="float:right;" required="required">

<br>
<br>

</div>
</div>

<div class="col-lg-6" >
<h2 style="display:inline-block"> Products:</h2>  <button style="display:inline-block" class = "collapsible" type="button">+ </button>
   <div class ="content">

<br>
<br>

Name:  <input type="text" name="pname" style="float:right;" required="required">

<br>
<br>

Detail:  <input type="text" name="pdet" style="float:right;" required="required">

<br>
</div>
</div>
<br>
<div class=" col-lg-12"  >
<h2 style="display:inline-block"> Ingredients:</h2> <button style="display:inline-block" class = "collapsible" type="button"> + </button>
   <div class ="content table-container"  style="" >
<style> 
input{
    border-collapse: collapse;
    width:90%;

}
#ing{
    table-layout: fixed; width: 120%;
    
}
#ing th{
    font-size:10px;
}
#ing .table-container {
  overflow-x: auto;
}
</style>



      

</script>

<table  class="table table-striped table-bordered" id="table_field" >

<tr><th> Name:</th>

<th>
Producer name:</th> 


<th>
Producer contact:</th>


<th>
Producer address:</th> 

<th>
supplier name:</th>

<th>
supplier contact:</th>  
<th>
supplier address:</th> 

<th>
Halal certified name:</th> 
<th>
Halal certified contact: </th> 

<th>
Halal certified address: </th>
<th > ADD/REMOVE 
<input type="button" id="add" name="add" class="btn btn-success" value="ADD MORE"></input> </th>
</tr>
    
<tr>
 <td> <input type="text" class="form-control" name="in[]"  required> </td>
<td> <input type="text" class="form-control" name="ipn[]" required> </td>
 <td> <input type="number" class="form-control" name="ipc[]" required> </td>
  <td> <input type="text" class="form-control" name="ipa[]" required> </td>
   <td> <input type="text" class="form-control" name="isn[]" required> </td>
    <td> <input type="number" class="form-control" name="isc[]" required> </td>
    <td> <input type="text" class="form-control" name="isa[]" required></td>
    <td> <input type="text" class="form-control" name="ihn[]" required></td>
    <td>  <input type="number" class="form-control" name="ihc[]" required></td>
    <td> <input type="text" class="form-control" name="iha[]" required></td>
    <td><input type="button" class="btn btn-danger btn_remove" value="X"></input></td>
    </tr>


</table>


</div>

</div>


<div class="col-lg-6" >
<h2 style="display:inline-block"> Packaging:</h2> <button style="display:inline-block" class = "collapsible" type="button">+ </button>
   <div class ="content">
<br>

Name:  <input type="text" name="pn" style="float:right;" required="required">

<br>
<br>

Producer name:  <input type="text" name="ppn" style="float:right;" required="required">

<br>
<br>
Producer contact:  <input type="number" name="ppc" style="float:right;" required="required">

<br>
<br>

Producer address:  <input type="text" name="ppa" style="float:right;" required="required">

<br>
<br>

supplier name:  <input type="text" name="psn" style="float:right;" required="required">

<br>
<br>
supplier contact:  <input type="number" name="psc" style="float:right;" required="required">

<br>
<br>

supplier address:  <input type="text" name="psa" style="float:right;" required="required">

<br>
<br>

Halal certified by name:  <input type="text" name="phn" style="float:right;" required="required">

<br>
<br>
Halal certified by contact:  <input type="number" name="phc" style="float:right;" required="required">

<br>
<br>

Halal certified by address:  <input type="text" name="pha" style="float:right;" required="required">

<br>
<br>
<br>
<br>
</div>
</div>
<div class="col-lg-6" >
<h2 style="display:inline-block "> Site:</h2> <button style="display:inline-block" class = "collapsible" type="button"> + </button>
   <div class ="content">
<br>

Product:  <input type="text" name="sproduct" style="float:right;" required="required">

<br>
<br>

Address:  <input type="text" name="saddress" style="float:right;" required="required">

<br>
<br>
phone:  <input type="number" name="sphone" style="float:right;" required="required">

<br>
<br>
email:  <input type="text" name="semail" style="float:right;" required="required">

<br>
<br>

auditor:  <input type="number" name="sauditor" style="float:right;" required="required">

<br>
<br>
<br>
<br>
</div>
</div>

<center>

<div  class='col-lg-12' style="align-item:center" >
		<input type='submit' name='submit' value='SAVE' style="background-color: lightgreen; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    align ='center';
    width:50%;">

</div>
</center>		
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
    <!-- /#wrapper -->
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

<script>  
    var html = '<tr> <td> <input type="text" class="form-control" name='"in[]"'  > </td> <td> <input type="text" class="form-control" name="ipn[]" > </td> <td> <input type="number" class="form-control" name="ipc[]" > </td> <td> <input type="text" class="form-control" name="ipa[]" > </td> <td> <input type="text" class="form-control" name="isn[]" > </td> <td> <input type="number" class="form-control" name="isc[]" > </td><td> <input type="text" class="form-control" name="isa[]" ></td><td> <input type="text" class="form-control" name="ihn[]" ></td><td>  <input type="number" class="form-control" name="ihc[]" ></td><td> <input type="text" class="form-control" name="iha[]" required="required"></td><td><input type="button" name="remove" id="remove"  class="btn btn-danger btn_remove" value="X"></input></td></tr>';
    
    var x =1;
    
    $('#add').click(function(){
        alert('x');
        $('#table_field').append(html);
        x++;
    });


</script>

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
