@extends('seller')

@section('content')


<div class="bg-gray-100 flex-1 p-6 md:mt-16">



    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        @foreach ($post as $posts)
        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">

                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-indigo-700 fad fa-gas-pump"></div>
                        <form action="{{ route('seller.request') }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-white hover:bg-blue-300 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                Request
                            </button>
                        </form>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5">{{ $posts->density }}</h1>
                        <p>Density/Litres</p>
                    </div>
                    <!-- end bottom -->

                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->
        @endforeach


        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">

                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-red-700 fad fa-cart"></div>
                        <button type="submit" class="bg-white hover:bg-blue-300 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            View
                        </button>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5">12</h1>
                        <p>new requests</p>
                    </div>
                    <!-- end bottom -->

                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->


        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">

                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-yellow-600 fad fa-user"></div>
                        <button type="submit" class="bg-white hover:bg-blue-300 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            View
                        </button>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5">40</h1>
                        <p>total Customers</p>
                    </div>
                    <!-- end bottom -->

                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->


        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">

                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-green-700 fad fa-stock"></div>
                        <button type="submit" class="bg-white hover:bg-blue-300 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            View
                        </button>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5">2344 L</h1>
                        <p>Current Stock</p>
                    </div>
                    <!-- end bottom -->

                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->


    </div>

    <!-- start quick Info -->
    <div class="grid grid-cols-3 gap-6 mt-6 xl:grid-cols-1">


        <!-- Start Recent Sales -->
        <div class="card col-span-2 xl:col-span-1">
            <div class="card-header">Recent Sales</div>

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-r"></th>
                        <th class="px-4 py-2 border-r">Customer</th>
                        <th class="px-4 py-2 border-r">Amount of Litres</th>
                        <th class="px-4 py-2">Time and Date</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">

                    <tr>
                        <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i
                                class="fad fa-circle"></i></td>
                        <td class="border border-l-0 px-4 py-2">Kamal</td>
                        <td class="border border-l-0 px-4 py-2">4L</td>
                        <td class="border border-l-0 border-r-0 px-4 py-2">12/12/2022 at 12.22</td>
                    </tr>
                    <tr>
                        <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i
                                class="fad fa-circle"></i></td>
                        <td class="border border-l-0 px-4 py-2">Kamal</td>
                        <td class="border border-l-0 px-4 py-2">4L</td>
                        <td class="border border-l-0 border-r-0 px-4 py-2">12/12/2022 at 12.22</td>
                    </tr>
                    <tr>
                        <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i
                                class="fad fa-circle"></i></td>
                        <td class="border border-l-0 px-4 py-2">Kamal</td>
                        <td class="border border-l-0 px-4 py-2">4L</td>
                        <td class="border border-l-0 border-r-0 px-4 py-2">12/12/2022 at 12.22</td>
                    </tr>
                    <tr>
                        <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i
                                class="fad fa-circle"></i></td>
                        <td class="border border-l-0 px-4 py-2">Kamal</td>
                        <td class="border border-l-0 px-4 py-2">4L</td>
                        <td class="border border-l-0 border-r-0 px-4 py-2">12/12/2022 at 12.22</td>
                    </tr>
                    <tr>
                        <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i
                                class="fad fa-circle"></i></td>
                        <td class="border border-l-0 px-4 py-2">Kamal</td>
                        <td class="border border-l-0 px-4 py-2">4L</td>
                        <td class="border border-l-0 border-r-0 px-4 py-2">12/12/2022 at 12.22</td>
                    </tr>
                    <tr>
                        <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i
                                class="fad fa-circle"></i></td>
                        <td class="border border-l-0 px-4 py-2">Kamal</td>
                        <td class="border border-l-0 px-4 py-2">4L</td>
                        <td class="border border-l-0 border-r-0 px-4 py-2">12/12/2022 at 12.22</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- End Recent Sales -->


    </div>
    <!-- end quick Info -->


</div>


@endsection
