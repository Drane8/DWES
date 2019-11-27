<?php

namespace NsEmpresa;

/**
 * Clase para probar la polimorfia
 */
class PruebaPolimorf
{
    static function calcular(Empleado $emp)
    {
        return $emp->ingresos();
    }
}
