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
    public function Create()
    {

        $this->contacto->CreateContact($sex, $name, $surnames, $birthdate, $email, $id_country, $id_language, $source, $shop_register, $newsletter, $newsletter_sms, $is_user, $is_buyer, $status, $last_order, $n_orders, $b2b, $autologin, $Marca, $has_Autoshipping, $phone, $locale, $url_rebuy, $domain,$id_retail, $balance_wallet, $next_balance_wallet_expiry, $next_balance_wallet_expiry_date, $family_member, $lat_order_phone);
    }
}
