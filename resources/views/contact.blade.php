@extends('layout.layout')
@section('content')


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


    <!-- Footer -->
    <div class="bg-blue-950 w-full pb-5 px-5">

        <div class="md:flex">
            <div class="text-center">
                <div class="flex flex-row justify-center md:justify-start">
                    <img src="{{ URL('images/footerhome.png') }}" class="w-20 h-20">
                    <h1 class="text-white font-bold mt-8 px-2">HISTORY</h1>
                </div>
                <div class="flex-col md:w-3/4 text-white font-bold">
                    <p>Celebrating Japanese import cars' legacy, inspiring global enthusiasts with information, community, and up-to-date content.</p>
                </div>

                <div class="flex-col md:w-3/4 text-white font-bold">
                    <label for="search" class="block text-lg mb-2"></label>
                    <div class="relative">
                        <input type="text" id="search" name="search" placeholder="VIN or Chassis Number" class="w-full px-4 py-2 text-black bg-white rounded-md focus:outline-none focus:ring focus:border-blue-300" />
                        <button type="button" class="absolute top-1/2 right-2 transform -translate-y-1/2 focus:outline-none">
                            <div class="w-8 h-8 text-black font-bold flex items-center justify-center">
                                <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 15l5.5 5.5M10 18a8 8 0 100-16 8 8 0 000 16z"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>


            </div>

            <div class="md:flex w-full mt-8 md:text-left text-center">

                <div class="w-full">
                    <h1 class="font-bold text-orange-600">Why Choose Us </h1>

                    <div class="text-white font-bold mt-5">
                        <h2>Authenticity</h2>
                        <h2>Maintenance and Service</h2>
                        <h2>Accidents and Damages</h2>
                        <h2>Odometer Verification</h2>
                        <h2>Outstanding Finance or Liens</h2>
                        <h2>Recall Information</h2>
                    </div>
                </div>

                <div class="w-full">
                    <h1 class="font-bold text-orange-600">Quick Links</h1>
                    <div class="text-white font-bold mt-5">
                        <h2>Authenticity</h2>
                        <h2>Maintenance and Service</h2>
                        <h2>Accidents and Damages</h2>
                        <h2>Odometer Verification</h2>
                        <h2>Outstanding Finance or Liens</h2>
                        <h2>Recall Information</h2>
                    </div>
                </div>

                <div class="w-full">
                    <h1 class="font-bold text-orange-600">Social</h1>
                    <div class="md:flex-row flex:col text-white font-bold lg:mt-5 ">
                        <i class="fab fa-facebook fa-2x mr-4"></i>
                        <i class="fab fa-twitter fa-2x mr-4"></i>
                        <i class="fab fa-youtube fa-2x"></i>
                    </div>
                </div>

            </div>

        </div>


        <div class="text-center mt-5">
            <span class="w-full p-0.5 bg-orange-600 lg:w-2/3 inline-block"></span>

            <h1 class="text-white font-bold">© Copyright 2023 Motormec Car History</h1>
        </div>

    </div>



    <!-- Footer end -->


</div>
@endsection