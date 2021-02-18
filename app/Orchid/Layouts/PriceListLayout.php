<?php

namespace App\Orchid\Layouts;

use App\Models\Price;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PriceListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'prices';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('name', 'Название')
                ->render(function (Price $price) {
                    return Link::make($price->name)
                        ->route('platform.price.edit', $price);
                }),
            TD::make('excerpt', 'Описание'),
            TD::make('price', 'Стоимость'),

            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
        ];
    }
}
