<?php

namespace App\Http\Controllers\Api;

class IndexController extends Controller
{
    /**
     * API directory list.
     *
     * @todo Need a better way of displaying these, i.e. a dynamic way!
     *
     * @return array
     */
    public function index()
    {
        return [
            'api.ability.index' => url('/api/v1/ability'),
            'api.ability.show' => url('/api/v1/ability/{ability}'),
            'api.achievement.index' => url('/api/v1/achievement'),
            'api.achievement.show' => url('/api/v1/achievement/{achievement}'),
            'api.brawl.index' => url('/api/v1/brawl'),
            'api.brawl.show' => url('/api/v1/brawl/{brawl}'),
            'api.brawlType.index' => url('/api/v1/brawl-type'),
            'api.brawlType.show' => url('/api/v1/brawl-type/{brawl-type}'),
            'api.event.index' => url('/api/v1/event'),
            'api.event.show' => url('/api/v1/event/{event}'),
            'api.hero.index' => url('/api/v1/hero'),
            'api.hero.show' => url('/api/v1/hero/{hero}'),
            'api.index' => url('/api/v1'),
            'api.map.index' => url('/api/v1/map'),
            'api.map.show' => url('/api/v1/map/{map}'),
            'api.platform.index' => url('/api/v1/platform'),
            'api.platform.show' => url('/api/v1/platform/{platform}'),
            'api.reward.index' => url('/api/v1/reward'),
            'api.reward.show' => url('/api/v1/reward/{reward}'),
            'api.rewardType.index' => url('/api/v1/reward-type'),
            'api.rewardType.show' => url('/api/v1/reward-type/{reward_type}'),
        ];
    }
}
