<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserEnum extends Enum
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    const AVATAR_EXT = ['jpeg','jpg','png'];

    public static function status()
    {
        return [
            self::STATUS_ACTIVE => 'Aktif',
            self::STATUS_INACTIVE => 'Tidak Aktif',
        ];
    }
}
