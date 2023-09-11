@extends('layout.layout')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<div class="relative w-full">
    <img src="{{ asset('images/Siyama.jpg') }}" alt="" class="object-cover w-full h-64 mx-auto">
    <div class="absolute inset-0 flex flex-col items-center justify-center">
        <h1 class="text-6xl font-bold text-orange-500">Car Report</h1>
        <p class="text-white">Home > Car Report</p>


    </div>

</div>

<div class="container mx-auto mt-4 ">
    <div>

        <div class="text-center">
            <h1 class="mt-10 text-4xl font-bold text-blue-950">Get In Touch</h1>
        </div>



        <div class="flex justify-center mt-10">
            <div class="w-60">
                <img src="images/Group 88.png" class="w-20 h-20 mx-auto">
                <h1 class="text-center ">Address</h1>
                <h1 class="text-center ">info.carhistory.com.au</h1>
            </div>

            <div class="border-l-2 border-r-2 w-60 border-l-orange-600 border-r-orange-600">
                <div>
                    <img src="images/Group 89.png" class="w-20 h-20 mx-auto">
                </div>
                <h1 class="text-center ">Email</h1>
                <h1 class="text-center">info.carhistory.com.au</h1>
            </div>


            <div class="w-60">
                <div>
                    <img src="images/Group 90.png" class="w-20 h-20 mx-auto">
                </div>
                <h1 class="text-center">Call </h1>
                <h1 class="text-center">+61 412 345 678</h1>
            </div>

        </div>

    </div>


    <div class="flex justify-center md:mt-28">
        <h1 class="w-4/5 m-5 text-2xl font-bold text-center text-blue-950 md:text-4xl md:w-6/12">If You Got Any Questions
            Please Do Not Hesitate To Send Us A Message</h1>
    </div>



    <!-- form -->

    <div class="flex justify-center w-full">
        <div class="w-1/2 text-start">
            <h5 class="mx-2 text-blue-850">Your Name</h5>
            <input type="text" class="w-full p-2 mt-2 text-gray-500 border border-gray-300 rounded-lg" placeholder="Enter your name">
        </div>
    </div>
    
    <div class="flex justify-center w-full">
        <div class="w-1/2 text-start">
            <h5 class="mx-2 text-blue-850">Your Name</h5>
            <input type="text" class="w-full p-2 mt-2 text-gray-500 border border-gray-300 rounded-lg" placeholder="Enter your name here">
        </div>
    </div>

    <div class="flex justify-center w-full">
        <div class="w-1/2 text-start">
            <h5 class="mx-2 text-blue-850">Your Email</h5>
            <input type="text" class="w-full p-2 mt-2 text-gray-500 border border-gray-300 rounded-lg" placeholder="Enter your Email here">
        </div>
    </div>

    <div class="flex justify-center w-full">
        <div class="w-1/2 text-start">
            <h5 class="mx-2 text-blue-850">Subject</h5>
            <input type="text" class="w-full p-2 mt-2 text-gray-500 border border-gray-300 rounded-lg" placeholder="Enter Subject here">
        </div>
    </div>


    <div class="flex justify-center w-full">
        <div class="w-1/2 text-start">
            <h5 class="mx-2 text-blue-850">Message</h5>
            <input type="text" class="w-full p-2 mt-2 text-gray-500 border border-gray-300 rounded-lg" placeholder="Enter your Message">
        </div>
    </div>
    <!-- form -->

    <div class="flex justify-center ">
        <button class="px-10 py-3 mt-5 text-white bg-orange-500 border-2 rounded-lg text-1xl md:mt-10">Send Message</button>
    </div>


    <div class="text-center">
        <h1 class="mt-10 text-4xl font-bold text-blue-950">Connect with us !</h1>
    </div>

    <div class="flex justify-center gap-5 mt-10">
        <img src="images/Group 91.png" class="w-20 h-20">
        <img src="images/Group 92.png" class="w-20 h-20">
        <img src="images/Group 93.png" class="w-20 h-20">
    </div>

    <div class="flex justify-center mt-10">
        <img src="images/Rectangle183.png">

    </div>
</div>





</div>


@endsection