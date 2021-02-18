<?php


class tovar
{
    Public $title; //название
    Public $price; //цена
    Public $idTovar; //номенклатурный код товара (артикул или штрихкод например)
    Public $edIzm;  //единица измерения

    Public function __construct ($title, $price, $idTovar, $edIzm)
    {
        $this->title = $title;
        $this->price = $price;
        $idTovar->idTovar = $idTovar;
        $edIzm->edIzm = $edIzm;
    }

    public function show ()
    {
    //метод вывода информации о товаре
    }
}