@extends('layouts.main')

@section('container')
    @include('layouts.partials.header')
<section class="pt-20">   
    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
        <div class="flex flex-col lg:flex-row justify-between gap-8">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">About Us</h1>
                <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.In the first place we have granted to God, and by this our present charter confirmed for us and our heirs forever that the English Church shall be free, and shall have her rights entire, and her liberties inviolate; and we will that it be thus observed; which is apparent from</p>
            </div>
            <div class="w-full lg:w-8/12">
                <img class="w-full h-full" src="https://i.ibb.co/FhgPJt8/Rectangle-116.png" alt="A group of People" />
            </div>
        </div>
    </div>
</section> 
@endsection
