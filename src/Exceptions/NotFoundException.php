<?php

namespace SimpleSquid\Vend\Exceptions;

use Exception;

class NotFoundException extends Exception
{
    use HasErrors;

    /**
     * Create a new exception instance.
     *
     * @param  array|null  $errors
     */
    public function __construct(array $errors = null)
    {
        parent::__construct('The resource you are looking for could not be found.');

        $this->errors = $errors;
    }
}