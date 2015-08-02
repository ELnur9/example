<?php

$link = $_GET['link'];

include "db.php";
$page= get_page_view($link);
include "header.php";

?>

<div class="Novosti">
    <div class="container">
        <div class="cow">
            <div class="content">
                <div class="nov"><?php echo $page['title'] ?></div>
              <div class="news-view-content"> <?php echo nl2br($page['content']) ?> </div>

            </div>
        </div>
    </div>
</div>



<?php
include "footer.php";
?>