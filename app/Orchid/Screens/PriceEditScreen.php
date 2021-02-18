<?php

namespace App\Orchid\Screens;

use App\Models\Price;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class PriceEditScreen extends Screen
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
    public $description = 'Прайс';

    public $exists = false;

    /**
     * Query data.
     *
     * @param Price|null $price
     * @return array
     */
    public function query(Price $price = null): array
    {
        $this->exists = $price?$price->exists:false;

        if($this->exists){
            $this->name = 'Редактирование Прайса';
            $this->description = 'Редактирование Прайса';
        }

        return [
            'price' => $price
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
            Button::make('Создать ')
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
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
                Layout::rows([
                    Input::make('price.name')
                        ->title('Название')
                        ->placeholder('')
                        ->help('.'),

                    TextArea::make('price.excerpt')
                        ->title('Краткое описание')
                        ->rows(3)
                        ->maxlength(2000)
                        ->placeholder('Brief description for preview'),

                    Input::make('price.price')
                        ->title('Цена')
                        ->placeholder('Цена')
                        ->help(''),
                    Input::make('price.position')
                        ->title('Позиция')
                        ->placeholder('')
                        ->help(''),
                ]),
        ];
    }

    /**
     * @param Price $price
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Price $price, Request $request)
    {
        if(!$price)
            $price = new Price();

        $price->fill($request->get('price'))->save();

        Alert::info('You have successfully created an post.');

        return redirect()->route('platform.price.list');
    }

    /**
     * @param Price $price
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Price $price)
    {
        $price->delete();

        Alert::info('You have successfully deleted the post.');

        return redirect()->route('platform.price.list');
    }
}
