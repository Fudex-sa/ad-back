<?php

namespace App\App\Domain\Payloads;

class UnauthorizedPayload extends Payload
{
    protected $status = 401;
    protected $data = ['message' => 'This user isn\'t authorized'];
}
