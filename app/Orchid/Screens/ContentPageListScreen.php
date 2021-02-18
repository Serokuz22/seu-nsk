<?php

namespace App\Orchid\Screens;

use App\Models\ContentPage;
use App\Orchid\Layouts\ContentPageLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ContentPageListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Страницы сайта';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Простые контентные страницы сайта';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'pages' => ContentPage::paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Создать')
                ->icon('pencil')
                ->route('platform.contentpage.edit')
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            ContentPageLayout::class
        ];
    }
}
