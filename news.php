<?php
    include 'db.php';
    $news = get_news();
    ?>

                <div class="nov">Новости</div>
                <div class="blue"></div>
                <?php foreach($news as $item): ?>
                    <div class="otchet">
                        <div class="dataotch">
                            <div class="data"><?php echo date("d.m.Y", strtotime($item['public_date'])); ?></div>
                            <div class="otchdata">
                                <a href="news-view.php?id=<?php echo $item['id']; ?>"><?php echo $item['title'] ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

