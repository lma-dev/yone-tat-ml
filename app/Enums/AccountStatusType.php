<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class AccountStatusType extends Enum
{
    public const ACTIVE = 'ACTIVE';

    public const SUSPENDED = 'SUSPENDED';
}
