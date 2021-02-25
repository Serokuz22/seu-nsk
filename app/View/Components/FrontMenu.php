<?php

namespace App\View\Components;

use App\Services\MenuService;
use Illuminate\View\Component;

class FrontMenu extends Component
{
    private $menuService;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->menuService = app(MenuService::class);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.front-menu', [
            'menus' => $this->menuService->createMenu()
        ]);
    }
}
