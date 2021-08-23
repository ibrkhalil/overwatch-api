<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Contracts\Model\ListableInterface;
use App\Contracts\Model\ShowableInterface;
use App\Concerns\Model\HasUrlAttributeTrait;

class Achievement extends Model implements ListableInterface, ShowableInterface
{
    use HasUrlAttributeTrait;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string
     */
    protected $resource = 'achievement';

    /**
     * @var array
     */
    protected $hidden = ['hero_id', 'reward_id'];

    /**
     * @var array
     */
    protected $appends = ['url'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hero()
    {
        return $this->belongsTo(Hero::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reward()
    {
        return $this->belongsTo(Reward::class);
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeList(Builder $query)
    {
        return $query->with('hero', 'reward.type', 'reward.quality');
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeShow(Builder $query)
    {
        return $query->with('hero', 'reward.type', 'reward.quality');
    }
}
