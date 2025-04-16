<?php

namespace App\Models;
use App\Core\crest;
use App\helpers\Auxhelpers;

class Contacto extends Model
{
    public $helpers;
    public function __construct()
    {
        $this->helpers = new Auxhelpers();
    }

    public function CreateContact($sex, $name, $surnames, $birthdate, $email, $id_country, $id_language, $source, $shop_register, $newsletter, $newsletter_sms, $is_user, $is_buyer, $status, $last_order, $n_orders, $b2b, $autologin, $Marca, $has_Autoshipping, $phone, $locale, $url_rebuy, $domain,$id_retail, $balance_wallet, $next_balance_wallet_expiry, $next_balance_wallet_expiry_date, $family_member, $lat_order_phone)
    {
        $result = crest::call("crm.contact.add", [
            "fields" => [
                "SEX" => $sex,
                "NAME" => $name,
                "LAST_NAME" => $surnames,
                "BIRTHDATE" => $birthdate,
                "EMAIL" => [["VALUE" => $email, "VALUE_TYPE" => "WORK"]],
                "ID_COUNTRY" => $id_country,
                "ID_LANGUAGE" => $id_language,
                "SOURCE" => $source,
                "SHOP_REGISTER" => $shop_register,
                "NEWSLETTER" => $newsletter,
                "NEWSLETTER_SMS" => $newsletter_sms,
                "IS_USER" => $is_user,
                "IS_BUYER" => $is_buyer,
                "STATUS" => $status,
                "LAST_ORDER" => $last_order,
                "N_ORDERS" => $n_orders,
                "B2B" => $b2b,
                "AUTOLOGIN" => $autologin,
                "MARCA" => $Marca,
                "HAS_AUTOSHIPPING" => $has_Autoshipping,
                "PHONE" => [["VALUE" => $phone, "VALUE_TYPE" => "WORK"]],
                "LOCALE" => $locale,
                "URL_REBUY" => $url_rebuy,
                "DOMAIN" => $domain,
                "ID_RETAIL" => $id_retail,
                "BALANCE_WALLET" => $balance_wallet,
                "NEXT_BALANCE_WALLET_EXPIRY" => $next_balance_wallet_expiry,
                "NEXT_BALANCE_WALLET_EXPIRY_DATE" => $next_balance_wallet_expiry_date,
                "FAMILY_MEMBER" => $family_member,
                "LAT_ORDER_PHONE" => $lat_order_phone
            ]
        ]);
    
        return $result["result"];
    }

}
