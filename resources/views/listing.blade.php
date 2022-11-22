@extends('layout')

@section('content')
@include('partials._search')


<a href="index.html" class="inline-block text-black ml-4 mb-4"
><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
<div class="bg-gray-50 border border-gray-200 p-10 rounded">
    <div
        class="flex flex-col items-center justify-center text-center"
    >
        <img
            class="w-48 mr-6 mb-6"
            src="images/acme.png"
            alt=""
        />

        <h3 class="text-2xl mb-2">Senior Laravel Developer</h3>
        <div class="text-xl font-bold mb-4">Acme Corp</div>
        <ul class="flex">
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Laravel</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">API</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Backend</a>
            </li>
            <li
                class="bg-black text-white rounded-xl px-3 py-1 mr-2"
            >
                <a href="#">Vue</a>
            </li>
        </ul>
        <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i> Daytona, FL
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
            <h3 class="text-3xl font-bold mb-4">
                Job Description
            </h3>
            <div class="text-lg space-y-6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Eligendi non reprehenderit
                    facilis architecto autem quam
                    necessitatibus, odit quod, repellendus
                    voluptate cum. Necessitatibus a id tenetur.
                    Error numquam at modi quaerat.
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur
                    adipisicing elit. Quaerat praesentium eos
                    consequuntur ex voluptatum necessitatibus
                    odio quos cupiditate iste similique rem in,
                    voluptates quod maxime animi veritatis illum
                    quo sapiente.
                </p>

                <a
                    href="mailto:test@test.com"
                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-envelope"></i>
                    Contact Employer</a
                >

                <a
                    href="https://test.com"
                    target="_blank"
                    class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                    ><i class="fa-solid fa-globe"></i> Visit
                    Website</a
                >
            </div>
        </div>
    </div>
</div>
</div>

@endsection