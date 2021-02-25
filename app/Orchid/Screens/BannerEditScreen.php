<?php

namespace App\Orchid\Screens;

use App\Models\Banner;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class BannerEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Баннеры';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Баннеры на главной страници';

    public $exists = false;

    /**
     * Query data.
     *
     * @param Banner|null $banner
     * @return array
     */
    public function query(Banner $banner = null): array
    {
        $this->exists = $banner?$banner->exists:false;

        if($this->exists){
            $this->name = 'Изменить баннер';
            $this->description = 'Изменить баннер';
        }

        return [
            'banner' => $banner
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
                Input::make('banner.url')
                    ->title('URL')
                    ->placeholder('')
                    ->help(''),

                Cropper::make('banner.banner')
                    ->title('Баннер')
                    ->width(1107)
                    ->height(363)
                    ->targetRelativeUrl(),

                Input::make('banner.position')
                    ->title('Позиция')
                    ->type('number')
                    ->value(0)
                    ->placeholder('')
                    ->help(''),
            ]),
        ];
    }

    /**
     * @param Banner $banner
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Banner $banner, Request $request)
    {
        if(!$banner)
            $banner = new Banner();

        $banner->fill($request->get('banner'))->save();

        Alert::info('You have successfully created an post.');

        return redirect()->route('platform.banner.list');
    }

    /**
     * @param Banner $banner
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Banner $banner)
    {
        $banner->delete();

        Alert::info('You have successfully deleted the post.');

        return redirect()->route('platform.banner.list');
    }
}
