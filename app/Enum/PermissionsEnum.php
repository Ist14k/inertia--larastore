<?php

namespace App\Enum;

enum PermissionsEnum: string
{
    case ApproveVendor = 'approve-vendor';
    case BuyProduct = 'buy-product';
    case SellProduct = 'sell-product';
}
