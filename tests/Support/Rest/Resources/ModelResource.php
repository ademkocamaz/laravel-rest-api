<?php

namespace Lomkit\Rest\Tests\Support\Rest\Resources;

use Lomkit\Rest\Http\Requests\RestRequest;
use Lomkit\Rest\Http\Resource;
use Lomkit\Rest\Relations\BelongsTo;
use Lomkit\Rest\Relations\BelongsToMany;
use Lomkit\Rest\Relations\HasMany;
use Lomkit\Rest\Relations\HasManyThrough;
use Lomkit\Rest\Relations\HasOne;
use Lomkit\Rest\Relations\HasOneThrough;
use Lomkit\Rest\Relations\MorphedByMany;
use Lomkit\Rest\Relations\MorphMany;
use Lomkit\Rest\Relations\MorphOne;
use Lomkit\Rest\Relations\MorphOneOfMany;
use Lomkit\Rest\Relations\MorphTo;
use Lomkit\Rest\Relations\MorphToMany;
use Lomkit\Rest\Tests\Support\Models\Model;
use Lomkit\Rest\Tests\Support\Models\MorphOneRelation;

class ModelResource extends Resource
{
    public static $model = Model::class;

    public function relations(RestRequest $request)
    {
        return [
            HasOne::make('hasOneRelation', HasOneResource::class),
            BelongsTo::make('belongsToRelation', BelongsToResource::class),
            HasMany::make('hasManyRelation', HasManyResource::class),
            BelongsToMany::make('belongsToManyRelation', BelongsToManyResource::class)
                ->withPivotFields(['created_at']),

            // Through relationships
            HasOneThrough::make('hasOneThroughRelation', HasOneThroughResource::class),
            HasManyThrough::make('hasManyThroughRelation', HasManyThroughResource::class),

            // Morph relationships
            MorphTo::make('morphToRelation', [MorphToResource::class]),
            MorphOne::make('morphOneRelation', MorphOneResource::class),
            MorphOneOfMany::make('morphOneOfManyRelation', MorphOneOfManyResource::class),
            MorphMany::make('morphManyRelation', MorphManyResource::class),
            MorphToMany::make('morphToManyRelation', MorphToManyResource::class)
                ->withPivotFields(['created_at']),
            MorphedByMany::make('morphedByManyRelation', MorphedByManyResource::class)
                ->withPivotFields(['created_at']),
        ];
    }

    public function exposedFields(RestRequest $request)
    {
        return [
            'id',
            'name',
            'number'
        ];
    }

    public function exposedScopes(RestRequest $request)
    {
        return [
            'numbered'
        ];
    }

    public function exposedLimits(RestRequest $request) {
        return [
            1,
            10,
            25,
            50
        ];
    }

    public function defaultOrderBy(RestRequest $request)
    {
        return [
            'id' => 'asc'
        ];
    }
}