<?php

include "../header.php";
include "../db.php";

create_news($_POST['title'],$_POST ['author'],$_POST['content']);

echo "Новость успешно создана!";


