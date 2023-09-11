@extends('layout.layout')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div class="w-full">


    <!-- BACKGROUND -->
    <div class="bg-[url('../img/Pinna.jpg')] bg-cover bg-center py-4 md:py-1 justify-center h-[32rem]">
        <div class="container mx-auto mt-20 md:mt-0">
            <div class="flex-col justify-center md:flex md:justify-start md:mx-20 md:mt-40 mx-28 md:text-left ">
                <h1 class="font-bold tracking-wider text-orange-500 md:text-6xl md:mx-0">
                    Know&nbsp;Before&nbsp;You&nbsp;Buy
                </h1>
                <p class="w-full mx-3 mt-3 text-white md:text-2xl md:w-6/12 md:mt-5 md:mx-0">
                    Your go-to resource for comprehensive vehicle history checks, empowering you with essential insights and peace of mind
                </p>
            </div>
            <!-- TOPIC -->

            <div class="flex flex-col md:flex-row md:mx-20">
                <div class="items-start text-center md:w-5/12 md:mb-40 md:text-left">
                    <div class="w-full mt-10 md:w-12/12 md:mt-20 ">
                        <div class="relative w-full">
                            <input type="text" id="search" name="search" placeholder="VIN or Chassis Number" class="w-full px-4 py-2 text-black bg-white rounded-md focus:outline-none focus:ring focus:border-blue-300" />
                            <button type="button" class="absolute px-3 py-1 text-white transform -translate-y-1/2 bg-orange-500 rounded top-1/2 right-2 focus:outline-none">
                                Search
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-center gap-3 md:gap-5 md:mt-6 md:items-start sm:justify-start">
                        <img src="{{ asset('images/twitter.png') }}" alt="" class="w-5 h-5">
                        <img src="{{ asset('images/twitter.png') }}" alt="" class="w-5 h-5">
                        <img src="{{ asset('images/youtube.png') }}" alt="" class="w-5 h-5">
                    </div>

                </div>

                <!-- car -->
                <div class="w-full md:w-5/12 md:ml-40">
                    <div class="mt-auto">
                        <img src="{{ asset('images/pngegg.png') }}" class="">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="w-full">
        <div class="container mx-auto">

            <div class="flex justify-center md:mt-20">

                <div class="w-1/3 px-4 my-16 md:w-2/3 md:px-8 md:justify-start">
                    <h1 class="text-3xl font-bold text-blue-900 1/3">
                        Why do you need to check Japanese Import Cars History
                    </h1>

                </div>

                <div class="w-1/2 px-4 my-16 md:px-8">
                    <p class="font-bold text-gray-500 text-md">
                        Checking the history of Japanese import cars is essential for transparency and peace of mind. It verifies authenticity, reveals maintenance records, uncovers accidents and damages, prevents odometer fraud, identifies finance or lien issues, and addresses recalls or safety-related concerns.
                    </p>

                </div>

            </div>

            <div class="md:flex">
                <div class="px-4 text-center md:w-1/2 md:text-left md:px-8">
                    <img src="{{ URL('images/Group_87.png')}}" class="mx-auto md:mx-0">
                    <h1 class="font-bold text-blue-900 text-md">Authenticity</h1>
                    <p class="font-bold text-blue-900 text-md">Verifying the car's history ensures that it is not stolen or involved in any illegal activities.</p>
                </div>
                <div class="w-0.5 h-13 bg-orange-500"></div>

                <div class="px-4 text-center md:w-1/2 md:text-left md:px-8">
                    <img src="{{ URL('images/Group_88.png')}}" class="mx-auto md:mx-0">
                    <h1 class="font-bold text-blue-900 text-md">Maintenance and Service</h1>
                    <p class="font-bold text-blue-900 text-md">Understanding the vehicle's maintenance and service history helps assess its overall condition and potential maintenance needs.</p>
                </div>
                <div class="w-0.5 h-13 bg-orange-500"></div>

                <div class="px-4 text-center md:w-1/2 md:text-left md:px-8">
                    <img src="{{ URL('images/Group_89.png')}}" class="mx-auto md:mx-0">
                    <h1 class="font-bold text-blue-900 text-md">Accidents and Damages</h1>
                    <p class="font-bold text-blue-900 text-md">History checks reveal any accident records or damages the car may have sustained, allowing you to assess its structural integrity and potential repairs.</p>
                </div>
                <div class="w-0.5 h-13 bg-orange-500"></div>

                <div class="px-4 text-center md:w-1/2 md:text-left md:px-8">
                    <img src="{{ URL('images/Group_90.png')}}" class="mx-auto md:mx-0">
                    <h1 class="font-bold text-blue-900 text-md">Recall Information</h1>
                    <p class="font-bold text-blue-900 text-md">History checks provide information on any recalls or safety-related issues associated with the specific make and model of the imported car.</p>
                </div>

            </div>
        </div>

        <div class="relative my-10 ">
            <div class="w-full ">
                <img src="{{ URL('images/Group_93.png')}}" class="w-full">
                <div class="absolute inset-0 flex-col items-start justify-center text-center text-white md:flex md:mt-20 md:pl-20">
                    <p class="font-bold text-orange-600 md:text-4xl">Preserving the Legacy</p>
                    <p class="md:text-2xl md:w-3/12 md:text-left ">Uncovering the Past of Japanese Cars through an In-depth Sample Report</p>
                    <button class="px-4 py-2 font-bold bg-orange-600 rounded-lg md:text-md md:mt-5">GET REPORT</button>
                </div>
            </div>
        </div>

        <div>
            <div class="w-11/12 md:flex">
                <div class="z-10 md:w-6/12 md:-mb-20 md:px-20">
                    <img src="{{ URL('images/homecar.png')}}" alt="Your Image">
                </div>
                <div class="md:w-6/12">
                    <p class="font-bold text-center text-blue-900 md:text-4xl md:mt-40 md:text-left">
                        Why We Are the Premier Choice for Car Import History Enthusiasts
                    </p>
                </div>                
            </div>

            <!--  NEW ROW -->
            <div class="flex justify-center">
                <div class="container items-start justify-center border-4 border-blue-950">
                    <!-- one row . -->
                    <div class="flex flex-col mt-20 md:flex-row ">


                        <!-- one box . -->
                        <div class="w-full px-4 py-4 md:py-12 md:w-6/12 ">
                            <div class="flex items-center">
                                <h1 class="text-xl font-extrabold text-orange-600 md:text-2xl">01</h1>
                                <div class="w-16 mx-2 border-t-2 border-blue-900 md:w-20"></div>
                                <div class="text-2xl font-bold text-blue-900 md:text-4xl">Transparency</div>
                            </div>

                            <div class="w-full mt-4">
                                <p class="px-2 text-xl md:text-2xl md:px-32"> Ownership, accidents, mileage, service records. Transparent info aids buyers, revealing issues and ensuring informed decisions.
                                </p>
                            </div>

                        </div>
                        <!-- box end -->

                        <!-- one box . -->
                        <div class="w-full px-4 py-4 md:py-12 md:w-6/12">

                            <div class="flex items-center">
                                <h1 class="text-xl font-extrabold text-orange-600 md:text-2xl">02</h1>
                                <div class="w-16 mx-2 border-t-2 border-blue-900 md:w-20"></div>
                                <div class="text-2xl font-bold text-blue-900 md:text-4xl">Reliability</div>
                            </div>

                            <div class="w-full mt-4">
                                <p class="px-2 text-xl md:text-2xl md:px-32"> Reputable car history service offers reliable, accurate info on vehicle history, aiding buyers in assessing condition and reliability pre-purchase.
                                </p>
                            </div>

                        </div>
                        <!-- box end -->

                    </div>
                    <!-- end row . -->

                    <!-- Repeat the same structure for other rows and boxes -->

                    <!--END NEW ROW -->

                    <!--  NEW ROW -->

                    <!-- one row . -->
                    <div class="flex flex-col md:flex-row">

                        <!-- one box . -->
                        <div class="w-full px-4 py-4 md:py-12 md:w-6/12">

                            <div class="flex items-center">
                                <h1 class="text-xl font-extrabold text-orange-600 md:text-2xl">03</h1>
                                <div class="w-16 mx-2 border-t-2 border-blue-900 md:w-20"></div>
                                <div class="text-2xl font-bold text-blue-900 md:text-4xl">Peace of mind</div>
                            </div>

                            <div class="w-full mt-4">
                                <p class="px-2 text-xl md:text-2xl md:px-32">Car history reports provide peace of mind by revealing crucial information, reducing the risk of hidden problems when buying a car.
                                </p>
                            </div>

                        </div>
                        <!-- box end -->

                        <!-- one box . -->
                        <div class="w-full px-4 py-4 md:py-12 md:w-6/12">

                            <div class="flex items-center">
                                <h1 class="text-xl font-extrabold text-orange-600 md:text-2xl">04</h1>
                                <div class="w-16 mx-2 border-t-2 border-blue-900 md:w-20"></div>
                                <div class="text-2xl font-bold text-blue-900 md:text-4xl">Verification</div>
                            </div>

                            <div class="w-full mt-4">
                                <p class="px-2 text-xl md:text-2xl md:px-32">Reputable car history service offers reliable, accurate info on vehicle history, aiding buyers in assessing condition and reliability pre-purchase.
                                </p>
                            </div>

                        </div>
                        <!-- box end -->

                    </div>
                    <!-- end row . -->

                    <!-- Repeat the same structure for other rows and boxes -->

                    <!--END NEW ROW -->

                    <!--  NEW ROW -->

                    <!-- one row . -->
                    <div class="flex flex-col md:flex-row">

                        <!-- one box . -->
                        <div class="w-full px-4 py-4 md:py-12 md:w-6/12">

                            <div class="flex items-center">
                                <h1 class="text-xl font-extrabold text-orange-600 md:text-2xl">05</h1>
                                <div class="w-16 mx-2 border-t-2 border-blue-900 md:w-20"></div>
                                <div class="text-2xl font-bold text-blue-900 md:text-4xl">Negotiating power</div>
                            </div>

                            <div class="w-full mt-4">
                                <p class="px-2 text-xl md:text-2xl md:px-32">Ownership, accidents, mileage, service records. Transparent info aids buyers, revealing issues and ensuring informed decisions.
                                </p>
                            </div>

                        </div>
                        <!-- box end -->

                        <!-- one box . -->
                        <div class="w-full px-4 py-4 md:py-12 md:w-6/12">

                            <div class="flex items-center">
                                <h1 class="text-xl font-extrabold text-orange-600 md:text-2xl">06</h1>
                                <div class="w-16 mx-2 border-t-2 border-blue-900 md:w-20"></div>
                                <div class="text-2xl font-bold text-blue-900 md:text-4xl">Customer Support</div>
                            </div>

                            <div class="w-full mt-4">
                                <p class="px-2 text-xl md:text-2xl md:px-32">Reputable car history service offers reliable, accurate info on vehicle history, aiding buyers in assessing condition and reliability pre-purchase.
                                </p>
                            </div>

                        </div>
                        <!-- box end -->

                    </div>
                    <!-- end row . -->

                    <!-- Repeat the same structure for other rows and boxes -->

                    <!--END NEW ROW -->
                </div>
            </div>
        </div>

        <div class="bg-[url('../img/homecar2.jpg')] container bg-cover bg-center mx-auto">
            <div class="container px-5 py-10 mx-auto">
                <h1 class="text-4xl font-bold text-center text-blue-900 border-green-800">What our Community is Saying
                </h1>

                <!-- FLICKITY CAROUSEL -->
                <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
                <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

                <div class="main-carousel w-full h-[370px] mx-auto mt-10" data-flickity='{
                    "cellAlign": "left",
                    "wrapAround": true,
                    "pageDots": true,
                    "draggable": true
                }'>
                    @for($i = 1; $i <= 4; $i++) <div class="w-full h-full px-20 carousel-cell md:w-1/3 md:px-20">
                        <div class="w-full p-4 py-10 mx-auto mt-10 bg-black border-4 border-white rounded-3xl">
                            <img src="{{ URL('images/Group_94.png') }}" class="w-24 mx-auto -mt-20 md:w-40">
                            <p class="font-bold text-center text-orange-600 md:text-2xl text-1x1">AdamMilner</p>
                            <p class="text-sm font-bold text-center text-white md:text-md">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                            <img src="{{ URL('images/Group_60.png') }}" class="mx-auto">
                        </div>
                </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Our Trusted Brand  Part-->
    <div class="flex justify-center">
        <div class="flex-col items-center justify-center w-9/12 mt-20 ">
            <h1 class="pb-2 text-4xl font-bold text-center text-blue-900 md:text-4xl">Discover the Wide Range of Popular Models from Japan</h1> <!-- Increase the heading size for larger screens -->
            <p class="pb-16 text-center text-gray-500 md:text-3xl w-12/12 ">A variety of cars are imported from Japan, known for their reliability, quality, and advanced technology. These imports cater to different vehicle categories such as sedans, SUVs, hatchbacks, sports cars, and more, offering a diverse range of options for consumers in international markets. </p>
        </div>
    </div>
    <!-- Our Trusted Brand  Part End-->

    <!-- Vehicle Icon Part-->
    <div class="flex justify-center">
        <div class="flex justify-center ">
            <div class="flex flex-col justify-center w-9/12 md:flex-row mb-14">
                <img src="{{ URL('images/Group 151.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 lg:w-80 md:w-40">
                <img src="{{ URL('images/Group 152.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 lg:w-80 md:w-40">
                <img src="{{ URL('images/Group 153.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 lg:w-80 md:w-40">
                <img src="{{ URL('images/Group 154.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 lg:w-80 md:w-40">
                <img src="{{ URL('images/Group 155.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 lg:w-80 md:w-40">
                <img src="{{ URL('images/Group 156.png') }}" class="mx-auto mb-4 md:mb-0 md:mx-4 lg:w-80 md:w-40">
            </div>
        </div>
    </div>
    <!-- Vehicle Icon Part End-->
</div>
@endsection