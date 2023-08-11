@extends('layout.layout')
@section('content')

<div class="w-full relative">
        <img src="{{ asset('images/Siyama.jpg') }}" alt="" class="h-64 object-cover mx-auto w-full">
<div class="absolute inset-0 flex flex-col items-center justify-center">
<h1 class="text-orange-500 font-bold text-6xl">Car Report</h1>
<p class="text-white">Home  >  Car Report</p>


</div>

    </div>

<div class="container mx-auto mt-4 ">
    <div>

        <div class="text-center">
            <h1 class="text-blue-950 font-bold text-4xl mt-10">Get In Touch</h1>
        </div>





        <div class="flex justify-center w-full mt-5">




            <div class="w-60">
                <img src="images/Group 88.png" class="w-20 h-20 mx-auto">
                <h1 class="  text-center">Address</h1>
                <h1 class=" text-center">info.carhistory.com.au</h1>
            </div>

            <div class="w-60 border-l-orange-600 border-r-orange-600 border-r-2 border-l-2">
                <div>
                    <img src="images/Group 89.png" class="w-20 h-20  mx-auto">
                </div>
                <h1 class=" text-center">Email</h1>
                <h1 class="text-center">info.carhistory.com.au</h1>
            </div>


            <div class="w-60">
                <div>
                    <img src="images/Group 90.png" class="w-20 h-20  mx-auto">
                </div>
                <h1 class="text-center">Call </h1>
                <h1 class="text-center">+61 412 345 678</h1>
            </div>

        </div>



        <div class="md:flex justify-center">
            <h1 class="text-center m-5 font-bold text-blue-950 text-2xl md:text-4xl w-4/5 md:w-4/12">If You Got Any Questions
                Please Do Not Hesitate To Send Us A Message</h1>
        </div>

        <!-- form -->

        <div class="flex justify-start w-full">
            <div class="text-start w-full">
                <h5 class="text-blue-850 mx-2">Your Name</h5>
                <input type="text" class="text-gray-500 border border-gray-300 p-2 mt-2 w-full rounded-lg" placeholder="Enter your name">
            </div>
        </div>

        <div class="flex justify-start w-full">
            <div class="text-start w-full">
                <h5 class="text-blue-850 mx-2">Your Name</h5>
                <input type="text" class="text-gray-500 border border-gray-300 p-2 mt-2 w-full rounded-lg" placeholder="Enter your name here">
            </div>
        </div>

        <div class="flex justify-start w-full">
            <div class="text-start w-full">
                <h5 class="text-blue-850 mx-2">Your Email</h5>
                <input type="text" class="text-gray-500 border border-gray-300 p-2 mt-2 w-full rounded-lg" placeholder="Enter your Email here">
            </div>
        </div>

        <div class="flex justify-start w-full">
            <div class="text-start w-full">
                <h5 class="text-blue-850 mx-2">Subject</h5>
                <input type="text" class="text-gray-500 border border-gray-300 p-2 mt-2 w-full rounded-lg" placeholder="Enter Subject here">
            </div>
        </div>


        <div class="flex justify-start w-full">
            <div class="text-start w-full">
                <h5 class="text-blue-850 mx-2">Message</h5>
                <input type="text" class="text-gray-500 border border-gray-300 p-2 mt-2 w-full rounded-lg" placeholder="Enter your Message">
            </div>
        </div>
        <!-- form -->

        <div class="flex justify-center ">
            <button class="border-2 bg-orange-500 text-white text-1xl px-10 py-3 rounded-lg ">Send Message</button>
        </div>


        <div class="text-center">
            <h1 class="text-blue-950 font-bold text-4xl mt-10">Connect with us !</h1>
        </div>

        <div class="flex justify-center gap-5 mt-10">
            <img src="images/Group 91.png" class="w-20 h-20">
            <img src="images/Group 92.png" class="w-20 h-20">
            <img src="images/Group 93.png" class="w-20 h-20">
        </div>

        <div class="flex justify-center  mt-10">
            <img src="images/Rectangle183.png">

        </div>
    </div>


  


</div>

 
@endsection