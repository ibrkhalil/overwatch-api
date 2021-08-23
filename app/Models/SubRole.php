<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubRole extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $hidden = ['pivot'];
}
