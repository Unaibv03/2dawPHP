<?php

declare(strict_types=1);

function peseta2euros(float $cantidad, float $cotizacion=166.386): float{
    return $cantidad/$cotizacion;
}

function euros2pesetas(float $cantidad, float $cotizacion=166.386): float{
    return $cantidad*$cotizacion;
}

?>