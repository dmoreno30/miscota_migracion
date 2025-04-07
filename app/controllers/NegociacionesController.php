<?php

namespace App\Controllers;
use App\helpers\Auxhelpers;
use App\Models\Negociacion;

class NegociacionesController extends Controller
{
   
    public $negociacion;
    public $helpers;
    public function __construct()
    {
        $this->negociacion = new Negociacion();
        $this->helpers = new Auxhelpers();
    }
    public function Create()
    {
        $this->negociacion->CreateDeal($id_order, $id_shop, $parent, $id_user, $ref, $total_price, $subtotal_price, $shipping_price, $financial_price, $total_cost_price, $shipping_cost_price, $pick_cost_price, $tax_price, $tax_perc, $currency_iso, $currency_rate, $date_created, $date_validated, $date_modified, $eta, $ship_expected_date, $id_pay, $pay_method, $id_coupon, $free_shipping, $status, $id_autoshipping, $name, $surnames, $country, $region, $city, $address, $phone, $phone2, $postcode, $comment, $obs_trans, $obs_tecnico, $id_version, $id_affiliate, $points, $provider, $weight, $packages, $transport_selected, $transport, $tracking, $insured, $ballots, $user_agent, $mobile, $bill_num, $bill_year, $reminder_active, $reported_incidence, $priority, $block_stock, $sac_reported, $modification, $web_referer, $warehouse_sent, $wrapped, $ops_reported, $cif, $date_send, $diff_val_send, $rta);
    }
}
