<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class LeaveType extends Enum
{
    const SICK = 'SICK';
    const ANNUAL = 'ANNUAL';
    const EARNED = 'EARNED';
    const MATERNITY = 'MATERNITY';
    const PATERNITY = 'PATERNITY';
    const UNPAID = 'UNPAID';
    const SPECIAL = 'SPECIAL';
    const OTHER = 'OTHER';
}
