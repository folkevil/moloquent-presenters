<?php

namespace Pingpong\Presenters;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Model extends Eloquent implements PresentableInterface
{
    use PresentableTrait;
}
