<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class LeaveType extends Enum
{
    public const SICK = 'SICK';
    public const ANNUAL = 'ANNUAL';
    public const EARNED = 'EARNED';
    public const MATERNITY = 'MATERNITY';
    public const PATERNITY = 'PATERNITY';
    public const UNPAID = 'UNPAID';
    public const SPECIAL = 'SPECIAL';
    public const REMOTE = 'HALF_DAY';
    public const ONSITE = 'ONSITE';
    public const OTHER = 'OTHER';
}
