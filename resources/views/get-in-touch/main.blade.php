@extends('layouts.app')

@section('content')

<body class="relative  min-h-screen text-white flex items-center justify-center">
    <div class="container  ">
      {{-- <div class="frame_form"> --}}


<form class=" mx-auto frame_form w-full">
    <h2 class="header_2 text-center pl-0"> Get an illy Machine in Your Location </h2>

      <div class="relative z-0 w-full mb-5 group mt-10">
        <input type="name" name="floating_name" id="floating_name" class="block py-2.5 px-0 w-full text-16 text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_email" class="peer-focus:font-medium absolute text-16 text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-16 text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_email" class="peer-focus:font-medium absolute text-16 text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
    </div>


    <div class="grid md:grid-cols-2 md:gap-6 w-full">
        <div class="relative z-0 w-full mb-5 group">
            <input type="tel"  name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number </label>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="Zipcode" id="Zipcode" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
            <label for="Zipcode" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Zipcode</label>
        </div>
      </div>
      <div class="relative z-0 w-full mb-5 group">
        <label for="underline_select" class="sr-only text-16">Underline select</label>
        <select id="underline_select" class="block py-2.5 px-0 w-full text-16 text-gray-500 bg-transparent border-0 border-b-2 border-gray-200  dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">

            <option value="US">Facbook</option>
            <option value="CA">Instagram</option>
            <option value="FR">Other</option>
        </select>
    </div>

    <!-- Textarea: Message -->    <div class="relative z-0 w-full mb-5 group">

        <textarea id="message" name="message" rows="4"
            class="block w-full h-[80px] py-2.5 px-3 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600"
            placeholder="Your Message"></textarea>
    </div>
    <button type="submit"  onclick="window.location.href='/'" class="btn_red">Get in Touch</button>
    <span class="text-20 text-gray-500 text-center mt-10" >We are also available at </span>
    <span class="text-20 text-gray-500 text-center" >✉ emailaddress@gmail.com </span>
    <br>
    <br>

    <span class="text-20 text-gray-500 text-center mt-10">And you can reach us at </span>
        <span class="text-20 text-gray-500 text-center"> ☎︎︎  (###) ### - ###</span>
  </form>

      {{-- </div> --}}
    </div>
</body>
@endsection
