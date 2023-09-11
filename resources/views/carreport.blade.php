@extends('layout.layout')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div class="relative w-full">
    <img src="{{ asset('images/Siyama.jpg') }}" alt="" class="object-cover w-full h-64 mx-auto">
    <div class="absolute inset-0 flex flex-col items-center justify-center">
        <h1 class="font-bold text-orange-500 md:text-6xl">Car Report</h1>
        <p class="text-white">Home > Car Report</p>


    </div>

</div>
<div class="container mx-auto mt-4">

    <div class="px-10 py-10 bg-gray-200 border-2 border-blue-800 rounded-lg">
        <div class="flex flex-col md:flex-row">
            <div class="px-5 md:w-6/12">
                <div>
                    <h1 class="w-full mb-2 md:w-4/12 md:mb-0 text-blue-950">CHECK CAR HISTORY NOW! Use a FREE vehicle search</h1>
                </div>
                <h1 class="w-full mt-5 text-black md:w-10/12">Uncover the complete background of any vehicle instantly. Access valuable information on accidents, ownership, title status, and more. Make informed decisions with confidence and peace of mind.</h1>
            </div>
            <div class="w-full md:mt-5 md:w-6/12">
                <div class="container mx-auto">
                    <div class="mt-2 mb-6 md:mt-0">
                        <input type="text" id="cheeseNumber" class="w-full px-3 py-2 text-black border border-white rounded-lg placeholder-blue-950" placeholder="Enter Chassis Number">
                    </div>
                    <div>
                        <button class="w-full px-6 py-4 font-bold text-white border rounded-lg bg-blue-950">Find your Vehicle</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Table Row-->


    <div class="justify-between w-full gap-10 mt-5 md:flex">


        <div class="w-full border-2 rounded-lg ">
            <div class="py-5 bg-blue-950">
                <h1 class="text-3xl text-center text-white">Vehicle Information</h1>
            </div>
            <div>
                <table class="w-full ">
                    <tr class="even:bg-gray-300 odd:bg-white ">
                        <td class="w-1/2 text-start md:px-4 md:py-4">Chassis Number</td>
                        <td class="w-1/2 text-start">: KJ10-25LKU785</td>
                    </tr>
                    <tr class="even:bg-gray-300 odd:bg-white">
                        <td class="w-1/2 text-start md:px-4 md:py-4">Manufacture Date</td>
                        <td class="w-1/2 text-start">: 2009-06</td>
                    </tr>
                    <tr class="even:bg-gray-300 odd:bg-white">
                        <td class="w-1/2 text-start md:px-4 md:py-4">Make</td>
                        <td class="w-1/2 text-start">: Toyota</td>
                    </tr>
                    <tr class="even:bg-gray-300 odd:bg-white">
                        <td class="w-1/2 text-start md:px-4 md:py-4">Model</td>
                        <td class="w-1/2 text-start">: Prius</td>
                    </tr>
                    <tr class="even:bg-gray-300 odd:bg-white">
                        <td class="w-1/2 text-start md:px-4 md:py-4">Body</td>
                        <td class="w-1/2 text-start">: DBA-KJ10</td>
                    </tr>
                    <tr class="even:bg-gray-300 odd:bg-white">
                        <td class="w-1/2 text-start md:px-4 md:py-4">Grade</td>
                        <td class="w-1/2 text-start">: 20G</td>
                    </tr>
                    <tr class="even:bg-gray-300 odd:bg-white">
                        <td class="w-1/2 text-start md:px-4 md:py-4">Engine</td>
                        <td class="w-1/2 text-start">: MR20</td>
                    </tr>
                    <tr class="even:bg-gray-300 odd:bg-white">
                        <td class="w-1/2 text-start md:px-4 md:py-4">Drive</td>
                        <td class="w-1/2 text-start">: 2WD</td>
                    </tr>
                    <tr class="even:bg-gray-300 odd:bg-white">
                        <td class="w-1/2 text-start md:px-4 md:py-4">Transmission</td>
                        <td class="w-1/2 text-start">: Auto</td>
                    </tr>

                </table>
            </div>
        </div>


        <div class="w-full border-2 rounded-lg ">
            <div class="py-5 bg-blue-950">
                <h1 class="text-3xl text-center text-white">Vehicle History</h1>
            </div>
            <div class="">
                <table class="w-full px-5 ">
                    <tr class="even:bg-gray-300 odd:bg-white">
                        <td class="w-1/3 text-start md:py-4 md:px-4">
                            <span class="inline-block mr-2">
                                <img src="images/car-key.png" class="w-5 h-5">
                            </span>Title information
                        </td>
                        <td class="w-1/3 text-start">Deregistered to Export</td>
                        <td class="flex justify-end w-full text-start md:px-4 md:py-4">
                            <img src="images/checked.png" class="w-5 h-5 ">
                        </td>
                    </tr>
                    <tr class="even:bg-gray-300 odd:bg-white">
                        <td class="w-1/3 text-start md:py-4 md:px-4">
                            <span class="inline-block mr-2">
                                <img src="images/car-repair.png" class="w-5 h-5">
                            </span>Title information
                        </td>
                        <td class="w-1/3 text-start">No Problem</td>
                        <td class="flex justify-end w-full text-start md:px-4 md:py-4">
                            <img src="images/cancel.png" class="w-5 h-5">
                        </td>
                    </tr>
                    <tr class="even:bg-gray-300 odd:bg-white">
                        <td class="w-1/3 text-start md:px-4 md:py-4">
                            <span class="inline-block mr-2">
                                <img src="images/speedomete.png" class="w-5 h-5">
                            </span>Title information
                        </td>
                        <td class="w-1/3 text-start">Deregistered to Export</td>
                        <td class="flex justify-end w-full text-start md:px-4 md:py-4">
                            <img src="images/checked.png" class="w-5 h-5">
                        </td>
                    </tr>
                    <tr class="even:bg-gray-300 odd:bg-white">
                        <td class="w-1/3 text-start md:px-4 md:py-4">
                            <span class="inline-block mr-2">
                                <img src="images/settings.png" class="w-5 h-5">
                            </span>Title information
                        </td>
                        <td class="w-1/3 text-start">No Problem</td>
                        <td class="flex justify-end w-full text-start md:px-4 md:py-4">
                            <img src="images/cancel.png" class="w-5 h-5">
                        </td>
                    </tr>
                    <tr class="even:bg-gray-300 odd:bg-white">
                        <td class="w-1/3 text-start md:px-4 md:py-4">
                            <span class="inline-block mr-2">
                                <img src="images/shiel.png" class="w-5 h-5">
                            </span>Title information
                        </td>
                        <td class="w-1/3 text-start">Deregistered to Export</td>
                        <td class="flex justify-end w-full text-start md:px-4 md:py-4">
                            <img src="images/checked.png" class="w-5 h-5">
                        </td>
                    </tr>
                    <tr class="even:bg-gray-300 odd:bg-white">
                        <td class="w-1/3 text-start md:px-4 md:py-4">
                            <span class="inline-block mr-2">
                                <img src="images/exclamation-mark.png" class="w-5 h-5">
                            </span>Title information
                        </td>
                        <td class="w-1/3 text-start">No Problem</td>
                        <td class="flex justify-end w-full text-start md:px-4 md:py-4">
                            <img src="images/cancel.png" class="w-5 h-5">
                        </td>
                    </tr>



                </table>
                <div class="flex justify-center w-full mt-5 md:mt-20">
                    <button class="items-center justify-center w-full p-5 text-3xl font-semibold text-white rounded-lg border-3 bg-blue-950">Download Report</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex items-center justify-center ">
    <div class="container items-center justify-center w-full px-10 py-10 mt-10 bg-gray-200 border-2 border-blue-800 rounded-lg">

        <div class="flex ">

            <div class="w-7/12">
                <div>
                    <h1 class="text-4xl text-blue-950">This vehicle does not qualify for Buyback Guarantee</h1>
                </div>
                <div class="flex md:mt-5">
                    <img src="{{ URL('images/cross.png')}}" alt="Your Image" class="w-10 h-10 mt-3 md:w-20 md:h-20 md:mt-0">
                    <h1 class="w-full mt-3 ml-2 md:w-6/12">Unfortunately, this vehicle does not qualify for our
                        Buyback Guarantee Program.</h1>
                </div>
            </div>

            <div class="w-5/12 text-center">
                <div>
                    <h1 class="text-2xl text-blue-950">Average Market Price</h1>
                </div>
                <div class="flex justify-center md:mt-5">
                    <img src="{{ URL('images/dollar-symbol.png')}}" alt="Your Image" class="w-10 h-10 mt-3 md:w-20 md:h-20 md:mt-0">
                    <h1 class="mt-3 ml-2 text-4xl text-gray-600 ">95,000</h1>
                </div>
            </div>



        </div>
        <div>
            <h1 class="mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquam euismod enim, a blandit neque tincidunt vitae. In faucibus ante eget risus sollicitudin, at ullamcorper justo semper. Suspendisse potenti. Sed aliquam nunc vitae mauris semper, non varius erat volutpat. Nulla facilisi. Nunc rhoncus eleifend justo vitae tristique. Vestibulum nec mauris elit. Praesent nec tristique mauris.
                Sed posuere enim eget purus ullamcorper lacinia. Integer efficitur massa et eleifend feugiat. </h1>
        </div>
    </div>

</div>


<!-- According --->
<div class="container mx-auto mt-5">
    <div id="accordion-collapse" data-accordion="collapse">

        <!-- ACCORDION 2-->
        <h2 id="accordion-collapse-heading-1">
            <button type="button" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1" class="flex items-center justify-between w-full p-5 mt-3 font-medium text-left text-white bg-blue-900 rounded-t-xl hover:bg-blue-950 focus:bg-blue-950">
                <span>ACCIDENT / REPAIR HISTORY</span>


                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>

                <!-- <svg data-accordion-icon class="w-3 h-3 mb-2 rotate-0 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 2">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h8M5 -2v10" />
                </svg> -->
            </button>
        </h2>
        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
            <div class="border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <table class="w-full">
                    <tr class="bg-white border-b-8 border-white ">
                        <td class="font-semibold md:px-5">Problem type</td>
                        <td class="font-semibold">Reported</td>
                        <td class="font-semibold">Date Reported</td>
                        <td class="font-semibold">Data Source</td>
                        <td class="font-semibold">Details</td>
                        <td class="font-semibold">Airbag</td>
                    </tr>
                    <tr class="border-b-8 border-white bg-slate-200">
                        <td class="px-5">-----</td>
                        <td>
                            <div class="flex">
                                <div class="flex items-center">
                                    <img src="{{ URL('images/cancel.png')}}" class="w-5 h-5 mt-4 md:mt-0" alt="" srcset="">
                                </div>
                                <h1>&nbsp Rejected</h1>
                            </div>
                        </td>
                        <td>2023-02-15</td>
                        <td>USS Tokyo</td>
                        <td>Repaired</td>
                        <td class="pl-5">OK</td>
                    </tr>
                    <tr class="border-b-8 border-white bg-slate-200">
                        <td class="md:px-5">Malfuction</td>
                        <td>
                            <div class="flex">
                                <div class="flex items-center">
                                    <!-- <img src="" class="w-5 h-5" alt="" srcset=""> -->
                                </div>
                                <h1 class="pl-5">-------</h1>
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="pl-5"></td>
                    </tr>
                    <tr class="border-b-8 border-white bg-slate-200">
                        <td class="md:px-5">Malfuction</td>
                        <td>
                            <div class="flex">
                                <div class="flex items-center">
                                    <img src="{{ URL('images/checked.png')}}" class="w-5 h-5" alt="" srcset="">
                                </div>
                                <h1>&nbsp Not Reported</h1>
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="pl-5"></td>
                    </tr>
                    <tr class="border-b-8 border-white bg-slate-200">
                        <td class="md:px-5">Malfuction</td>
                        <td>
                            <div class="flex">
                                <div class="flex items-center">
                                    <img src="{{ URL('images/checked.png')}}" class="w-5 h-5" alt="" srcset="">
                                </div>
                                <h1>&nbsp Not Reported</h1>
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="pl-5"></td>
                    </tr>
                    <tr class="border-b-8 border-white bg-slate-200">
                        <td class="md:px-5">Malfuction</td>
                        <td>
                            <div class="flex">
                                <div class="flex items-center">
                                    <img src="{{ URL('images/checked.png')}}" class="w-5 h-5" alt="" srcset="">
                                </div>
                                <h1>&nbsp Not Reported</h1>
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="pl-5"></td>
                    </tr>
                    <tr class="border-b-8 border-white bg-slate-200">
                        <td class="md:px-5">Malfuction</td>
                        <td>
                            <div class="flex">
                                <div class="flex items-center">
                                    <img src="{{ URL('images/checked.png')}}" class="w-5 h-5" alt="" srcset="">
                                </div>
                                <h1>&nbsp Not Reported</h1>
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="pl-5">OK</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- ACCORDION 2-->
        <h2 id="accordion-collapse-heading-2">
            <button type="button" data-accordion-target="#accordion-collapse-body-2" aria-expanded="true" aria-controls="accordion-collapse-body-2" class="flex items-center justify-between w-full p-5 mt-3 font-medium text-left text-white bg-blue-900 rounded-t-xl hover:bg-blue-950 focus:bg-blue-950">
                <span>ODO METER READING HISTORY</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-1">
            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                ODO METER READING HISTORY
            </div>
        </div>


        <!-- ACCORDION 3-->
        <h2 id="accordion-collapse-heading-3">
            <button type="button" data-accordion-target="#accordion-collapse-body-3" aria-expanded="true" aria-controls="accordion-collapse-body-3" class="flex items-center justify-between w-full p-5 mt-3 font-medium text-left text-white bg-blue-900 rounded-t-xl hover:bg-blue-950 focus:bg-blue-950">
                <span>USE HISOTORY</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-1">
            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                USE HISOTORY
            </div>
        </div>


        <!-- ACCORDION 4-->
        <h2 id="accordion-collapse-heading-4">
            <button type="button" data-accordion-target="#accordion-collapse-body-4" aria-expanded="true" aria-controls="accordion-collapse-body-4" class="flex items-center justify-between w-full p-5 mt-3 font-medium text-left text-white bg-blue-900 rounded-t-xl hover:bg-blue-950 focus:bg-blue-950">
                <span>ACCIDENT / REPAIR HISTORY</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-1">

            <div class="border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <table class="w-full">
                    <tr class="bg-white border-b-8 border-white">
                        <td class="pl-5 font-semibold">Event Date</td>
                        <td class="pl-5 font-semibold">Location</td>
                        <td class="pl-5 font-semibold">ODO Reading (km)</td>
                        <td class="pl-5 font-semibold">Data Source</td>
                        <td class="pl-5 font-semibold">Details</td>
                    </tr>
                    <tr class="border-b-8 border-white bg-slate-200">
                        <td class="pl-5">2009-06</td>
                        <td></td>
                        <td></td>
                        <td class="pl-5">Nissan</td>
                        <td class="pl-5">Manufactured</td>
                    </tr>
                    <tr class="border-b-8 border-white bg-slate-200">
                        <td class="pl-5">2009-06</td>
                        <td></td>
                        <td></td>
                        <td class="pl-5">MLIT</td>
                        <td class="pl-5">First Registration</td>
                    </tr>
                    <tr class="border-b-8 border-white bg-slate-200">
                        <td class="pl-5">2012-06-08</td>
                        <td></td>
                        <td class="pl-5">22900</td>
                        <td class="pl-5">MLIT</td>
                        <td class="pl-5">First Registration</td>
                    </tr>
                    <tr class="border-b-8 border-white bg-slate-200">
                        <td class="pl-5">2012-06-08</td>
                        <td></td>
                        <td class="pl-5">35100</td>
                        <td class="pl-5">MLIT</td>
                        <td class="pl-5">First Registration</td>
                    </tr>
                    <tr class="border-b-8 border-white bg-slate-200">
                        <td class="pl-5">2014-07-09</td>
                        <td class="pl-5">Tama</td>
                        <td></td>
                        <td class="pl-5">MLIT</td>
                        <td class="pl-5">First Registration</td>
                    </tr>
                    <tr class="border-b-8 border-white bg-slate-200">
                        <td class="pl-5">2012-06-08</td>
                        <td class="pl-5">China</td>
                        <td class="pl-5">44100</td>
                        <td class="pl-5">USS Tokyo</td>
                        <td class="pl-5">Autioned</td>
                    </tr>
                </table>
            </div>


        </div>



        <!-- ACCORDION 5-->
        <h2 id="accordion-collapse-heading-5">
            <button type="button" data-accordion-target="#accordion-collapse-body-5" aria-expanded="true" aria-controls="accordion-collapse-body-5" class="flex items-center justify-between w-full p-5 mt-3 font-medium text-left text-white bg-blue-900 rounded-t-xl hover:bg-blue-950 focus:bg-blue-950">
                <span>MANUFACTURER RECALL HISTORY</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-1">
            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                MANUFACTURER RECALL HISTORY
            </div>
        </div>

        <!-- ACCORDION 6-->
        <h2 id="accordion-collapse-heading-6">
            <button type="button" data-accordion-target="#accordion-collapse-body-6" aria-expanded="true" aria-controls="accordion-collapse-body-6" class="flex items-center justify-between w-full p-5 mt-3 font-medium text-left text-white bg-blue-900 rounded-t-xl hover:bg-blue-950 focus:bg-blue-950">
                <span>VEHICLE ASSESSMENT</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>

        <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-1">

            <div class="mt-10">
                <h1 class="text-2xl font-bold text-center text-blue-950 ">
                    Overall Collision Safety Ratings
                </h1>
            </div>


            <div class="flex flex-col justify-center w-full p-4 md:flex-row md:p-8 md:mt-20">

                <div class="w-full mb-8 md:w-6/12 md:mb-0">
                    <div class="text-lg font-semibold text-center">
                        Driver's Seat
                    </div>
                    <div class="mt-5">
                        <table class="w-full border border-white rounded">
                            <tr class="bg-white">
                                <th class="">Points</th>
                                <th class="">Evaluation</th>
                                <th class="p-2 ">Goal Average</th>
                            </tr>


                            <tr class="bg-gray-300 ">
                                <td class="text-center">32.04</td>
                                <td>
                                    <div class="flex justify-center">
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                    </div>
                                </td>

                                <td class="relative justify-center p-2 text-center">
                                    89%
                                    <div class="absolute bottom-0 right-0 w-px h-40 bg-gray-600 border-2 md:-mx-1"></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="w-full md:w-6/12">
                    <div class="text-lg font-semibold text-center">
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
                                <td class="p-2 text-center">21.61</td>
                                <td class="p-2">
                                    <div class="flex justify-center">
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                        <span class="text-gray-500">&#9733;</span>
                                    </div>
                                </td>
                                <td class="p-2 text-center">90%</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div class="mt-5 text-center text-gray-500">

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Fusce aliquam euismod enim, a blandit neque tincidunt vitae. In faucibus ante eget risus sollicitudin,
                    at ullamcorper justo semper. Suspendisse potenti. Sed aliquam nunc vitae mauris semper, non varius erat volutpat.
                    Nulla facilisi. Nunc rhoncus eleifend justo vitae tristique. Vestibulum nec mauris elit. Praesent nec tristique mauris. Sed posuere enim eget purus ullamcorper lacinia. Integer efficitur massa et eleifend feugiat.
                </p>
            </div>

            <div class="mt-5 text-2xl font-bold text-center text-blue-950">Breaking Performance Tests</div>
            <div class="justify-center gap-40 mt-5 md:flex">


                <div class="flex justify-center">
                    <div class="mx-auto">
                        <div class="grid w-40 h-40 border-8 rounded-full border-blue-950 place-items-center">
                            <div class="text-lg text-gray-500">41.6 m</div>
                        </div>
                        <p class="mt-2 text-center">Dry Road</p>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="mx-auto">
                        <div class="grid w-40 h-40 border-8 rounded-full border-blue-950 place-items-center">
                            <div class="text-gray-500">41.8 m</div>
                        </div>
                        <p class="text-center">Wet Road</p>
                    </div>
                </div>

            </div>

        </div>



        <!-- ACCORDION 7-->
        <h2 id="accordion-collapse-heading-7">
            <button type="button" data-accordion-target="#accordion-collapse-body-7" aria-expanded="true" aria-controls="accordion-collapse-body-7" class="flex items-center justify-between w-full p-5 mt-3 mb-5 font-medium text-left text-white bg-blue-900 rounded-t-xl hover:bg-blue-950 focus:bg-blue-950">
                <span>VEHICLE SPECIFICATION</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-1">
            <div class="flex flex-col justify-center mt-10 space-y-2">
                <h1 class="text-center font-bold text-2xl text-[#29335C]">Auction Sheet</h1>
                <div class="mt-14">
                    <img src="{{ URL('images/Rectangle 176.png')}}" alt="" class="w-2/6 mx-auto" srcset="">
                </div>
            </div>
            <h1 class="text-center font-bold text-2xl text-[#29335C] mt-10">Photos</h1>
            <div class="flex items-center justify-center mt-14">
                <div class="grid grid-cols-2 gap-4 md:grid-cols-2">
                    <div class="grid gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ URL('images/1.png')}}" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="{{ URL('images/4-Best-Used-Toyota-Prius-Models-Under-₦5-Million.png')}}" alt="">
                        </div>
                    </div>
                    <div class="grid gap-4 mb-5">
                        <div>
                            <img class="h-auto max-w-full mb-5 rounded-lg" src="{{ URL('images/2.png')}}" alt="">
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