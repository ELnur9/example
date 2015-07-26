<?php

include "../header.php";
include "../db.php";

create_page($_POST['title'],$_POST ['link'],$_POST['content'],['is_active']);

echo "Новость успешно создана!";
