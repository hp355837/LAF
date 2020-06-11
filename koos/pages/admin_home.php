<?php


require('../head.php');


if(!isset($_SESSION["userId"])){
    header("Location: admin_login.php");
    exit();
}

if(isset($_GET["logout"])){
  session_unset();
  session_destroy();
  header("Location: admin_login.php");
  exit();
}


?>

<body class="homeBody">


<div class="main-flex header">
    <div class="aside"></div>

    <!-- HEADER -->
    <div class="main-section">
        <?php require('../header_admin.php'); ?>
    </div>
    <div class="aside"></div>

</div><!--.main-flex-->

<!-- IMAGE -->
<div>
    <div class="main-section homeSection">

        <!-- PAGE BODY -->
        <div class="flex-column homeTextWrap"> 

        <!-- selle kustutab peagi ära...oli kontrolliks, kas ikka toimib -->
        <?php var_dump($_SESSION["userId"]); ?>
        </div><!--.main-section-->

    </div><!--.main-section-->
</div>


</body>
</html>