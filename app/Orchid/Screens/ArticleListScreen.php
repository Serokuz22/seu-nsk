<?php

namespace App\Orchid\Screens;

use App\Models\Article;
use App\Orchid\Layouts\ArticleListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ArticleListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'ArticleListScreen';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'ArticleListScreen';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'pages' => Article::paginate()
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
                ->route('platform.article.edit')
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
            ArticleListLayout::class
        ];
    }
}
