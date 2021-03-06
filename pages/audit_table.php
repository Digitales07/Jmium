<?php
include('config.php');
$sql = "CREATE TABLE AuditRecord (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    auditee text(999) NOT NULL,
    scope text(999) NOT NULL,
    audit_standard text(999) NOT NULL,
    audit_data DATE,
    audit_location NVARCHAR(999) NOT NULL,
    auditor text(999) NOT NULL,
    name1 text(999) NOT NULL,
    designation1 text(999) NOT NULL,
    som1 text(999) NOT NULL,
    scm1 text(999) NOT NULL,
    name2 text(999) ,
    designation2 text(999),
    som2 text(999) ,
    scm2 text(999) ,
    name3 text(999) ,
    designation3 text(999),
    som3 text(999) ,
    scm3 text(999) ,
    name4 text(999) ,
    designation4 text(999),
    som4 text(999) ,
    scm4 text(999) ,
    name5 text(999) ,
    designation5 text(999),
    som5 text(999) ,
    scm5 text(999) ,
    name6 text(999) ,
    designation6 text(999),
    som6 text(999) ,
    scm6 text(999) ,
    name7 text(999) ,
    designation7 text(999),
    som7 text(999) ,
    scm7 text(999) ,
    name8 text(999) ,
    designation8 text(999),
    som8 text(999) ,
    scm8 text(999) ,
    name9 text(999) ,
    designation9 text(999),
    som9 text(999) ,
    scm9 text(999) ,
    mr1 text(999) NOT NULL,
    mr2 text(999) NOT NULL,
    mr3 text(999) NOT NULL,
    mr4 text(999) NOT NULL,
    mr5 text(999) NOT NULL,
    mr6 text(999) NOT NULL,
    prem1 text(999) NOT NULL,
    prem2 text(999) NOT NULL,
    prem3 text(999) NOT NULL,
    dumpa1 text(999) NOT NULL,
    dumpa2 text(999) NOT NULL,
    dumpa3 text(999) NOT NULL,
    hsfs1 text(999) NOT NULL,
    hsfs2 text(999) NOT NULL,
    hsfs3 text(999) NOT NULL,
    hsfs4 text(999) NOT NULL,
    hsfs5 text(999) NOT NULL,
    hsfs6 text(999) NOT NULL,
    phd1 text(999) NOT NULL,
    phd2 text(999) NOT NULL,
    phd3 text(999) NOT NULL,
    phd4 text(999) NOT NULL,
    phd5 text(999) NOT NULL,
    phd6 text(999) NOT NULL,
    phd7 text(999) NOT NULL,
    stdsshf1 text(999) NOT NULL,
    stdsshf2 text(999) NOT NULL,
    stdsshf3 text(999) NOT NULL,
    stdsshf4 text(999) NOT NULL,
    pla1 text(999) NOT NULL,
    pla2 text(999) NOT NULL,
    pla3 text(999) NOT NULL,
    pla4 text(999) NOT NULL,
    lr text(999) NOT NULL,
    gr1 text(999) NOT NULL,
    gr2 text(999),
    gr3 text(999),
    ac1 text(999) NOT NULL,
    ac2 text(999) NOT NULL,
    ac3 text(999) NOT NULL,
    ac4 text(999) NOT NULL,
    rec1 text(999) NOT NULL,
    rec2 text(999),
    rec3 text(999),
    opmr1 text(3) NOT NULL,
    opmr2 text(3) NOT NULL,
    opmr3 text(3) NOT NULL,
    opmr4 text(3) NOT NULL,
    opmr5 text(3) NOT NULL,
    opmr6 text(3) NOT NULL,
    opprem1 text(3) NOT NULL,
    opprem2 text(3) NOT NULL,
    opprem3 text(3) NOT NULL,
    opdumpa1 text(3) NOT NULL,
    opdumpa2 text(3) NOT NULL,
    opdumpa3 text(3) NOT NULL,
    ophsfs1 text(3) NOT NULL,
    ophsfs2 text(3) NOT NULL,
    ophsfs3 text(3) NOT NULL,
    ophsfs4 text(3) NOT NULL,
    ophsfs5 text(3) NOT NULL,
    ophsfs6 text(3) NOT NULL,
    opphf1 text(3) NOT NULL,
    opphf2 text(3) NOT NULL,
    opphf3 text(3) NOT NULL,
    opphf4 text(3) NOT NULL,
    opphf5 text(3) NOT NULL,
    opphf6 text(3) NOT NULL,
    opphf7 text(3) NOT NULL,
    opstdsshf1 text(3) NOT NULL,
    opstdsshf2 text(3) NOT NULL,
    opstdsshf3 text(3) NOT NULL,
    opstdsshf4 text(3) NOT NULL,
    oppla1 text(3) NOT NULL,
    oppla2 text(3) NOT NULL,
    oppla3 text(3) NOT NULL,
    oppla4 text(3) NOT NULL,

    


    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if (mysqli_query($conn, $sql)) {
        echo "Table AdminLogin created successfully";
    } else {
        echo "Error creating AdminLogin table: " . mysqli_error($conn);
    }

?>