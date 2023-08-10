@extends('layout.layout')

@section('content')
    <div>
        {{-- ABOUT US BANNER --}}

        <div class="w-full">
            <img src="{{ asset('images/aboutusbanner.png') }}" alt="" class="h-64 object-cover mx-auto w-full">

        </div>

        {{-- BANNER OVER --}}

        <br>

        {{-- 2 BOXES 1MAGE AND 1 DECRIPTION --}}

        <div class="flex justify-center items-start w-full">
            <div class="w-2/6">
                <h1 class="text-2xl">About Us</h1>
                <p class="text-base">
                    Our Japanese Import Cars History Website is a comprehensive online platform dedicated to providing
                    detailed
                    information and insights into the history, development, and evolution of Japanese import cars. We aim to
                    cater to car enthusiasts, collectors, historians, and anyone interested in learning about the rich
                    heritage
                    of Japanese automotive industry and its impact on the global market.
                </p>
            </div>
            <div class="w-3/6">
                <img src="{{ asset('images/aboutimg.png') }}">
            </div>
        </div>

        {{-- BOXES OVER --}}

        <br>

        {{-- BACKGROUND IMAGE,BUTTON,TOPIC,EXPLANATION --}}

        <div class="w-full relative">
            <div class="relative flex items-center">
                <div class="bg-cover bg-center w-full h-64 rounded-lg"
                    style="background-image: url('{{ asset('images/Group 91.png') }}');">
                </div>
                <div class="absolute left-0 top-0 flex flex-col justify-center h-64 items-center text-center px-8">
                    <h2 class="text-2xl font-semibold text-orange-500 text-center">Preserving the Legacy</h2>
                    <p class="mt-4 text-base text-white text-center">
                        Uncovering the Past of Japanese Cars <br> an In-depth Sample Report
                    </p>
                    <div class="mt-6">
                        <button
                            class="px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600 transition duration-300 ease-in-out">
                            GET REPORT
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- BACKGROUND IMAGE,BUTTON,TOPIC,EXPLANATION OVER --}}

        <br>

        {{-- TOPIC,4 ROWS OF INFO,WITH BATCH,TINY TOPIC AND EXPLANATION --}}
        <div class=" mx-auto max-w-screen-lg ">
            <div>
                <h1 class="text-3xl font-bold text-indigo-900 text-center">Why Choose Motormec Car History?</h1>
            </div>
            <br>
            {{-- ROWS --}}
            <div class="flex flex-row">
                {{-- ROW 1 --}}
                <div>
                    <div class="w-1/4">
                        <img class="w-12 h-12" src="{{ asset('images/search1.png') }}" alt="Image 1">
                    </div>

                    <h2 class="text-lg font-bold text-gray-800 mb-2">
                        Transparency
                    </h2>

                    <p class="text-sm text-gray-600">
                        Detailed vehicle past (ownership, accidents, mileage, service
                        history) promote informed decisions, highlighting potential issues for buyers.
                    </p>

                </div>

                {{-- ROW 2 --}}
                <div>
                    <div class="w-1/4">
                        <img class="w-12 h-12" src="{{ asset('images/shield1.png') }}" alt="Image 2">
                    </div>

                    <h2 class="text-lg font-bold text-gray-800  mb-2">
                        Reliability
                    </h2>

                    <p class="text-sm text-gray-600">
                        Accurate information aids buyers in evaluating a vehicle's
                        condition and overall reliability prior to purchase.
                    </p>

                </div>

                {{-- ROW 3 --}}
                <div>
                    <div class="w-1/4">
                        <img class="w-12 h-12" src="{{ asset('images/hand-shake3.png') }}" alt="Image 3">
                    </div>

                    <h2 class="text-lg font-bold text-gray-800  mb-2">
                        Negotiating power
                    </h2>

                    <p class="text-sm text-gray-600">
                        Comprehensive car history empowers buyers to negotiate based on
                        condition and history, potentially lowering price or requesting repairs.
                    </p>

                </div>

                {{-- ROW 4 --}}
                <div>
                    <div class="w-1/4">
                        <img class="w-12 h-12" src="{{ asset('images/hand-shake3.png') }}" alt="Image 4">
                    </div>

                    <h2 class="text-lg font-bold text-gray-800  mb-2">
                        Transparency
                    </h2>

                    <p class="text-sm text-gray-600">
                        Car history reports verify VIN to align documentation with
                        actual history, enhancing buyer confidence with an additional layer of assurance.
                    </p>

                </div>

            </div>

        </div>
        {{-- TOPIC,4 ROWS OF INFO,WITH BATCH,TINY TOPIC AND EXPLANATION OVER --}}

    <h1>Welcome to the About us Page</h1>
@endsection




        <!-- ACCORDION 6-->
        <h2 id="accordion-collapse-heading-6">
            <button type="button" data-accordion-target="#accordion-collapse-body-6" aria-expanded="true" aria-controls="accordion-collapse-body-6" class="flex items-center justify-between w-full p-5 font-medium text-left rounded-t-xl mt-3 text-white bg-blue-900 hover:bg-blue-950 focus:bg-blue-950">
                <span>VEHICLE ASSESSMENT</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>

        <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-1">

            <div class="mt-10">
                <h1 class="text-center text-blue-950 text-2xl">
                    Overall Collision Safety Ratings
                </h1>
            </div>


            <div class="flex flex-col md:flex-row w-full justify-center p-4 md:p-8">

                <div class="w-full md:w-6/12 mb-8 md:mb-0">
                    <div class="text-center text-lg font-semibold">
                        Driver's Seat
                    </div>
                    <div class="mt-5">
                        <table class="w-full border border-white rounded">
                            <tr class="bg-white">
                                <th class="p-2">Points</th>
                                <th class="p-2">Evaluation</th>
                                <th class="p-2">Goal Average</th>
                            </tr>
                            <tr class="bg-gray-300">
                                <td class="p-2">32.04</td>
                                <td class="p-2">
                                    <div class="flex">
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                    </div>
                                </td>
                                <td class="p-2">89%</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="w-full md:w-6/12">
                    <div class="text-center text-lg font-semibold">
                        Front Passenger's Seat
                    </div>
                    <div class="mt-5">
                        <table class="w-full border border-white rounded">
                            <tr class="bg-white">
                                <th class="p-2">Points</th>
                                <th class="p-2">Evaluation</th>
                                <th class="p-2">Goal Average</th>
                            </tr>
                            <tr class="bg-gray-300">
                                <td class="p-2">21.61</td>
                                <td class="p-2">
                                    <div class="flex">
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                    </div>
                                </td>
                                <td class="p-2">90%</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div class="text-center text-gray-500 mt-5">

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Fusce aliquam euismod enim, a blandit neque tincidunt vitae. In faucibus ante eget risus sollicitudin,
                    at ullamcorper justo semper. Suspendisse potenti. Sed aliquam nunc vitae mauris semper, non varius erat volutpat.
                    Nulla facilisi. Nunc rhoncus eleifend justo vitae tristique. Vestibulum nec mauris elit. Praesent nec tristique mauris. Sed posuere enim eget purus ullamcorper lacinia. Integer efficitur massa et eleifend feugiat.
                </p>
            </div>

            <div class="text-center text-blue-950 text-2xl  mt-5">Breaking Performance Tests</div>
            <div class="md:flex justify-center gap-40 mt-5">


                <div class="flex justify-center">
                    <div class="mx-auto">
                        <div class="rounded-full border-4 border-blue-950 h-40 w-40 grid place-items-center">
                            <div class="text-gray-500 text-lg">41.6 m</div>
                        </div>
                        <p class="text-center mt-2">Dry Road</p>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="mx-auto">
                        <div class="rounded-full border-4 border-blue-950 grid h-40 w-40 place-items-center">
                            <div class="text-gray-500">41.8 m</div>
                        </div>
                        <p class="text-center">Wet Road</p>
                    </div>
                </div>

            </div>

        </div>



        <!-- ACCORDION 7-->
        <h2 id="accordion-collapse-heading-7">
            <button type="button" data-accordion-target="#accordion-collapse-body-7" aria-expanded="true" aria-controls="accordion-collapse-body-7" class="flex items-center justify-between w-full p-5 font-medium text-left rounded-t-xl mt-3 text-white bg-blue-900 hover:bg-blue-950 focus:bg-blue-950">
                <span>VEHICLE SPECIFICATION</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-1">
            <div class="flex flex-col justify-center space-y-2 mt-10">
                <h1 class="text-center font-bold text-2xl text-[#29335C]">Auction Sheet</h1>
                <div class="mt-14">
                    <img src="{{ URL('images/Rectangle 176.png')}}" alt="" class="mx-auto w-2/6" srcset="">
                </div>
            </div>
            <h1 class="text-center font-bold text-2xl text-[#29335C] mt-10">Photos</h1>
            <div class="flex items-center justify-center mt-14">
                <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                    <div class="grid gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ URL('images/1.png')}}" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ URL('images/4-Best-Used-Toyota-Prius-Models-Under-₦5-Million.png')}}" alt="">
                        </div>
                    </div>
                    <div class="grid gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ URL('images/2.png')}}" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ URL('images/2023-toyota-prius_100869030.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!--- According End -->



@endsection