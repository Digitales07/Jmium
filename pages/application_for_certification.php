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

    <title>Application of Certification</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/pla0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
ul {
  list-style-type: none;
}
table, th, td {
  border: 3px solid green;
  border-collapse: collapse;
}
input{
    border:none;
    outline:0;
}
textarea{
  border: 1px solid blue;
}


</style>
</head>

<body>
<?php

if(isset($_POST['submit']))
  {
    // company details
    $cn = $_POST['comp_name'];
    $pr = $_POST['pr'];
    $ab = $_POST['ab'];
    $religion = $_POST['religion'];
    if ($religion == 'other_check'){
        $religion = $_POST['other'];
    }
    $awabg = $_POST['awabg'];
    if ($awabg == 'yes'){
     $awabg = $_POST['afg'];
    }

    $annual_turnover = $_POST['at'];
    $ntn = $_POST['ntn'];
    $gst = $_POST['gst'];

// Employees
    $production = $_POST['production'];
    $logistics = $_POST['logistics'];
    $quality = $_POST['quality'];
    $other = $_POST['others'];
    $adhr = $_POST['adhr'];

// shift 
    $shift = $_POST['shift'];


    $scope = $_POST['sop'];
    $ptbc = $_POST['ptbc'];


// third party manufacturing 

    $tpname = $_POST['name'];
    $tpcontact = $_POST['contact'];

// standards to be audited

    $ps = $_POST['ps_op'];
    $ms = $_POST['ms_op'];

    // headquarter
    $haddress = $_POST['address'];
    $htel = $_POST['head_tel'];
    $nops = $_POST['nops'];
    
    $site1_address = $_POST['site1_address'];
    $site1_tel = $_POST['site1_tel'];
    $site1_email = $_POST['site1_email'];

    $site2_address = $_POST['site2_address'];
    $site2_tel = $_POST['site2_tel'];
    $site2_email = $_POST['site2_email'];

    // Management Contact
    
    $mc_name = $_POST['mc_name'];
    $mc_designation = $_POST['mc_designation'];
    $mc_email = $_POST['mc_email'];
    $mc_website = $_POST['mc_website'];


    //internal halal contact
    $ih_name = $_POST['ih_name'];
    $ih_designation = $_POST['ih_designation'];
    $ih_email = $_POST['ih_email'];
    $ih_website = $_POST['ih_website'];
    
    // Halal Management Committee

    $hmc_name1 = $_POST['hmc_name1'];
    $hmc_designation1 = $_POST['hmc_designation1'];
    $hmc_email1 = $_POST['hmc_email1'];
    $hmc_mobno1 = $_POST['hmc_mobno1'];

    $hmc_name2 = $_POST['hmc_name2'];
    $hmc_designation2 = $_POST['hmc_designation2'];
    $hmc_email2 = $_POST['hmc_email2'];
    $hmc_mobno2 = $_POST['hmc_mobno2'];

    $hmc_name3 = $_POST['hmc_name3'];
    $hmc_designation3 = $_POST['hmc_designation3'];
    $hmc_email3 = $_POST['hmc_email3'];
    $hmc_mobno3 = $_POST['hmc_mobno3'];

    $hmc_name4 = $_POST['hmc_name4'];
    $hmc_designation4 = $_POST['hmc_designation4'];
    $hmc_email4 = $_POST['hmc_email4'];
    $hmc_mobno4 = $_POST['hmc_mobno4'];

    $hmc_name5 = $_POST['hmc_name5'];
    $hmc_designation5 = $_POST['hmc_designation5'];
    $hmc_email5 = $_POST['hmc_email5'];
    $hmc_mobno5 = $_POST['hmc_mobno5'];


    // Halal Assurance System

    $has = $_POST['has_textarea'];


    //Factory Layout Drawing

    $brand_name= $_POST['brand_name'];



    //Product Composition

    $ing1 = $_POST['ing1'];
    $pro1 = $_POST['pro1'];
    $sup1 = $_POST['sup1'];
    $hc1 = $_POST['hc1'];


    $ing2 = $_POST['ing2'];
    $pro2 = $_POST['pro2'];
    $sup2 = $_POST['sup2'];
    $hc2 = $_POST['hc2'];

    $ing3 = $_POST['ing3'];
    $pro3 = $_POST['pro3'];
    $sup3 = $_POST['sup3'];
    $hc3 = $_POST['hc3'];

    $ing4 = $_POST['ing4'];
    $pro4 = $_POST['pro4'];
    $sup4 = $_POST['sup4'];
    $hc4 = $_POST['hc4'];

    $ing5 = $_POST['ing5'];
    $pro5 = $_POST['pro5'];
    $sup5 = $_POST['sup5'];
    $hc5 = $_POST['hc5'];

    $ing6 = $_POST['ing6'];
    $pro6 = $_POST['pro6'];
    $sup6 = $_POST['sup6'];
    $hc6 = $_POST['hc6'];

    $ing7 = $_POST['ing7'];
    $pro7 = $_POST['pro7'];
    $sup7 = $_POST['sup7'];
    $hc7 = $_POST['hc7'];

    $ing8 = $_POST['ing8'];
    $pro8 = $_POST['pro8'];
    $sup8 = $_POST['sup8'];
    $hc8 = $_POST['hc8'];

    $ing9 = $_POST['ing9'];
    $pro9 = $_POST['pro9'];
    $sup9 = $_POST['sup9'];
    $hc9 = $_POST['hc9'];

    $ing10 = $_POST['ing10'];
    $pro10 = $_POST['pro10'];
    $sup10 = $_POST['sup10'];
    $hc10 = $_POST['hc10'];


    //Product Packaging

    $pping1 = $_POST['pping1'];
    $pppro1 = $_POST['pppro1'];
    $ppsup1 = $_POST['ppsup1'];
    $pphc1 = $_POST['pphc1'];

    $pping2 = $_POST['pping2'];
    $pppro2 = $_POST['pppro2'];
    $ppsup2 = $_POST['ppsup2'];
    $pphc2 = $_POST['pphc2'];

    $pping3 = $_POST['pping3'];
    $pppro3 = $_POST['pppro3'];
    $ppsup3 = $_POST['ppsup3'];
    $pphc3 = $_POST['pphc3'];

    $pping4 = $_POST['pping4'];
    $pppro4 = $_POST['pppro4'];
    $ppsup4 = $_POST['ppsup4'];
    $pphc4 = $_POST['pphc4'];


    //JMUIM USE

    $fc = $_POST['farming_check'];
    $pc1 = $_POST['processing1_check'];
    $pc3 = $_POST['processing3_check'];
    $fpc = $_POST['fproduction_check'];
    $bcc = $_POST['bchem_check'];


    $jm = $_POST['jm'];


    $jm_name = $_POST['jm_name'];
    $jm_pos = $_POST['jm_pos'];
    $jm_sig = $_POST['jm_sig'];
    $jm_date = $_POST['jm_date'];
    $jm_remark = $_POST['jm_remark'];


    $cp = $_POST['cp'];
    $am = $_POST['am'];
    $ts = $_POST['ts'];
    $hsa = $_POST['hsa'];
    $ec = $_POST['ec'];
    $crc = $_POST['crc'];
    $napdfv = $_POST['napdfv'];
    $tpm = $_POST['tpm'];
    $dlp = $_POST['dlp'];
    $coi = $_POST['coi'];
    $naamomotf = $_POST['naamomotf'];
    $hsfti = $_POST['hsfti'];
    $mpfc = $_POST['mpfc'];
    $mlfca = $_POST['mlfca'];
    $plm = $_POST['plm'];
    $cvhcoi = $_POST['cvhcoi'];
    $cic = $_POST['cic'];
   
    $query = "INSERT INTO AppForCertificate(`cn`,`pr`,`ab`,`religion`, `awabg`, `annual_turnover`, `ntn` , `gst`, `shift`, `scope`,`ptbc`,`production`,`logistics`,`quality`, `other`, `adhr`,`tpname`,`tpcontact`,`ps_op`,`ms_op`,`haddress`,`htel`,`nops`,`site1_address`,`site1_tel`,`site1_email`,`site2_address`,`site2_tel`,`site2_email`,`mc_name`,`mc_designation`,`mc_email`,`mc_website`,`ih_name`,`ih_designation`,`ih_email`,`ih_website`,`hmc_name1`,`hmc_designation1`,`hmc_email1`,`hmc_mobno1` ,`hmc_name2`,`hmc_designation2`,`hmc_email2`,`hmc_mobno2` ,`hmc_name3`,`hmc_designation3`,`hmc_email3`,`hmc_mobno3` ,`hmc_name4`,`hmc_designation4`,`hmc_email4`,`hmc_mobno4` ,`hmc_name5`,`hmc_designation5`,`hmc_email5`,`hmc_mobno5`,`has_textarea`,`brand_name`,`ing1`,`pro1`,`sup1`,`hc1`,`ing2`,`pro2`,`sup2`,`hc2`,`ing3`,`pro3`,`sup3`,`hc3`,`ing4`,`pro4`,`sup4`,`hc4`,`ing5`,`pro5`,`sup5`,`hc5`,`ing6`,`pro6`,`sup6`,`hc6`,`ing7`,`pro7`,`sup7`,`hc7`,`ing8`,`pro8`,`sup8`,`hc8`,`ing9`,`pro9`,`sup9`,`hc9`,`ing10`,`pro10`,`sup10`,`hc10`,`pping1`,`pppro1`,`ppsup1`,`pphc1`,`pping2`,`pppro2`,`ppsup2`,`pphc2`,`pping3`,`pppro3`,`ppsup3`,`pphc3`,`pping4`,`pppro4`,`ppsup4`,`pphc4`,`fc`,`pc1`,`pc3`,`bcc`,`jm`,`jm_name`,`jm_pos`,`jm_sig`,`jm_date`,`jm_remark`,`cp`,`am`,`ts`,`hsa`,`ec`,`crc`,`napdfv`,`tpm`,`dlp`,`coi`,`naamomotf`,`hsfti`,`mpfc`,`mlfca`,`plm`,`cvhcoi`,`cic`,`fpc`) 
    VALUES ('$cn','$pr','$ab','$religion', '$awabg', '$annual_turnover', '$ntn' , '$gst', '$shift', '$scope','$ptbc','$production','$logistics','$quality', '$other', '$adhr','$tpname','$tpcontact','$ps','$ms','$haddress','$htel','$nops','$site1_address','$site1_tel','$site1_email','$site2_address','$site2_tel','$site2_email','$mc_name','$mc_designation','$mc_email','$mc_website','$ih_name','$ih_designation','$ih_email','$ih_website','$hmc_name1','$hmc_designation1','$hmc_email1','$hmc_mobno1' ,'$hmc_name2','$hmc_designation2','$hmc_email2','$hmc_mobno2' ,'$hmc_name3','$hmc_designation3','$hmc_email3','$hmc_mobno3' ,'$hmc_name4','$hmc_designation4','$hmc_email4','$hmc_mobno4' ,'$hmc_name5','$hmc_designation5','$hmc_email5','$hmc_mobno5','$has','$brand_name','$ing1','$pro1','$sup1','$hc1','$ing2','$pro2','$sup2','$hc2','$ing3','$pro3','$sup3','$hc3','$ing4','$pro4','$sup4','$hc4','$ing5','$pro5','$sup5','$hc5','$ing6','$pro6','$sup6','$hc6','$ing7','$pro7','$sup7','$hc7','$ing8','$pro8','$sup8','$hc8','$ing9','$pro9','$sup9','$hc9','$ing10','$pro10','$sup10','$hc10','$pping1','$pppro1','$ppsup1','$pphc1','$pping2','$pppro2','$ppsup2','$pphc2','$pping3','$pppro3','$ppsup3','$pphc3','$pping4','$pppro4','$ppsup4','$pphc4','$fc','$pc1','$pc3','$bcc','$jm','$jm_name','$jm_pos','$jm_sig','$jm_date','$jm_remark','$cp','$am','$ts','$hsa','$ec','$crc','$napdfv','$tpm','$dlp','$coi','$naamomotf','$hsfti','$mpfc','$mlfca','$plm','$cvhcoi','$cic','$fpc')";

if (mysqli_multi_query($conn, $query)) {
                
} 
else{
    echo "Error: " . mysqli_error($conn);
}


  }
  
  
  
  ?>

<form  method="POST" >
<div class="image" style="text-align: center;">
                <img style="width: 80%;margin-left:auto;margin-right:auto;"    src= '../images/f9_top_heading.png'>                        
                </div>

<div style="margin-left:auto;margin-right:auto; width:80% " >
<div class="col-lg-12">
<p> if you wish to submit an application for Halal certification, please provide the information and fill the form below. The information may include supporting documents to assist the Management of JMUIM in optimum processing of your application. All areas contained by this form are mandatory to be filled by the applicant   </p>

<h4  style="background-color:#4CAF50;color:white;">Applicant's Privileges</h4>
<p>By completing this form and submitting your application to our office, you will be entitled as 'Applicant' to various rights provided by the Management, including;</p>
<ul>
<li> <span class="glyphicon glyphicon-minus" style="color:green"></span> A formal receipt/acknowledgement of submission</li>
<li> <span class="glyphicon glyphicon-minus" style="color:green"></span> Adequacy of your application</li>
<li> <span class="glyphicon glyphicon-minus" style="color:green"></span> Notification of process initiation</li>
<li> <span class="glyphicon glyphicon-minus" style="color:green"></span> An opportunity to make submission on the application, and what you fell are appropiate disciplinary or corrective measures </li>
</ul>
<p>Depending on the information provided, this application may or may not result in processing and you will not have the same rights as an 'Applicant' as set out above. All Applications are recorded and reviewed by the Management</p>

<h4  style="background-color:#4CAF50;color:white;">A. Company Profile</h4>
<p><b>Company Overview:</b></p>
<table >
<tr>
<td style="width:330px;background-color:#C1F9AB" class="first_column" > Company Name: </td>
<td style="width:80%;" colspan='2' > <input type="text" style="width:100%;" name="comp_name"> </td>
</tr>
<tr>
<td style="background-color:#C1F9AB" >OwnerShip:</td>
<td colspan='2'><input type="radio" required name="religion" value="muslim" style="margin-left:10%" onclick="var input = document.getElementById('other'); if(input.disabled != true ){input.disabled = true;}"> Muslim
<input type="radio" name="religion" required value="christian" style="margin-left:10%" onclick="var input = document.getElementById('other'); if(input.disabled != true ){input.disabled = true;}"> Christian
<input type="radio" name="religion" required value="Jew" style="margin-left:10%" onclick="var input = document.getElementById('other'); if( input.disabled != true ){input.disabled = true;}"> Jew
<input type="radio" name="religion" required value="other_check" style="margin-left:10%" onclick="var input = document.getElementById('other'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}"> Other 
<input type="text" name="other_text" id="other" style="border-bottom: 1px solid blue;" disabled style="margin-left:5%;
  border-width: 0 0 2px;
  border-color: black;">

</td>
</tr>
<tr> <td style="background-color:#C1F9AB" > Primary Bussiness: </td>
<td colspan='2' > <input type="text" required style="width:100%;" name="pr"> </td>
 </tr>
<tr>
<td  style="background-color:#C1F9AB"> Allied Bussiness(es)</td>
<td colspan='2'><input type="text" required style="width:100%;" name="ab"></td>
</tr>
<tr> <td  style="background-color:#C1F9AB"> Affiliation(s) with any business group </td>
<td colspan='2' > <input type="radio" required name="awabg" value="no" style="margin-left:10%" onclick="var input = document.getElementById('afg'); if(input.disabled != true ){input.disabled = true;}" > No
<input type="radio" name="awabg" required value="yes" style="margin-left:10%" onclick="var input = document.getElementById('afg'); if(this.checked){ input.disabled = false; input.focus();}else{input.disabled=true;}" > Yes(Name)
<input type="text" name="awabg_text" id="afg" style="border-bottom: 1px solid blue;" disabled style="margin-left:5%;
  border-width: 0 0 2px;
  border-color: blue;">
</td>
 </tr>
 <tr><td style="background-color:#C1F9AB" > Annual Turnover (PKR) </td>
 <td colspan='2'> <input type="number" required style="width:100%;" name="at"> </td>
 </tr>

 <tr><td style="background-color:#C1F9AB" > Legal Registrations </td>
 <td colspan='2' > <label style="margin-left:5%" for="ntn"> NTN NO.: </label> <input type="number" required name ="ntn" style="border-bottom: 1px solid blue;" > <label style="margin-left:5%" for="gst"> GST NO.: </label> <input type="number" required name ="gst" style="border-bottom: 1px solid blue;"> </td>

 </tr>
<tr>
<td rowspan=4 style="background-color:#C1F9AB" >No of Employees:</td>
<td colspan='2'> Total Employees:</td>
</tr>
<tr><td colspan='1' > <label for="productions"> Production: </label> <input type="number" required name ="production" style="border-bottom: 1px solid blue;" > </td> <td colspan='1'> <label for="log"  style= 'margin-left:5%; vertical-border:1px solid green'> Logistics: </label> <input type="number" required name ="logistics" style="border-bottom: 1px solid blue;" >  </td></tr>
<tr><td colspan='1'> <label for="quality"> Quality: </label> <input type="number" required name ="quality" style="border-bottom: 1px solid blue;" > </td> <td colspan='1'><label for="others"  style= 'margin-left:5%; vertical-border:1px solid green'> Others: </label> <input type="number" required name ="others" style="border-bottom: 1px solid blue;" >  </td></tr>
<tr> <td colspan='2'><label for="adhr"> Admin & HR: <input type="number" required name="adhr" > </td> </tr>

<tr>
<td style="background-color:#C1F9AB"> Shift Details: </td> 
<td colspan='2'> <input type="radio" name="shift" required value="morning" style="margin-left:20%"> Morning 
 <input type="radio" name="shift" value="evening" required style="margin-left:20%"> Evening 
 <input type="radio" name="shift" value="both" required style="margin-left:20%"> Both </td>
</tr>


<tr>
<td  style="background-color:#C1F9AB"> Scope of Operation(s)</td>
<td colspan='2'><input type="text" required style="width:100%;" name="sop"></td>
</tr>

<tr>
<td  style="background-color:#C1F9AB"> No. of Products to be certified </td>
<td colspan='2'><input type="number" required style="width:100%;" name="ptbc"></td>
</tr>

<tr>
<td style="background-color:#C1F9AB"> Third Party Manufacturing: </td>
<td colspan='2' > <label for="name"  style="margin-left:15%;"> Name: </label> <input type="text" required style="border-bottom: 1px solid blue;" name="name" > <label for="contact" style="margin-left:25%">Contact: </label> <input type="number" required style="border-bottom: 1px solid blue;" name="contact" >   </td>
</tr>

<tr>
<td style="background-color:#C1F9AB">Standard(s) to be Audited:</td>
<td colspan='2' > <p> Please check the standard you are applying for conformity assessment. You can check both</p>
<input type="checkbox" name="ps" onclick="var i = document.getElementById('ps_op'); if (i.value==0){i.value=1;}else{i.value=0;}"  style="outline:2px solid green ;margin-left:15%">  PS:3733
<input type="checkbox" name="ms" onclick="var i = document.getElementById('ms_op'); if (i.value==0){i.value=1;}else{i.value=0;}"  style="outline:2px solid green ;margin-left:15%">  MS:1500 </td>
</tr>

<input type="hidden" name="ps_op" id="ps_op" value="0">
<input type="hidden" name="ms_op" id="ms_op" value="0">


<tr>
<td rowspan='9' style="background-color:#C1F9AB" > Geographical Location(s): </td>
<td colspan='2' ><b> HEAD QUARTER: </b> <br>

<label style="inline-block" for="head_address"> Address:</label> <input type="text" required name="address" style="width:80%; border-bottom: 1px solid blue; style=inline-block; " ><br>
   <label for="tel"> Tel: </label> <input type="number" required name="head_tel" style="border-bottom: 1px solid blue;"> <label for="head_email" style="margin-left:20%;"> Email: </label> <input type="text" required name="email" style="border-bottom: 1px solid blue;" >
 </td>
 </tr>
<tr>
<td colspan='2'>
No. of Production Sites: <input type="number" required name="nops" style="width:70%;border-bottom: 1px solid blue;" >
<br>
<br>
</td></tr>

<tr>
<td>
<b>SITE 01:</b> <br>
Address: <input type="text" required name="site1_address" style="width:84%;border-bottom: 1px solid blue;" ><br>
Tel: <input type="number" required name="site1_tel" style="width:90%;border-bottom: 1px solid blue;" > <br>
Email: <input type="text" required name="site1_email" style="width:90%;border-bottom: 1px solid blue;" > <br>
<br>
</td>
<td>
<b>SITE 02:</b> <br>
Address: <input type="text" required name="site2_address" style="width:84%;border-bottom: 1px solid blue;" ><br>
Tel: <input type="number" required name="site2_tel" style="width:90%;border-bottom: 1px solid blue;" > <br>
Email: <input type="text" required name="site2_email" style="width:90%;border-bottom: 1px solid blue;" > 
<br>
 <br>
</td>
</tr>
</table>
<br>

<h2> Management Contact:</h2>
<table class="col-lg-12">
<tr>
<td colspan='1' style="background-color:#C1F9AB">Name:</td>
<td colspan='5' > <input type="text required" name='mc_name' style="border-bottom: 1px solid blue; width:100%"> </td>
</tr>
<td style="text-align:center;background-color:#C1F9AB" > Designation: </td>
<td> <input type="text" required name='mc_designation' style="border-bottom: 1px solid blue;width:100%"></td>
<td style="text-align:center;background-color:#C1F9AB">Email:</td>
<td> <input type="text" required name='mc_email' style="border-bottom: 1px solid blue;width:100%"> </td>
<td style="text-align:center;background-color:#C1F9AB">Website:</td>
<td> <input type="text" required name='mc_website' style="border-bottom: 1px solid blue;width:100%"> </td>
</table>
<br>

<br>

<h2> Internal Halal Contact:</h2>
<table class="col-lg-12">
<tr>
<td colspan='1' style="background-color:#C1F9AB">Name:</td>
<td colspan='5' > <input type="text" required name='ih_name' style="border-bottom: 1px solid blue; width:100%"> </td>
</tr>
<td style="text-align:center;background-color:#C1F9AB" > Designation: </td>
<td> <input type="text" required name='ih_designation' style="border-bottom: 1px solid blue;width:100%"></td>
<td style="text-align:center;background-color:#C1F9AB">Email:</td>
<td> <input type="text" required name='ih_email' style="border-bottom: 1px solid blue;width:100%"> </td>
<td style="text-align:center;background-color:#C1F9AB">Website:</td>
<td> <input type="text" required name='ih_website' style="border-bottom: 1px solid blue;width:100%"> </td>
</table>
<br>
<h2>Halal Management Committee</h2>
<table class="col-lg-12">
<tr>
<td style="text-align:center;background-color:#C1F9AB">Sr. No</td>
<td style="text-align:center;background-color:#C1F9AB"> Name </td>
<td style="text-align:center;background-color:#C1F9AB"> Designation </td>
<td style="text-align:center;background-color:#C1F9AB"> Email </td>
<td style="text-align:center;background-color:#C1F9AB"> Mobile No </td>
</tr>
<tr>
<td style="text-align:center;">01</td>
<td> <input type="text" name='hmc_name1' required style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="text" name='hmc_designation1' required style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="text" name='hmc_email1' required style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="number" name='hmc_mobno1' required style="border-bottom: 1px solid blue;width:100%"></td>
</tr>
<tr>
<td style="text-align:center;">02</td>
<td> <input type="text" name='hmc_name2' style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="text" name='hmc_designation2' style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="text" name='hmc_email2' style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="number" name='hmc_mobno2' style="border-bottom: 1px solid blue;width:100%"></td>
</tr>
<tr>
<td style="text-align:center;">03</td>
<td> <input type="text" name='hmc_name3' style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="text" name='hmc_designation3' style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="text" name='hmc_email3' style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="number" name='hmc_mobno3' style="border-bottom: 1px solid blue;width:100%"></td>
</tr>
<tr>
<td style="text-align:center;">04</td>
<td> <input type="text" name='hmc_name4' style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="text" name='hmc_designation4' style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="text" name='hmc_email4' style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="number" name='hmc_mobno4' style="border-bottom: 1px solid blue;width:100%"></td>
</tr>
<tr>
<td style="text-align:center;">05</td>
<td> <input type="text" name='hmc_name5' style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="text" name='hmc_designation5' style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="text" name='hmc_email5' style="border-bottom: 1px solid blue;width:100%"></td>
<td><input type="number" name='hmc_mobno5' style="border-bottom: 1px solid blue;width:100%"></td>
</tr>


</table>

<h3>Halal Assurance Sytem: <sub style="font-weight:none; font-size:10px">(Please describe briefly how do you assure compliance of the Halal system in your company)</sub> </h3>
<textarea name="has_textarea" required cols="166" rows="6"></textarea>

<style>
.signature_class {
  margin-left: 30px;
  margin-top:10px;
  height:100px;
  width: 150px;
  display:inline-block
}
</style>
<h3>Declaration</h3>
<table class="col-lg-12" >
<tr>
<td colspan="2"> <p> It is hereby stated that all information stated along with this application is true for best of my knowledge and is duly supported by the necessary documents. Furthermore, I agree to provide any Information or document required by JMUIM for the purpose of Halal Audit </p> </td>
</tr>
<tr>
<td colspan='1'> <span style="display:inline-block"> <p style="display:inline-block;margin-left:10px; vertical-align:top;"> <u> Signature: </u> </p><div class="signature_class" > </div> <p style="display:inline-block;margin-left:80px;vertical-align:top;"> <u> Date: </u> </p> <div class="signature_class"></div> </span>
</td>
<td colspan='1'>
<p style="display:inline-block;margin-left:10px; vertical-align:top;"> <u> Company Stamp: </u> </p><div class="signature_class" > </div> 
</td>
</tr>
</table>
<br>
<br>
<h3>Factory layout Drawing:</h3>
<h5>Please Enter the Image Diagram</h5>
<input type="file"  accept="image/*" name="layout_image" id="file"  onchange="loadFile(event)" >
<div style="width:100%; height:800px; border:1px solid black;display:block;">
<img id="output" style=" width:100% ;height:800px "/>	
</div>
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<br>
<br>
<h4  style="background-color:#4CAF50;color:white;">B. Product Profile</h4>
<h4>Product Information: <sub style="font-weight:none;font-size:10px;"> Use this form for each Product </sub> </h4>
<table class="col-lg-12">
<tr>
<td style="text-align:center;background-color:#C1F9AB;" > Brand Name</td>
<td> <input type="text" name="brand_name" required style="width:100%" >  </td>
</tr>
<tr>
  <td style="text-align:center;background-color:#C1F9AB;"> Process Details: </td>
  <td>(Please provide the flow diagram of the product manufacturing process)</td>
</tr>
<tr>
<script>
var loadFile1 = function(event) {
	var image = document.getElementById('output1');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

<td colspan='2' >
<input type="file"  accept="image/*" name="flow_image" id="file"  onchange="loadFile1(event)" >
<div style="width:100%; height:800px;">
<img id="output1" style=" width:100% ;height:800px "/>	
</div>
</td>
</tr>
</table>
<br>
<br>
<br>
<h4> Product Compositon/ Processing Materials / Chemicals:</h4>

<p style="font-weight:none;">(Enlist each & every ingredient / chemical used during the product processing.)</p>

<table class="col-lg-12">
<tr>
<td style="text-align:center;background-color:#C1F9AB;">Sr.</td>
<td style="text-align:center;background-color:#C1F9AB;">Ingredient</td>
<td style="text-align:center;background-color:#C1F9AB;">Produced by <br> <p style="font-size:12px"> (Name / Address / Contacts) </p></td>
<td style="text-align:center;background-color:#C1F9AB;">Supplied By <br> <p style="font-size:12px"> (Name / Address / Contacts) </p></td>
<td style="text-align:center;background-color:#C1F9AB;">Halal Certified By <br> <p style="font-size:12px"> (Name / Address / Contacts) </p></td>
</tr>
<tr>
<td>01</td>
<td> <input type="text" style="width:100%" name= "ing1"> </td>
<td> <input type="text" style="width:100%" name= "pro1"> </td>
<td> <input type="text" style="width:100%" name= "sup1"> </td>
<td> <input type="text" style="width:100%" name= "hc1"> </td>
</tr>
<tr>
<td>02</td>
<td> <input type="text" style="width:100%" name= "ing2"> </td>
<td> <input type="text" style="width:100%" name= "pro2"> </td>
<td> <input type="text" style="width:100%" name= "sup2"> </td>
<td> <input type="text" style="width:100%" name= "hc2"> </td>
</tr>
<tr>

<td>03</td>
<td> <input type="text" style="width:100%" name= "ing3"> </td>
<td> <input type="text" style="width:100%" name= "pro3"> </td>
<td> <input type="text" style="width:100%" name= "sup3"> </td>
<td> <input type="text" style="width:100%" name= "hc3"> </td>
</tr>
<tr>
<td>04</td>
<td> <input type="text" style="width:100%" name= "ing4"> </td>
<td> <input type="text" style="width:100%" name= "pro4"> </td>
<td> <input type="text" style="width:100%" name= "sup4"> </td>
<td> <input type="text" style="width:100%" name= "hc4"> </td>
</tr>
<tr>
<td>05</td>
<td> <input type="text" style="width:100%" name= "ing5"> </td>
<td> <input type="text" style="width:100%" name= "pro5"> </td>
<td> <input type="text" style="width:100%" name= "sup5"> </td>
<td> <input type="text" style="width:100%" name= "hc5"> </td>
</tr>
<tr>
<td>06</td>
<td> <input type="text" style="width:100%" name= "ing6"> </td>
<td> <input type="text" style="width:100%" name= "pro6"> </td>
<td> <input type="text" style="width:100%" name= "sup6"> </td>
<td> <input type="text" style="width:100%" name= "hc6"> </td>
</tr>
<tr>
<td>07</td>
<td> <input type="text" style="width:100%" name= "ing7"> </td>
<td> <input type="text" style="width:100%" name= "pro7"> </td>
<td> <input type="text" style="width:100%" name= "sup7"> </td>
<td> <input type="text" style="width:100%" name= "hc7"> </td>
</tr>
<tr>
<td>08</td>
<td> <input type="text" style="width:100%" name= "ing8"> </td>
<td> <input type="text" style="width:100%" name= "pro8"> </td>
<td> <input type="text" style="width:100%" name= "sup8"> </td>
<td> <input type="text" style="width:100%" name= "hc8"> </td>
</tr>
<tr>
<td>09</td>
<td> <input type="text" style="width:100%" name= "ing9"> </td>
<td> <input type="text" style="width:100%" name= "pro9"> </td>
<td> <input type="text" style="width:100%" name= "sup9"> </td>
<td> <input type="text" style="width:100%" name= "hc9"> </td>
</tr>
<tr>
<td>10</td>
<td> <input type="text" style="width:100%" name= "ing10"> </td>
<td> <input type="text" style="width:100%" name= "pro10"> </td>
<td> <input type="text" style="width:100%" name= "sup10"> </td>
<td> <input type="text" style="width:100%" name= "hc10"> </td>
</tr>
</table>

<h4>Product Packaging:</h4>
<table class="col-lg-12">
<tr>
<td style="text-align:center;background-color:#C1F9AB;">Sr.</td>
<td style="text-align:center;background-color:#C1F9AB;">Ingredient</td>
<td style="text-align:center;background-color:#C1F9AB;">Produced by <br> <p style="font-size:12px"> (Name / Address / Contacts) </p></td>
<td style="text-align:center;background-color:#C1F9AB;">Supplied By <br> <p style="font-size:12px"> (Name / Address / Contacts) </p></td>
<td style="text-align:center;background-color:#C1F9AB;">Halal Certified By <br> <p style="font-size:12px"> (Name / Address / Contacts) </p></td>
</tr>
<tr>
<td>01</td>
<td> <input type="text" style="width:100%" name= "pping1"> </td>
<td> <input type="text" style="width:100%" name= "pppro1"> </td>
<td> <input type="text" style="width:100%" name= "ppsup1"> </td>
<td> <input type="text" style="width:100%" name= "pphc1"> </td>
</tr>
<tr>
<td>02</td>

<td> <input type="text" style="width:100%" name= "pping2"> </td>
<td> <input type="text" style="width:100%" name= "pppro2"> </td>
<td> <input type="text" style="width:100%" name= "ppsup2"> </td>
<td> <input type="text" style="width:100%" name= "pphc2"> </td>
</tr>
<tr>
<td>03</td>
<td> <input type="text" style="width:100%" name= "pping3"> </td>
<td> <input type="text" style="width:100%" name= "pppro3"> </td>
<td> <input type="text" style="width:100%" name= "ppsup3"> </td>
<td> <input type="text" style="width:100%" name= "pphc3"> </td>
</tr>
<tr>
<td>04</td>
<td> <input type="text" style="width:100%" name= "pping4"> </td>
<td> <input type="text" style="width:100%" name= "pppro4"> </td>
<td> <input type="text" style="width:100%" name= "ppsup4"> </td>
<td> <input type="text" style="width:100%" name= "pphc4"> </td>
</tr>
</table>
<h3>Note: <sub style="font-weight:none; font-size:12px" >Please use extra sheet if necessary to provide the details of PRODUCT COMPOSITION /PROCESSING MATERIALS /CHEMICALS for each product</sub></h3>
<br>
<br>
<br>
<table style='width:100%;'>
<tr style="background-color:#4CAF50;color:white;"> <td> <h2 style="text-align:center" >FOR JMUIM USE ONLY</h2 > </td></tr>
<tr> <td > <p style="margin-left:10px;"> Application Catergory: </p><br> 


<input type="checkbox"  style="margin-left:25px;"name="farming1" id="farming1" onclick="var i = document.getElementById('fc'); if (i.value==0){i.value=1;}else{i.value=0;} ">A- Farming 1 (Animals) <br>
<input type="checkbox" style="margin-left:25px;" name="processing1" id="processing1" onclick="var i = document.getElementById('pc1'); if (i.value==0){i.value=1;}else{i.value=0;}" >C- Processing 1 (Perishable Animal products) <br>
<input type="checkbox" style="margin-left:25px;" name="processing3" id="processing3" onclick="var i = document.getElementById('pc3'); if (i.value==0){i.value=1;}else{i.value=0;}" >E- Processing 3 (Products with long shelf life at ambient temperature) <br>
<input type="checkbox" style="margin-left:25px;" name="fproduction1" id="fproduction1" onclick="var i = document.getElementById('fpc'); if (i.value==0){i.value=1;}else{i.value=0;}" >F- Feed production <br> 
<input type="checkbox" style="margin-left:25px;" name="bchem" id="bchem" onclick="var i = document.getElementById('bcc'); if (i.value==0){i.value=1;}else{i.value=0;}" >L- (Bio)chemical <br>

<input type="hidden" name="farming_check" id="fc" value="0">
<input type="hidden" name="processing1_check" id="pc1" value="0">
<input type="hidden" name="processing3_check" id="pc3" value="0">
<input type="hidden" name="fproduction_check" id="fpc" value="0">
<input type="hidden" name="bchem_check" id="bcc" value="0">


<br>
<p style="font-weight:none;font-size:16px;">Resources are available to conduct timely assessment according to JMUIM policies, competence and availability of suitable Auditors/Experts</p>
<br>
<input type="radio" name="jm" value="yes" style="margin-left:25px;"> YES <br>
<input type="radio" name="jm" value="no"  style="margin-left:25px;"> NO <br>
<br> 
 </td> </tr>
</table>

<br>

<table class="col-lg-12">
<tr><td colspan='2'> Application Reviewed by:</td></tr>
<tr> <td colspan='1'> <u> Name: </u> <input type="text" style="width:80%;border-bottom: 1px solid blue;margin-left:10px;" name='jm_name'>  </td> 
<td colspan='1'> <u> Position: </u> <input type="text" style="width:80%;border-bottom: 1px solid blue;margin-left:10px;" name='jm_pos'>  </td>
</tr>
<tr>
<td colspan='1'> <u> Signature: </u> <input type="text" style="width:80%;border-bottom: 1px solid blue;margin-left:10px;" name='jm_sig'>  </td>
<td colspan='1'> <u> Date of Approval: </u> <input type="text" style="width:80%;border-bottom: 1px solid blue;margin-left:10px;" name='jm_date'>  </td>
</tr>
<tr>

<td colspan='2'> <u>Remarks:</u> <input type="text" style="width:80%;border-bottom: 1px solid blue;margin-left:10px;" name='jm_remark'> </td>

</tr>
</table>



<h2 style="text-align:center;margin-top:5%;" class="col-lg-12">Annex</h2>
<h4 style="text-align:center;">LIST OF CERTIFICATES/DOCUMENTS FOR INITIAL CERTIFICATION APPLICATION </h4>
<br>
<br>
<table class="col-lg-12">
<tr>
<th style="text-align:center;">No</th>
<th >Items</th>
<th style="text-align:center;">Check</th>
</tr>
<tr>
<td style="text-align:center;">1</td>
<td >Company Profile</td>
<td > <input type="text" name="cp" style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">2</td>
<td >Application & MOU</td>
<td> <input type="text" name="am" style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">3</td>
<td >Training Schedule</td>
<td> <input type="text" name='ts' style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">4</td>
<td >Halal Assurance System</td>
<td> <input type="text" name="hsa" style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">5</td>
<td >Employees contract(Shariah Advisor)</td>
<td> <input type="text" name='ec' style="width:100%;"> </td>
</tr>

<tr> 
<td style="text-align:center;">6</td>
<td>Company Registration Certificate</td>
<td> <input type="text" name="crc" style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">7</td>
<td>Name and Product description/menu for verification</td>
<td> <input type="text" name="napdfv" style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">8</td>
<td>Type of packaging materials</td>
<td> <input type="text" name="tpm" style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">9</td>
<td>Design and label of products</td>
<td> <input type="text" name="dlp" style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">10</td>
<td>Contents of ingredients</td>
<td> <input type="text" name="coi" style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">11</td>
<td>Names and addresses of manufacturers/supplier of the ingredients</td>
<td> <input type="text" name="naamomotf" style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">12</td>
<td>Halal status for the ingredients and the Halal certificate or the product specification for critical ingredients (if applicable).</td>
<td> <input type="text" name="hsfti" style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">13</td>
<td>Manufacturing process flow chart and production procedures</td>
<td> <input type="text" name="mpfc" style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">14</td>
<td>Manufacturing license from Control Authority (For health Products)</td>
<td> <input type="text" name="mlfca" style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">15</td>
<td>Premise/Factoru location map</td>
<td> <input type="text" name="plm" style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">16</td>
<td>Copy of valid Halal certificate of ingredients or copy of product specification.</td>
<td> <input type="text" name="cvhcoi" style="width:100%;"> </td>
</tr>

<tr>
<td style="text-align:center;">17</td>
<td>Copies of identity cards and offer letter for two(2) Muslims with Pakistani citizenship at the production area, or chef at the food outlet/premises</td>
<td> <input type="text" name="cic" style="width:100%;"> </td>
</tr>


</table>

</div>

</div>

<div class="col-lg-12"> 
<br>
<br>
<button type="submit" name='submit' value='submit' style="text-align:center; margin-left:50%;"> Submit </button>
<br>
<br>
</div>


</form>
<br>
<br>
</body>
