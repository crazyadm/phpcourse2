<?php

abstract class Goods
{
    private $title; //наименование товара
    private $price;  //цена товара
    private $edIzm; //единица измерения

    public function getTitle()
    {
        return $this->title;
    }

     public function getEdIzm()
    {
        return $this->edIzm;
    }

     public function getPrice()
     {
         return $this->price;
     }

     abstract function getFinalCost();


}