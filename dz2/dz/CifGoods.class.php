<?php

include_once "abs.class.php";

class CifGoods extends Goods //класс цифровых товаров
{
    private $kolvo; //количество товара
    private $cost; //полная стоимость позиции

    public function __construct ($title, $price, $edIzm, $kolvo)
    {
        $this->title=$title;
        $this->price=$price;
        $this->edIzm=$edIzm;
        $this->kolvo=$kolvo;
    }

    public function getFinalCost()
    {
        return $this->cost=$this->price * $this->kolvo*0.5;
    }

}