@extends('layout.layout')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div>
    {{-- ABOUT US BANNER --}}

    <div class="relative w-full">
        <img src="{{ asset('images/aboutusbanner.png') }}" alt="" class="object-cover w-full h-64 mx-auto">
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <h1 class="text-6xl font-bold text-orange-500">About Us</h1>
            <p class="text-white ">Home > About Us</p>


        </div>

    </div>

    {{-- BANNER OVER --}}

    <br>

    {{-- 2 BOXES 1MAGE AND 1 DECRIPTION --}}

    <div class="items-start justify-center w-full md:flex">
        <div class="md:w-2/6">
            <h1 class="text-3xl font-bold text-center md:mt-10 text-blue-950 md:text-left">About Us</h1>
            <p class="p-2 text-base text-center md:text-lg lg:text-xl xl:text-2xl md:mt-16 md:text-left">
                Our Japanese Import Cars History Website is a comprehensive online platform dedicated to providing
                detailed
                information and insights into the history, development, and evolution of Japanese import cars. We aim to
                cater to car enthusiasts, collectors, historians, and anyone interested in learning about the rich
                heritage
                of Japanese automotive industry and its impact on the global market.
            </p>

            <div class="gap-10 mx-auto md:flex md:mt-10">
                <div class="flex flex-col items-center gap-2 md:flex-row">
                    <div>
                        <h1 class="relative z-10 w-24 -mb-4 bg-white">Happy client</h1>
                        <div class="z-10 w-40 border-8 border-blue-950 h-28">
                            <h1 class="px-1 py-5 text-5xl text-center text-blue-950">275+</h1>
                        </div>
                    </div>
                    <div>
                        <h1 class="relative z-10 w-24 -mb-4 bg-white">Happy client</h1>
                        <div class="z-10 w-40 border-8 border-blue-950 h-28">
                            <h1 class="px-1 py-5 text-5xl text-center text-blue-950">975+</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="w-full mt-4 md:w-3/6">
            <img src="{{ asset('images/aboutimg.png') }}">
        </div>
    </div>

    {{-- BOXES OVER --}}

    <br>

    {{-- BACKGROUND IMAGE,BUTTON,TOPIC,EXPLANATION --}}

    <div class="relative my-10 ">
        <div class="w-full ">
            <img src="{{ URL('images/Group_93.png')}}" class="w-full">
            <div class="absolute inset-0 flex-col items-start justify-center text-center text-white md:flex md:mt-20 md:pl-20">
                <p class="text-xl font-bold text-orange-600 md:text-4xl">Preserving the Legacy</p>
                <p class="md:text-2xl md:w-3/12 md:text-left ">Uncovering the Past of Japanese Cars through an In-depth Sample Report</p>
                <button class="px-4 py-1 mt-2 font-bold bg-orange-600 rounded-lg md:py-2 md:text-md md:mt-5 hover:text-orange-600 hover:bg-white">GET REPORT</button>
            </div>
        </div>
    </div>

    {{-- BACKGROUND IMAGE,BUTTON,TOPIC,EXPLANATION OVER --}}

    <br>

    {{-- TOPIC,4 ROWS OF INFO,WITH BATCH,TINY TOPIC AND EXPLANATION --}}
    <div>
        <div>
            <h1 class="text-3xl font-bold text-center text-indigo-900">Why Choose Motormec Car History?</h1>
        </div>
        <br>

        {{-- ROWS --}}

        <div class="flex-col md:flex md:flex-row md:mx-40 md:pb-5">
            {{-- ROW 1 --}}
            <div class="w-full mb-6 md:w-3/12 md:mb-0 md:mx-0 ">
                <div class="w-full md:w-1/4">
                    <img class="w-12 h-12 mx-auto md:mx-0" src="{{ asset('images/search1.png') }}" alt="Image 1">
                </div>

                <h2 class="mb-2 text-lg font-bold text-center text-gray-800 md:text-start">
                    Transparency
                </h2>

                <p class="text-sm text-center text-gray-600 md:w-3/4 md:text-start">
                    Detailed vehicle past (ownership, accidents, mileage, service
                    history) promote informed decisions, highlighting potential issues for buyers.
                </p>
            </div>

            {{-- ROW 2 --}}
            <div class="w-full mx-0 mb-6 md:w-3/12 md:mb-0">
                <div class="w-full md:w-1/4">
                    <img class="w-12 h-12 mx-auto md:mx-0" src="{{ asset('images/shield1.png') }}" alt="Image 1">
                </div>

                <h2 class="mb-2 text-lg font-bold text-center text-gray-800 md:text-start">
                    Reliability
                </h2>

                <p class="text-sm text-center text-gray-600 md:w-3/4 md:text-start">
                    Accurate information aids buyers in evaluating a vehicle's
                    condition and overall reliability prior to purchase.
                </p>
            </div>

            {{-- ROW 3 --}}
            <div class="w-full mx-0 mb-6 md:w-3/12 md:mb-0">
                <div class="w-full md:w-1/4">
                    <img class="w-12 h-12 mx-auto md:mx-0" src="{{ asset('images/hand-shake3.png') }}" alt="Image 3">
                </div>

                <h2 class="mb-2 text-lg font-bold text-center text-gray-800 md:text-start">
                    Negotiating power
                </h2>

                <p class="text-sm text-center text-gray-600 md:w-3/4 md:text-start">
                    Comprehensive car history empowers buyers to negotiate based on
                    condition and history, potentially lowering price or requesting repairs.
                </p>
            </div>

            {{-- ROW 4 --}}
            <div class="w-full mx-0 mb-6 md:w-3/12 md:mb-0">
                <div class="w-full md:w-1/4">
                    <img class="w-12 h-12 mx-auto md:mx-0" src="{{ asset('images/hand-shake3.png') }}" alt="Image 3">
                </div>

                <h2 class="mb-2 text-lg font-bold text-center text-gray-800 md:text-start">
                    Transparency
                </h2>

                <p class="text-sm text-center text-gray-600 md:w-3/4 md:text-start">
                    Car history reports verify VIN to align documentation with
                    actual history, enhancing buyer confidence with an additional layer of assurance.
                </p>
            </div>
        </div>







    </div>



    {{-- TOPIC,4 ROWS OF INFO,WITH BATCH,TINY TOPIC AND EXPLANATION OVER --}}

    @endsection