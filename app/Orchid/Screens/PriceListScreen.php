<?php

namespace App\Orchid\Screens;

use App\Models\Price;
use App\Orchid\Layouts\PriceListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class PriceListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Прайс';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Каталог цен';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'prices' => Price::all()
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Создать')
                ->icon('pencil')
                ->route('platform.price.edit')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            PriceListLayout::class
        ];
    }
}
