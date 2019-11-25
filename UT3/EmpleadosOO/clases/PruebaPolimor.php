<?php

namespace NsEmpresa;

class PruebaPolimorf{
    static function calcular(Empleado $emp){
        return $emp->ingresos();
    }
}

?>
