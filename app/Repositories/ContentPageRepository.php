<?php
namespace App\Repositories;

use App\Models\ContentPage as Model;

class ContentPageRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Найти страницу по слуг
     * @param string $slug
     * @return mixed
     */
    public function getPageBySlug(string $slug)
    {
        return $this->startConditions()
            ->where('slug', $slug)
            ->first();
    }
}
