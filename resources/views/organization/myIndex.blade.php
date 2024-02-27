@extends('layout.index')

@section('container')
    <section class="py-20 mx-10">
        <h1 class="font-semibold text-2xl mt-5 text-center">Kelola Organisasi dan Ekstrakurikuler SMK Negeri 2 Klaten</h1>

        <div class="content-area flex flex-wrap justify-center gap-5 mt-7">
            <div class="organization-card w-64 bg-white pb-5 rounded-md shadow hover:shadow-3xl hover:shadow-yellow-600 scale-100 hover:scale-105 duration-75 cursor-pointer border-2 border-dashed border-black mt-3" onclick="location.href='/myorganization/create'">
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

                    <div class="action-area mt-6 mx-2 flex gap-2 pb-5 justify-center ">
                        <button class="bg-emerald-600 hover:bg-emerald-800 p-2 rounded-md" onclick="location.href='/myorganization/{{ $extra->id }}/show'"><img src="/icons/eye.svg" class="w-5" alt=""></button>
                        <button class="bg-amber-300 hover:bg-amber-500 p-2 rounded-md" onclick="location.href='/myorganization/{{ $extra->id }}/edit'"><img src="/icons/pencil.svg" class="w-5" alt="" ></button>
                        <form action="/myarticles/{{ $extra->id }}/delete" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-800 p-2 rounded-md" onclick="confirm('Sure to Delete')"><img src="/icons/trash.svg" class="w-4" alt=""></button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection