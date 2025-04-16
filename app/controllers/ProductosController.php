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
<<<<<<< HEAD

    }
    public function index(){
        echo "hola";
    }
    public function Create(array $product)
    {
        $resultados = [];
    
        foreach ($product as $producto) {
            $resultados[] = $this->producto->CreateProduct(
                $producto['NAME'],
                $producto['QUANTITY'],
                $producto['PROPERTY_71'],
                $producto['PROPERTY_72'],
                $producto['PROPERTY_74'],
                $producto['PROPERTY_73'],
                $producto['ACTIVE'],
                $producto['PROPERTY_75'],
                $producto['PROPERTY_76'],
                $producto['PROPERTY_68'],
                $producto['PROPERTY_69'],
                $producto['PROPERTY_70'],
                $producto['PROPERTY_60'],
                $producto['PROPERTY_77'],
                $producto['PROPERTY_78'],
                $producto['PRICE'],
                $producto['PROPERTY_79'],
                $producto['PROPERTY_80'],
                $producto['PROPERTY_81'],
                $producto['PROPERTY_82'],
                $producto['PROPERTY_83'],
                $producto['PROPERTY_84'],
                $producto['PROPERTY_86'],
                $producto['PROPERTY_87'],
                $producto['PROPERTY_88'],
                $producto['PROPERTY_89'],
                $producto['PROPERTY_90'],
                $producto['PROPERTY_91'],
                $producto['PROPERTY_92'],
                $producto['PROPERTY_93'],
                $producto['PROPERTY_94'],
                $producto['PROPERTY_95'],
                $producto['PROPERTY_96'],
                $producto['PROPERTY_97'],
                $producto['PROPERTY_98'],
                $producto['PROPERTY_99'],
                $producto['PROPERTY_100'],
                $producto['PROPERTY_101'],
                $producto['PROPERTY_102'],
                $producto['PROPERTY_103'],
                $producto['PROPERTY_104'],
                $producto['PROPERTY_105'],
                $producto['PROPERTY_106'],
                $producto['PROPERTY_107'],
                $producto['PROPERTY_108'],
                $producto['PROPERTY_109'],
                $producto['PROPERTY_110'],
                $producto['PROPERTY_111'],
                $producto['PROPERTY_112'],
                $producto['PROPERTY_113'],
                $producto['PROPERTY_114'],
                $producto['PROPERTY_115'],
                $producto['PROPERTY_116'],
                $producto['CATALOG_ID'],
                $producto['CURRENCY_ID'],
                $producto['DESCRIPTION'],
                $producto['DESCRIPTION_TYPE'],
                $producto['MEASURE']  
            );
        }

        //echo json_encode($resultado);
        $this->helpers->LogRegister($resultados);
        return $resultados;
   
    }
    
    public function filter($product_code){
        
        $resultProduct = $this->producto->FilterProduct($product_code);
    }

 /*    public function setProduct(){
        $response = $this->producto->setProductDeal($idDeal, $productos);
        
        if ($response['error']) {
            return [
                'status' => 'error',
                'message' => $response['error_description'] ?? 'Error al asignar productos'
            ];
        }

        return [
            'status' => 'success',
            'data' => $response['result']
        ];
    } */

    public function readCSVProduct()
    {

        $archivoCSV = './productosPrueba.csv';
        if (!file_exists($archivoCSV) || !is_readable($archivoCSV)) {
            return ['error' => 'El archivo no se puede leer.'];
        }

        $productos = [];
        if (($handle = fopen($archivoCSV, 'r')) !== false) {
            $cabeceras = fgetcsv($handle); 
    
            while (($data = fgetcsv($handle)) !== false) {
                $fila = array_combine($cabeceras, $data); 
    
                $productos[] = [
                    'NAME' => $fila['NAME'] ?? 'Producto sin nombre',
                    'QUANTITY' => $fila['UNIDADES'] ?? 100,
                    'PROPERTY_71' => $fila['PAIS'] ?? '',
                    'PROPERTY_72' => $fila['EAN'] ?? '',
                    'PROPERTY_74' => $fila['SKU'] ?? '',
                    'PROPERTY_73' => $fila['product_code'] ?? '',
                    'ACTIVE' => $fila['Availability'] ?? '',
                    'PROPERTY_75' => $fila['Product_URL'] ?? '',
                    'PROPERTY_76' => $fila['IMAGE_URL'] ?? '',
                    'PROPERTY_68' => $fila['CATEGORY_LEVEL_1'] ?? '',
                    'PROPERTY_69' => $fila['CATEGORY_LEVEL_2'] ?? '',
                    'PROPERTY_70' => $fila['CATEGORY_LEVEL_3'] ?? '',
                    'PROPERTY_60' => $fila['MARCA'] ?? '',
                    'PROPERTY_77' => $fila['PriceRange'] ?? '',
                    'PROPERTY_78' => $fila['regular_price'] ?? '',
                    'PRICE' => $fila['sale_price'] ?? '',
                    'PROPERTY_79' => $fila['Compra_periodica'] ?? '',
                    'PROPERTY_80' => $fila['LOCALE_ES_ES_NAME'] ?? '',
                    'PROPERTY_81' => $fila['LOCALE_ES_ES_REGULAR_PRICE'] ?? 0,
                    'PROPERTY_82' => $fila['LOCALE_ES_ES_DISPLAY_PRECIO'] ?? '',
                    'PROPERTY_83' => $fila['LOCALE_ES_ES_SALE_PRICE'] ?? 0,
                    'PROPERTY_84' => $fila['LOCALE_ES_ES_DISPLAY_SALES'] ?? '',
                    'PROPERTY_86' => $fila['LOCALE_ES_ES_PRODUCT_URL'] ?? '',
                    'PROPERTY_87' => $fila['LOCALE_FR_FR_NAME'] ?? '',
                    'PROPERTY_88' => $fila['LOCALE_FR_FR_REGULAR_PRICE'] ?? 0,
                    'PROPERTY_89' => $fila['LOCALE_FR_FR_DISPLAY_PRECIO'] ?? '',
                    'PROPERTY_90' => $fila['LOCALE_FR_FR_SALE_PRICE'] ?? 0,
                    'PROPERTY_91' => $fila['LOCALE_FR_FR_DISPLAY_SALES'] ?? '',
                    'PROPERTY_92' => $fila['LOCALE_FR_FR_PRODUCT_URL'] ?? '',
                    'PROPERTY_93' => $fila['LOCALE_UK_EN_NAME'] ?? '',
                    'PROPERTY_94' => $fila['LOCALE_UK_EN_REGULAR_PRICE'] ?? 0,
                    'PROPERTY_95' => $fila['LOCALE_UK_EN_DISPLAY_PRECIO'] ?? '',
                    'PROPERTY_96' => $fila['LOCALE_UK_EN_SALE_PRICE'] ?? 0,
                    'PROPERTY_97' => $fila['LOCALE_UK_EN_DISPLAY_SALES'] ?? '',
                    'PROPERTY_98' => $fila['LOCALE_UK_EN_PRODUCT_URL'] ?? '',
                    'PROPERTY_99' => $fila['LOCALE_PT_PT_NAME'] ?? '',
                    'PROPERTY_100' => $fila['LOCALE_PT_PT_REGULAR_PRICE'] ?? 0,
                    'PROPERTY_101' => $fila['LOCALE_PT_PT_DISPLAY_PRECIO'] ?? '',
                    'PROPERTY_102' => $fila['LOCALE_PT_PT_SALE_PRICE'] ?? 0,
                    'PROPERTY_103' => $fila['LOCALE_PT_PT_DISPLAY_SALES'] ?? '',
                    'PROPERTY_104' => $fila['LOCALE_PT_PT_PRODUCT_URL'] ?? '',
                    'PROPERTY_105' => $fila['LOCALE_IT_IT_NAME'] ?? '',
                    'PROPERTY_106' => $fila['LOCALE_IT_IT_REGULAR_PRICE'] ?? 0,
                    'PROPERTY_107' => $fila['LOCALE_IT_IT_DISPLAY_PRECIO'] ?? '',
                    'PROPERTY_108' => $fila['LOCALE_IT_IT_SALE_PRICE'] ?? 0,
                    'PROPERTY_109' => $fila['LOCALE_IT_IT_DISPLAY_SALES'] ?? '',
                    'PROPERTY_110' => $fila['LOCALE_IT_IT_PRODUCT_URL'] ?? '',
                    'PROPERTY_111' => $fila['LOCALE_DE_DE_NAME'] ?? '',
                    'PROPERTY_112' => $fila['LOCALE_DE_DE_REGULAR_PRICE'] ?? 0,
                    'PROPERTY_113' => $fila['LOCALE_DE_DE_DISPLAY_PRECIO'] ?? '',
                    'PROPERTY_114' => $fila['LOCALE_DE_DE_SALE_PRICE'] ?? 0,
                    'PROPERTY_115' => $fila['LOCALE_DE_DE_DISPLAY_SALES'] ?? '',
                    'PROPERTY_116' => $fila['LOCALE_DE_DE_PRODUCT_URL'] ?? '',
                    'CATALOG_ID' => $fila['CATALOG_ID'] ?? 14,
                    'CURRENCY_ID' => $fila['CURRENCY_ID'] ?? 'USD',
                    'DESCRIPTION' => $fila['DESCRIPTION'] ?? '',
                    'DESCRIPTION_TYPE' => $fila['DESCRIPTION_TYPE'] ?? 'html',
                    'MEASURE' => $fila['MEASURE'] ?? 1,
                ];
            }
    
            fclose($handle);
        }
    
        if (empty($productos)) {
            return ['error' => 'No se encontraron productos en el archivo CSV.'];
        }

        $this->Create($productos);
        
        
    }    

}




=======
    }
    public function Create()
    {

        $this->producto->CreateProduct($ean, $product_code, $name, $cantidad, $marca,$CategoryLevel_1,$CategoryLevel_2,$CategoryLevel_3, $pedido, $subcategoria, $segmento, $categoria_3, $pet_type_number, $price, $pais,$Product_URL,$Image_URL,$PriceRange,$regular_price,$sale_price,$compra_periodica, $locale_ES_ES_Name, $locale_ES_ES_regular_price, $locale_ES_ES_Display_precio, $locale_ES_ES_sale_price, $locale_ES_ES_Display_sales, $locale_ES_ES_Product_URL, $locale_FR_FR_Name, $locale_FR_FR_regular_price, $locale_FR_FR_Display_precio, $locale_FR_FR_sale_price, $locale_FR_FR_Display_sales, $locale_FR_FR_Product_URL, $locale_UK_EN_Name, $locale_UK_EN_regular_price, $locale_UK_EN_Display_precio, $locale_UK_EN_sale_price, $locale_UK_EN_Display_sales, $locale_UK_EN_Product_URL, $locale_PT_PT_Name, $locale_PT_PT_regular_price, $locale_PT_PT_Display_precio, $locale_PT_PT_sale_price, $locale_PT_PT_Display_sales, $locale_PT_PT_Product_URL, $locale_IT_IT_Name, $locale_IT_IT_regular_price, $locale_IT_IT_Display_precio, $locale_IT_IT_sale_price, $locale_IT_IT_Display_sales, $locale_IT_IT_Product_URL, $locale_DE_DE_Name, $locale_DE_DE_regular_price, $locale_DE_DE_Display_precio, $locale_DE_DE_sale_price, $locale_DE_DE_Display_sales,$locale_DE_DE_Product_URL);
    }
}
>>>>>>> 90154bf22ff8c0ae52b03e1fc77d4d1678ab9e12
