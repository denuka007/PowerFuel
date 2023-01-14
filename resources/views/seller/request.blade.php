@extends('seller')

@section('content')

<div class="bg-gray-100 flex-1 p-6 md:mt-16">


    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">

        @foreach ($data as $posts)
        <!-- card -->
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">

                    <!-- top -->
                    <div class="flex flex-row justify-between items-center">
                        <div class="h6 text-red-700 fad fa-store"></div>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5">{{ $posts->status }}</h1>
                        <p>My Order Status</p>
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
                        <div class="h6 text-red-700 fad fa-store"></div>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <h1 class="h5">{{ $posts->paymentstatus }}</h1>
                        <p>Payment Status</p>
                    </div>
                    <!-- end bottom -->

                </div>
            </div>
            <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
        </div>
        <!-- end card -->


        <!-- card -->

        <!-- end card -->


        <!-- card -->

        <!-- end card -->


    </div>
    <!-- End General Report -->

    <!-- strat Analytics -->
    <div class="mt-6 grid grid-cols-2 gap-6 xl:grid-cols-1">

        <!-- update section -->
        <!-- end update section -->

        <!-- carts -->
        <div class="flex flex-col">

            <!-- alert -->
            <div class="alert alert-dark mb-6">
                {{ $posts->note }}
                <a class="ml-2" target="_blank" href="#">Pay Now</a>
            </div>
            <!-- end alert -->
                @endforeach
            <!-- charts -->
            <div class="grid grid-cols-2 gap-6 h-full">





            </div>
            <!-- charts    -->

        </div>
        <!-- end charts -->


    </div>

@endsection
