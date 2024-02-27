@extends('layout.index')

@section('container')
    <section class="py-20 mx-10">
        <h2 class="font-semibold text-2xl mt-3">Edit Berita </h2>

            <form action="/myarticles/{{ $article->id }}/edit" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="hidden" name="author_id" value="{{ auth()->user()->id }}">
                <div class="input-area mt-5">
                    <label for="title" class="font-semibold text-lg">Judul Berita</label>
                    <input type="text" name="title"  class="w-full h-14 mt-2 rounded-md pl-3 font-semibold text-lg" id="" value="{{ $article->title }}">
                </div>

                <div class="input-area mt-5">
                    <label for="title" class="font-semibold text-lg">Kategori Berita</label>
                    <select name="category_id" class="font-semibold text-lg w-full h-14" id="">
                        <option value="" class="text-lg font-semibold mt-2" selected hidden>Pilih Kategori</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" class="text-lg font-semibold mt-2" @if ($categoryId == $category->id)
                            selected
                        @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-area mt-5">
                    <label for="title" class="font-semibold text-lg">Terkait Organisasi</label>
                    <select name="organization_id" class="font-semibold text-lg w-full h-14" id="">
                        <option value="" class="text-lg font-semibold mt-2" selected hidden>Pilih Kategori</option>
                        @foreach ($organizations as $organization)
                            <option value="{{ $organization->id }}" class="text-lg font-semibold mt-2" @if ($article->organization_id == $organization->id)
                                selected
                            @endif>{{ $organization->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-area mt-5">
                    <label class="font-semibold text-lg">Gambar Berita</label>
                    <img src="{{ asset('/articleimages/' . $article->image) }}" alt="" class="w-56 mt-3 mb-3">
                    <label for="title" class="font-semibold text-lg">Ubah Gambar Berita</label>
                    <input type="file" name="image" id="" class="w-full text-2xl mt-2 bg-white">
                </div>

                <div class="input-area mt-5">
                    <label for="title" class="font-semibold text-lg">Isi Berita</label>
                    <textarea name="text" id="text" cols="30" rows="10" class="font-semibold text-lg w-full mt-2 p-3" value="Tulis Isi Berita Disini">{{ $article->text }}</textarea>
                </div>
                
                <button type="submit" class="w-full py-3 font-semibold bg-amber-600 hover:bg-amber-800 mt-10 rounded-md text-white text-lg">Buat Sekarang</button>
        </form>
    </section>
@endsection