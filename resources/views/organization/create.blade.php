@extends('layout.index')

@section('container')
    <section class="py-20 mx-10">
        <h2 class="font-semibold text-2xl mt-3">Tambahkan Organisasi</h2>

            <form action="/myorganization/create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-area mt-5">
                    <label for="title" class="font-semibold text-lg">Nama Organisasi</label>
                    <input type="text" name="name"  class="w-full h-14 mt-2 rounded-md pl-3 font-semibold text-lg" id="" placeholder="Judul Organisasi">
                </div>

                        
                <div class="input-area mt-5">
                    <label for="title" class="font-semibold text-lg">Gambar Organisasi</label>
                    <input type="file" name="image" id="" class="w-full text-2xl mt-2 bg-white">
                </div>

                <div class="input-area mt-5">
                    <label for="title" class="font-semibold text-lg">Deskripsi Organisasi</label>
                    <textarea name="description" id="text" cols="30" rows="10" class="font-semibold text-lg w-full mt-2 p-3" placeholder="Tulis Isi Organisasi Disini"></textarea>
                </div>
                
                <button type="submit" class="w-full py-3 font-semibold bg-amber-600 hover:bg-amber-800 mt-10 rounded-md text-white text-lg">Buat Sekarang</button>
        </form>
    </section>
@endsection