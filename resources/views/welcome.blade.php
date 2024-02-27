@extends('layout.index')

@section('container')
    <section id="hero" class="py-20">
        <div class="content-area flex justify-between mx-10 ">
            <div class="text-area" class="w-[30rem] ">
                <h1 class="font-semibold text-6xl mt-32">Selamat Datang di <br> SMK Pusat Keunggulan</h1>
            </div>
            <div class="image-area">
                <img src="/img/landing-2.png" class="w-[30rem]" alt="">
            </div>
        </div>
    </section>

    <section id="about" class="py-20 mx-10">
        <h1 class="font-semibold text-3xl text-center">About Us</h1>

        <div class="content-area flex flex-wrap mx-16 ">
            <div class="logo-area w-6/12">
                <img src="/img/logo.png" class="w-[31rem]" alt="">
            </div>
            <div class="text-area w-6/12 text-lg mt-10">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat obcaecati assumenda distinctio facere. Velit, ipsam culpa obcaecati voluptatibus error animi veritatis, unde eligendi non deleniti, quia esse saepe consequuntur facilis numquam rem. Dicta est quibusdam rem adipisci beatae cumque, aliquid quae repudiandae, commodi eveniet placeat iure, illo veritatis nobis vero maiores minima deserunt! Ex tempore error, odit ut unde eos? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus velit expedita corporis dolores. Nisi, dolore est temporibus libero quis earum ducimus sed quam quia nesciunt, delectus nemo, quos similique. Debitis voluptatum hic, iure reprehenderit pariatur mollitia voluptas dolores veritatis corrupti distinctio quis ab aliquid, dolorem suscipit at maxime blanditiis explicabo provident. Maiores est iste nisi libero aliquid eius quo eveniet!</p>
            </div>
        </div>

        <section id="testimonials" class="py-20 mx-10">
            <h1 class="font-semibold text-2xl text-center">What Our Client Says</h1>
(
            <div class="content-area flex flex-wrap gap-3">
                <div class="card w-48 bg-white">
                    <div class="image-area justify-center">
                       <img src="{{ /img }}/" alt="">
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection