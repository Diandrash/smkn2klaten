@extends('layout.index')

@section('container')
    <section class="py-20 mx-10">
        <div class="content-area flex flex-wrap mx-10 mt-5">
            <div class="image-area w-5/12 mt-14">
            <img src="{{ asset('/img/' . $organization->image) }}" alt="" class="w-[25rem]"></div>
            <div class="text-area w-7/12">
                <h1 class="font-semibold text-3xl ml-3 mb-3">Organisasi {{ $organization->name }}</h1>
                <p class="ml-3">{{ $organization->description }}</p>
            </div>
        </div>
    </section>
@endsection