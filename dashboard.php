<?php
    include "includes/header.php"; 
    include "includes/navigation.php";
    
    if(!Validation::val_session($_SESSION['username'])){ 
        header("Location: index.php");
    }
?>




<?php include "includes/footer.php"; ?>