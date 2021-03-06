<?php

namespace App\Http\Filters;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait Helpers
{
    protected function dateFilter(Builder $query, string $requestKey, array $options): void
    {
        if (!key_exists('operator', $options)){
            throw new \Exception("Operator is required on '$requestKey'");
        } elseif (!key_exists('column', $options)){
            throw new \Exception("Column is required on '$requestKey'");
        }

        try {
            $date = Carbon::parse($this->request->$requestKey);
        } catch (\Exception $e) {
            throw new \Exception('Invalid parameter for date filter');
        }

        if ($options['endOfDay'] ?? false) $date->endOfDay();

        $query->where($options['column'], $options['operator'], $date);
    }

    protected function dateParams(string $column, string $operator = '>=', bool $endOfDay = false) : array
    {
        return [
            'action'    => 'date',
            'operator'  => $operator,
            'column'    => $column,
            'endOfDay'  => $endOfDay
        ];
    }

    protected function from(string $column = 'created_at') : array
    {
        return $this->dateParams($column);
    }

    protected function to(string $column = 'created_at') : array
    {
        return $this->dateParams($column, '<=', true);
    }

    protected function relationFilter(string $relation, $column, $queryMethod = 'whereIn') : array // column doesn't have type because it can be array or string
    {
        $relationHierarchy = explode('.', $relation);

        $output = [
            'action'        => 'relation',
            'relationName'  => array_shift($relationHierarchy),
            'rule'          => $this->getRule($relationHierarchy, $column, $queryMethod)
        ];

        return $output;
    }

    protected function getRule(array &$remainingRelations, $column, $queryMethod = 'whereIn') : array
    {
        if (empty($remainingRelations))
            return $this->getRelationParams($column, $queryMethod);

        return $this->relationFilter(implode('.', $remainingRelations), $column, $queryMethod);
    }

    private function getRelationParams($column, string $queryMethod = 'whereIn') : array
    {
        return is_array($column) ? $column : [
            'params' => [
                'column'        => $column,
                'queryMethod'   => $queryMethod
            ]
        ];
    }

    protected function params(string $column, string $queryMethod = 'whereIn', array $additionalParams = []): array
    {
        return [
            'params'    => array_merge([
                'column'        => $column,
                'queryMethod'   => $queryMethod
            ], $additionalParams)
        ];
    }

    public function setOrdering(bool $withOrders): self
    {
        $this->withOrders = $withOrders;

        return $this;
    }

    private function applySearch(Builder $query, string $requestKey, array $options)
    {
        $query->where(function (Builder $query) use ($requestKey, $options) {
            foreach ((array) $this->request->get($requestKey) as $search) {
                foreach ($options['searchIn'] as $searchableColumn) {
                    if(str_contains($searchableColumn,'.')){
                        $parts = explode('.', $searchableColumn);
                        $column = array_pop($parts);
                        $relation = implode('.', $parts);
                        $query->orWhereHas($relation, function ($q) use ($column,$search){
                            $q->where($column, 'like', '%'.$search.'%');
                        });
                    }else{
                        $query->orWhere($searchableColumn, 'like', $search . '%');
                    }
                }
            }
        });
    }

    protected function searchParams($searchIn): array
    {
        return [
            'action'    => 'search',
            'searchIn'  => is_array($searchIn) ? $searchIn : func_get_args()
        ];
    }
}
