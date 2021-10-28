<?php  
abstract class EJ12  
{  
    /** 
     * Contiene las equivalencias de numeros romanos para unidades, decimales, 
     * centenas y miles. 
     * @var array 
     */  
    private static  $_romanos =     array(0   =>    array(0 => '',  
                                                          1 => 'I',  
                                                          2 => 'II',  
                                                          3 => 'III',  
                                                          4 => 'IV',  
                                                          5 => 'V',  
                                                          6 => 'VI',  
                                                          7 => 'VII',  
                                                          8 => 'VIII',  
                                                          9 => 'IX'),  
                                          1    =>   array(0 => '',  
                                                          1 => 'X',  
                                                          2 => 'XX',  
                                                          3 => 'XXX',  
                                                          4 => 'XL',  
                                                          5 => 'L',  
                                                          6 => 'LX',  
                                                          7 => 'LXX',  
                                                          8 => 'LXXX',  
                                                          9 => 'XC'),  
                                          2   =>    array(0 => '',  
                                                          1 => 'C',  
                                                          2 => 'CC',  
                                                          3 => 'CCC',  
                                                          4 => 'CD',  
                                                          5 => 'D',  
                                                          6 => 'DC',  
                                                          7 => 'DCC',  
                                                          8 => 'DCCC',  
                                                          9 => 'CM'),  
                                          3 =>      array(0 => '',  
                                                          1 => 'M',  
                                                          2 => 'MM',  
                                                          3 => 'MMM'));  
    /** 
     * Contiene los divisores para identificar por donde comenzar la conversion. 
     * @var array 
     */  
    private static $_divisores =    array(1, 10, 100, 1000);  
    /** 
     * Contiene las equivalencias entre romano y decimal. 
     * @var array 
     */  
    private static $_decimal =      array('.'   => 0,  
                                          'I'   => 1,  
                                          'V'   => 5,  
                                          'X'   => 10,  
                                          'L'   => 50,  
                                          'C'   => 100,  
                                          'D'   => 500,  
                                          'M'   => 1000);  
    /** 
     * Convierte un numero expresado en decimal a notacion Romana. 
     * @param   integer $numero Numero que se desea convertir en romano. 
     *                  desde 0 a 3999.- 
     * @return  string 
     */  
    public static function decimalRomano($numero)  
    {  
        $retorno = '';  
        $max = (int)log10($numero);  
        for ($div = $max; $div > -1; $div--) {  
            $aux     =  (int)($numero/self::$_divisores[$div]);  
                $retorno.= self::$_romanos[$div][$aux];  
                $numero -=self::$_divisores[$div]*$aux;  
        }  
        return $retorno;  
    }  
    /** 
     * Convierte un numero expresado en romanos a notacion decimal. 
     * @param   string $romano  Numero de tipo romano Ej.DCCCLXXXVIII. 
     * @return  integer 
     */  
    public static function romanoDecimal($romano)  
    {  
        $decimal    = 0;  
        $letras     = strlen($romano);  
        $romano    .= '.';  
        for ($r = 0; $r < $letras; $r++) {  
            $valorI     = self::$_decimal[$romano[$r]];  
            $valorII    = self::$_decimal[$romano[$r+1]];  
            $decimal += ($valorI < $valorII)? - $valorI : $valorI;  
        }  
        return $decimal;  
    }  

}  