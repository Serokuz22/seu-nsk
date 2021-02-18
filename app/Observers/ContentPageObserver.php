<?php

namespace App\Observers;

use App\Models\ContentPage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ContentPageObserver
{
    /**
     * Текущий Юзер
     * @param ContentPage $page
     * @return void
     */
    protected function setUser(ContentPage $page)
    {
        $page->user_id = auth()->id();
    }

    /**
     * Добавляем дату публикации
     * @param ContentPage $page
     * @return void
     */
    protected function setPublishedAt(ContentPage $page)
    {
        if(empty($page->published_at) && $page->is_published)
        {
            $page->published_at = Carbon::now();
        }
    }

    /**
     * Если Slug пуст то создаем его
     * @param ContentPage $page
     * @return void
     */
    protected function setSlug(ContentPage $page)
    {
        if(empty($page->slug))
        {
            $page->slug = time() . Str::slug($page->title).".html";
        }
    }

    /**
     * Если Head пустой то копируем с Title
     * @param ContentPage $page
     * @return void
     */
    protected function setHead(ContentPage $page)
    {
        if(empty($page->head))
        {
            $page->head = $page->title;
        }
    }

    /**
     * Событие перед созданем новой записи
     * @param ContentPage $page
     * @return void
     */
    public function creating(ContentPage $page)
    {
        $this->setPublishedAt($page);
        $this->setSlug($page);
        $this->setHead($page);
        $this->setUser($page);
    }

    /**
     * Событие перед сохранением отредактированной записи
     * @param ContentPage $page
     * @return void
     */
    public function updating(ContentPage $page)
    {
        $this->setPublishedAt($page);
//        $this->setSlug($page);
        $this->setHead($page);
        $this->setUser($page);
    }
}
