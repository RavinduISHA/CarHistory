@extends('layout.layout')

@section('content')
<div>
    {{-- ABOUT US BANNER --}}

    <div class="w-full relative">
        <img src="{{ asset('images/aboutusbanner.png') }}" alt="" class="h-64 object-cover mx-auto w-full">
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <h1 class="text-orange-500 font-bold text-6xl">About Us</h1>
            <p class="text-white ">Home > About Us</p>


        </div>

    </div>

    {{-- BANNER OVER --}}

    <br>

    {{-- 2 BOXES 1MAGE AND 1 DECRIPTION --}}

    <div class="md:flex justify-center items-start w-full">
        <div class="md:w-2/6">
            <h1 class="text-3xl md:mt-10 text-blue-950 font-bold text-center md:text-left">About Us</h1>
            <p class="text-base md:text-lg lg:text-xl xl:text-2xl md:mt-16 text-center md:text-left">
                Our Japanese Import Cars History Website is a comprehensive online platform dedicated to providing
                detailed
                information and insights into the history, development, and evolution of Japanese import cars. We aim to
                cater to car enthusiasts, collectors, historians, and anyone interested in learning about the rich
                heritage
                of Japanese automotive industry and its impact on the global market.
            </p>

            <div class="md:flex gap-10 md:mt-10  mx-auto">
                <div class="flex flex-col md:flex-row gap-2 items-center">
                    <div>
                        <h1 class="bg-white -mb-4 relative z-10 w-24">Happy client</h1>
                        <div class="border-4 border-blue-950 w-40 h-28 z-10">
                            <h1 class="text-5xl text-blue-950 py-5 px-1 text-center">275+</h1>
                        </div>
                    </div>
                    <div>
                        <h1 class="bg-white -mb-4 relative z-10 w-24">Happy client</h1>
                        <div class="border-4 border-blue-950 w-40 h-28 z-10">
                            <h1 class="text-5xl text-blue-950 py-5 px-1 text-center">975+</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="md:w-3/6 w-full">
            <img src="{{ asset('images/aboutimg.png') }}">
        </div>
    </div>

    {{-- BOXES OVER --}}

    <br>

    {{-- BACKGROUND IMAGE,BUTTON,TOPIC,EXPLANATION --}}

    <div class="w-full relative">
        <div class="relative flex items-center">
            <div class="bg-cover bg-center w-full h-64 rounded-lg" style="background-image: url('{{ asset('images/Group_93.png') }}');">
                    </div>
            <div class="absolute left-0 top-0 flex flex-col justify-center h-64 items-center text-center px-8">
                <h2 class="text-2xl font-semibold text-orange-500 text-center">Preserving the Legacy</h2>
                <p class="mt-4 text-base text-white text-center">
                    Uncovering the Past of Japanese Cars <br> an In-depth Sample Report
                </p>
                <div class="mt-6">
                    <button class="px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600 transition duration-300 ease-in-out">
                        GET REPORT
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- BACKGROUND IMAGE,BUTTON,TOPIC,EXPLANATION OVER --}}

    <br>

    {{-- TOPIC,4 ROWS OF INFO,WITH BATCH,TINY TOPIC AND EXPLANATION --}}
    <div>
        <div>
            <h1 class="text-3xl font-bold text-indigo-900 text-center">Why Choose Motormec Car History?</h1>
        </div>
        <br>

        {{-- ROWS --}}

        <div class="md:flex flex-col md:flex-row md:mx-40 md:pb-5">
            {{-- ROW 1 --}}
            <div class="w-full md:w-3/12 mb-6 md:mb-0 md:mx-0 ">
                <div class="md:w-1/4 w-full">
                    <img class="w-12 h-12 md:mx-0 mx-auto" src="{{ asset('images/search1.png') }}" alt="Image 1">
                </div>

                <h2 class="text-lg font-bold text-gray-800 mb-2 md:text-start text-center">
                    Transparency
                </h2>

                <p class="text-sm text-gray-600 md:w-3/4 text-center md:text-start">
                    Detailed vehicle past (ownership, accidents, mileage, service
                    history) promote informed decisions, highlighting potential issues for buyers.
                </p>
            </div>

            {{-- ROW 2 --}}
            <div class="w-full md:w-3/12 mb-6 md:mb-0 mx-0">
                <div class="md:w-1/4 w-full">
                    <img class="w-12 h-12 md:mx-0 mx-auto" src="{{ asset('images/shield1.png') }}" alt="Image 1">
                </div>

                <h2 class="text-lg font-bold text-gray-800 mb-2  md:text-start text-center">
                    Reliability
                </h2>

                <p class="text-sm text-gray-600 md:w-3/4 text-center md:text-start">
                    Accurate information aids buyers in evaluating a vehicle's
                    condition and overall reliability prior to purchase.
                </p>
            </div>

            {{-- ROW 3 --}}
            <div class="w-full md:w-3/12 mb-6 md:mb-0 mx-0">
                <div class="md:w-1/4 w-full">
                    <img class="w-12 h-12 md:mx-0 mx-auto" src="{{ asset('images/hand-shake3.png') }}" alt="Image 3">
                </div>

                <h2 class="text-lg font-bold text-gray-800 mb-2  md:text-start text-center">
                    Negotiating power
                </h2>

                <p class="text-sm text-gray-600 md:w-3/4 text-center md:text-start">
                    Comprehensive car history empowers buyers to negotiate based on
                    condition and history, potentially lowering price or requesting repairs.
                </p>
            </div>

            {{-- ROW 4 --}}
            <div class="w-full md:w-3/12 mb-6 md:mb-0 mx-0">
                <div class="md:w-1/4 w-full">
                    <img class="w-12 h-12 md:mx-0 mx-auto" src="{{ asset('images/hand-shake3.png') }}" alt="Image 3">
                </div>

                <h2 class="text-lg font-bold text-gray-800 mb-2  md:text-start text-center">
                    Transparency
                </h2>

                <p class="text-sm text-gray-600 md:w-3/4 text-center md:text-start">
                    Car history reports verify VIN to align documentation with
                    actual history, enhancing buyer confidence with an additional layer of assurance.
                </p>
            </div>
        </div>







    </div>



    {{-- TOPIC,4 ROWS OF INFO,WITH BATCH,TINY TOPIC AND EXPLANATION OVER --}}

    @endsection