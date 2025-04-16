<?php

namespace App\Controllers;
use App\helpers\Auxhelpers;
use App\Models\Contacto;

class ContactosController extends Controller
{
    public $contacto;
    public $helpers;
    public function __construct()
    {
        $this->contacto = new Contacto();
        $this->helpers = new Auxhelpers();
    }
    public function Create(array $contact)
    {

        $resultados = [];
    
        foreach ($contact as $contacts) {
            $resultados[] = $this->contacto->CreateContact(
                $contact['NAME'],
                $contact['QUANTITY'],
                $contact['PROPERTY_71'],
                $contact['PROPERTY_72'],
                $contact['PROPERTY_74'],
                $contact['PROPERTY_73'],
                $contact['ACTIVE'],
                $contact['PROPERTY_75'],
                $contact['PROPERTY_76'],
                $contact['PROPERTY_68'],
                $contact['PROPERTY_69'],
                $contact['PROPERTY_70'],
                $contact['PROPERTY_60'],
                $contact['PROPERTY_77'],
                $contact['PROPERTY_78'],
                $contact['PRICE'],
                $contact['PROPERTY_79'],
                $contact['PROPERTY_80'],
                $contact['PROPERTY_81'],
                $contact['PROPERTY_82'],
                $contact['PROPERTY_83'],
                $contact['PROPERTY_84'],
                $contact['PROPERTY_86'],
                $contact['PROPERTY_87'],
                $contact['PROPERTY_88'],
                $contact['PROPERTY_89'],
                $contact['PROPERTY_90'],
                $contact['PROPERTY_91'],
                $contact['PROPERTY_92'],
                $contact['PROPERTY_93'],
                $contact['PROPERTY_94'],
                $contact['PROPERTY_95'],
                $contact['PROPERTY_96'],
                $contact['PROPERTY_97'],
                $contact['PROPERTY_98'],
                $contact['PROPERTY_99'],
                $contact['PROPERTY_100'],
                $contact['PROPERTY_101'],
                $contact['PROPERTY_102'],
                $contact['PROPERTY_103'],
                $contact['PROPERTY_104'],
                $contact['PROPERTY_105'],
                $contact['PROPERTY_106'],
                $contact['PROPERTY_107'],
                $contact['PROPERTY_108'],
                $contact['PROPERTY_109'],
                $contact['PROPERTY_110'],
                $contact['PROPERTY_111'],
                $contact['PROPERTY_112'],
                $contact['PROPERTY_113'],
                $contact['PROPERTY_114'],
                $contact['PROPERTY_115'],
                $contact['PROPERTY_116'],
                $contact['CATALOG_ID'],
                $contact['CURRENCY_ID'],
                $contact['DESCRIPTION'],
                $contact['DESCRIPTION_TYPE'],
                $contact['MEASURE']  
            );
        }

        //echo json_encode($resultado);
        $this->helpers->LogRegister($resultados);
        return $resultados;
    }
    public function readCSVProduct()
    {

        $archivoCSV = './ContactosPrueba.csv';
        if (!file_exists($archivoCSV) || !is_readable($archivoCSV)) {
            return ['error' => 'El archivo no se puede leer.'];
        }

        $productos = [];
        if (($handle = fopen($archivoCSV, 'r')) !== false) {
            $cabeceras = fgetcsv($handle); 
    
            while (($data = fgetcsv($handle)) !== false) {
                $fila = array_combine($cabeceras, $data); 
    
                $contact[] = [
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
    
        if (empty($contact)) {
            return ['error' => 'No se encontraron productos en el archivo CSV.'];
        }

        $this->Create($contact);
        
        
    }    

}
