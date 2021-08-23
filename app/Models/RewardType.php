<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Contracts\Model\ListableInterface;
use App\Contracts\Model\ShowableInterface;
use App\Concerns\Model\HasUrlAttributeTrait;

class RewardType extends Model implements ListableInterface, ShowableInterface
{
    use HasUrlAttributeTrait;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string
     */
    protected $resource = 'reward-type';

    /**
     * @var array
     */
    protected $appends = ['url'];

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeList(Builder $query)
    {
        return $query;
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeShow(Builder $query)
    {
        return $query;
    }
}
