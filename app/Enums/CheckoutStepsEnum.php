<?php

namespace App\Enums;

enum CheckoutStepsEnum: int
{
    case INFORMATION = 1;
    case SHIPPING    = 2;
    case PAYMENT     = 3;

    public function getNames(): string
    {
        return match ($this) {
            self::INFORMATION => 'Informação',
            self::SHIPPING    => 'Frete',
            self::PAYMENT     => 'Pagamento',
            default           => 'Desconhecido',
        };
    }
}
