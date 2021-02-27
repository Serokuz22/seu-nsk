<?php
namespace App\Repositories;

use App\Models\Article as Model;

class ArticleRepository extends CoreRepository
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
    public function getArticleBySlug(string $slug)
    {
        return $this->startConditions()
            ->where('slug', $slug)
            ->first();
    }

    /**
     * Все статьи с пагинацией и сортировкой по добавлению, последние всегда первые
     * @param null $perPage
     * @return mixed
     */
    public function getAllWithPaginate($perPage = 10)
    {
        return $this->startConditions()
            ->orderBy('id', 'DESC')
            ->paginate($perPage);

    }
}
