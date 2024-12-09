<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserRoleType extends Enum
{
    public const SUPER_ADMIN = 'SUPER_ADMIN';
    public const ADMIN = 'ADMIN';
    public const MEMBER = 'MEMBER';
}
