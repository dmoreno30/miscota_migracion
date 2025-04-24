<?php

namespace App\Controllers;
use App\helpers\Auxhelpers;
use App\Models\Negociacion;

use App\Controllers\ProductosController;


class NegociacionesController extends Controller
{
   
    public $negociacion;
    public $helpers;

    public $products;
    public $contact;

    public function __construct()
    {
        $this->negociacion = new Negociacion();
        $this->helpers = new Auxhelpers();
        $this->products = new ProductosController();
    }
    public function Create(array $deals)
    {
        $resultados = [];
        foreach ($deals as $negociaciones) {
            $rowprod = [];
            $rowprod = $this->products->filter($negociaciones["idproduct"]);
            $resultados[] = $this->negociacion->CreateDeal(
                $negociaciones['id_order'],
                $negociaciones['id_shop'],
                $negociaciones['parent'],
                $negociaciones['id_user'],
                $negociaciones['ref'],
                $negociaciones['total_price'],
                $negociaciones['subtotal_price'],
                $negociaciones['shipping_price'],
                $negociaciones['financial_price'],
                $negociaciones['total_cost_price'],
                $negociaciones['shipping_cost_price'],
                $negociaciones['pick_cost_price'],
                $negociaciones['tax_price'],
                $negociaciones['tax_perc'],
                $negociaciones['currency_iso'],
                $negociaciones['currency_rate'],
                $negociaciones['date_created'],
                $negociaciones['date_validated'],
                $negociaciones['date_modified'],
                $negociaciones['eta'],
                $negociaciones['ship_expected_date'],
                $negociaciones['id_pay'],
                $negociaciones['pay_method'],
                $negociaciones['id_coupon'],
                $negociaciones['free_shipping'],
                $negociaciones['status'],
                $negociaciones['id_autoshipping'],
                $negociaciones['postcode'],
                $negociaciones['comment'],
                $negociaciones['obs_trans'],
                $negociaciones['obs_tecnico'],
                $negociaciones['id_version'],
                $negociaciones['id_affiliate'],
                $negociaciones['points'],
                $negociaciones['provider'],
                $negociaciones['weight'],
                $negociaciones['packages'],
                $negociaciones['transport_selected'],
                $negociaciones['transport'],
                $negociaciones['tracking'],
                $negociaciones['insured'],
                $negociaciones['ballots'],
                $negociaciones['user_agent'],
                $negociaciones['mobile'],
                $negociaciones['bill_num'],
                $negociaciones['bill_year'],
                $negociaciones['reminder_active'],
                $negociaciones['reported_incidence'],
                $negociaciones['priority'],
                $negociaciones['block_stock'],
                $negociaciones['sac_reported'],
                $negociaciones['modification'],
                $negociaciones['web_referer'],
                $negociaciones['warehouse_sent'],
                $negociaciones['wrapped'],
                $negociaciones['ops_reported'],
                $negociaciones['cif'],
                $negociaciones['date_send'],
                $negociaciones['diff_val_send'],
                $negociaciones['rta'] 
            );
            $this->SetProductAPI($resultados["id"], $rowprod);
        };

    }
    public function SetProductAPI($iddel, array $rowprod)  
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
                'UF_CRM_PAIS'  => $producto['Pais'],
                'UF_CRM_EAN' => $producto['EAN'],

            ];
        }

        $result = CRest::call(
            'crm.deal.productrows.set',
            [
                'id' => $iddel,
                'rows' => $rows
            ]
        );

        return $result;
    }
    public function readCSVDeals()
    {

        $archivoCSV = './DealsPrueba.csv';
        if (!file_exists($archivoCSV) || !is_readable($archivoCSV)) {
            return ['error' => 'El archivo no se puede leer.'];
        }

        $deals = [];
        if (($handle = fopen($archivoCSV, 'r')) !== false) {
            $cabeceras = fgetcsv($handle); 
    
            while (($data = fgetcsv($handle)) !== false) {
                $fila = array_combine($cabeceras, $data); 
    
                $deals[] = [
                    'id_order' => $fila['id_order'] ?? '',
                    'id_shop' => $fila['id_shop'] ?? '',
                    'parent' => $fila['parent'] ?? '',
                    'id_user' => $fila['id_user'] ?? '',
                    'ref' => $fila['ref'] ?? '',
                    'OPPORTUNITY' => $fila['total_price'] ?? 0,
                    'subtotal_price' => $fila['subtotal_price'] ?? 0,
                    'shipping_price' => $fila['shipping_price'] ?? 0,
                    'financial_price' => $fila['financial_price'] ?? 0,
                    'total_cost_price' => $fila['total_cost_price'] ?? 0,
                    'shipping_cost_price' => $fila['shipping_cost_price'] ?? 0,
                    'pick_cost_price' => $fila['pick_cost_price'] ?? 0,
                    'tax_price' => $fila['tax_price'] ?? 0,
                    'tax_perc' => $fila['tax_perc'] ?? 0,
                    'currency_iso' => $fila['currency_iso'] ?? '',
                    'currency_rate' => $fila['currency_rate'] ?? 0,
                    'eta' => $fila['eta'] ?? '',
                    'ship_expected_date' => $fila['ship_expected_date'] ?? '',
                    'id_pay' => $fila['id_pay'] ?? '',
                    'pay_method' => $fila['pay_method'] ?? '',
                    'id_coupon' => $fila['id_coupon'] ?? '',
                    'free_shipping' => $fila['free_shipping'] ?? '',
                    'status' => $fila['status'] ?? '',
                    'id_autoshipping' => $fila['id_autoshipping'] ?? '',
                    'postcode' => $fila['postcode'] ?? '',
                    'comment' => $fila['comment'] ?? '',
                    'obs_trans' => $fila['obs_trans'] ?? '',
                    'obs_tecnico' => $fila['obs_tecnico'] ?? '',
                    'id_version' => $fila['id_version'] ?? '',
                    'id_affiliate' => $fila['id_affiliate'] ?? '',
                    'points' => $fila['points'] ?? 0,
                    'provider' => $fila['provider'] ?? '',
                    'weight' => $fila['weight'] ?? 0,
                    'packages' => $fila['packages'] ?? 0,
                    'transport_selected' => $fila['transport_selected'] ?? '',
                    'transport' => $fila['transport'] ?? '',
                    'tracking' => $fila['tracking'] ?? '',
                    'insured' => $fila['insured'] ?? '',
                    'ballots' => $fila['ballots'] ?? '',
                    'user_agent' => $fila['user_agent'] ?? '',
                    'mobile' => $fila['mobile'] ?? '',
                    'bill_num' => $fila['bill_num'] ?? '',
                    'bill_year' => $fila['bill_year'] ?? '',
                    'reminder_active' => $fila['reminder_active'] ?? '',
                    'reported_incidence' => $fila['reported_incidence'] ?? '',
                    'priority' => $fila['priority'] ?? '',
                    'block_stock' => $fila['block_stock'] ?? '',
                    'sac_reported' => $fila['sac_reported'] ?? '',
                    'modification' => $fila['modification'] ?? '',
                    'web_referer' => $fila['web_referer'] ?? '',
                    'warehouse_sent' => $fila['warehouse_sent'] ?? '',
                    'wrapped' => $fila['wrapped'] ?? '',
                    'ops_reported' => $fila['ops_reported'] ?? '',
                    'cif' => $fila['cif'] ?? '',
                    'date_send' => $fila['date_send'] ?? '',
                    'diff_val_send' => $fila['diff_val_send'] ?? '',
                    'rta' => $fila['rta'] ?? '',
                ];
            }
    
            fclose($handle);
        }
    
        if (empty($deals)) {
            return ['error' => 'No se encontraron productos en el archivo CSV.'];
        }

        $this->Create($deals);
        
        
    }  
 

}
