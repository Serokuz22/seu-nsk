<?php

namespace App\Observers;

use App\Models\Article;
use App\Models\ContentPage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ArticleObserver
{
    /**
     * Текущий Юзер
     * @param Article $page
     * @return void
     */
    protected function setUser(Article $page)
    {
        $page->user_id = auth()->id();
    }

    /**
     * Добавляем дату публикации
     * @param Article $page
     * @return void
     */
    protected function setPublishedAt(Article $page)
    {
        if(empty($page->published_at) && $page->is_published)
        {
            $page->published_at = Carbon::now();
        }
    }

    /**
     * Если Slug пуст то создаем его
     * @param Article $page
     * @return void
     */
    protected function setSlug(Article $page)
    {
        if(empty($page->slug))
        {
            $page->slug = time().Str::slug($page->title).".html";
        }
    }

    /**
     * Если Head пустой то копируем с Title
     * @param Article $page
     * @return void
     */
    protected function setHead(Article $page)
    {
        if(empty($page->head))
        {
            $page->head = $page->title;
        }
    }

    /**
     * Событие перед созданем новой записи
     * @param Article $page
     * @return void
     */
    public function creating(Article $page)
    {
        $this->setPublishedAt($page);
        $this->setSlug($page);
        $this->setHead($page);
        $this->setUser($page);
    }

    /**
     * Событие перед сохранением отредактированной записи
     * @param Article $page
     * @return void
     */
    public function updating(Article $page)
    {
        $this->setPublishedAt($page);
//        $this->setSlug($page);
        $this->setHead($page);
        $this->setUser($page);
    }
}
