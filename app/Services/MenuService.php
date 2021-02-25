<?php
namespace App\Services;

use Illuminate\Support\Facades\Route;

class MenuService
{
    private $menu;

    public function __construct()
    {
        $this->menu = config('frontMenu.menu');
    }

    /**
     * Получить урл строку
     * @return string
     */
    private function getRout() : string
    {
        return Route::current()->uri;
    }

    /**
     * Подготавляваем массив для меню
     * @return array
     */
    public function createMenu()
    {
        $menu = [];
        $uri = url($this->getRout());

        foreach ($this->menu as $m)
        {
            $url = url($m['url']);
            $menu[] = [
                'name' => $m['name'],
                'url' => $url,
                'action' => ($url == $uri)?false:true,
            ];
        }

        return $menu;
    }
}
