<?php

namespace Lomkit\Rest\Relations;

use Illuminate\Database\Eloquent\Model;
use Lomkit\Rest\Contracts\RelationResource;
use Lomkit\Rest\Http\Resource;

class HasOneThrough extends Relation implements RelationResource
{

    /**
     * Perform actions after mutating the HasOneThrough relation.
     *
     * @param Model $model The Eloquent model.
     * @param Relation $relation The relation being mutated.
     * @param array $mutationRelations An array of mutation relations.
     */
    public function afterMutating(Model $model, Relation $relation, array $mutationRelations)
    {
        throw new \RuntimeException('You can\'t mutate a \'HasOneThrough\' relation.');
    }

    /**
     * Define validation rules for the HasOneThrough relation.
     *
     * @param Resource $resource The resource associated with the relation.
     * @param string $prefix The prefix used for validation rules.
     * @return array An array of validation rules.
     */
    public function rules(Resource $resource, string $prefix)
    {
        return [
            $prefix => 'prohibited',
        ];
    }
}
