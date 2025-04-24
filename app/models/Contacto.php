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

    public function CreateContact($sex, $name, $surnames, $birthdate, $email, $id_country, $id_language, $source, $shop_register, $newsletter, $newsletter_sms, $is_user, $is_buyer, $status, $last_order, $n_orders, $b2b, $autologin, $Marca, $has_Autoshipping, $phone, $locale, $url_rebuy, $domain,$id_retail, $balance_wallet, $next_balance_wallet_expiry, $next_balance_wallet_expiry_date, $family_member, $last_order_phone,$id_user)
    {
        $result = crest::call("crm.contact.add", [
            "fields" => [
                "SEX" => $sex,
                "UF_CRM_1744833425" => $id_user,
                "NAME" => $name,
                "LAST_NAME" => $surnames,
                "BIRTHDATE" => $birthdate,
                "EMAIL" => [["VALUE" => $email, "VALUE_TYPE" => "WORK"]],
                "UF_CRM_1741106920" => $id_country,
                "UF_CRM_1741106927" => $id_language,
                "UF_CRM_1741106933" => $source,
                "UF_CRM_1741106940" => $shop_register,
                "UF_CRM_1741106947" => $newsletter,
                "UF_CRM_1741106964" => $newsletter_sms,
                "UF_CRM_1741106980" => $is_user,
                "UF_CRM_1741106988" => $is_buyer,
                "UF_CRM_1741106996" => $status,
                "UF_CRM_1741107090" => $last_order,
                "UF_CRM_1741107134" => $n_orders,
                "UF_CRM_1741107152" => $b2b,
                "UF_CRM_1741107161" => $autologin,
                "UF_CRM_1741107169" => $Marca,
                "UF_CRM_1741107177" => $has_Autoshipping,
                "PHONE" => [["VALUE" => $phone, "VALUE_TYPE" => "WORK"]],
                "UF_CRM_1741107188" => $locale,
                "UF_CRM_1741107324" => $url_rebuy,
                "UF_CRM_1744831847" => $domain,
                "UF_CRM_1741107356" => $id_retail,
                "UF_CRM_1741107364" => $balance_wallet,
                "UF_CRM_1741107375" => $next_balance_wallet_expiry,
                "UF_CRM_1741107391" => $next_balance_wallet_expiry_date,
                "UF_CRM_1741107405" => $family_member,
                "UF_CRM_1744831956" => $last_order_phone
                

              
            ]
        ]);
    
        //return $result["result"];
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

    public function FilterContact($ID_USER)
    {

        $result = crest::call("crm.product.list", [
            'filter' =>
            ['UF_CRM_1744833425' => $ID_USER],
        ]);
        return $result["result"][0];
    }

}