<?php

namespace App\Controllers;
use App\helpers\Auxhelpers;
use App\Models\Producto;

class ProductosController extends Controller
{
    public $producto;
    public $helpers;
    public function __construct()
    {
        $this->producto = new Producto();
        $this->helpers = new Auxhelpers();
    }
    public function Create()
    {

        $this->producto->CreateProduct($ean, $product_code, $name, $cantidad, $marca,$CategoryLevel_1,$CategoryLevel_2,$CategoryLevel_3, $pedido, $subcategoria, $segmento, $categoria_3, $pet_type_number, $price, $pais,$Product_URL,$Image_URL,$PriceRange,$regular_price,$sale_price,$compra_periodica, $locale_ES_ES_Name, $locale_ES_ES_regular_price, $locale_ES_ES_Display_precio, $locale_ES_ES_sale_price, $locale_ES_ES_Display_sales, $locale_ES_ES_Product_URL, $locale_FR_FR_Name, $locale_FR_FR_regular_price, $locale_FR_FR_Display_precio, $locale_FR_FR_sale_price, $locale_FR_FR_Display_sales, $locale_FR_FR_Product_URL, $locale_UK_EN_Name, $locale_UK_EN_regular_price, $locale_UK_EN_Display_precio, $locale_UK_EN_sale_price, $locale_UK_EN_Display_sales, $locale_UK_EN_Product_URL, $locale_PT_PT_Name, $locale_PT_PT_regular_price, $locale_PT_PT_Display_precio, $locale_PT_PT_sale_price, $locale_PT_PT_Display_sales, $locale_PT_PT_Product_URL, $locale_IT_IT_Name, $locale_IT_IT_regular_price, $locale_IT_IT_Display_precio, $locale_IT_IT_sale_price, $locale_IT_IT_Display_sales, $locale_IT_IT_Product_URL, $locale_DE_DE_Name, $locale_DE_DE_regular_price, $locale_DE_DE_Display_precio, $locale_DE_DE_sale_price, $locale_DE_DE_Display_sales,$locale_DE_DE_Product_URL);
    }
}
