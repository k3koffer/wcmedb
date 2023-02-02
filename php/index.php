<?php

require_once 'header.php';

$conn = mysqli_connect('localhost', 'root', '');  
if (! $conn) {  
die("Connection failed" . mysqli_connect_error());  
}  
else {  
mysqli_select_db($conn, 'coroner');  
}  

?>

<!DOCTYPE html>
<html>  
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Главная</title>
        <link rel="shortcut icon" href="/image/favicon.ico" type="image/x-icon">

        <link type="text/css" rel="stylesheet" href="/css/main1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Lato&family=Nanum+Gothic&family=PT+Sans:wght@700&display=swap"
         rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="/css/custom.css">
        <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
        <script src="https://unpkg.com/headroom.js"></script> 
        
    </head>
    <body> 


    <div class="position-relative" style="width: 100%px; height: 100px; margin: 0 auto; padding-bottom: 50px; background-color: #1d5b91" class="">
    </div>

    <div class="position-relative" style="width: 100%px; height: 100px; margin: 0 auto; padding-bottom: 50px; background-color: #232a3a;" class="">
    <div style="right: 46%!important; top: 25%!important" class="position-absolute">   
        <p class="fs-2"><strong style="color: #e6e6e6;">О нас</strong></p>
    </div>
    </div>

    <div style="margin: 0 auto; margin-top: 50px; width: 1200px; height: 1000px;" class="k-indexmain">
    <p class="fs-2 border-bottom">Mission Statement</p>
    <p class="fs-5">To provide independent, quality, death investigation using advanced forensic science with 
    compassion and objectivity for families, communities, and public health & safety; working collaboratively to 
    reduce preventable deaths.</p>

    <p class="fs-2 border-bottom">Vision</p>
    <p class="fs-5">To be the premier medicolegal death investigation agency, nationally recognized as a leader 
    in the forensic science community.</p>

    <p class="fs-2 border-bottom">Our Responsibility</p>
    <p class="fs-5">The responsibilities of the Department of Medical Examiner-Coroner are complex. 
    By state law it is the responsibility of the department to inquire into and determine the circumstances, 
    manner and cause of deaths which fall within its jurisdiction.  These deaths include any suspected homicide, 
    suicide, or accidental deaths.  These also include any natural death were there either is no physician to 
    sign a death certificate, or the physician is unwilling or legally prohibited from doing so.  
    Additionally other certain causes of death are also mandated to be investigated by the coroner.</p>

    <p class="fs-5">The manner and cause of death inquiries may require reviews of medical records, interviews with family members or witnesses, and post mortem examinations.  The department’s Deputy Medical Examiners are doctors specifically trained in forensic pathology.  The Deputy Medical Examiners conduct autopsies, collect evidence, bodily fluids and tissues for toxicology testing and microscopic study.  Upon completion of these tests the Deputy Medical Examiners analysis the results to determine the cause of death. The cause of death is used to complete the decedent’s death certificate.  Evidence collected during autopsies and at the scene of the death can be used for criminal prosecution as well as determining the cause of death.  Deputy Medical Examiners are frequently called to court in order to testify as to the results of these examinations.  The Medical Examiner-Coroner is constantly on alert for deaths which may pose a threat to public health from communicable disease or through product liability.</p>
    <p class="fs-5">The department’s responsibilities also include the identification of decedents.  Identification may be as simple as matching the decedent to a driver’s license or other identification documents.  The identification process may need to utilize fingerprints, dental records, body x-rays or DNA testing.  Identifying the decedent’s next of kin, notifying them of the death and securing the decedent’s personal property are additional responsibilities of the department.  In deaths where the decedent died at scene, department personnel are responsible for removal and transportation of the decedent.  Coroner Investigators will also obtain information from family, friends and public safety personnel regarding the terminal episode.  The Coroner Investigator serves as the eyes, ears and hands of the forensic pathologists in the field.  The Medical Examiner-Coroner's Office works with numerous medical and law enforcement agencies to understand how these people lost their lives, to seek justice and bring closure to families.</p>
    </div>

    <?php 
    require_once 'headroom.php'
    ?>

    </body>
</html>

<?php
require_once 'footer.php'
?>