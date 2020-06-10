<?php
    require("../head.php");
    require("../../../../config_laf.php");

    $notice = null;
    $id = null;

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $page= $_GET["page"];
        $notice = viewObject($id, $page);
    }


?>

<body>
    <div class="main-flex header">
        <div class="aside"></div>

    <!-- HEADER -->
        <div class="main-section">
            <?php require('../header.php'); ?>
        </div>
        <div class="aside"></div>
    </div>

    <div class="main-flex page-body">
    <div class="aside"></div>

    <div class="main-section">
        <div class="flex-row"> 
            <div class="products">
                <?php echo $notice?>
            </div>
        </div>
    </div>
    <div class="aside"></div>
</div>

</div>
</body>