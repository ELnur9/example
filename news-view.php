<?php

$id = $_GET['id'];

include "db.php";
$news= get_news_view($id);

include "header.php";

?>

<div class="Novosti">
    <div class="container">
        <div class="cow">
            <div class="content">
                <div class="nov"><?php echo $news[0]['title'] ?></div>
                <div class="sultan"><?php echo $news[0]['author']?></div>
               <div class="news-view-content"> <?php echo nl2br($news[0]['content']) ?> </div>

            </div>
        </div>
    </div>
</div>



<?php
include "footer.php";
?>

