@extends('layouts.app')

@section('content')
<div class="container mx-auto my-10">
    <h1 class="text-center text-3xl font-bold text-red-600">Get In Touch</h1>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input
                type="text"
                id="name"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                placeholder="Your Name"
            />
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input
                type="email"
                id="email"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                placeholder="Your Email"
            />
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
            <textarea
                id="message"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                placeholder="Your Message"
            ></textarea>
        </div>
        <button
            type="submit"
            class="bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline hover:bg-red-700"
        >
            Send
        </button>
    </form>
</div>
@endsection
