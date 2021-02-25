<?php

namespace App\Orchid\Screens;

use App\Models\Banner;
use App\Models\Price;
use App\Orchid\Layouts\BannerListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class BannerListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'BannerListScreen';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'BannerListScreen';



    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'banners' => Banner::paginate()
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
                ->route('platform.banner.edit')
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
            BannerListLayout::class
        ];
    }
}
