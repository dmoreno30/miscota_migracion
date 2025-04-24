<?php

namespace App\Models;
use App\Core\crest;
use App\helpers\Auxhelpers;

class Producto extends Model
{

    public function CreateProduct(
        $Pedido,
        $PAIS,
        $TimeStampVenta,
        $EAN,
        $IdProd,
        $NombreProducto,
        $Unidades,
        $Marca,
        $Categoria,
        $id_user,
        $Campaign,
        $Subcategoria,
        $TimeStamp_Compra,
        $Segmento,
        $Categoria_3,
        $pet_type_number,
        $modification  
    ) {

        $result = crest::call("crm.product.add", [
            'PROPERTY_117' => $Pedido,
            'PROPERTY_71' => $PAIS,
            'PROPERTY_118' => $TimeStampVenta,
            'PROPERTY_72' => $EAN,
            'PROPERTY_73' => $IdProd,
            'NAME' => $NombreProducto,
            'QUANTITY' => $Unidades,
            'PROPERTY_60' => $Marca,
            'PROPERTY_119' => $Categoria,
            'PROPERTY_120' => $id_user,
            'PROPERTY_121' => $Campaign,
            'PROPERTY_122' => $Subcategoria,
            'PROPERTY_127' => $TimeStamp_Compra,
            'PROPERTY_124' => $Segmento,
            'PROPERTY_70' => $Categoria_3,
            'PROPERTY_125' => $pet_type_number,
            'PROPERTY_126' => $modification,
        ]);

        if (isset($result["result"])) {
            return ["success" => true, "id" => $result["result"]];
        } else {
            return [
                "success" => false,
                "error" => $result["error"] ?? 'unknown',
                "message" => $result["error_description"] ?? ''
            ];
    }
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

     
        return $result["result"];
    }

}
