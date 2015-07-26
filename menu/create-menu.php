<?php

include "../header.php";
include "../db.php";

create_menu($_POST['title'],$_POST['link']);

echo "Стараница успешно создана!";