@extends('layout.layout')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<img src="{{ asset('images/aboutusbanner.png') }}" alt="" class="h-64 object-cover mx-auto w-full">
<div class="w-full">
    <div class="container mx-auto">

        <div class="flex justify-center ">

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

    <div class=" flex justify-center w-full">
        <div class="bg-[url('../img/homecar2.jpg')] w-4/3 bg-cover bg-center py-40 justify center">
            <!----->
            <div class="container mx-auto">
                <!-- Assuming the container has a fixed height for the percentage height to work -->
                <div>
                    <h1 class="text-blue-900 font-bold text-4xl text-center border-green-800">What our Community is Saying</h1>

                    <!--Community Image 1 -->
                    <div class="flex  justify-between ">
                        <div class="md:flex flex-row container gap-20">
                            <!-- Image 1 -->
                            <div class="border-4 border-white rounded-lg p-4 bg-black w-full mt-10">

                                <div class="flex justify-center items-center ">
                                    <img src="{{ URL('images/Group_94.png') }}" class="z-20 md:w-40 w-24 mx-auto">
                                </div>
                                <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                <div class="flex justify-center items-center">
                                    <img src="{{ URL('images/Group_60.png') }}" class="">
                                </div>
                            </div>
                            <!-- Image 1 end -->


                            <!-- Image 1 -->

                            <div class="border-4 border-b-white rounded-lg p-4 bg-black w-full mt-10">

                                <div class="flex justify-center items-center">
                                    <img src="{{ URL('images/Group_95.png') }}" class="z-20 md:w-40 w-24 mx-auto">
                                </div>
                                <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                <div class="flex justify-center items-center">
                                    <img src="{{ URL('images/Group_60.png') }}" class="">
                                </div>
                            </div>
                            <!-- Image 1 end -->



                            <!-- Image 3 -->

                            <div class="border-4 border-b-white rounded-lg p-4 bg-black w-full mt-10">

                                <div class="flex justify-center items-center ">
                                    <img src="{{ URL('images/Group_96.png') }}" class="z-20 md:w-40 w-24 mx-auto">
                                </div>
                                <p class="text-orange-600 font-bold md:text-2xl text-1x1  text-center">Adam Milner</p>
                                <p class="text-white font-bold md:text-md text-sm text-center">LMN Services provided a flawless, professional experience. Their courteous team guided me seamlessly. Highly recommended!</p>
                                <div class="flex justify-center items-center">
                                    <img src="{{ URL('images/Group_60.png') }}" class="">
                                </div>
                            </div>
                            <!-- Image 3 end -->




                        </div>
                    </div>
                </div>
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