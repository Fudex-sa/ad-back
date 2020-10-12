<?php

namespace App\Libraries\Responders;

use App\App\Responders\Responder;
use App\App\Responders\ResponderInterface;

class IndexCategoryResponder extends Responder implements ResponderInterface
{
    public function respond()
    {
        return $this->response;
    }
}
