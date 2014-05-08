<?php

namespace Acme\DemoBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class LatLong extends Constraint
{
    public $message = 'The values for latitude and longitude ("%lat%" and "%lng%") are not valid.';
}
