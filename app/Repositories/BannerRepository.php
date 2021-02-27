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
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getBanners() : \Illuminate\Database\Eloquent\Collection
    {
        return $this->startConditions()
            ->orderBy('position')
            ->get();
    }
}
