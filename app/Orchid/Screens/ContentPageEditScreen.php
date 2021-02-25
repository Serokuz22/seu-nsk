<?php

namespace App\Orchid\Screens;

use App\Models\ContentPage;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class ContentPageEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Страница сайта';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Создание/ удаление страницы сайта';

    public $exists = false;

    /**
     * Query data.
     *
     * @param ContentPage $page
     * @return array
     */
    public function query(ContentPage $page = null): array
    {

        $this->exists = $page?$page->exists:false;

        if($this->exists){
            $this->name = 'Редактирование Страницы сайта';
            $this->description = 'Редактирование Страницы сайта';
        }

        return [
            'post' => $page
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
            Button::make('Создать страницу')
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
                            ->toolbar(["text", "color", "header", "list", "format", "media"])
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
    public function createOrUpdate(ContentPage $page, Request $request)
    {
        if(!$page)
            $page = new ContentPage();

        $page->fill($request->get('post'))->save();

        Alert::info('You have successfully created an post.');

        return redirect()->route('platform.contentpage.list');
    }

    /**
     * @param ContentPage $page
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(ContentPage $page)
    {
        $page->delete();

        Alert::info('You have successfully deleted the post.');

        return redirect()->route('platform.contentpage.list');
    }
}
