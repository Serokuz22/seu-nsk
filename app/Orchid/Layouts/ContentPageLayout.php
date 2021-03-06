<?php

namespace App\Orchid\Layouts;

use App\Models\ContentPage;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ContentPageLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'pages';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('title', 'Название')
                ->render(function (ContentPage $page) {
                    return Link::make($page->title)
                        ->route('platform.contentpage.edit', $page);
                }),
            TD::make('slug', 'URL'),

            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
        ];
    }
}
