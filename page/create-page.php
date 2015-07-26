<?php

include "../header.php";
include "../db.php";

create_page($_POST['title'],$_POST['link'],$_POST['content'],$_POST['is_active']);

echo "Стараница успешно создана!";
