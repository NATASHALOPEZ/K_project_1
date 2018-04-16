<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class mapController extends Controller
{
	


    public function shopData()
    {
    $loja = array(
    array(
        'name' => 'ws Albufeira 1',
        'gps'  => '37.089104,-8.222626',
        'link' => 'http://www.washstation.pt/lojas-washstation/albufeira/'
    ),
    
    array(
        'name' => 'ws rio maior',
        'gps' => '39.33918,-8.93483',
        'link' => 'http://www.washstation.pt/washrioii-wash-station-washrioii/'
    ),

    array(
        'name' => 'ws Povoa do varzim labatica',
        'gps' => '41.38071,-8.75539',
        'link' => 'http://www.washstation.pt/lojas-washstation/povoa-de-varzim/'
        ),
    array(
        'name' => 'ws matosinhos',
        'gps' => '41.17911,-8.68206',
        'link' => 'http://www.washstation.pt/lojas-washstation/matosinhos-maresia/'
        ),
    array(
        'name' => 'ws rio tinto areosa',
        'gps' => '41.18617,-8.58083',
        'link' => 'http://www.washstation.pt/lojas-washstation/washstation-rio-tinto/'
        ),
    array(
        'name' => 'ws Celas coimbra',
        'gps' => '40.21544,-8.4185',
        'link' => 'http://www.washstation.pt/lojas-washstation/coimbra/'
        ),
    array(
        'name' => 'WS Figueira da Foz Belcor 1',
        'gps' => '40.16327,-8.86505',
        'link' => 'http://www.washstation.pt/lojas-washstation/figueira-da-foz/'
        ),
    array(
        'name' => 'WS Figueira da Foz Belcor 2',
        'gps' => '40.1485,-8.85476',
        'link' => 'http://www.washstation.pt/lojas-washstation/figueira-da-foz-2/'
        ),
    array(
        'name' => 'WS Pombal',
        'gps' => '39.91838,-8.627',
        'link' => 'http://www.washstation.pt/lojas-washstation/pombal/'
        ),
    array(
        'name' => 'ws leiria1',
        'gps' => '39.75803,-8.81917',
        'link' => 'http://www.washstation.pt/lojas-washstation/leiria/'
        ),
    array(
        'name' => 'ws leiria2',
        'gps' => '39.74586,-8.81473',
        'link' => 'http://www.washstation.pt/lojas-washstation/leiria-estrada-da-marinha/'
        ),
    array(
        'name' => 'ws marinha grande sabao azul',
        'gps' => '39.74549,-8.93531',
        'link' => 'http://www.washstation.pt/lojas-washstation/marinha-grande/'
        ),
    array(
        'name' => 'ws batalha deixame lavar',
        'gps' => '39.66013,-8.82308',
        'link' => 'http://www.washstation.pt/lojas-washstation/lavandaria-self-sevice-deixa-me-lavar-batalha/'
        ),
    array(
        'name' => 'ws nazare',
        'gps' => '39.59916,-9.07044',
        'link' => 'http://www.washstation.pt/lojas-washstation/nazare/'
        ),
    array(
        'name' => 'ws alcobaça',
        'gps' => '39.55148,-8.97487',
        'link' => 'http://www.washstation.pt/lojas-washstation/alcobaca/'
        ),
    array(
        'name' => 'ws caldas rainha',
        'gps' => '39.41011,-9.13807',
        'link' => 'http://www.washstation.pt/lojas-washstation/caldas-da-rainha/'
        ),
    array(
        'name' => 'ws torres vedras 3',
        'gps' => '39.10683,-9.26233',
        'link' => ''
        ),
    array(
        'name' => 'ws torres vedras 2',
        'gps' => '39.08801,-9.26079',
        'link' => ''
        ),
    array(
        'name' => 'ws torres vedras 1',
        'gps' => '39.08122,-9.25738',
        'link' => ''
        ),
    array(
        'name' => 'WS Ericeira',
        'gps' => '38.96338,-9.41329',
        'link' => ''
        ),
    array(
        'name' => 'ws Mafra',
        'gps' => '38.95309,-9.33359',
        'link' => ''
        ),
    array(
        'name' => 'ws Malveira',
        'gps' => '38.93307,-9.25428',
        'link' => ''
        ),
    array(
        'name' => 'ws infantado',
        'gps' => '38.84251,-9.16213',
        'link' => ''
        ),
    array(
        'name' => 'ws loures',
        'gps' => '38.83064,-9.16929',
        'link' => ''
        ),
    array(
        'name' => 'ws sacavem',
        'gps' => '38.79238,-9.10417',
        'link' => ''
        ),
    array(
        'name' => 'ws aquablue peniche',
        'gps' => '39.35825,-9.37369',
        'link' => ''
        ),
    array(
        'name' => 'ws cartaxo lavaki',
        'gps' => '39.16509,-8.78153',
        'link' => ''
        ),
    array(
        'name' => 'ws santarem 1',
        'gps' => '39.24166,-8.68941',
        'link' => ''
        ),
    array(
        'name' => 'ws santarem 2',
        'gps' => '39.22751,-8.68788',
        'link' => ''
        ),
    array(
        'name' => 'ws Almeirim',
        'gps' => '39.21286,-8.61998',
        'link' => ''
        ),
    array(
        'name' => 'WS Fátima',
        'gps' => '39.632395,-8.665869',
        'link' => ''
        ),
    array(
        'name' => 'ws torres novas',
        'gps' => '39.48972,-8.54807',
        'link' => ''
        ),
    array(
        'name' => 'ws alcabideche',
        'gps' => '38.71271,-9.41633',
        'link' => ''
        ),
    array(
        'name' => 'ws s j estoril',
        'gps' => '38.70122,-9.38021',
        'link' => ''
        ),
    array(
        'name' => 'ws s.domingos rana',
        'gps' => '38.71232,-9.33073',
        'link' => ''
        ),
    array(
        'name' => 'ws oeiras 1',
        'gps' => '38.69738,-9.31019',
        'link' => ''
        ),
    array(
        'name' => 'ws oeiras 2',
        'gps' => '38.69774,-9.30014',
        'link' => ''
        )

 
    );

     return View('trial1', compact('loja'));


}
}