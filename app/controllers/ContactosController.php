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
                $contacts['SEX'],
                $contacts['ID_USER'],
                $contacts['NAME'],
                $contacts['SURNAMES'],
                $contacts['BIRTHDATE'],
                $contacts['EMAIL'],
                $contacts['ID_COUNTRY'],
                $contacts['ID_LANGUAGE'],
                $contacts['SOURCE'],
                $contacts['SHOP_REGISTER'],
                $contacts['NEWSLETTER'],
                $contacts['NEWSLETTER_SMS'],
                $contacts['IS_USER'],
                $contacts['IS_BUYER'],
                $contacts['STATUS'],
                $contacts['DATE_REGISTRY'],
                $contacts['DATE_DELETED'],
                $contacts['LAST_BUY'],
                $contacts['LAST_ORDER'],
                $contacts['CONTACTED_BY'],
                $contacts['N_ORDERS'],
                $contacts['B2B'],
                $contacts['AUTOLOGIN'],
                $contacts['MARCA'],
                $contacts['HAS_AUTOSHIPPING'],
                $contacts['PHONE'],
                $contacts['LOCALE'],
                $contacts['URL_REBUY'],
                $contacts['DOMAIN'],
                $contacts['UNSUB_DATE'],
                $contacts['DATE_JOINED'],
                $contacts['ID_RETAIL'],
                $contacts['BALANCE_WALLET'],
                $contacts['NEXT_BALANCE_WALLET_EXPIRY'],
                $contacts['NEXT_BALANCE_WALLET_EXPIRY_DATE'],
                $contacts['FAMILY_MEMBER'],
                $contacts['LAST_ORDER_PHONE']
               
            );
        }
        header('Content-Type: application/json');
        echo json_encode($resultados);
        //$this->helpers->LogRegister($resultados);
        //return $resultados;
        return ;
    }




public function readCSVContact()
{
    $archivoCSV = __DIR__ . '/clientcorregido.csv';

    if (!file_exists($archivoCSV) || !is_readable($archivoCSV)) {
        echo "❌ El archivo no se puede leer en la ruta: $archivoCSV<br>";
        return;
    }

    echo "✅ Leyendo archivo CSV...<br>";

    if (($handle = fopen($archivoCSV, 'r')) !== false) {
        $cabeceras = fgetcsv($handle, 2000, ";");

        $contador = 0;

        while (($data = fgetcsv($handle, 2000, ";")) !== false) {
            $fila = array_combine($cabeceras, $data);

            $contacto = [
                'NAME' => $fila['name'] ?? 'Prueba',
                'SEX' => $fila['sex'] ?? '0',
                'SECOND_NAME' => $fila['surnames'] ?? 'Test',
                'LAST_NAME' => $fila['LAST_NAME'] ?? 'Apellido Test',
                'SURNAMES' => $fila['surnames'] ?? 'Unknown',
                'BIRTHDATE' => $fila['birthdate'] ?? '1990-01-01',
                'EMAIL' => $fila['EMAIL'] ?? 'test@gmail.com',
                'ID_COUNTRY' => $fila['id_country'] ?? '1',
                'ID_LANGUAGE' => $fila['id_language'] ?? '7',
                'SOURCE' => $fila['source'] ?? '',
                'SHOP_REGISTER' => $fila['shop_register'] ?? '',
                'NEWSLETTER' => $fila['newsletter'] ?? '',
                'NEWSLETTER_SMS' => $fila['newsletter_sms'] ?? '',
                'IS_USER' => $fila['is_user'] ?? 'Y',
                'IS_BUYER' => $fila['is_buyer'] ?? 'Y',
                'STATUS' => $fila['status'] ?? 'OK',
                'DATE_REGISTRY' => $fila['date_registry'] ?? '01-02-1960',
                'DATE_DELETED' => $fila['date_deleted'] ?? '01-04-1961',
                'LAST_BUY' => $fila['last_buy'] ?? '01-03-1961',
                'CONTACTED_BY' => $fila['contacted_by'] ?? 'Juanma',
                'LAST_ORDER' => $fila['last_order'] ?? '1990-01-01',
                'N_ORDERS' => $fila['n_orders'] ?? '1990-01-01',
                'B2B' => $fila['b2b'] ?? '1',
                'AUTOLOGIN' => $fila['autologin'] ?? '1',
                'MARCA' => $fila['Marca'] ?? 'Excalibur',
                'HAS_AUTOSHIPPING' => $fila['has_autoshipping'] ?? 'No',
                'PHONE' => $fila['phone'] ?? '',
                'LOCALE' => $fila['locale'] ?? 'es-ES',
                'URL_REBUY' => $fila['url_rebuy'] ?? 'refs=1',
                'DOMAIN' => $fila['domain'] ?? 'miscota',
                'UNSUB_DATE' => $fila['unsub_date'] ?? '01-09-1952',
                'DATE_JOINED' => $fila['Date_Joined'] ?? '01-09-1953',
                'ID_RETAIL' => $fila['id_retail'] ?? 'AF',
                'BALANCE_WALLET' => $fila['balance_wallet'] ?? '450',
                'NEXT_BALANCE_WALLET_EXPIRY' => $fila['next_balance_wallet_expiry'] ?? '80',
                'NEXT_BALANCE_WALLET_EXPIRY_DATE' => $fila['next_balance_wallet_expire_date'] ?? '01-08-1980',
                'FAMILY_MEMBER' => $fila['family_member'] ?? '7',
                'LAST_ORDER_PHONE' => $fila['last_order_phone'] ?? '9841741',
                'ID_USER' => $fila['id_user'] ?? 'M1247'
            ];
            $contactos[] = $contacto;

            $contador++;
            echo "<pre>Contacto $contador:\n" . print_r($contacto, true) . "</pre><hr>";

            // Aquí podrías también llamar a $this->CreateContact(...) si deseas insertar al vuelo
        }

        fclose($handle);

        echo "<br>✅ Total de contactos leídos: $contador<br>";
        //$this->Create($contactos);

    } else {
        echo "❌ No se pudo abrir el archivo.<br>";
    }
}
public function filter($product_code){
        
    $resultProduct = $this->contacto->FilterProduct($product_code);
}

}
