<?php
namespace App\Repositories;

use App\Models\Option as Model;

class OptionRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Вернуть значение параметра
     * @param string $name
     * @return string
     */
    public function getVal(string $name) : string
    {
        $option = $this->startConditions()
            ->where('name', $name)
            ->first();

        return $option?$option->val:'';
    }
}
