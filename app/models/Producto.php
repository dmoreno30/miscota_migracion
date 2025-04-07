<?php

namespace App\Models;
use App\Core\crest;
use App\helpers\Auxhelpers;

class Producto extends Model
{
    
    public function CreateProduct($ean, $product_code, $name, $cantidad, $marca,$CategoryLevel_1,$CategoryLevel_2,$CategoryLevel_3, $pedido, $subcategoria, $segmento, $categoria_3, $pet_type_number, $price, $pais,$Product_URL,$Image_URL,$PriceRange,$regular_price,$sale_price,$compra_periodica, $locale_ES_ES_Name, $locale_ES_ES_regular_price, $locale_ES_ES_Display_precio, $locale_ES_ES_sale_price, $locale_ES_ES_Display_sales, $locale_ES_ES_Product_URL, $locale_FR_FR_Name, $locale_FR_FR_regular_price, $locale_FR_FR_Display_precio, $locale_FR_FR_sale_price, $locale_FR_FR_Display_sales, $locale_FR_FR_Product_URL, $locale_UK_EN_Name, $locale_UK_EN_regular_price, $locale_UK_EN_Display_precio, $locale_UK_EN_sale_price, $locale_UK_EN_Display_sales, $locale_UK_EN_Product_URL, $locale_PT_PT_Name, $locale_PT_PT_regular_price, $locale_PT_PT_Display_precio, $locale_PT_PT_sale_price, $locale_PT_PT_Display_sales, $locale_PT_PT_Product_URL, $locale_IT_IT_Name, $locale_IT_IT_regular_price, $locale_IT_IT_Display_precio, $locale_IT_IT_sale_price, $locale_IT_IT_Display_sales, $locale_IT_IT_Product_URL, $locale_DE_DE_Name, $locale_DE_DE_regular_price, $locale_DE_DE_Display_precio, $locale_DE_DE_sale_price, $locale_DE_DE_Display_sales,$locale_DE_DE_Product_URL)
    {
        $result = crest::call("crm.product.add", [
            "EAN" => $ean,
            "product_code" => $product_code,
            "NAME" => $name,
            "UNIDADES" => $cantidad,
            "MARCA" => $marca,
            "CategoryLevel_1" => $CategoryLevel_1,
            "CategoryLevel_2" => $CategoryLevel_2,
            "CategoryLevel_3" => $CategoryLevel_3,
            "PEDIDO" => $pedido,
            "SUBCATEGORIA" => $subcategoria,
            "SEGMENTO" => $segmento,
            "CATEGORIA_3" => $categoria_3,
            "PET_TYPE_NUMBER" => $pet_type_number,
            "PRICE" => $price,
            "PAIS" => $pais,
            "Product_URL" => $Product_URL,
            "Image_URL" => $Image_URL,
            "PriceRange" => $PriceRange,
            "regular_price"	=> $regular_price,
            "sale_price"=> $sale_price,
            "COMPRA_PERIODICA" => $compra_periodica,
            "LOCALE_ES_ES_NAME" => $locale_ES_ES_Name,
            "LOCALE_ES_ES_REGULAR_PRICE" => $locale_ES_ES_regular_price,
            "LOCALE_ES_ES_DISPLAY_PRECIO" => $locale_ES_ES_Display_precio,
            "LOCALE_ES_ES_SALE_PRICE" => $locale_ES_ES_sale_price,
            "LOCALE_ES_ES_DISPLAY_SALES" => $locale_ES_ES_Display_sales,
            "LOCALE_ES_ES_PRODUCT_URL" => $locale_ES_ES_Product_URL,
            "LOCALE_FR_FR_NAME" => $locale_FR_FR_Name,
            "LOCALE_FR_FR_REGULAR_PRICE" => $locale_FR_FR_regular_price,
            "LOCALE_FR_FR_DISPLAY_PRECIO" => $locale_FR_FR_Display_precio,
            "LOCALE_FR_FR_SALE_PRICE" => $locale_FR_FR_sale_price,
            "LOCALE_FR_FR_DISPLAY_SALES" => $locale_FR_FR_Display_sales,
            "LOCALE_FR_FR_PRODUCT_URL" => $locale_FR_FR_Product_URL,
            "LOCALE_UK_EN_NAME" => $locale_UK_EN_Name,
            "LOCALE_UK_EN_REGULAR_PRICE" => $locale_UK_EN_regular_price,
            "LOCALE_UK_EN_DISPLAY_PRECIO" => $locale_UK_EN_Display_precio,
            "LOCALE_UK_EN_SALE_PRICE" => $locale_UK_EN_sale_price,
            "LOCALE_UK_EN_DISPLAY_SALES" => $locale_UK_EN_Display_sales,
            "LOCALE_UK_EN_PRODUCT_URL" => $locale_UK_EN_Product_URL,
            "LOCALE_PT_PT_NAME" => $locale_PT_PT_Name,
            "LOCALE_PT_PT_REGULAR_PRICE" => $locale_PT_PT_regular_price,
            "LOCALE_PT_PT_DISPLAY_PRECIO" => $locale_PT_PT_Display_precio,
            "LOCALE_PT_PT_SALE_PRICE" => $locale_PT_PT_sale_price,
            "LOCALE_PT_PT_DISPLAY_SALES" => $locale_PT_PT_Display_sales,
            "LOCALE_PT_PT_PRODUCT_URL" => $locale_PT_PT_Product_URL,
            "LOCALE_IT_IT_NAME" => $locale_IT_IT_Name,
            "LOCALE_IT_IT_REGULAR_PRICE" => $locale_IT_IT_regular_price,
            "LOCALE_IT_IT_DISPLAY_PRECIO" => $locale_IT_IT_Display_precio,
            "LOCALE_IT_IT_SALE_PRICE" => $locale_IT_IT_sale_price,
            "LOCALE_IT_IT_DISPLAY_SALES" => $locale_IT_IT_Display_sales,
            "LOCALE_IT_IT_PRODUCT_URL" => $locale_IT_IT_Product_URL,
            "LOCALE_DE_DE_NAME" => $locale_DE_DE_Name,
            "LOCALE_DE_DE_REGULAR_PRICE" => $locale_DE_DE_regular_price,
            "LOCALE_DE_DE_DISPLAY_PRECIO" => $locale_DE_DE_Display_precio,
            "LOCALE_DE_DE_SALE_PRICE" => $locale_DE_DE_sale_price,
            "LOCALE_DE_DE_DISPLAY_SALES" => $locale_DE_DE_Display_sales,
            "LOCALE_DE_DE_PRODUCT_URL" => $locale_DE_DE_Product_URL
        ]);
        return $result["result"];
    }
    public function FilterProducts($product_code)
    {

        $result = crest::call("crm.product.list", [
            "product_code" => $product_code,
        ]);
        return $result["result"];
    }
}
