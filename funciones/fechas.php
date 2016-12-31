<?php
//$Date = date('Y-m-d', strtotime($Date));
//recibe formato 2006-10-25
//y lo pasa a 25-10-2006
function fechaIngEsp($fechaIng,$hora=0,$full=1,$sep='/'){
   $anyo=substr($fechaIng,0,4);
   $mes=substr($fechaIng,5,2);
   $dia=substr($fechaIng,8,2);
   if ($hora<>0){
        $hora=substr($fechaIng,11);
        return($full==1)?"$dia$sep$mes$sep$anyo $hora":"$dia$sep$mes$sep".substr($anyo,2)." $hora";
   }else
        return($full==1)?"$dia$sep$mes$sep$anyo":"$dia$sep$mes$sep".substr($anyo,2);
}

//recibe formato 25-10-2006
//y lo pasa a 2006-10-25
function fechaEspIng($fechaEsp,$hora=0,$sep='/'){
   $anyo=substr($fechaEsp,6,4);
   $mes=substr($fechaEsp,3,2);
   $dia=substr($fechaEsp,0,2);
   if ($hora<>0){
        $hora=substr($fechaEsp,11);
        return "$anyo$sep$mes$sep$dia $hora";
   }else
        return "$anyo$sep$mes$sep$dia";
}

//Recibe 02 parametros: El primero es para la fecha en formato
//10:55:20 ó 2006-10-25 10:55:20
//el 2º parámetro es si se quiere visulizar en formato de 12 ó 24 horas.
//el valor por defecto del 2º parámetro es cero (24 horas).
function hora($fechaSql,$de12horas=0,$conSegundos=0){
$largo=strlen($fechaSql);
   if($largo>8){
      $ini=11;
      //$ini=8;
   }else{
      $ini=0;
   }
   if($de12horas==0){
       $hora=substr($fechaSql,$ini,8);
    }else{
       $hora1=substr($fechaSql,$ini,2);
       
       $digitos = $conSegundos==1 ? 3:6;
       //$hora2=substr($fechaSql,$ini+2,6);
       $hora2=substr($fechaSql,$ini+2,$digitos);
       if ($hora1>12){
          $hora1=$hora1-12;
          if ($hora1<10){
             $hora='0'.$hora1.$hora2." p.m.";
          }else{
             $hora=$hora1.$hora2." p.m.";
          }
       }else{
          $hora=$hora1.$hora2." a.m.";
       }
    }
    return $hora;
}

//me devuelve la fecha actual en formato: Lunes, 12 Octubre del 2006
//la coma(,) que aparece es cuando el parametro pasado es esa coma
function fecha($separador="",$fecha=""){
        if ($fecha=="")
            $hoy=getdate(time()); 
        else
            $hoy=getdate(strtotime($fecha));
        
        $dia=$hoy["wday"];
        switch ($dia){
                case 1:
                     $dia = "Lunes";
                     break;
                case 2:
                     $dia = "Martes";
                     break;
                case 3:
                     $dia = "Miércoles";
                     break;
                case 4:
                     $dia = "Jueves";
                     break;
                case 5:
                     $dia = "Viernes";
                     break;
                case 6:
                     $dia = "Sábado";
                     break;
                case 0:
                     $dia = "Domingo";
                     break;
        }
        $mes=$hoy["mon"];
        switch ($mes){
                case 1:
                     $mes = "Enero";
                     break;
                case 2:
                     $mes = "Febrero";
                     break;
                case 3:
                     $mes = "Marzo";
                     break;
                case 4:
                     $mes = "Abril";
                     break;
                case 5:
                     $mes = "Mayo";
                     break;
                case 6:
                     $mes = "Junio";
                     break;
                case 7:
                     $mes = "Julio";
                     break;
                case 8:
                     $mes = "Agosto";
                     break;
                case 9:
                     $mes = "Septiembre";
                     break;
                case 10:
                     $mes = "Octubre";
                     break;
                case 11:
                     $mes = "Noviembre";
                     break;
                case 12:
                     $mes = "Diciembre";
                     break;
        }
        if ($separador ==""){
                $fecha=$hoy["mday"]." de ".$mes." del ".$hoy["year"];
        }else{
                $fecha= $dia."$separador ".$hoy["mday"]." de ".$mes." del ".$hoy["year"];
        }
        return $fecha;  //Ejm. Lunes, 12 Octubre del 2006
}

//Suma o Resta segundos($restoseg) a un fecha
//el parámetro fecha puede tener los siguientes formatos:
//2006/07/18   Y   2006/07/18 10:50:48
function operaSegFecha($fecha,$restoSeg,$op,$hora=0,$sep='/'){
if ($op=='-') $fec=getdate(strtotime($fecha) - $restoSeg);
elseif ($op=='+') $fec=getdate(strtotime($fecha) + $restoSeg);
$dia=($fec["mday"]<10) ? '0'.$fec["mday"] : $fec["mday"];
$mes=($fec["mon"]<10) ? '0'.$fec["mon"] : $fec["mon"];
$anyo=$fec["year"];
if ($hora<>0){
    $hor=($fec["hours"]<10) ? '0'.$fec["hours"] : $fec["hours"];
    $min=($fec["minutes"]<10) ? '0'.$fec["minutes"] : $fec["minutes"];
    $seg=($fec["seconds"]<10) ? '0'.$fec["seconds"] : $fec["seconds"];
    return "$anyo$sep$mes$sep$dia $hor:$min:$seg";
}else
    return "$anyo$sep$mes$sep$dia";
}

//Las fechas deben tener el siguiente formato
//2005-12-21 08:30:30
//Devuelve tiempo en formato : dias horas segundos
function resta2Fechas($t1,$t2){
/* convierte una fecha al timestamp tipo unix y como resultado da el numero de segundo */
$tot_segundos = (strtotime($t1)-strtotime($t2));    /* total de segundos */
$dias=(int)($segundos/86400);    /* obtiene el numero de dias */
$tot_segundos=$tot_segundos- ($dias*86400);   /* lo resto para obtener el saldo */
$hora=(int)($tot_segundos/3600);   /* obtiene el numero de hora */
$tot_segundos=$tot_segundos- ($hora*3600);
$minuto=(int)($tot_segundos/60);     /* numero de minutos */
$tot_segundos=$tot_segundos- ($minuto*60);
$segundo = $tot_segundos;
$tiempo=$dias." Dias ".$hora.":".$minuto;
return $tiempo;
}


# PARAMETROS:
# $fecha_nacimiento - Fecha de nacimiento de una persona.
#
# $fecha_control - Fecha actual o fecha a consultar.
#
#
# EJEMPLO:
# tiempo_transcurrido('22/06/1977', '04/05/2009');
#
function tiempo_transcurrido($fecha_nacimiento, $fecha_control){
   $fecha_actual = $fecha_control;

   if(!strlen($fecha_actual))
   {
      $fecha_actual = date('d/m/Y');
   }

   // separamos en partes las fechas
   $array_nacimiento = explode ( "/", $fecha_nacimiento );
   $array_actual = explode ( "/", $fecha_actual );

   $anos =  $array_actual[2] - $array_nacimiento[2]; // calculamos años
   $meses = $array_actual[1] - $array_nacimiento[1]; // calculamos meses
   $dias =  $array_actual[0] - $array_nacimiento[0]; // calculamos días

   //ajuste de posible negativo en $días
   if ($dias < 0)
   {
      --$meses;

      //ahora hay que sumar a $dias los dias que tiene el mes anterior de la fecha actual
      switch ($array_actual[1]) {
         case 1:
            $dias_mes_anterior=31;
            break;
         case 2:
            $dias_mes_anterior=31;
            break;
         case 3:
            if (bisiesto($array_actual[2]))
            {
               $dias_mes_anterior=29;
               break;
            }
            else
            {
               $dias_mes_anterior=28;
               break;
            }
         case 4:
            $dias_mes_anterior=31;
            break;
         case 5:
            $dias_mes_anterior=30;
            break;
         case 6:
            $dias_mes_anterior=31;
            break;
         case 7:
            $dias_mes_anterior=30;
            break;
         case 8:
            $dias_mes_anterior=31;
            break;
         case 9:
            $dias_mes_anterior=31;
            break;
         case 10:
            $dias_mes_anterior=30;
            break;
         case 11:
            $dias_mes_anterior=31;
            break;
         case 12:
            $dias_mes_anterior=30;
            break;
      }

      $dias=$dias + $dias_mes_anterior;

      if ($dias < 0)
      {
         --$meses;
         if($dias == -1)
         {
            $dias = 30;
         }
         if($dias == -2)
         {
            $dias = 29;
         }
      }
   }

   //ajuste de posible negativo en $meses
   if ($meses < 0)
   {
      --$anos;
      $meses=$meses + 12;
   }

   $tiempo[0] = $anos;
   $tiempo[1] = $meses;
   $tiempo[2] = $dias;

   return $tiempo;
}

function bisiesto($anio_actual){
   $bisiesto=false;
   //probamos si el mes de febrero del año actual tiene 29 días
     if (checkdate(2,29,$anio_actual))
     {
      $bisiesto=true;
   }
   return $bisiesto;
}



?>