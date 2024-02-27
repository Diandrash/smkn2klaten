@extends('layout.index')

@section('container')
    <section class="py-20 mx-10">
        <h1 class="font-semibold text-2xl mt-5 text-center">Organisasi dan Ekstrakurikuler SMK Negeri 2 Klaten</h1>

        <div class="content-area flex flex-wrap justify-center gap-3 mt-7">
            <div class="organization-card w-64 bg-white pb-5 rounded-md shadow hover:shadow-3xl hover:shadow-yellow-600 scale-100 hover:scale-105 duration-75 cursor-pointer border-2 border-dashed border-black" onclick="location.href='/myorganization/create'">
                <div class="content-area flex flex-col justify-center h-full">
                    <img src="icons/plus.svg" class="w-16 self-center" alt="">
                    <h1 class="font-semibold text-lg mt-10 self-center">Tambahkan Organisasi</h1>
                   </div>
            </div>
            @foreach ($organizations as $extra)
                <div class="organization-card w-64 bg-white pb-5 rounded-md shadow hover:shadow-3xl hover:shadow-yellow-600 scale-100 hover:scale-105 duration-75 cursor-pointer mt-3">
                    <div class="image-area justify-center flex pt-3">
                        <img src="{{ asset('/img/' . $extra->image) }}" alt="" class="w-32 h-32 mt-3">
                    </div>

                    <div class="text-area mx-3 mt-5">
                        <h1 class="extraname font-semibold text-xl text-black text-center">{{ $extra->name }}</h1>
                        <p class="line-clamp-6 text-center text-sm mt-1">{{ $extra->description }}</p>
                        <div class="flex justify-center">    
                            <a href="/articles/{{ $extra->id }}/show" class="font-semibold text-sm mt-1 text-blue-600 hover:text-blue-900">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection