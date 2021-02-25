<?php

namespace App\Orchid\Screens;

use App\Models\Option;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class OptionSenderScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Парметры';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Настройки сайта';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'email' => $this->getOpt('email')->val,
            'phone' => $this->getOpt('phone')->val,
            'address1' => $this->getOpt('address1')->val,
            'address2' => $this->getOpt('address2')->val,
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
            Button::make('Сохранить ')
                ->icon('pencil')
                ->method('saveOpt'),
        ];
    }

    /**
     * @param string $name
     * @return Option
     */
    private function getOpt(string $name) : Option
    {
        $opt = Option::where('name', $name)->first();

        if($opt)
            return $opt;
        else {
            $opt = new Option([
                'name' => $name,
                'val' => '',
            ]);
            $opt->save();

            return $opt;
        }
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
                Input::make('email')
                    ->title('E-mail')
                    ->placeholder('')
                    ->help('Почта для отправки сообщений'),
            ]),
            Layout::rows([
                Input::make('phone')
                    ->title('Телефон')
                    ->placeholder('')
                    ->help('Телефон в шапке сайта'),
                Input::make('address1')
                    ->title('Адрес 1:')
                    ->placeholder('')
                    ->help('Адрес первая строка в шапке сайта'),
                Input::make('address2')
                    ->title('Адрес 2:')
                    ->placeholder('')
                    ->help('Адрес вторая строка в шапке сайта'),
            ]),
        ];
    }

    /**
     * @param Request $request
     */
    public function saveOpt(Request $request)
    {
        $email = $this->getOpt('email');
        $email->val = $request->email?$request->email:'';
        $email->update();
        $phone = $this->getOpt('phone');
        $phone->val = $request->phone?$request->phone:'';
        $phone->update();
        $address1 = $this->getOpt('address1');
        $address1->val = $request->address1?$request->address1:'';
        $address1->update();
        $address2 = $this->getOpt('address2');
        $address2->val = $request->address2?$request->address2:'';
        $address2->update();
    }
}
