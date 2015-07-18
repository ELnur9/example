
<?php
include 'db.php';
$juri = get_juri();
?>


<div class="rules">
    <div class="container">
        <div class="content">
            <div class="nov">Жюри1</div>
            <div class="blue"></div>
            <div class="experts">
                <?php foreach($juri as $item): ?>
                <div class="juri">
                    <div class="fotki">
                        <img src="img/avatar.png">
                    </div>
                    <div class="textj">
                        <div class="imya">
                            <?php echo $item['name']; ?>
                        </div>
                        <div class="ssylka">
                            <a target="_blank" href="http://<?php echo $item['url'];?>"><?php echo $item['url'];?></a>
                        </div>

                        <div class="texto">
                            <?php echo $item['descriphion'];?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
		</div>
    </div>
</div>