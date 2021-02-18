<?php

namespace App\Orchid\Screens;

use App\Models\Article;
use App\Models\ContentPage;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ArticleEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'ArticleEditScreen';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'ArticleEditScreen';

    /**
     * @var bool
     */
    public $exists = false;

    /**
     * Query data.
     *
     * @param Article|null $article
     * @return array
     */
    public function query(Article $article = null): array
    {
        $this->exists = $article?$article->exists:false;

        if($this->exists){
            $this->name = 'Редактирование Статью';
            $this->description = 'Редактирование Статью';
        }

        return [
            'post' => $article
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
            Button::make('Создать статью')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->exists),

            Button::make('Обновить')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->exists),

            Button::make('Удалить')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->exists),
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
            Layout::tabs([
                'Страница' =>
                    Layout::rows([
                        Input::make('post.title')
                            ->title('Заголовок станицы')
                            ->placeholder('Title страницы')
                            ->help('.'),

                        Cropper::make('post.preview')
                            ->title('Превью изображение статьи')
                            ->width(1000)
                            ->height(500)
                            ->targetRelativeUrl(),

                        Input::make('post.head')
                            ->title('Заголовок')
                            ->placeholder('Заголовок страницы')
                            ->help(''),

                        TextArea::make('post.excerpt')
                            ->title('Краткое описание')
                            ->rows(3)
                            ->maxlength(2000)
                            ->placeholder('Brief description for preview'),

                        Quill::make('post.content')
                            ->title('Страница'),
                    ]),
                'SEO' => Layout::rows([
                    Input::make('post.slug')
                        ->title('УРЛ')
                        ->placeholder('Можно не указывать')
                        ->help(''),
                    Input::make('post.keywords')
                        ->title('Ключевые слова')
                        ->placeholder('')
                        ->help(''),
                    TextArea::make('post.description')
                        ->title('Описание')
                        ->rows(3)
                        ->maxlength(200)
                        ->placeholder(''),
                ]),
            ])
        ];
    }

    /**
     * @param Request $request
     * @param ContentPage|null $page
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Article $page, Request $request)
    {
        //dd($page);
        if(!$page)
            $page = new Article();

        $page->fill($request->get('post'))->save();

        Alert::info('You have successfully created an post.');

        return redirect()->route('platform.article.list');
    }

    /**
     * @param ContentPage $page
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Article $page)
    {
        $page->delete();

        Alert::info('You have successfully deleted the post.');

        return redirect()->route('platform.article.list');
    }
}
