<?php

namespace App\Orchid\Layouts;

use App\Models\Banner;
use App\Models\Price;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class BannerListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'banners';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('url', 'URL')
                ->render(function (Banner $banner) {
                    return Link::make($banner->url)
                        ->route('platform.banner.edit', $banner);
                }),

            TD::make('position', 'Положение'),

            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
        ];
    }
}
