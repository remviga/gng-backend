<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Champagne extends Model
{
    use Translatable;
    protected $translatable = ['name', 'aging', 'cheese', 'recommendations'];
}
