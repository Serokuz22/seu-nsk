<?php
namespace App\View\Components;

use App\Repositories\OptionRepository;
use Illuminate\View\Component;

class FrontHead extends Component
{
    private $optionRepository;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->optionRepository = app(OptionRepository::class);

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $with = [
            'phone' => $this->optionRepository->getVal('phone'),
            'address1' => $this->optionRepository->getVal('address1'),
            'address2' => $this->optionRepository->getVal('address2'),
        ];
        return view('components.front-head', $with);
    }
}
