<?php

namespace App\Models;
use App\Core\crest;
use App\helpers\Auxhelpers;

class Negociacion extends Model
{
    public $helpers;
    public function __construct()
    {
        $this->helpers = new Auxhelpers();
    }
    public function CreateDeal(
    $id_order,
    $id_shop,
    $parent,
    $id_user,
    $ref,
    $total_price,
    $subtotal_price,
    $shipping_price,
    $financial_price,
    $total_cost_price,
    $shipping_cost_price,
    $pick_cost_price, 
    $tax_price, 
    $tax_perc, 
    $currency_iso, 
    $currency_rate, 
    $date_created, 
    $date_validated, 
    $date_modified, 
    $eta, 
    $ship_expected_date, 
    $id_pay,
    $pay_method, 
    $id_coupon, 
    $free_shipping, 
    $status, 
    $id_autoshipping,
    $postcode, 
    $comment, 
    $obs_trans, 
    $obs_tecnico, 
    $id_version, 
    $id_affiliate, 
    $points, 
    $provider, 
    $weight, 
    $packages, 
    $transport_selected, 
    $transport, 
    $tracking, 
    $insured,
    $ballots, 
    $user_agent, 
    $mobile, 
    $bill_num, 
    $bill_year, 
    $reminder_active, 
    $reported_incidence, 
    $priority, 
    $block_stock, 
    $sac_reported, 
    $modification, 
    $web_referer, 
    $warehouse_sent, 
    $wrapped, 
    $ops_reported, 
    $cif, 
    $date_send, 
    $diff_val_send, 
    $rta)
    {
        $result = crest::call("crm.deal.add", [
            "fields" => [
                "UF_CRM_1741208367" => $id_order,
                "UF_CRM_1741208374" => $id_shop,
                "UF_CRM_1741208397" => $parent,
                "UF_CRM_1741208412" => $id_user,
                "UF_CRM_1741208419" => $ref,
                "OPPORTUNITY" => $total_price,
                "UF_CRM_1745430608" => $subtotal_price,
                "UF_CRM_1741208601" => $shipping_price,
                "UF_CRM_1741208613" => $financial_price,
                "UF_CRM_1741208628" => $total_cost_price,
                "UF_CRM_1745430627" => $shipping_cost_price,
                "UF_CRM_1741225779" => $pick_cost_price,
                "UF_CRM_1745430653" => $tax_price,
                "UF_CRM_1745430671" => $tax_perc,
                "UF_CRM_1741225809" => $currency_iso,
                "UF_CRM_1741225820" => $currency_rate,
                "DATE_CREATED" => $date_created,
                "UF_CRM_1745430723" => $date_validated,
                "UF_CRM_1745430745" => $date_modified,
                "UF_CRM_1745430780" => $eta,
                "UF_CRM_1745431060" => $ship_expected_date,
                "UF_CRM_1745430820" => $id_pay,
                "UF_CRM_1745430837" => $pay_method,
                "UF_CRM_1745430859" => $id_coupon,
                "UF_CRM_1745431127" => $free_shipping,
                "UF_CRM_1745431155" => $status,
                "UF_CRM_1745431172" => $id_autoshipping,
                "UF_CRM_1741192695" => $postcode,
                "COMMENTS" => $comment,
                "UF_CRM_1741190436" => $obs_trans,
                "UF_CRM_1741190431" => $obs_tecnico,
                "UF_CRM_1741190425" => $id_version,
                "UF_CRM_1741190419" => $id_affiliate,
                "UF_CRM_1741190413" => $points,
                "UF_CRM_1741190407" => $provider,
                "UF_CRM_1741190395" => $weight,
                "UF_CRM_1741190389" => $packages,
                "UF_CRM_1741190379" => $transport_selected,
                "UF_CRM_1741190370" => $transport,
                "UF_CRM_1741190365" => $tracking,
                "UF_CRM_1741190357" => $insured,
                "UF_CRM_1741190350" => $ballots,
                "UF_CRM_1741190344" => $user_agent,
                "UF_CRM_1741190337" => $mobile,
                "UF_CRM_1741190329" => $bill_num,
                "UF_CRM_1741190319" => $bill_year,
                "UF_CRM_1741190313" => $reminder_active,
                "UF_CRM_1741190306" => $reported_incidence,
                "UF_CRM_1741190296" => $priority,
                "UF_CRM_1741190290" => $block_stock,
                "UF_CRM_1741190284" => $sac_reported,
                "UF_CRM_1741190257" => $modification,
                "UF_CRM_1741190250" => $web_referer,
                "UF_CRM_1741190242" => $warehouse_sent,
                "UF_CRM_1741190233" => $wrapped,
                "UF_CRM_1741190226" => $ops_reported,
                "UF_CRM_1741190207" => $cif,
                "UF_CRM_1741190194" => $date_send,
                "UF_CRM_1741190170" => $diff_val_send,
                "UF_CRM_1741189980" => $rta
            ]
        ]);

        return $result["result"];
    }

    public function FilterDeal(){
        
    }
}
