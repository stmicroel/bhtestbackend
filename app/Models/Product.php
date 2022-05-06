<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const limit = 9;

    /**
     * This function search products by filter set
     *
     * @param array $filters
     * @param $page
     * @return Collection
     */
    public static function search(array $filters = [], $page = 0): Collection
    {
        $builder = self::query();
        if (array_key_exists('manufacturer_id', $filters)) {
            $builder->whereIn('manufacturer_id', $filters['manufacturer_id']);
        }

        if (array_key_exists('from_price', $filters)) {
            $builder->where('price', '>=', $filters['from_price']);
        }

        if (array_key_exists('to_price', $filters)) {
            $builder->where('price', '<=', $filters['to_price']);
        }

        if (array_key_exists('kind', $filters)) {
            $builder->where('kind', '=', $filters['kind']);
        }

        return $builder->limit(Product::limit)
            ->offset($page*Product::limit)
            ->get();
    }
}
