<?php
include 'CifGoods.class.php';
include 'VesGoods.class.php';
include 'FizGoods.class.php';

$tovarfiz = New FizGoods('TOVAR',300,'in',7);
echo 'Штучный ', $tovarfiz->getTitle(),' Стоимость - ',$tovarfiz->getFinalCost(), "<hr>";

$tovarcif = New CifGoods('TOVAR2',200,'in',1);
echo 'Цифровой ', $tovarcif->getTitle(),' Стоимость - ',$tovarcif->getFinalCost(), "<hr>";

$tovarves = New VesGoods('TOVAR3',100,'in',7);
echo 'Весовой ', $tovarves->getTitle(),' Стоимость - ',$tovarves->getFinalCost(), "<hr>";
