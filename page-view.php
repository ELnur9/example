<?php

$id = $_GET['link'];

include "db.php";
$page= get_page_view($link);

include "header.php";

?>

<div class="Novosti">
    <div class="container">
        <div class="cow">
            <div class="content">
                <div class="nov"><?php echo $page[0]['title'] ?></div>
                <div class="sultan"><?php echo $page[0]['author']?></div>
               <div class="news-view-content"> <?php echo nl2br($page[0]['content']) ?> </div>

            </div>
        </div>
    </div>
</div>



<?php
include "footer.php";
?>