<?php

include "../header.php";
include "../db.php";

create_juri($_POST['name'],$_POST ['link'],$_POST['descriphion']);

echo "Жюри успешно добавлен!";