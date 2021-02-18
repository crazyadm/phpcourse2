<?php

include "tovar.class.php";
class SpecTovar extends tovar{
    var $param; //дополнительная характеристка спецтовара
    function __construct($title, $price, $idTovar, $edIzm, $param)
    {
        parent::__construct($title, $price, $idTovar, $edIzm,);
        $this->param = $param;
    }

    function show()
    {
// метод вывода дополнительной характеристики
        parent::show();
    }
}
