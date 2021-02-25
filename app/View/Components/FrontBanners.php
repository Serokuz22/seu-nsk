<?php
namespace App\View\Components;

use App\Repositories\BannerRepository;
use Illuminate\View\Component;

class FrontBanners extends Component
{
    private $bannerRepository;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->bannerRepository = app(BannerRepository::class);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.front-banners', [
            'banners' => $this->bannerRepository->getBanners(),
        ]);
    }
}
