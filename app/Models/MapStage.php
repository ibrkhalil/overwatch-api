<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MapStage extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $hidden = ['map_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function map()
    {
        return $this->belongsTo(Map::class);
    }
}
