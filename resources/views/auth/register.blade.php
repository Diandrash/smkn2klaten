@extends('layout.index')

@section('container')
<div class="content-area flex pt-5">

    <div class="left-area w-6/12">
        <div class="text-area p-5 mt-16">
            <h1 class="font-semibold text-2xl">Register an New Account</h1>
            
            <form action="/register" method="post" class="mt-8">
                @csrf
                <div class="input-area mt-5">
                    <label for="name" class="font-semibold text-lg">Your Name</label>
                    <input type="text" name="name"  class="w-full h-14 mt-2 rounded-md pl-3 font-semibold text-lg" id="" placeholder="John Doe">
                </div>
                <div class="input-area mt-5">
                    <label for="email" class="font-semibold text-lg">Your Email</label>
                    <input type="email" name="email"  class="w-full h-14 mt-2 rounded-md pl-3 font-semibold text-lg" id="" placeholder="johndoe@gmail.com">
                </div>
                <div class="input-area mt-5">
                    <label for="password" class="font-semibold text-lg">Your Password</label>
                    <input type="password" name="password"  class="w-full h-14 mt-2 rounded-md pl-3 font-semibold text-lg" id="" placeholder="**********">
                </div>

                <button class="w-full py-3 font-semibold text-white bg-amber-600 hover:bg-amber-300 text-lg rounded-lg mt-10">Register Now</button>
            </form>
        </div>
    </div>
    <div class="right-area bg-amber-600 w-6/12">
        <div class="image-area flex justify-center h-dvh">
            <img src="/img/login.png" class="w-[30rem] mt-10" alt="">    
        </div>
    </div>
</div>
@endsection