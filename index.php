<?php
    include "header.php";
    $page = $_GET['page'];

?>

<div class="Novosti">
    <div class="container">
        <div class="cow">
            <div class="content">
                <?php include $page . ".php"; ?>
            </div>
        </div>
    </div>
</div>



<?php
include "footer.php";
?>
