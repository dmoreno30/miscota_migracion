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
    public function CreateDeal($id_order, $id_shop, $parent, $id_user, $ref, $total_price, $subtotal_price, $shipping_price, $financial_price, $total_cost_price, $shipping_cost_price, $pick_cost_price, $tax_price, $tax_perc, $currency_iso, $currency_rate, $date_created, $date_validated, $date_modified, $eta, $ship_expected_date, $id_pay, $pay_method, $id_coupon, $free_shipping, $status, $id_autoshipping, $name, $surnames, $country, $region, $city, $address, $phone, $phone2, $postcode, $comment, $obs_trans, $obs_tecnico, $id_version, $id_affiliate, $points, $provider, $weight, $packages, $transport_selected, $transport, $tracking, $insured, $ballots, $user_agent, $mobile, $bill_num, $bill_year, $reminder_active, $reported_incidence, $priority, $block_stock, $sac_reported, $modification, $web_referer, $warehouse_sent, $wrapped, $ops_reported, $cif, $date_send, $diff_val_send, $rta)
    {
        $result = crest::call("crm.deal.add", [
            "fields" => [
                "ID_ORDER" => $id_order,
                "ID_SHOP" => $id_shop,
                "PARENT" => $parent,
                "ID_USER" => $id_user,
                "REF" => $ref,
                "TOTAL_PRICE" => $total_price,
                "SUBTOTAL_PRICE" => $subtotal_price,
                "SHIPPING_PRICE" => $shipping_price,
                "FINANCIAL_PRICE" => $financial_price,
                "TOTAL_COST_PRICE" => $total_cost_price,
                "SHIPPING_COST_PRICE" => $shipping_cost_price,
                "PICK_COST_PRICE" => $pick_cost_price,
                "TAX_PRICE" => $tax_price,
                "TAX_PERC" => $tax_perc,
                "CURRENCY_ISO" => $currency_iso,
                "CURRENCY_RATE" => $currency_rate,
                "DATE_CREATED" => $date_created,
                "DATE_VALIDATED" => $date_validated,
                "DATE_MODIFIED" => $date_modified,
                "ETA" => $eta,
                "SHIP_EXPECTED_DATE" => $ship_expected_date,
                "ID_PAY" => $id_pay,
                "PAY_METHOD" => $pay_method,
                "ID_COUPON" => $id_coupon,
                "FREE_SHIPPING" => $free_shipping,
                "STATUS" => $status,
                "ID_AUTOSHIPPING" => $id_autoshipping,
                "NAME" => $name,
                "SURNAMES" => $surnames,
                "COUNTRY" => $country,
                "REGION" => $region,
                "CITY" => $city,
                "ADDRESS" => $address,
                "PHONE" => $phone,
                "PHONE2" => $phone2,
                "POSTCODE" => $postcode,
                "COMMENT" => $comment,
                "OBS_TRANS" => $obs_trans,
                "OBS_TECNICO" => $obs_tecnico,
                "ID_VERSION" => $id_version,
                "ID_AFFILIATE" => $id_affiliate,
                "POINTS" => $points,
                "PROVIDER" => $provider,
                "WEIGHT" => $weight,
                "PACKAGES" => $packages,
                "TRANSPORT_SELECTED" => $transport_selected,
                "TRANSPORT" => $transport,
                "TRACKING" => $tracking,
                "INSURED" => $insured,
                "BALLOTS" => $ballots,
                "USER_AGENT" => $user_agent,
                "MOBILE" => $mobile,
                "BILL_NUM" => $bill_num,
                "BILL_YEAR" => $bill_year,
                "REMINDER_ACTIVE" => $reminder_active,
                "REPORTED_INCIDENCE" => $reported_incidence,
                "PRIORITY" => $priority,
                "BLOCK_STOCK" => $block_stock,
                "SAC_REPORTED" => $sac_reported,
                "MODIFICATION" => $modification,
                "WEB_REFERER" => $web_referer,
                "WAREHOUSE_SENT" => $warehouse_sent,
                "WRAPPED" => $wrapped,
                "OPS_REPORTED" => $ops_reported,
                "CIF" => $cif,
                "DATE_SEND" => $date_send,
                "DIFF_VAL_SEND" => $diff_val_send,
                "RTA" => $rta
            ]
        ]);

        return $result["result"];
    }

    public function FilterDeal(){
        
    }
}
