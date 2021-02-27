<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articleRepository;

    public function __construct()
    {
        $this->articleRepository = app(ArticleRepository::class);
    }

    public function index(Request $request)
    {
        return view('frontend.article.index', [
            'articles' => $this->articleRepository->getAllWithPaginate()
        ]);
    }

    public function show(Request $request, string $slug)
    {
        $article = $this->articleRepository->getArticleBySlug($slug);

        if(!$article)
            abort(404);

        return view('frontend.article.show', compact('article'));
    }
}
