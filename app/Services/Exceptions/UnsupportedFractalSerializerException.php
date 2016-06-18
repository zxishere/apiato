<?php

namespace App\Services\Exceptions;

use App\Containers\Core\Exception\Abstracts\Exception;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

/**
 * Class UnsupportedFractalSerializerException.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
class UnsupportedFractalSerializerException extends Exception
{

    public $httpStatusCode = SymfonyResponse::HTTP_INTERNAL_SERVER_ERROR;
}
