<?php
declare(strict_types=1);

namespace Yireo\MageGod\Exception;

use Exception;

/**
 * Class NotImplementedException
 * @package Yireo\MageGod\Exception
 */
class NotImplementedException extends Exception
{
    public function getMessage(): string
    {
        return 'Who is your new god? Cthulhu!';
    }
}
