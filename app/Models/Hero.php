<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Contracts\Model\ListableInterface;
use App\Contracts\Model\ShowableInterface;
use App\Concerns\Model\HasUrlAttributeTrait;

class Hero extends Model implements ListableInterface, ShowableInterface
{
    use HasUrlAttributeTrait;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string
     */
    protected $resource = 'hero';

    /**
     * @var array
     */
    protected $hidden = ['role_id'];

    /**
     * @var array
     */
    protected $appends = ['url'];

    /**
     * @var array
     */
    protected $casts = [
        'health' => 'int',
        'armour' => 'int',
        'shield' => 'int',
        'age' => 'int',
        'height' => 'int',
        'difficulty' => 'int',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subRoles()
    {
        return $this->belongsToMany(SubRole::class, 'hero_sub_roles');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function abilities()
    {
        return $this->hasMany(Ability::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rewards()
    {
        return $this->hasMany(Reward::class);
    }

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
        return $query->with('role', 'subRoles', 'abilities', 'rewards.type', 'rewards.quality', 'rewards.event');
    }
}
