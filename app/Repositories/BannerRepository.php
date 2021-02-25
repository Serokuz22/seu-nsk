<?php
namespace App\Repositories;

use App\Models\Banner as Model;

class BannerRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Все баннеры
     * @return Model
     */
    public function getBanners() : Model
    {
        $this->startConditions()
            ->orderBy('position')
            ->get();
    }
}
