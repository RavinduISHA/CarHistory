@extends('layout.layout')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div class="w-full">


    <!-- BACKGROUND -->
    <div class="bg-[url('../img/Pinna.jpg')] bg-cover bg-center py-4 md:py-1 justify-center h-[32rem]">
        <div class="md:mt-0 mt-20">
            <div class="md:flex flex-col md:justify-start justify-center md:mx-20 md:mt-40 mx-4 md:text-left ">
                <h1 class="text-orange-500 font-bold text-4xl md:text-6xl ">Know Before You Buy</h1>
                <p class="md:text-2xl text-white w-full md:w-6/12 mt-3 md:mt-5">Your go-to resource for comprehensive vehicle history checks, empowering you with essential insights and peace of mind</p>
            </div>
            <!-- TOPIC -->




            <div class="flex flex-col md:flex-row md:mx-20">
                <div class="md:w-5/12 md:mb-40 items-start text-center md:text-left">
                    <div class="md:w-10/12 w-full md:mt-20 mt-10">
                        <label for="search" class="block text-lg mb-2"></label>
                        <div class="relative w-full">
                            <input type="text" id="search" name="search" placeholder="VIN or Chassis Number" class="w-full px-4 py-2 text-black bg-white rounded-md focus:outline-none focus:ring focus:border-blue-300" />
                            <button type="button" class="absolute top-1/2 right-2 transform -translate-y-1/2 focus:outline-none bg-orange-500 text-white px-3 py-1 rounded">
                                Search
                            </button>
                        </div>
                    </div>

                    <div class="flex gap-3 md:gap-5 md:mt-12 md:items-start items-center justify-center sm:justify-start">
                        <img src="{{ asset('images/twitter.png') }}" alt="" class="w-5 h-5">
                        <img src="{{ asset('images/twitter.png') }}" alt="" class="w-5 h-5">
                        <img src="{{ asset('images/youtube.png') }}" alt="" class="w-5 h-5">
                    </div>

                </div>

                <!-- car -->
                <div class="md:w-7/12 w-full">
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

                <div class="w-1/2 px-4 md:px-8 my-16">
                    <h1 class="text-3xl text-blue-900 font-bold 1/3">Why do u need to check Japanese Import Cars History </h1>

                </div>

                <div class="w-1/2 px-4 md:px-8 my-16">
                    <p class="text-md font-bold text-gray-500">Checking the history of Japanese import cars is essential for transparency and peace of mind.
                        It verifies authenticity, reveals maintenance records, uncovers accidents and damages, prevents
                        odometer fraud, identifies finance or lien issues, and addresses recalls or safety-related concerns.</p>

                </div>

            </div>

            <div class="md:flex">
                <div class="md:w-1/2 px-4 md:text-left text-center md:px-8">
                    <img src="{{ URL('images/Group_87.png')}}" class=" md:mx-0 mx-auto">
                    <h1 class="text-md font-bold text-blue-900">Authenticity</h1>
                    <p class="text-md font-bold text-blue-900">Verifying the car's history ensures that it is not stolen or involved in any illegal activities.</p>
                </div>
                <div class="w-0.5 h-13 bg-orange-500"></div>

                <div class="md:w-1/2 px-4 md:text-left text-center md:px-8">
                    <img src="{{ URL('images/Group_88.png')}}" class=" md:mx-0 mx-auto">
                    <h1 class="text-md font-bold text-blue-900">Maintenance and Service</h1>
                    <p class="text-md font-bold text-blue-900">Understanding the vehicle's maintenance and service history helps assess its overall condition and potential maintenance needs.</p>
                </div>
                <div class="w-0.5 h-13 bg-orange-500"></div>

                <div class="md:w-1/2 px-4 md:text-left text-center md:px-8">
                    <img src="{{ URL('images/Group_89.png')}}" class=" md:mx-0 mx-auto">
                    <h1 class="text-md font-bold text-blue-900">Accidents and Damages</h1>
                    <p class="text-md font-bold text-blue-900">History checks reveal any accident records or damages the car may have sustained, allowing you to assess its structural integrity and potential repairs.</p>
                </div>
                <div class="w-0.5 h-13 bg-orange-500"></div>

                <div class="md:w-1/2 px-4 md:text-left text-center md:px-8">
                    <img src="{{ URL('images/Group_90.png')}}" class=" md:mx-0 mx-auto">
                    <h1 class="text-md font-bold text-blue-900">Recall Information</h1>
                    <p class="text-md font-bold text-blue-900">History checks provide information on any recalls or safety-related issues associated with the specific make and model of the imported car.</p>
                </div>

            </div>
        </div>

        <div class=" my-10 relative">
            <div class=" w-full ">
                <img src="{{ URL('images/Group_93.png')}}" class="w-full">
                <div class="absolute inset-0 md:flex flex-col justify-center items-start text-center text-white md:mt-20 md:pl-20">
                    <p class="md:text-4xl font-bold text-orange-600">Preserving the Legacy</p>
                    <p class="md:text-2xl  md:w-3/12 md:text-left ">Uncovering the Past of Japanese Cars
                        through an In-depth Sample Report</p>
                    <button class=" md:text-md font-bold bg-orange-600 rounded-lg px-4 py-2 md:mt-5">GET REPORT</button>
                </div>
            </div>
        </div>



        <div>
            <div class="md:flex w-11/12">
                <div class="md:w-6/12 ">
                    <img src="{{ URL('images/homecar.png')}}" alt="Your Image">
                </div>
                <div class="md:w-6/12">
                    <p class="md:text-4xl text-blue-900 font-bold md:mt-60 md:text-left text-center ">Why We Are the Premier Choice for Car Import History Enthusiasts</p>
                </div>
            </div>


            <!--  NEW ROW -->
            <div class="flex justify-center">
                <div class="border-4 border-blue-950 container items-start justify-center">
                    <!-- one row . -->
                    <div class="flex flex-col md:flex-row mt-20 ">


                        <!-- one box . -->
                        <div class="px-4 py-4 md:py-12 w-full md:w-6/12 ">
                            <div class="flex items-center">
                                <h1 class="text-xl md:text-2xl font-extrabold text-orange-600">01</h1>
                                <div class="border-t-2 border-blue-900 w-16 md:w-20 mx-2"></div>
                                <div class="text-2xl md:text-4xl font-bold text-blue-900">Transparency</div>
                            </div>

                            <div class="w-full mt-4">
                                <p class="text-xl md:text-2xl px-2 md:px-32">
                                    Ownership, accidents, mileage, service records. Transparent info aids buyers, revealing issues and ensuring informed decisions.
                                </p>
                            </div>

                        </div>
                        <!-- box end -->

                        <!-- one box . -->
                        <div class="px-4 py-4 md:py-12 w-full md:w-6/12">

                            <div class="flex items-center">
                                <h1 class="text-xl md:text-2xl font-extrabold text-orange-600">02</h1>
                                <div class="border-t-2 border-blue-900 w-16 md:w-20 mx-2"></div>
                                <div class="text-2xl md:text-4xl font-bold text-blue-900">Reliability</div>
                            </div>

                            <div class="w-full mt-4">
                                <p class="text-xl md:text-2xl px-2 md:px-32">
                                    Reputable car history service offers reliable, accurate info on vehicle history, aiding buyers in assessing condition and reliability pre-purchase.
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
                        <div class="px-4 py-4 md:py-12 w-full md:w-6/12">

                            <div class="flex items-center">
                                <h1 class="text-xl md:text-2xl font-extrabold text-orange-600">03</h1>
                                <div class="border-t-2 border-blue-900 w-16 md:w-20 mx-2"></div>
                                <div class="text-2xl md:text-4xl font-bold text-blue-900">Peace of mind</div>
                            </div>

                            <div class="w-full mt-4">
                                <p class="text-xl md:text-2xl px-2 md:px-32">
                                    Car history reports provide peace of mind by revealing crucial information, reducing the risk of hidden problems when buying a car.
                                </p>
                            </div>

                        </div>
                        <!-- box end -->

                        <!-- one box . -->
                        <div class="px-4 py-4 md:py-12 w-full md:w-6/12">

                            <div class="flex items-center">
                                <h1 class="text-xl md:text-2xl font-extrabold text-orange-600">04</h1>
                                <div class="border-t-2 border-blue-900 w-16 md:w-20 mx-2"></div>
                                <div class="text-2xl md:text-4xl font-bold text-blue-900">Verification</div>
                            </div>

                            <div class="w-full mt-4">
                                <p class="text-xl md:text-2xl px-2 md:px-32">
                                    Reputable car history service offers reliable, accurate info on vehicle history, aiding buyers in assessing condition and reliability pre-purchase.
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
                        <div class="px-4 py-4 md:py-12 w-full md:w-6/12">

                            <div class="flex items-center">
                                <h1 class="text-xl md:text-2xl font-extrabold text-orange-600">05</h1>
                                <div class="border-t-2 border-blue-900 w-16 md:w-20 mx-2"></div>
                                <div class="text-2xl md:text-4xl font-bold text-blue-900">Negotiating power</div>
                            </div>

                            <div class="w-full mt-4">
                                <p class="text-xl md:text-2xl px-2 md:px-32">
                                    Ownership, accidents, mileage, service records. Transparent info aids buyers, revealing issues and ensuring informed decisions.
                                </p>
                            </div>

                        </div>
                        <!-- box end -->

                        <!-- one box . -->
                        <div class="px-4 py-4 md:py-12 w-full md:w-6/12">

                            <div class="flex items-center">
                                <h1 class="text-xl md:text-2xl font-extrabold text-orange-600">06</h1>
                                <div class="border-t-2 border-blue-900 w-16 md:w-20 mx-2"></div>
                                <div class="text-2xl md:text-4xl font-bold text-blue-900">Customer Support</div>
                            </div>

                            <div class="w-full mt-4">
                                <p class="text-xl md:text-2xl px-2 md:px-32">
                                    Reputable car history service offers reliable, accurate info on vehicle history, aiding buyers in assessing condition and reliability pre-purchase.
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

        <div class=" flex justify-center w-full ">
            <div class="bg-[url('../img/homecar2.jpg')] w-full md:mx-44 bg-cover bg-center py-40 justify center">



                <!----->
                <div class="container mx-auto ">
                    <!-- Assuming the container has a fixed height for the percentage height to work -->
                    <div>
                        <h1 class="text-blue-900 font-bold text-4xl text-center border-green-800">What our Community is Saying</h1>
                    </div>


                    <!-- CARASOUL -->


                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">


                            <!-- 1 row with 3 images start -->

                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out flex gap-2" data-carousel-item>
                                <!-- Image 1 -->
                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_94.png') }}" class="z-20 md:w-40 w-24 mx-auto -mt-12">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 1 end -->

                                <!-- Image 2 -->
                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_95.png') }}" class="z-20 md:w-40 w-24 mx-auto  -mt-12">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 2 end -->

                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_96.png') }}" class="z-20 md:w-40 w-24 mx-auto  -mt-12">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 2 end -->



                            </div>

                            <!-- 1 row with 3 images end -->


                            <div class="hidden duration-700 ease-in-out flex gap-2" data-carousel-item>
                                <!-- Image 1 -->
                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_94.png') }}" class="z-20 md:w-40 w-24 mx-auto  -mt-12">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 1 end -->

                                <!-- Image 2 -->
                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_95.png') }}" class="z-20 md:w-40 w-24 mx-auto  -mt-12">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 2 end -->

                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_96.png') }}" class="z-20 md:w-40 w-24 mx-auto  -mt-12">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 2 end -->



                            </div>

                            <!-- 1 row with 3 images end -->


                            <div class="hidden duration-700 ease-in-out flex gap-2" data-carousel-item>
                                <!-- Image 1 -->
                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_94.png') }}" class="z-20 md:w-40 w-24 mx-auto  -mt-12">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 1 end -->

                                <!-- Image 2 -->
                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_95.png') }}" class="z-20 md:w-40 w-24 mx-auto  -mt-12">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 2 end -->

                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_95.png') }}" class="z-20 md:w-40 w-24 mx-auto  -mt-12">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 2 end -->



                            </div>

                            <!-- 1 row with 3 images end -->

                            <div class="hidden duration-700 ease-in-out flex gap-2" data-carousel-item>
                                <!-- Image 1 -->
                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_96.png') }}" class="z-20 md:w-40 w-24 mx-auto  -mt-12">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 1 end -->

                                <!-- Image 2 -->
                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_94.png') }}" class="z-20 md:w-40 w-24 mx-auto  -mt-12">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 2 end -->

                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_95.png') }}" class="z-20 md:w-40 w-24 mx-auto  -mt-12 ">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 2 end -->



                            </div>



                            <div class="hidden duration-700 ease-in-out flex gap-2" data-carousel-item>
                                <!-- Image 1 -->
                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_96.png') }}" class="z-20 md:w-40 w-24 mx-auto  -mt-12">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 1 end -->

                                <!-- Image 2 -->
                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_94.png') }}" class="z-20 md:w-40 w-24 mx-auto  -mt-12">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 2 end -->

                                <div class="border-4 border-white rounded-lg p-4 bg-black w-4/12 mt-10">

                                    <div class="flex justify-center items-center ">
                                        <img src="{{ URL('images/Group_95.png') }}" class="z-20 md:w-40 w-24 mx-auto  -mt-12">
                                    </div>
                                    <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                    <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                    <div class="flex justify-center items-center">
                                        <img src="{{ URL('images/Group_60.png') }}" class="">
                                    </div>
                                </div>

                                <!-- Image 2 end -->






                            </div>


                        </div>

                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-orange-500 dark:bg-orange-500 group-hover:bg-orange-00 dark:group-hover:bg-orange-700 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-orange-500 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-orange-500 dark:bg-orange-500 group-hover:bg-orange-00 dark:group-hover:bg-orange-700 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-orange-500 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>



                    <!-- CARASoul END -->


                </div>
            </div>
        </div>

        <!-- Our Trusted Brand  Part-->
        <div class="flex justify-center">
            <div class=" w-9/12 flex-col  items-center justify-center mt-20 ">
                <h1 class="text-blue-900 font-bold text-4xl md:text-4xl text-center pb-2">Discover the Wide Range of Popular Models from Japan</h1> <!-- Increase the heading size for larger screens -->
                <p class="text-gray-500 md:text-3xl pb-16 text-center w-12/12 ">A variety of cars are imported from Japan, known for their reliability, quality, and advanced technology. These imports cater to different vehicle categories such as sedans, SUVs, hatchbacks, sports cars, and more, offering a diverse range of options for consumers in international markets. </p>
            </div>
        </div>
        <!-- Our Trusted Brand  Part End-->

        <!-- Vehicle Icon Part-->
        <div class="flex justify-center">
            <div class="flex justify-center ">
                <div class="flex flex-col md:flex-row  mb-14 w-9/12">
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