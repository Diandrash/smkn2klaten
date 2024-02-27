<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Organization;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $categories = Category::all();
        return view('articles.index', [
            'title' => 'Halaman Berita',
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }
    public function myIndex()
    {
        $articles = Article::all();
        return view('articles.myIndex', [
            'title' => 'Halaman Berita',
            'articles' => $articles,
        ]);
    }

    public function search(Request $request)
    {
        $query = $request['search'];
        $articles = Article::where('title', 'LIKE', "%$query%")->get();
        $categories = Category::all();
        return view('articles.index', [
            'title' => $query,
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }
    public function category(Request $request)
    {
        $categoryId = $request['category'];
        $category = Category::where('id', $categoryId)->first();
        $articles = Article::where('category_id', $categoryId)->get();
        $categories = Category::all();
        return view('articles.index', [
            'title' => $category->name,
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $organizations = Organization::all();
        return view('articles.create', [
            'title' => 'Buat Berita Baru',
            'categories' => $categories,
            'organizations' => $organizations,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $ValidatedData = $request->validate([
            'author_id' => 'required',
            'category_id' => 'max:3',
            'organization_id' => 'max:3',
            'title' => 'required|min:3|max:300',
            'text' => 'required|min:3',
            'image' => 'required',
        ]);

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move('articleimages', $filename);

        Article::create([
            'author_id' => $ValidatedData['author_id'],
            'category_id' => $ValidatedData['category_id'],
            'organization_id' => $ValidatedData['organization_id'],
            'title' => $ValidatedData['title'],
            'text' => $ValidatedData['text'],
            'image' => $filename,
        ]);

        Alert::success('Success', 'Berita Berhasil Dibuat');
        return redirect()->intended('/myarticles');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $categoryId = $article->category_id;
        $articleId = $article->id;
        $articles = Article::where('category_id', $categoryId)->whereNotIn('id', [$articleId])->get();
        return view('articles.show', [
            'title' => $article->title,
            'article' => $article,
            'articles' => $articles,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categoryId = $article->category_id;
        $categories = Category::all();
        $organizations = Organization::all();
        return view('articles.edit', [
            'title' => 'Edit Berita',
            'categories' => $categories,
            'organizations' => $organizations,
            'article' => $article,
            'categoryId' => $categoryId,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $ValidatedData = $request->validate([
            'author_id' => 'required',
            'category_id' => 'max:3',
            'organization_id' => 'max:3',
            'title' => 'required|min:3|max:300',
            'text' => 'required|min:3',
            'image' => '',
        ]);

        $filename = $article->image;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('articleimages', $filename);
        }

        $article->update([
            'author_id' => $ValidatedData['author_id'],
            'category_id' => $ValidatedData['category_id'],
            'organization_id' => $ValidatedData['organization_id'],
            'title' => $ValidatedData['title'],
            'text' => $ValidatedData['text'],
            'image' => $filename,
        ]);

        Alert::success('Success', 'Berita Berhasil Diubah');
        return redirect()->intended('/myarticles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        Alert::success('Success','Article Deleted');
        return redirect()->intended('/myarticles');
    }
}
