<?php namespace Spatie\EloquentSortable;

use Illuminate\Database\Eloquent\Builder;

interface SortableInterface {
    /**
     * Modify the order column value
     *
     * @param $model
     */
    public function setHighestOrderNumber($model);

    /**
     * Let's be nice and provide an ordered scope
     *
     * @param Builder $query
     * @return mixed
     */
    public function scopeOrdered(Builder $query);

    /**
     * This function reorders the records: the record with the first id in the array
     * will get order 1, the record with the second it will get order 2, ...
     *
     * @param array $ids
     * @throws SortableException
     */
    public static function setNewOrder($ids);
}
