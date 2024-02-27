@extends('layout.index')

@section('container')
<div class="content-area flex pt-5">
    <div class="left-area bg-amber-600 w-6/12">
        <div class="image-area flex justify-center h-dvh">
            <img src="/img/register.png" class="w-[30rem]" alt="">    
        </div>
    </div>
    <div class="right-area w-6/12">
        <div class="text-area p-5 mt-16">
            <h1 class="font-semibold text-2xl">Sign In Into Your Account</h1>
            
            <form action="/login" method="post" class="mt-8">
                @csrf
                <div class="input-area mt-5">
                    <label for="email" class="font-semibold text-xl">Your Email</label>
                    <input type="email" name="email"  class="w-full h-14 mt-2 rounded-md pl-3 font-semibold text-lg" id="" placeholder="johndoe@gmail.com">
                </div>
                <div class="input-area mt-5">
                    <label for="password" class="font-semibold text-xl">Your Password</label>
                    <input type="password" name="password"  class="w-full h-14 mt-2 rounded-md pl-3 font-semibold text-lg" id="" placeholder="**********">
                </div>

                <button class="w-full py-3 font-semibold text-white bg-amber-600 text-lg rounded-lg mt-32">Login Now</button>
            </form>
        </div>
    </div>
</div>
@endsection