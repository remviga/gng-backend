<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Vodka extends Model
{
    use Translatable;
    protected $translatable = ['raw', 'taste', 'cheese', 'recommendations'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vodka';
}
