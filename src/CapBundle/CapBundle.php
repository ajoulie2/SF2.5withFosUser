<?php

namespace CapBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CapBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
