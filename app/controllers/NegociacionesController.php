<?php

namespace App\Controllers;
use App\helpers\Auxhelpers;
use App\Models\Negociacion;
<<<<<<< HEAD
use App\Controllers\ProductosController;
=======
>>>>>>> 90154bf22ff8c0ae52b03e1fc77d4d1678ab9e12

class NegociacionesController extends Controller
{
   
    public $negociacion;
    public $helpers;
<<<<<<< HEAD
    public $products;
    public $contact;
=======
>>>>>>> 90154bf22ff8c0ae52b03e1fc77d4d1678ab9e12
    public function __construct()
    {
        $this->negociacion = new Negociacion();
        $this->helpers = new Auxhelpers();
<<<<<<< HEAD
        $this->products = new ProductosController();
    }
    public function Create(array $deals)
    {
        $resultados = [];
        foreach ($deals as $negociacion) {
            $rowprod = [];
            $rowprod = $this->products->filter($negociacion["idproduct"]);
            $resultados[] = $this->negociacion->CreateDeal($deals);
            $this->SetProductAPI($resultados["id"], $rowprod);
        };

    }
    public function SetProductAPI($iddel, array $rowprod)  {
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
=======
    }
    public function Create()
    {
        $this->negociacion->CreateDeal($id_order, $id_shop, $parent, $id_user, $ref, $total_price, $subtotal_price, $shipping_price, $financial_price, $total_cost_price, $shipping_cost_price, $pick_cost_price, $tax_price, $tax_perc, $currency_iso, $currency_rate, $date_created, $date_validated, $date_modified, $eta, $ship_expected_date, $id_pay, $pay_method, $id_coupon, $free_shipping, $status, $id_autoshipping, $name, $surnames, $country, $region, $city, $address, $phone, $phone2, $postcode, $comment, $obs_trans, $obs_tecnico, $id_version, $id_affiliate, $points, $provider, $weight, $packages, $transport_selected, $transport, $tracking, $insured, $ballots, $user_agent, $mobile, $bill_num, $bill_year, $reminder_active, $reported_incidence, $priority, $block_stock, $sac_reported, $modification, $web_referer, $warehouse_sent, $wrapped, $ops_reported, $cif, $date_send, $diff_val_send, $rta);
    }
>>>>>>> 90154bf22ff8c0ae52b03e1fc77d4d1678ab9e12
}
