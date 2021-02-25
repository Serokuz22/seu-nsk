<?php
namespace App\Http\Controllers;

use App\Repositories\ContentPageRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ContentPageController extends Controller
{
    private $contentPageRepository;

    public function __construct()
    {
        $this->contentPageRepository = app(ContentPageRepository::class);
    }

    /**
     * Возвращаем простые страницы по адресу
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $slug = Route::current()->uri;

        $page = $this->contentPageRepository->getPageBySlug($slug);

        if(!$page)
            abort(404);

        return view('frontend.content', compact('page'));

    }
}
