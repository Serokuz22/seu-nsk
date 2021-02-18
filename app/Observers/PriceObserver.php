<?php
namespace App\Observers;

use App\Models\Price;

class PriceObserver
{
    protected function setUser(Price $price)
    {
        $price->user_id = auth()->id();
    }

    public function creating(Price $price)
    {
        $this->setUser($price);
    }
}
