<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\MessageBag;
use Throwable;

/**
 * Class ServiceException
 * @package App\Exceptions
 */
class ServiceException extends Exception
{
    /**
     * ServiceException constructor.
     * @param string $message
     * @param MessageBag|null $bag
     */
    public function __construct(string $message, protected ?MessageBag $bag)
    {
        parent::__construct($message, Response::HTTP_BAD_REQUEST);
    }

    /**
     * @return bool
     */
    public function report(): bool
    {
        return false;
    }

    /**
     * @return MessageBag|null
     */
    public function getErrors(): ?MessageBag
    {
        return $this->bag;
    }
}
