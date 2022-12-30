<?php
namespace App\Helpers;

class GlobalConfig{

    public static $diasSemana = ['Domingo','Segunda-feira','Terça-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sábado'];
    public static function nomeDiasSemana($num)
    {
        if(is_array(explode(',',$num)))
        {
            $dias = explode(',',$num);
            $nomeDia='';
            foreach($dias as $dia){
                $nomeDia.=GlobalConfig::$diasSemana[$dia].', ';
            }   
            return $nomeDia = substr($nomeDia,0,-2). '.';
        }else
        {
            return null;
        }
    }
}