<?php

namespace App\Models;
<<<<<<< HEAD

=======
>>>>>>> 90154bf22ff8c0ae52b03e1fc77d4d1678ab9e12
use App\Core\crest;
use App\helpers\Auxhelpers;

class Producto extends Model
{
<<<<<<< HEAD
    public function CreateProduct(
        $NAME,
        $UNIDADES,
        $PAIS,
        $EAN,
        $SKU,
        $product_code,
        $Availability,
        $Product_URL,
        $IMAGE_URL,
        $CATEGORY_LEVEL_1,
        $CATEGORY_LEVEL_2,
        $CATEGORY_LEVEL_3,
        $MARCA,
        $PriceRange,
        $regular_price,
        $sale_price,
        $Compra_periodica,
        $LOCALE_ES_ES_NAME,
        $LOCALE_ES_ES_REGULAR_PRICE,
        $LOCALE_ES_ES_DISPLAY_PRECIO,
        $LOCALE_ES_ES_SALE_PRICE,
        $LOCALE_ES_ES_DISPLAY_SALES,
        $LOCALE_ES_ES_PRODUCT_URL,
        $LOCALE_FR_FR_NAME,
        $LOCALE_FR_FR_REGULAR_PRICE,
        $LOCALE_FR_FR_DISPLAY_PRECIO,
        $LOCALE_FR_FR_SALE_PRICE,
        $LOCALE_FR_FR_DISPLAY_SALES,
        $LOCALE_FR_FR_PRODUCT_URL,
        $LOCALE_UK_EN_NAME,
        $LOCALE_UK_EN_REGULAR_PRICE,
        $LOCALE_UK_EN_DISPLAY_PRECIO,
        $LOCALE_UK_EN_SALE_PRICE,
        $LOCALE_UK_EN_DISPLAY_SALES,
        $LOCALE_UK_EN_PRODUCT_URL,
        $LOCALE_PT_PT_NAME,
        $LOCALE_PT_PT_REGULAR_PRICE,
        $LOCALE_PT_PT_DISPLAY_PRECIO,
        $LOCALE_PT_PT_SALE_PRICE,
        $LOCALE_PT_PT_DISPLAY_SALES,
        $LOCALE_PT_PT_PRODUCT_URL,
        $LOCALE_IT_IT_NAME,
        $LOCALE_IT_IT_REGULAR_PRICE,
        $LOCALE_IT_IT_DISPLAY_PRECIO,
        $LOCALE_IT_IT_SALE_PRICE,
        $LOCALE_IT_IT_DISPLAY_SALES,
        $LOCALE_IT_IT_PRODUCT_URL,
        $LOCALE_DE_DE_NAME,
        $LOCALE_DE_DE_REGULAR_PRICE,
        $LOCALE_DE_DE_DISPLAY_PRECIO,
        $LOCALE_DE_DE_SALE_PRICE,
        $LOCALE_DE_DE_DISPLAY_SALES,
        $LOCALE_DE_DE_PRODUCT_URL,
        $CATALOG_ID,
        $CURRENCY_ID,
        $DESCRIPTION,
        $DESCRIPTION_TYPE,
        $MEASURE
    ) {

        $result = crest::call("crm.product.add", [
            'NAME' => $NAME,
            'QUANTITY' => $UNIDADES,
            'PROPERTY_71' => $PAIS,
            'PROPERTY_72' => $EAN,
            'PROPERTY_74' => $SKU,
            'PROPERTY_73' => $product_code,
            'ACTIVE' => $Availability,
            'PROPERTY_75' => $Product_URL,
            'PROPERTY_76' => $IMAGE_URL,
            'PROPERTY_68' => $CATEGORY_LEVEL_1,
            'PROPERTY_69' => $CATEGORY_LEVEL_2,
            'PROPERTY_70' => $CATEGORY_LEVEL_3,
            'PROPERTY_60' => $MARCA,
            'PROPERTY_77' => $PriceRange,
            'PROPERTY_78' => $regular_price,
            'PRICE' => $sale_price,
            'PROPERTY_79' => $Compra_periodica,
            'PROPERTY_80' => $LOCALE_ES_ES_NAME,
            'PROPERTY_81' => $LOCALE_ES_ES_REGULAR_PRICE,
            'PROPERTY_82' => $LOCALE_ES_ES_DISPLAY_PRECIO,
            'PROPERTY_83' => $LOCALE_ES_ES_SALE_PRICE,
            'PROPERTY_84' => $LOCALE_ES_ES_DISPLAY_SALES,
            'PROPERTY_86' => $LOCALE_ES_ES_PRODUCT_URL,
            'PROPERTY_87' => $LOCALE_FR_FR_NAME,
            'PROPERTY_88' => $LOCALE_FR_FR_REGULAR_PRICE,
            'PROPERTY_89' => $LOCALE_FR_FR_DISPLAY_PRECIO,
            'PROPERTY_90' => $LOCALE_FR_FR_SALE_PRICE,
            'PROPERTY_91' => $LOCALE_FR_FR_DISPLAY_SALES,
            'PROPERTY_92' => $LOCALE_FR_FR_PRODUCT_URL,
            'PROPERTY_93' => $LOCALE_UK_EN_NAME,
            'PROPERTY_94' => $LOCALE_UK_EN_REGULAR_PRICE,
            'PROPERTY_95' => $LOCALE_UK_EN_DISPLAY_PRECIO,
            'PROPERTY_96' => $LOCALE_UK_EN_SALE_PRICE,
            'PROPERTY_97' => $LOCALE_UK_EN_DISPLAY_SALES,
            'PROPERTY_98' => $LOCALE_UK_EN_PRODUCT_URL,
            'PROPERTY_99' => $LOCALE_PT_PT_NAME,
            'PROPERTY_100' => $LOCALE_PT_PT_REGULAR_PRICE,
            'PROPERTY_101' => $LOCALE_PT_PT_DISPLAY_PRECIO,
            'PROPERTY_102' => $LOCALE_PT_PT_SALE_PRICE,
            'PROPERTY_103' => $LOCALE_PT_PT_DISPLAY_SALES,
            'PROPERTY_104' => $LOCALE_PT_PT_PRODUCT_URL,
            'PROPERTY_105' => $LOCALE_IT_IT_NAME,
            'PROPERTY_106' => $LOCALE_IT_IT_REGULAR_PRICE,
            'PROPERTY_107' => $LOCALE_IT_IT_DISPLAY_PRECIO,
            'PROPERTY_108' => $LOCALE_IT_IT_SALE_PRICE,
            'PROPERTY_109' => $LOCALE_IT_IT_DISPLAY_SALES,
            'PROPERTY_110' => $LOCALE_IT_IT_PRODUCT_URL,
            'PROPERTY_111' => $LOCALE_DE_DE_NAME,
            'PROPERTY_112' => $LOCALE_DE_DE_REGULAR_PRICE,
            'PROPERTY_113' => $LOCALE_DE_DE_DISPLAY_PRECIO,
            'PROPERTY_114' => $LOCALE_DE_DE_SALE_PRICE,
            'PROPERTY_115' => $LOCALE_DE_DE_DISPLAY_SALES,
            'PROPERTY_116' => $LOCALE_DE_DE_PRODUCT_URL,
            'CATALOG_ID' => $CATALOG_ID,
            'CURRENCY_ID' => $CURRENCY_ID,
            'DESCRIPTION' => $DESCRIPTION,
            'DESCRIPTION_TYPE' => $DESCRIPTION_TYPE,
            'MEASURE' => $MEASURE,
        ]);

        /*   $result = crest::call("crm.product.add", [
=======
    
    public function CreateProduct($ean, $product_code, $name, $cantidad, $marca,$CategoryLevel_1,$CategoryLevel_2,$CategoryLevel_3, $pedido, $subcategoria, $segmento, $categoria_3, $pet_type_number, $price, $pais,$Product_URL,$Image_URL,$PriceRange,$regular_price,$sale_price,$compra_periodica, $locale_ES_ES_Name, $locale_ES_ES_regular_price, $locale_ES_ES_Display_precio, $locale_ES_ES_sale_price, $locale_ES_ES_Display_sales, $locale_ES_ES_Product_URL, $locale_FR_FR_Name, $locale_FR_FR_regular_price, $locale_FR_FR_Display_precio, $locale_FR_FR_sale_price, $locale_FR_FR_Display_sales, $locale_FR_FR_Product_URL, $locale_UK_EN_Name, $locale_UK_EN_regular_price, $locale_UK_EN_Display_precio, $locale_UK_EN_sale_price, $locale_UK_EN_Display_sales, $locale_UK_EN_Product_URL, $locale_PT_PT_Name, $locale_PT_PT_regular_price, $locale_PT_PT_Display_precio, $locale_PT_PT_sale_price, $locale_PT_PT_Display_sales, $locale_PT_PT_Product_URL, $locale_IT_IT_Name, $locale_IT_IT_regular_price, $locale_IT_IT_Display_precio, $locale_IT_IT_sale_price, $locale_IT_IT_Display_sales, $locale_IT_IT_Product_URL, $locale_DE_DE_Name, $locale_DE_DE_regular_price, $locale_DE_DE_Display_precio, $locale_DE_DE_sale_price, $locale_DE_DE_Display_sales,$locale_DE_DE_Product_URL)
    {
        $result = crest::call("crm.product.add", [
>>>>>>> 90154bf22ff8c0ae52b03e1fc77d4d1678ab9e12
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
<<<<<<< HEAD
        ]); */
        return $result["result"];
    }



    public function FilterProduct($product_code)
    {

        $result = crest::call("crm.product.list", [
            'filter' =>
            ['PROPERTY_61' => $product_code],
        ]);
        return $result["result"][0];
    }
    public function setProductDeal($IDdeal, array $rowprod)
    {
        $rows = [];

        foreach ($rowprod as $producto) {
            $rows[] = [
                'PRODUCT_ID' => $producto['IdProd'],
                'PRICE' => $producto['PRICE'],
                'QUANTITY' => $producto['QUANTITY'],
                'TAX_RATE' => $producto['TAX_RATE'],
                'DISCOUNT_SUM' => $producto['DISCOUNT_SUM'],
                'DISCOUNT_TYPE_ID' => $producto['DISCOUNT_TYPE_ID'],
                'UF_CRM_PAIS'  => $producto['Pais'], //estos campos los pongo como adicional si se llegan a crear como propiedades de productos,pero no es garantizado que se puedan llamar desde productrow
                'UF_CRM_EAN' => $producto['EAN'], //estos campos los pongo como adicional si se llegan a crear como propiedades de productos,pero no es garantizado que se puedan llamar desde productrow

            ];
        }

        $result = CRest::call(
            'crm.deal.productrows.set',
            [
                'id' => $IDdeal,
                'rows' => $rows
            ]
        );

        return $result;
=======
        ]);
        return $result["result"];
    }
    public function FilterProducts($product_code)
    {

        $result = crest::call("crm.product.list", [
            "product_code" => $product_code,
        ]);
        return $result["result"];
>>>>>>> 90154bf22ff8c0ae52b03e1fc77d4d1678ab9e12
    }
}
