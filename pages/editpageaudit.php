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

    <title>Audit</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/pla0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<style>
table, th, td {
  border: 1px solid green;
  border-collapse: collapse;
}
.table1 td{
    text-align:center;
    background-color:#C1F9AB ;
    font-family: Times New Roman; 
    font-weight: bold;
}
input{
    border:none;
}
.management-responsibility input{
    border:1px solid black;
}
</style>

<?php

if(isset($_POST['submit']))
	{   
        $id = $_POST['aid'];
        $auditee = $_POST['auditee'];
    $scope = $_POST['scope'];
    $standard = $_POST['standard'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $auditor = $_POST['auditor'];
    
    $name1 = $_POST['name1'];
    $designation1 = $_POST['designation1'];
    $som1 = $_POST['som1'];
    $scm1 = $_POST['scm1'];
    
    $name2 = $_POST['name2'];
    $designation2 = $_POST['designation2'];
    $som2 = $_POST['som2'];
    $scm2 = $_POST['scm2'];

    $name3 = $_POST['name3'];
    $designation3 = $_POST['designation3'];
    $som3 = $_POST['som3'];
    $scm3 = $_POST['scm3'];

    $name4 = $_POST['name4'];
    $designation4 = $_POST['designation4'];
    $som4 = $_POST['som4'];
    $scm4 = $_POST['scm4'];

    $name5 = $_POST['name5'];
    $designation5 = $_POST['designation5'];
    $som5 = $_POST['som5'];
    $scm5 = $_POST['scm5'];

    $name6 = $_POST['name6'];
    $designation6 = $_POST['designation6'];
    $som6 = $_POST['som6'];
    $scm6 = $_POST['scm6'];

    $name7 = $_POST['name7'];
    $designation7 = $_POST['designation7'];
    $som7 = $_POST['som7'];
    $scm7 = $_POST['scm7'];

    $name8 = $_POST['name8'];
    $designation8 = $_POST['designation8'];
    $som8 = $_POST['som8'];
    $scm8 = $_POST['scm8'];

    $name9 = $_POST['name9'];
    $designation9 = $_POST['designation9'];
    $som9 = $_POST['som9'];
    $scm9 = $_POST['scm9'];


        $mr1 = $_POST['mr1'];
        $opmr1 = $_POST['opmr1'];
        $mr2 = $_POST['mr2'];
        $opmr2 = $_POST['opmr2'];
        $mr3 = $_POST['mr3'];
        $opmr3 = $_POST['opmr3'];
        $mr4 = $_POST['mr4'];
        $opmr4 = $_POST['opmr4'];
        $mr5 = $_POST['mr5'];
        $opmr5 = $_POST['opmr5'];
        $mr6 = $_POST['mr6'];
        $opmr6 = $_POST['opmr6'];
    
        $prem1 = $_POST['prem1'];
        $opprem1= $_POST['opprem1'];
        $prem2 = $_POST['prem2'];
        $opprem2= $_POST['opprem2'];
        $prem3 = $_POST['prem3'];
        $opprem3= $_POST['opprem3'];
    
        $dumpa1 = $_POST['dumpa1'];
        $opdumpa1 = $_POST['opdumpa1'];
        $dumpa2 = $_POST['dumpa2'];
        $opdumpa2 = $_POST['opdumpa2'];
        $dumpa3 = $_POST['dumpa3'];
        $opdumpa3 = $_POST['opdumpa3'];
    
        $hsfs1 =$_POST['hsfs1'];
        $ophsfs1 = $_POST['ophsfs1'];
        $hsfs2 =$_POST['hsfs2'];
        $ophsfs2 = $_POST['ophsfs2'];
        $hsfs3 =$_POST['hsfs3'];
        $ophsfs3 = $_POST['ophsfs3'];
        $hsfs4 =$_POST['hsfs4'];
        $ophsfs4 = $_POST['ophsfs4'];
        $hsfs5 =$_POST['hsfs5'];
        $ophsfs5 = $_POST['ophsfs5'];
        $hsfs6 =$_POST['hsfs6'];
        $ophsfs6 = $_POST['ophsfs6'];
        
        $phf1 = $_POST['phf1'];
        $opphf1 = $_POST['opphf1'];
        $phf2 = $_POST['phf2'];
        $opphf2 = $_POST['opphf2'];
        $phf3 = $_POST['phf3'];
        $opphf3 = $_POST['opphf3'];
        $phf4 = $_POST['phf4'];
        $opphf4 = $_POST['opphf4'];
        $phf5 = $_POST['phf5'];
        $opphf5 = $_POST['opphf5'];
        $phf6 = $_POST['phf6'];
        $opphf6 = $_POST['opphf6'];
        $phf7 = $_POST['phf7'];
        $opphf7 = $_POST['opphf7'];
    
        $stdsshf1 = $_POST['stdsshf1'];
        $opstdsshf1 = $_POST['opstdsshf1']; 
        $stdsshf2 = $_POST['stdsshf2'];
        $opstdsshf2 = $_POST['opstdsshf2'];
        $stdsshf3 = $_POST['stdsshf3'];
        $opstdsshf3 = $_POST['opstdsshf3'];
        $stdsshf4 = $_POST['stdsshf4'];
        $opstdsshf4 = $_POST['opstdsshf4'];
    
        $pla1 = $_POST['pla1'];
        $oppla1 = $_POST['oppla1'];
        $pla2 = $_POST['pla2'];
        $oppla2 = $_POST['oppla2'];
        $pla3 = $_POST['pla3'];
        $oppla3 = $_POST['oppla3'];
        $pla4 = $_POST['pla4'];
        $oppla4 = $_POST['oppla4'];
    
        $lr = $_POST['lr1'];
    
        $gr1 = $_POST['gr1'];
        $gr2 = $_POST['gr2'];
        $gr3 = $_POST['gr3'];
    
        $ac1 = $_POST['ac1'];
        $ac2 = $_POST['ac2'];
        $ac3 = $_POST['ac3'];
        $ac4 = $_POST['ac4'];
    
        $recom1 = $_POST['recom1'];
        $recom2 = $_POST['recom2'];
        $recom3 = $_POST['recom3'];
    
    
$querym = "UPDATE auditrecord set `auditee`='$auditee',`scope`= '$scope',`audit_standard`='$standard',`audit_data`='$date',`audit_location`='$location',`auditor`='$auditor',`name1`='$name1',`designation1`='$designation1',`som1`='$som1',`scm1`='$scm1',`name2`='$name2',`designation2`='$designation2',`som2`='$som2',`scm2`='$scm2',`name3`='$name3',`designation3`='$designation3',`som3`='$som3',`scm3`='$scm3',`name4`='$name4',`designation4`='$designation4',`som4`='$som4',`scm4`='$scm4',`name5`='$name5',`designation5`='$designation5',`som5`='$som5',`scm5`='$scm5',`name6`='$name6',`designation6`='$designation6',`som6`='$som6',`scm6`='$scm6',`name7`='$name7',`designation7`='$designation7',`som7`='$som7',`scm7`='$scm7',`name8`='$name8',`designation8`='$designation8',`som8`='$som8',`scm8`='$scm8',`name9`='$name9',`designation9`='$designation9',`som9`='$som9',`scm9`='$scm9',`prem1`='$prem1',`prem2`='$prem2',`prem3`='$prem3',`dumpa1`='$dumpa1',`dumpa2`='$dumpa2',`dumpa3`='$dumpa3',`hsfs1`='$hsfs1',`hsfs2`='$hsfs2',`hsfs3`='$hsfs3',`hsfs4`='$hsfs4',`hsfs5`='$hsfs5',`hsfs6`='$hsfs6',`phd1`='$phf1',`phd2`='$phf2',`phd3`='$phf3',`phd4`='$phf4',`phd5`='$phf5',`phd6`='$phf6',`phd7`='$phf7',`stdsshf1`='$stdsshf1',`stdsshf2`='$stdsshf2',`stdsshf3`='$stdsshf3',`stdsshf4`='$stdsshf4',`pla1`='$pla1',`pla2`='$pla2',`pla3`='$pla3',`pla4`='$pla4',`lr`='$lr',`gr1`='$gr1',`gr2`='$gr2',`gr3`='$gr3',`ac1`='$ac1',`ac2`='$ac2',`ac3`='$ac3',`rec1`='$recom1',`rec2`='$recom2',`rec3`='$recom3',`opmr1` = '$opmr1',`opmr2`=$opmr2,`opmr3`=$opmr3,`opmr4`=$opmr4,`opmr5`=$opmr5,`opmr6`=$opmr6,`opprem1`=$opprem1,`opprem2`=$opprem2,`opprem3`=$opprem3,`opdumpa1`=$opdumpa1,`opdumpa2`=$opdumpa2,`opdumpa3`=$opdumpa3,`ophsfs1`=$ophsfs1,`ophsfs2`=$ophsfs2,`ophsfs3`=$ophsfs3,`ophsfs4`=$ophsfs4,`ophsfs5`=$ophsfs5,`ophsfs6`=$ophsfs6,`opphf1`=$opphf1,`opphf2`=$opphf2,`opphf3`=$opphf3,`opphf4`=$opphf4,`opphf5`=$opphf5,`opphf6`=$opphf6,`opphf7`=$opphf7,`opstdsshf1`=$opstdsshf1,`opstdsshf2`=$opstdsshf2,`opstdsshf3`=$opstdsshf3,`opstdsshf4`=$opstdsshf4,`oppla1`=$oppla1,`oppla2`=$oppla2,`oppla3`=$oppla3,`oppla4`=$oppla4  where id = $id ";    

    if (mysqli_multi_query($conn, $querym)) {
    }
   
    }


 if(isset($_POST['edit']))
{
    $id = $_POST['pid'];

$queryp = "select * from AuditRecord where id='$id'";
$runp = mysqli_query($conn, $queryp)  or die("Error in Selecting " . mysqli_error($conn));
while ($rowp = mysqli_fetch_array($runp)) {
   
    $id = $rowp[0];
    $auditee = $rowp['auditee'];
    $scope = $rowp['scope'];
    $standard = $rowp['audit_standard'];
    $location = $rowp['audit_location'];
    $date = $rowp['audit_data'];
    $auditor = $rowp['auditor'];

    $name1 = $rowp['name1'];
    $designation1 = $rowp['designation1'];
    $som1 = $rowp['som1'];
    $scm1 = $rowp['scm1'];
    
    $name2 = $rowp['name2'];
    $designation2 = $rowp['designation2'];
    $som2 = $rowp['som2'];
    $scm2 = $rowp['scm2'];

    $name3 = $rowp['name3'];
    $designation3 = $rowp['designation3'];
    $som3 = $rowp['som3'];
    $scm3 = $rowp['scm3'];

    $name4 = $rowp['name4'];
    $designation4 = $rowp['designation4'];
    $som4 = $rowp['som4'];
    $scm4 = $rowp['scm4'];

    $name5 = $rowp['name5'];
    $designation5 = $rowp['designation5'];
    $som5 = $rowp['som5'];
    $scm5 = $rowp['scm5'];

    $name6 = $rowp['name6'];
    $designation6 = $rowp['designation6'];
    $som6 = $rowp['som6'];
    $scm6 = $rowp['scm6'];

    $name6 = $rowp['name6'];
    $designation6 = $rowp['designation6'];
    $som6 = $rowp['som6'];
    $scm6 = $rowp['scm6'];

    $name7 = $rowp['name7'];
    $designation7 = $rowp['designation7'];
    $som7 = $rowp['som7'];
    $scm7 = $rowp['scm7'];

    $name8 = $rowp['name8'];
    $designation8 = $rowp['designation8'];
    $som8 = $rowp['som8'];
    $scm8 = $rowp['scm8'];

    $name9 = $rowp['name9'];
    $designation9 = $rowp['designation9'];
    $som9 = $rowp['som9'];
    $scm9 = $rowp['scm9'];

    $mr1 = $rowp['mr1'];
    $opmr1 = $rowp['opmr1'];
    $mr2 = $rowp['mr2'];
    $opmr2 = $rowp['opmr2'];
    $mr3 = $rowp['mr3'];
    $opmr3 = $rowp['opmr3'];
    $mr4 = $rowp['mr4'];
    $opmr4 = $rowp['opmr4'];
    $mr5 = $rowp['mr5'];
    $opmr5 = $rowp['opmr5'];
    $mr6 = $rowp['mr6'];
    $opmr6 = $rowp['opmr6'];

    $prem1 = $rowp['prem1'];
    $opprem1 = $rowp['opprem1'];
    $prem2 = $rowp['prem2'];
    $opprem2 = $rowp['opprem2'];
    $prem3 = $rowp['prem3'];
    $opprem3 = $rowp['opprem3'];

    $dumpa1 = $rowp['dumpa1'];
    $opdumpa1 = $rowp['opdumpa1'];
    $dumpa2 = $rowp['dumpa2'];
    $opdumpa2 = $rowp['opdumpa2'];
    $dumpa3 = $rowp['dumpa3'];
    $opdumpa3 = $rowp['opdumpa3'];

    $hsfs1 =$rowp['hsfs1'];
    $ophsfs1 = $rowp['ophsfs1'];
    $hsfs2 =$rowp['hsfs2'];
    $ophsfs2 = $rowp['ophsfs2'];
    $hsfs3 =$rowp['hsfs3'];
    $ophsfs3 = $rowp['ophsfs3'];
    $hsfs4 =$rowp['hsfs4'];
    $ophsfs4 = $rowp['ophsfs4'];
    $hsfs5 =$rowp['hsfs5'];
    $ophsfs5 = $rowp['ophsfs5'];
    $hsfs6 =$rowp['hsfs6'];
    $ophsfs6 = $rowp['ophsfs6'];
    
    $phf1 = $rowp['phd1'];
    $opphf1 = $rowp['opphf1'];
    $phf2 = $rowp['phd2'];
    $opphf2 = $rowp['opphf2'];
    $phf3 = $rowp['phd3'];
    $opphf3 = $rowp['opphf3'];
    $phf4 = $rowp['phd4'];
    $opphf4 = $rowp['opphf4'];
    $phf5 = $rowp['phd5'];
    $opphf5 = $rowp['opphf5'];
    $phf6 = $rowp['phd6'];
    $opphf6 = $rowp['opphf6'];
    $phf7 = $rowp['phd7'];
    $opphf7 = $rowp['opphf7'];

    $stdsshf1 = $rowp['stdsshf1'];
    $opstdsshf1 = $rowp['opstdsshf1'] ;
    $stdsshf2 = $rowp['stdsshf2'];
    $opstdsshf2 = $rowp['opstdsshf2'] ;
    $stdsshf3 = $rowp['stdsshf3'];
    $opstdsshf3 = $rowp['opstdsshf3'] ;
    $stdsshf4 = $rowp['stdsshf4'];
    $opstdsshf4 = $rowp['opstdsshf4'] ;

    $pla1 = $rowp['pla1'];
    $oppla1 = $rowp['oppla1'];
    $pla2 = $rowp['pla2'];
    $oppla2 = $rowp['oppla2'];
    $pla3 = $rowp['pla3'];
    $oppla3 = $rowp['oppla3'];
    $pla4 = $rowp['pla4'];
    $oppla4 = $rowp['oppla4'];

    $lr = $rowp['lr'];

    $gr1 = $rowp['gr1'];
    $gr2 = $rowp['gr2'];
    $gr3 = $rowp['gr3'];

    $ac1 = $rowp['ac1'];
    $ac2 = $rowp['ac2'];
    $ac3 = $rowp['ac3'];
    $ac4 = $rowp['ac4'];

    $recom1 = $rowp['rec1'];
    $recom2 = $rowp['rec2'];
    $recom3 = $rowp['rec3'];



}}


?>


<div class="image" style="text-align: center;">
                <img style="width: 80%;"    src= '../images/top_heading.png'>                        
                </div>
          
<form action="editpageaudit.php" method="POST">
<div class="page1">

<table class="table1" style="width:80%; margin-left:10%;">
<tr>
<th colspan="2" style="background-color:#4CAF50;color:white;">Audit Summary</th>
</tr>
<tr>
<td style="width:220px;" > <b> Auditee(Co. Name): </b></td>
<td> <input type="text"  required="required"    name="auditee" style="width:100%" value="<?php echo $auditee; ?>" > </td>
<tr>
<td>Process breif/ Scope:</td>
<td> <input type="text"  required="required"   name="scope"  style="width:100%" value="<?php echo $scope; ?>"> </td>
</tr>
<tr>
<td >Standard:</td>
<td> <input type="text"  required="required"   name="standard" style="width:100%" value="<?php echo $standard; ?>" > </td>
</tr>
<tr>
<td >Date:</td>
<td> <input type="date"    name="date" style="width:100%" value = <?php echo $date; ?> >  </td>
</tr>
<tr>
<td >Location:</td>
<td> <input type="text"  required="required"   name="location" style="width:100%" value=<?php echo $location; ?>> </td>
</tr>
<tr>
<td >Auditor(s):</td>
<td> <input type="text"  required="required"   name="auditor" style="width:100%" value=<?php echo $auditor; ?> > </td>
</tr>


</table>

    <p style="font-weight:bold;text-align:center;"> Attendence </p>

<style>
.Attendence tr{
    background-color:#C1F9AB ;
}
.Attendence td input{
    height:100px;
    resize: none;
    box-sizing: border-box;
}

</style>

<table class="Attendence" style="width:70%; margin-left:15%;">

    <tr>

        <th>Sr No</th>
        <th>Name</th>
        <th> Designation </th>
        <th>Signature Opening Meeting</th>
        <th>Signature Closing Meeting</th>
    
    </tr>

    <tr>
        <td>1</td>
        <td><input type="text"  required="required"   name="name1" style="width:100%" value= <?php echo $name1; ?> ></td>
        <td><input type="text"  required="required"   name="designation1" style="width:100%" value=<?php echo $designation1; ?> ></td>
        <td><input type="text"  required="required"   name="som1" style="width:100%" value=<?php echo $som1; ?> ></td>
        <td><input type="text"  required="required"   name="scm1" style="width:100%" value=<?php echo $scm1; ?> ></td>
    </tr>
    <tr>
        <td>2</td>
        <td><input type="text"     name="name2" style="width:100%" value=<?php echo $name2; ?> ></td>
        <td><input type="text"     name="designation2" style="width:100%" value=<?php echo $designation2; ?> ></td>
        <td><input type="text"     name="som2" style="width:100%" value=<?php echo $som2; ?> ></td>
        <td><input type="text"     name="scm2" style="width:100%" value=<?php echo $scm2; ?> ></td>
    </tr>
    <tr>
        <td>3</td>
        <td><input type="text"     name="name3" style="width:100%" value=<?php echo $name3; ?> ></td>
        <td><input type="text"     name="designation3" style="width:100%" value=<?php echo $designation3; ?> ></td>
        <td><input type="text"     name="som3" style="width:100%" value=<?php echo $som3; ?> ></td>
        <td><input type="text"     name="scm3" style="width:100%" value=<?php echo $scm3; ?> ></td>    </tr>
    <tr>
        <td>4</td>
        <td><input type="text"     name="name4" style="width:100%" value=<?php echo $name4; ?> ></td>
        <td><input type="text"     name="designation4" style="width:100%" value=<?php echo $designation4; ?> ></td>
        <td><input type="text"     name="som4" style="width:100%" value=<?php echo $som4; ?> ></td>
        <td><input type="text"     name="scm4" style="width:100%" value=<?php echo $scm4; ?> ></td>
    </tr>
    <tr>
        <td>5</td>
        <td><input type="text"     name="name5" style="width:100%" value=<?php echo $name5; ?> ></td>
        <td><input type="text"     name="designation5" style="width:100%" value=<?php echo $designation5; ?> ></td>
        <td><input type="text"     name="som5" style="width:100%" value=<?php echo $som5; ?> ></td>
        <td><input type="text"     name="scm5" style="width:100%" value=<?php echo $scm5; ?> ></td>
    </tr>
    <tr>
        <td>6</td>
        <td><input type="text"     name="name6" style="width:100%" value=<?php echo $name6; ?> ></td>
        <td><input type="text"     name="designation6" style="width:100%" value=<?php echo $designation6; ?> ></td>
        <td><input type="text"     name="som6" style="width:100%" value=<?php echo $som6; ?> ></td>
        <td><input type="text"     name="scm6" style="width:100%" value=<?php echo $scm6; ?> ></td>
    </tr>
    <tr>
        <td>7</td>
        <td><input type="text"     name="name7" style="width:100%" value=<?php echo $name7; ?> ></td>
        <td><input type="text"     name="designation7" style="width:100%" value=<?php echo $designation7; ?> ></td>
        <td><input type="text"     name="som7" style="width:100%" value=<?php echo $som7; ?> ></td>
        <td><input type="text"     name="scm7" style="width:100%" value=<?php echo $scm7; ?> ></td>
    </tr>
    <tr>
        <td>8</td>
        <td><input type="text"     name="name8" style="width:100%" value=<?php echo $name8; ?> ></td>
        <td><input type="text"     name="designation8" style="width:100%" value=<?php echo $designation8; ?> ></td>
        <td><input type="text"     name="som8" style="width:100%" value=<?php echo $som8; ?> ></td>
        <td><input type="text"     name="scm8" style="width:100%" value=<?php echo $scm8; ?> ></td>
    </tr>
    <tr>
        <td>9</td>
        <td><input type="text"     name="name9" style="width:100%" value=<?php echo $name9; ?> ></td>
        <td><input type="text"     name="designation9" style="width:100%" value=<?php echo $designation9; ?> ></td>
        <td><input type="text"     name="som9" style="width:100%" value=<?php echo $som9; ?> ></td>
        <td><input type="text"     name="scm9" style="width:100%" value=<?php echo $scm9; ?> ></td>
    </tr>


</table >
<br>
<br>
<div style="background-color:#4CAF50;margin-left:10%; width:80%;height:25px; "><p style="display:inline-block ;color:white;">    Reference           <p style="margin-left:30%;text-align:center ;display:inline-block;color:white;font-family:Times New Roman">Checklist Points / Audit Findings                                                               </p>   </p>
</div>
</div>

<br>
<br>
<br>
<div class="page2">
<style>

.management-responsibility th, td {
  border: 1px solid green;
  border-collapse: collapse;
}

.management-responsibility th{
    background-color:#C1F9AB ;
}
</style>

<table class="management-responsibility" style="margin-left:10%; width:80%">
<tr>
<th style="width:10%;text-align:center" > 3.1 </th>
<th>Management Responsibility</th>
</tr>

<tr>
<td rowspan="12"> </td>
<td>How is Management???s commitment about Halal? Halal policy displayed properly? Masjid?</td>
</tr>
<tr> <td><input type="text"  required="required"   name="mr1" style="width:100%;height:100%" value=<?php echo $mr1; ?> > 
<span style="display:inline-block"> <input type="radio"  name="opmr1" value="yes" required <?php echo ($opmr1== 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio"  name="opmr1" value="no" required <?php echo ($opmr1== 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>


<tr> <td> Is there Muslim Halal Management  and Internal Halal Control System established? </td> </tr>
<tr> <td> <input type="text"  required="required"   name="mr2" style="width:100%" value=<?php echo $mr2; ?>  > 
<span style="display:inline-block"> <input type="radio"  name="opmr2" value="yes" required <?php echo ($opmr2== 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opmr2" value="no" required <?php echo ($opmr2 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>


<tr> <td> Is there any change in the IHC system regarding personnel? </td></tr>
<tr> <td> <input type="text"  required="required"   name="mr3" style="width:100%" value=<?php echo $mr3; ?>  >
 <span style="display:inline-block"> <input type="radio"  name="opmr3" value="yes" required <?php echo ($opmr3 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opmr3" value="no" required <?php echo ($opmr3 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>


<tr> <td> Are all concerned personnel properly trained regarding Halal Assessment? </td></tr>
<tr><td><input type="text"  required="required"   name="mr4" style="width:100%" value=<?php echo $mr4; ?>   > 
<span style="display:inline-block"> <input type="radio"  name="opmr4" value="yes" required <?php echo ($opmr4 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opmr4" value="no" required <?php echo ($opmr4 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span></tr>


<tr><td>Training records (schedule, certificates) examined?</td></tr>
<tr><td><input type="text"  required="required"   name="mr5" style="width:100%" value=<?php echo $mr5; ?>  >
 <span style="display:inline-block"> <input type="radio"  name="opmr5" value="yes" required <?php echo ($opmr5 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opmr5" value="no" required <?php echo ($opmr5 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span></tr>


<tr><td>Any internal audit schedule to oversee Halal systems implementation? Quality manual/ Management system procedures? Compliance report?</td></tr>
<tr><td><input type="text"  required="required"  name="mr6" style="width:100%" value=<?php echo $mr6; ?> >
 <span style="display:inline-block"> <input type="radio"  name="opmr6" value="yes" required <?php echo ($opmr6 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opmr6" value="no" required <?php echo ($opmr6 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span></tr>

<tr>
<th style='text-align:center;'> 3.2
</th>
<th>Premises</th>
</tr>
<tr>
<td rowspan="6"> </td>
<td>Are premises properly controlled to avoid the risk of non-Halal contamination?</td>
</tr>
<tr> <td> <input type="text"  required="required"   name="prem1" style="width:100%" value=<?php echo $prem1; ?> > 
 <span style="display:inline-block"> <input type="radio"  name="opprem1" value="yes" required <?php echo ($opprem1 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opprem1" value="no" required <?php echo ($opprem1 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>

<tr> <td> Is proper design and product process flow being followed? </td> </tr>
<tr> <td> <input type="text"  required="required"   name="prem2" style="width:100%" value=<?php echo $prem2; ?> > 
 <span style="display:inline-block"> <input type="radio"  name="opprem2" value="yes" required <?php echo ($opprem2 == 'yes') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opprem2" value="no" required <?php echo ($opprem2 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>

<tr> <td> Is SOP and record regarding pet and pests control and breeding sites available? </td></tr>
<tr><td><input type="text"  required="required"  name="prem3" style="width:100%" value=<?php echo $prem3; ?>> 
 <span style="display:inline-block"> <input type="radio"  name="opprem3" value="yes" required <?php echo ($opprem3 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opprem3" value="no" required <?php echo ($opprem2 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span>   </tr>


<tr>
<th style='text-align:center;'> 3.3
</th>
<th>Devices, utensils, machines and processing aids</th>
</tr>
<tr>
<td rowspan="6"> </td>
<td>Devices, utensils and processing aids need to be separated from non-Halal lines and cleansed as per Shariah law. Is SOP available and being followed?</td>
</tr>

<tr> <td> <input type="text"  required="required"   name="dumpa1" style="width:100%" value=<?php echo $dumpa1; ?> > 
 <span style="display:inline-block"> <input type="radio"  name="opdumpa1" value="yes" required <?php echo ($opdumpa1 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opdumpa1" value="no" required <?php echo ($opdumpa1 == 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>

<tr> <td> Are all utensils and machines made of food grade material? Any Certificates? </td> </tr>
<tr> <td> <input type="text"  required="required"   name="dumpa2" style="width:100%" value=<?php echo $dumpa2; ?> > 
 <span style="display:inline-block"> <input type="radio"  name="opdumpa2" value="yes" required <?php echo ($opdumpa2 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opdumpa2" value="no" required <?php echo ($opdumpa2 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>


<tr> <td> Are greases and lubricants derived from Halal sources?  </td></tr>

<tr><td><input type="text"  required="required"  name="dumpa3" style="width:100%" value=<?php echo $dumpa3; ?>>
 <span style="display:inline-block"> <input type="radio"  name="opdumpa3" value="yes" required <?php echo ($opdumpa3 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opdumpa3" value="no" required <?php echo ($opdumpa3 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span></tr>

<tr>
<th style='text-align:center;'> 3.4
</th>
<th>Hygiene, sanitation and food safety</th>
</tr>
<tr>
<td rowspan="12"> </td>
<td>Are principles of personal hygiene and safety of workers being followed? Medical records?</td>
</tr>
<tr> <td> <input type="text"  required="required"   name="hsfs1" style="width:100%" value=<?php echo $hsfs1; ?> > 
 <span style="display:inline-block"> <input type="radio"  name="ophsfs1" value="yes" required <?php echo ($ophsfs1 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="ophsfs1" value="no" required <?php echo ($ophsfs1 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>

<tr> <td> Are there procedures in practice for proper Inspection and sorting of raw materials? </td> </tr>
<tr> <td> <input type="text"  required="required"   name="hsfs2" style="width:100%" value=<?php echo $hsfs2; ?>> 
 <span style="display:inline-block"> <input type="radio"  name="ophsfs2" value="yes" required <?php echo ($ophsfs2 == 'yes') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="ophsfs2" value="no" required <?php echo ($ophsfs2 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>

<tr> <td> Are there procedures in practice for effective waste management? Record?  </td></tr>
<tr><td><input type="text"  required="required"  name="hsfs3" style="width:100%" value=<?php echo $hsfs3; ?>> 
<span style="display:inline-block"> <input type="radio"  name="ophsfs3" value="yes" required <?php echo ($ophsfs3 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="ophsfs3" value="no" required <?php echo ($ophsfs3 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span></tr>

<tr> <td>Are there measures to prevent food from contamination with non halal and non-food grade materials and final product quality etc? Laboratory reports?</td></tr>
<tr><td><input type="text"  required="required"  name="hsfs4" style="width:100%" value=<?php echo $hsfs4; ?>> 
<span style="display:inline-block"> <input type="radio"  name="ophsfs4" value="yes" required <?php echo ($ophsfs4 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="ophsfs4" value="no" required <?php echo ($ophsfs4 == 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span></tr>

<tr> <td>Is production/processing hall free from flies, lizards, insects and breeding sites? </td></tr>
<tr><td><input type="text"  required="required"  name="hsfs5" style="width:100%" value=<?php echo $hsfs5; ?>>
<span style="display:inline-block"> <input type="radio"  name="ophsfs5" value="yes" required <?php echo ($ophsfs5 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="ophsfs5" value="no" required <?php echo ($ophsfs5 == 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span></tr>

<tr> <td> Are workers wearing proper dress, caps, etc.</td></tr>
<tr><td><input type="text"  required="required"  name="hsfs6" style="width:100%" value=<?php echo $hsfs6; ?>>
 <span style="display:inline-block"> <input type="radio"  name="ophsfs6" value="yes" required <?php echo ($ophsfs6 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="ophsfs6" value="no" required <?php echo ($ophsfs6 == 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span></tr>

<th style='text-align:center;'> 3.5
</th>
<th>Processing of Halal Food</th>
</tr>
<tr>
<td rowspan="14"> </td>
<td>Sources of Halal food ??? raw materials must be obtained from animals slaughtered according to Shariah law and are not intentionally and continually fed on Najs</td>
</tr>
<tr> <td> <input type="text"  required="required"   name="phf1" style="width:100%" value=<?php echo $phf1; ?> > 
 <span style="display:inline-block"> <input type="radio"  name="opphf1" value="yes" required <?php echo ($opphf1 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opphf1" value="no" required <?php echo ($opphf1 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>

<tr> <td> Ensure that all raw materials/chemicals are Halal</td> </tr>
<tr> <td> <input type="text"  required="required"   name="phf2" style="width:100%" value=<?php echo $phf2; ?> > 
<span style="display:inline-block"> <input type="radio"  name="opphf2" value="yes" required <?php echo ($opphf1 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opphf2" value="no" required <?php echo ($opphf2 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>

<tr> <td> Are chemicals used in water purification Halal certified?  </td></tr>
<tr><td><input type="text"  required="required"  name="phf3" style="width:100%" value=<?php echo $phf3; ?> >  
<span style="display:inline-block"> <input type="radio"  name="opphf3" value="yes" required <?php echo ($opphf3 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opphf3" value="no" required <?php echo ($opphf3 == 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>

<tr> <td>Is product(s) profile completely elaborated in application?</td></tr>
<tr><td><input type="text"  required="required"  name="phf4" style="width:100%" value=<?php echo $phf4; ?> > 
<span style="display:inline-block"> <input type="radio"  name="opphf4" value="yes" required <?php echo ($opphf4 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opphf4" value="no" required <?php echo ($opphf4 == 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span></tr>

<tr> <td>Is the company using HCB vetted ingredients list?</td></tr>
<tr><td><input type="text"  required="required"  name="phf5" style="width:100%" value=<?php echo $phf5; ?> >  
<span style="display:inline-block"> <input type="radio"  name="opphf5" value="yes" required <?php echo ($opphf5 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opphf5" value="no" required <?php echo ($opphf5 == 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>

<tr> <td>Is there procedure in practice for the recipe change?</td></tr>
<tr><td><input type="text"  required="required"  name="phf6" style="width:100%" value=<?php echo $phf6; ?> >  
<span style="display:inline-block"> <input type="radio"  name="opphf6" value="yes" required <?php echo ($opphf6 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opphf6" value="no" required <?php echo ($opphf6 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span></tr>

<tr> <td>Is there any rework, toll manufacturing recycling of the expired products?</td></tr>
<tr><td><input type="text"  required="required"  name="phf7" style="width:100%" value=<?php echo $phf7; ?> > 
<span style="display:inline-block"> <input type="radio"  name="opphf7" value="yes" required <?php echo ($opphf7 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opphf7" value="no" required <?php echo ($opphf7 == 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span></tr>

<th style='text-align:center;'> 3.6
</th>
<th>Storage, Transportation, Display and Sale and Serving of Halal food</th>
</tr>
<tr>
<td rowspan="8"> </td>
<td>Is there procedure existing to ensure that products are labelled as Halal at every stage?</td>
</tr>
<tr> <td> <input type="text"  required="required"   name="stdsshf1" style="width:100%" value=<?php echo $stdsshf1; ?> >  
<span style="display:inline-block"> <input type="radio"  name="opstdsshf1" value="yes" required <?php echo ($opstdsshf1 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opstdsshf1" value="no" required <?php echo ($opstdsshf1 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>

<tr> <td> Is there procedure existing to ensure that dedicated transportation is used for Halal foods?</td> </tr>
<tr> <td> <input type="text"  required="required"   name="stdsshf2" style="width:100%" value=<?php echo $stdsshf2; ?> >  
<span style="display:inline-block"> <input type="radio"  name="opstdsshf2" value="yes" required <?php echo ($opstdsshf2 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opstdsshf2" value="no" required <?php echo ($opstdsshf2 == 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span>  </tr>

<tr> <td> Are there segregated areas for Halal and Non Halal parts?  </td></tr>
<tr><td><input type="text"  required="required"  name="stdsshf3" style="width:100%" value=<?php echo $stdsshf3; ?> > 
<span style="display:inline-block"> <input type="radio"  name="opstdsshf3" value="yes" required <?php echo ($opstdsshf3 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opstdsshf3" value="no" required <?php echo ($opstdsshf3 == 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>

<tr> <td>Is there any recall procedure existing?</td></tr>
<tr><td><input type="text"  required="required"  name="stdsshf4" style="width:100%" value=<?php echo $stdsshf4; ?> > 
<span style="display:inline-block"> <input type="radio"  name="opstdsshf4" value="yes" required <?php echo ($opstdsshf4 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="opstdsshf4" value="no" required <?php echo ($opstdsshf4 == 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>

<th style='text-align:center;'> 3.7
</th>
<th>Packaging, labelling and advertising </th>
</tr>
<tr>
<td rowspan="8"> </td>
<td>Is packaging being performed in the clean and hygienic conditions?</td>
</tr>
<tr> <td> <input type="text"  required="required"   name="pla1" style="width:100%" value=<?php echo $pla1; ?> >  
<span style="display:inline-block"> <input type="radio"  name="oppla1" value="yes" required <?php echo ($oppla1 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="oppla1" value="no" required  <?php echo ($oppla1 == 'no') ?  "checked" : "" ;  ?>>
  <label style="display:inline-block" for="no">NO</label> </td>  </span>  </tr>

<tr> <td> Are packaging and labelling materials are non-hazardous and Halal?</td> </tr>
<tr> <td> <input type="text"  required="required"   name="pla2" style="width:100%" value=<?php echo $pla2; ?> > 
<span style="display:inline-block"> <input type="radio"  name="oppla2" value="yes" required <?php echo ($oppla2 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="oppla2" value="no" required <?php echo ($oppla2 == 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span> </tr>

<tr> <td> Labels should not be misleading.  </td></tr>
<tr><td><input type="text"  required="required"  name="pla3" style="width:100%" value=<?php echo $pla3; ?> >
<span style="display:inline-block"> <input type="radio"  name="oppla3" value="yes" required <?php echo ($oppla3 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="oppla3" value="no" required <?php echo ($oppla3 == 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span></tr>

<tr> <td>Is there any indecent advertising used a marketing tool?</td></tr>
<tr><td><input type="text"  required="required"  name="pla4" style="width:100%" value=<?php echo $pla4; ?> >
<span style="display:inline-block"> <input type="radio"  name="oppla4" value="yes" required <?php echo ($oppla4 == 'yes') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="yes">YES</label>
  <input style="display:inline-block" type="radio" name="oppla4" value="no" required <?php echo ($oppla4 == 'no') ?  "checked" : "" ;  ?> >
  <label style="display:inline-block" for="no">NO</label> </td>  </span></tr>

<th style='text-align:center;'> 3.8
</th>
<th>Legal requirements</th>
</tr>
<tr>
<td rowspan="2"> </td>
<td>Ensure the compliance with current legal requirements. License. Registration. Tax etc.</td>
</tr>
<tr> <td> <input type="text"  required="required"   name="lr1" style="width:100%" value=<?php echo $lr ; ?> > </td> </tr>

<br>
<br>
<br>

</table>



</div>
<style>
.page3_table{
    width:80%;
    margin-left:10%;
}
.page3_table th, td {
  border: 1px solid green;
  border-collapse: collapse;
}
.page3_table th{
    background-color:#4CAF50;
}

</style>
<br>
<br>

<div class="page3">

<table class="page3_table">
<tr><th> General Remarks </th></tr>
<tr><td> <input type="text"  required="required"   name="gr1" style="width:100%" value=<?php echo $gr1 ; ?> > </td> </tr>
<tr><td> <input type="text"     name="gr2" style="width:100%" value=<?php echo $gr2 ; ?> > </td> </tr>
<tr><td> <input type="text"     name="gr3" style="width:100%" value=<?php echo $gr3 ; ?> > </td> </tr>
</table>
<br>
<br>

<table class="page3_table">
<tr>
<th colspan='3'>Results / Audit Conclusions</th>
</tr>
<tr><td>1</td>
<td style="width:250px;background-color:#C1F9AB ;">Critical Non Conformities</td>
<td> <input type="text"  required="required"   name="ac1" style="width:100%" value=<?php echo $ac1 ; ?> > </td> 
</tr>
<tr><td>2</td>
<td style="width:250px;background-color:#C1F9AB ;">Non Conformities </td>
<td> <input type="text"  required="required"   name="ac2" style="width:100%" value=<?php echo $ac2 ; ?> > </td> 
</tr>
<tr><td>3</td>
<td style="width:250px;background-color:#C1F9AB ;">Observations</td>
<td> <input type="text"  required="required"   name="ac3" style="width:100%" value=<?php echo $ac3 ; ?> > </td> 
</tr>
<tr><td>4</td>
<td style="width:250px;background-color:#C1F9AB ;">Opinion</td>
<td> <input type="text"  required="required"   name="ac4" style="width:100%" value=<?php echo $ac4 ; ?> > </td> 
</tr>

</table>
<br>
<br>

<table class="page3_table">
<tr><th> Recommendations </th></tr>
<tr><td> <input type="text" name="recom1" style="width:100%" value=<?php echo $recom1 ; ?>> </td> </tr>
<tr><td> <input type="text" name="recom2" style="width:100%" value=<?php echo $recom2 ; ?> > </td> </tr>
<tr><td> <input type="text" name="recom3" style="width:100%" value=<?php echo $recom3 ; ?> > </td> </tr>
</table>
<br>
<input type="text" type ="hidden" name ='aid' style="visibility:hidden" value = <?php echo $id ?> >
<br>
<button type="submit" name='submit' value='submit' style="text-align:center; margin-left:50%;"> Submit </button>

</form>
<button type="button" onclick="print()">Print Pdf</button>
</div>
<script>
function print(){

require('html2fpdf.php');
$pdf=new HTML2FPDF('P','A4','en');
$pdf->AddPage();
$fp = fopen("audit.html","r");
$strContent = fread($fp, filesize("audit.html"));
fclose($fp);

$pdf->WriteHTML($strContent);
$pdf->Output("audit.pdf",D);
});}
</script>
</body>
