<?php
include 'db.php';
$page = get_page();
?>

<div class="rules">
    <div class="container">
        <div class="content">
            <div class="nov">Page1</div>
            <div class="blue"></div>
            <div class="experts">
                <?php foreach($page as $item): ?>
                <div class="juri">
                    <div class="fotki">
                        <img src="img/avatar.png">
                    </div>
                    <div class="textj">
                        <div class="imya">
                            <?php echo $item['title']; ?>
                        </div>
                        <div class="ssylka">
                            <a target="_blank" href="http://<?php echo $item['link'];?>"><?php echo $item['content'];?></a>
                        </div>

                        <div class="texto">
                            <?php echo $item['is_active'];?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
		</div>
    </div>
</div>