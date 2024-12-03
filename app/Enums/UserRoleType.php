<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserRoleType extends Enum
{
    const SUPER_ADMIN = 'SUPER_ADMIN';
    const ADMIN = 'ADMIN';
    const MEMBER = 'MEMBER';
}
