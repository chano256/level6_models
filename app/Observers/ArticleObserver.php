<?php

namespace App\Observers;

use App\Article;

class ArticleObserver
{
    /**
     * Handle the Article "created" event.
     *
     * @param  \App\Article  $article
     * @return void
     */
    public function created(Article $Article)
    {
        info('Article is saved');
    }

    /**
     * Handle the Article "created" event.
     *
     * @param  \App\Article  $article
     * @return void
     */
    public function updated(Article $article)
    {
        //
    }

    /**
     * Handle the Article "created" event.
     *
     * @param  \App\Article  $article
     * @return void
     */
    public function deleted(Article $article)
    {
        //
    }

    /**
     * Handle the Article "created" event.
     *
     * @param  \App\Article  $article
     * @return void
     */
    public function forceDeleted(Article $article)
    {
        //
    }
}