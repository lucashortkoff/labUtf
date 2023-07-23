<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    function tratamentoDate($tempo)
	{
		$ano = $tempo->format("%y");
		$mes = $tempo->format("%m");
		$dia = $tempo->format("%d");
		$date = '';
		if($ano == 0 && $mes > 1){
			$date = "há " . $mes . " meses e " . $dia . " dias atrás" ;
		}
		if($ano == 0 && $mes == 1){
			$date = "há " . $mes . " mes e " . $dia . " dias atrás" ;
		}
		if($ano == 0 && $mes == 0){ 
			$date = "há " . $dia . " dias atrás" ;
		}
		if($ano == 0 && $mes == 0 && $dia == 1){
			$date = "há " . $dia . " dia atrás" ;
		}

		return $date;
	}