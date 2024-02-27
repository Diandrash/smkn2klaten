@extends('layout.index')

@section('container')
    <section class="py-20 mx-10">
        <div class="header-area mt-3 flex justify-between ml-3">
            <h1 class="font-semibold text-2xl self-center">Kelola Berita</h1>
            <button class="px-10 py-3 self-center rounded-md font-semibold text-base text-white bg-amber-600 hover:bg-amber-800" onclick="location.href='/myorganization'">Kelola Organisasi</button>
        </div>

        <div class="article-cards flex flex-wrap gap-3 ml-3">
            <div class="create-article-card w-56 h-[23.5rem] bg-white hover:bg-slate-100 shadow-md hover:shadow-xl mt-5 rounded-lg border-2 border-dashed border-black" onclick="location.href='/myarticles/create'">
               <div class="content-area flex flex-col justify-center h-full">
                <img src="icons/plus.svg" class="w-16 self-center" alt="">
                <h1 class="font-semibold text-lg mt-10 self-center">Buat Berita</h1>
               </div>
            </div>
            @foreach ($articles as $article)
                <div class="article-card w-56 bg-white hover:bg-slate-200 shadow-md hover:shadow-xl mt-5 rounded-lg">
                    <img src="{{ asset('/articleimages/' . $article->image) }}" class="w-56 h-48 object-cover rounded-t-md" alt="">

                    <div class="text-area mx-2 mt-3">
                        <h1 class="font-semibold text-base text-black hover:text-amber-600 h-16">{{ $article->title }}</h1>
                        <h1 class="article-date font-semibold text-sm opacity-80 mt-3">{{ date_format($article->created_at, 'd F Y') }}</h1>
                    </div>

                    <div class="action-area mt-3 mx-2 flex gap-2 pb-5">
                        <button class="bg-emerald-600 hover:bg-emerald-800 p-2 rounded-md" onclick="location.href='/articles/{{ $article->id }}/show'"><img src="/icons/eye.svg" class="w-6" alt=""></button>
                        <button class="bg-amber-300 hover:bg-amber-500 p-2 rounded-md" onclick="location.href='/myarticles/{{ $article->id }}/edit'"><img src="/icons/pencil.svg" class="w-6" alt="" ></button>
                        <form action="/myarticles/{{ $article->id }}/delete" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-800 p-2 rounded-md" onclick="confirm('Sure to Delete')"><img src="/icons/trash.svg" class="w-5" alt=""></button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection