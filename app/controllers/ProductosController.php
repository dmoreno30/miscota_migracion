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

    public function Create(array $product)
    {
        $resultados = [];
    
        foreach ($product as $producto) {
            $resultados[] = $this->producto->CreateProduct(
                $producto['Pedido'],
                $producto['PAIS'],
                $producto['TimeStampVenta'],
                $producto['EAN'],
                $producto['IdProd'],
                $producto['NombreProducto'],
                $producto['Unidades'],
                $producto['Marca'],
                $producto['Categoria'],
                $producto['id_user'],
                $producto['Campaign'],
                $producto['Subcategoria'],
                $producto['TimeStamp_Compra'],
                $producto['Segmento'],
                $producto['Categoria_3'],
                $producto['pet_type_number'],
                $producto['modification'],
            );
        }

        //echo json_encode($resultado);
/*         echo "<pre>";
        print_r($resultados);
        echo "</pre>"; */

        $this->helpers->LogRegister($resultados);
        return $resultados;
   
    }
    
    public function filterProduct($product_code){
        
        $resultProduct = $this->producto->Filter($product_code);
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

        $archivoCSV = __DIR__ . '/ProductosPrueba.csv';

        if (!file_exists($archivoCSV)) {
            echo "El archivo no existe: $archivoCSV";
        } elseif (!is_readable($archivoCSV)) {
            echo "El archivo no se puede leer: $archivoCSV";
        }

        $productos = [];
        if (($handle = fopen($archivoCSV, 'r')) !== false) {
            $cabeceras = fgetcsv($handle); 
    
            while (($data = fgetcsv($handle)) !== false) {
                $fila = array_combine($cabeceras, $data); 
    
                $productos[] = [
                    'Pedido' => $fila['NAME'] ?? 'Producto sin nombre',
                    'PAIS' => $fila['PAIS'] ?? '',
                    'TimeStampVenta' => $fila['TimeStampVenta'] ?? '',
                    'EAN' => $fila['EAN'] ?? '',
                    'IdProd' => $fila['IdProd'] ?? '',
                    'NombreProducto' => $fila['NombreProducto'] ?? '',
                    'Unidades' => $fila['Unidades'] ?? '',
                    'Marca' => $fila['Marca'] ?? '',
                    'Categoria' => $fila['Categoria'] ?? '',
                    'id_user' => $fila['id_user'] ?? '',
                    'Campaign' => $fila['Campaign'] ?? '',
                    'Subcategoria' => $fila['Subcategoria'] ?? '',
                    'TimeStamp_Compra' => $fila['TimeStamp_Compra'] ?? '',
                    'Segmento' => $fila['Segmento'] ?? '',
                    'Categoria_3' => $fila['Categoria_3'] ?? '',
                    'pet_type_number' => $fila['pet_type_number'] ?? '',
                    'modification' => $fila['modification'] ?? '',
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

