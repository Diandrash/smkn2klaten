@extends('layout.index')

@section('container')
    <section class="py-20 ml-10">
        <div class="content-area flex mt-5">
            <div class="main-area w-9/12">
                <div class="article-title">
                    <div class="header flex gap-2">
                        @if ($article->category)
                            <h1 class="font-semibold uppercase text-base opacity-70">{{ $article->category->name }}  </h1>                            
                        @endif
                        @if ($article->organization)
                            <h1 class="font-semibold uppercase text-base opacity-70"> | {{ $article->organization->name }}</h1>
                        @endif
                    </div>
                    <h1 class="font-semibold text-3xl w-[40rem]">{{ $article->title }}</h1>
                    <h3 class="font-semibold text-sm opacity-85 mt-1">Ditulis pada <span class="font-bold">{{ date_format($article->created_at, 'd F Y') }}</span></h3>
                    <h3 class="font-semibold text-sm opacity-85">Ditulis oleh <span class="font-bold">{{ $article->author->name }}</span></h3>

                    <div class="image-area">
                        <img src="{{ asset('/articleimages/' . $article->image) }}" class="w-[30rem] mt-5" alt="">
                    </div>

                    <div class="text-area font-normal mr-32 mt-10 text-justify">{{ $article->text }}</div>
                </div>
            </div>
            <div class="related-area w-3/12 bg-white h-dvh rounded-md p-3">
                <h1 class="font-semibold text-xl">Berita Terkait</h1>

                @foreach ($articles as $articlerelated)
                    <div class="article-related">
                        <img src="{{ asset('/articleimages/' . $articlerelated->image) }}" class="w-96 h-48 object-cover rounded-t-md" alt="">
                        <h1 class="font-semibold text-base text-black hover:text-amber-600 mt-2" onclick="location.href='/articles/{{ $articlerelated->id }}/show'">{{ $articlerelated->title }}</h1>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection