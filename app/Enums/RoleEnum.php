<?php

namespace App\Enums;

use App\Traits\EnumValues;

enum RoleEnum: string
{
    use EnumValues;

    case SUPER_ADMIN = "Super-Admin";
    case ADMIN = "Admin";


    /**
     * @return string
     */
    public function title(): string
    {
        return match ($this) {
            self::SUPER_ADMIN => "Süper Admin",
            self::ADMIN => "Yönetici",
            default => "Böyle Bir Rol Bulunamadı !!!",
        };
    }


    /**
     * @return string
     */
    public static function getByAdminRole(): string
    {
        return self::SUPER_ADMIN->value . '|' . self::ADMIN->value;
    }
}
