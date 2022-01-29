<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class somaController extends Controller
{
    public function soma($valor1,$valor2){
        $soma = $valor1 + $valor2;
        logger()->info('Soma feita');
       return $soma;
    }
    public function sub($num1,$num2){
        $sub = $num1 - $num2;
        logger()->debug('Sub feita',['num1' => $num1, 'num2' => $num2, 'sub' => $sub]);
        return $sub;
    }
    public function division($num1,$num2)
    {
        if ($num2 == 0) {
            logger()->error('Divisor zero!');
            return false;
        }
        logger()->info('Div feita');
        $div = $num1/$num2;
        return $div;
    }
        public function negativos($num1,$num2){

        if($num1 < 0 || $num2 < 0  ){
            logger()->warning('Negativo!');
        }
    }
}
