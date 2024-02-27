@extends('layout.index')

@section('container')
    <section class="py-20 mx-10">
        <div class="header-area mt-3 flex ml-3">
            <div class="category-area self-center">
                <form action="/articles/category" method="post">
                    @csrf
                    <select name="category" id="" class="font-semibold text-xl py-3 pr-6 bg-transparent" onchange="this.form.submit()">
                        <option value="0" selected hidden class="font-semibold">Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </form> 
            </div>
            <div class="search-box relative ml-3">
                <img src="/icons/search.svg" alt="" class="absolute w-7 mt-3 ml-3">
                <form action="/articles/search" method="post">
                    @csrf
                    <input name="search" type="text" class="w-[63.8rem] text-xl py-3 pl-14 font-semibold rounded-md" placeholder="Cari Berita Terkini di Sekolah Ini...">
                </form>
            </div>
        </div>

        <div class="article-cards flex flex-wrap gap-3 ml-3">
            @foreach ($articles as $article)
                <div class="article-card w-56 bg-white hover:bg-slate-200 shadow-md hover:shadow-xl mt-5 rounded-lg" onclick="location.href='/articles/{{ $article->id }}/show'">
                    <img src="{{ asset('/articleimages/' . $article->image) }}" class="w-56 h-48 object-cover rounded-t-md" alt="">

                    <div class="text-area mx-2 mt-3">
                        <h1 class="font-semibold text-base text-black hover:text-amber-600">{{ $article->title }}</h1>
                        <h1 class="article-date font-semibold text-sm opacity-80 mt-3 pb-8">{{ date_format($article->created_at, 'd F Y') }}</h1>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection