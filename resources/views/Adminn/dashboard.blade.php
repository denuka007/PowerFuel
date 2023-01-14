@extends('admin')

@section('content')

<section class="is-title-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <ul>
            <li>Admin</li>
            <li>Dashboard</li>
        </ul>
    </div>
</section>

<section class="is-hero-bar">
    <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
        <h1 class="title">
            Dashboard
        </h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="button light">Log Out</button>
        </form>
    </div>
</section>

<section class="section main-section">
    <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Total Fuel Station
                        </h3>
                        <h1>
                            2
                        </h1>
                    </div>
                    <span class="icon widget-icon text-green-500"><i
                            class="mdi mdi-account-multiple mdi-48px"></i></span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            Remainings Litres
                        </h3>
                        <h1>
                            98000L
                        </h1>
                    </div>
                    <span class="icon widget-icon text-blue-500"><i
                            class="mdi mdi-fuel mdi-48px"></i></span>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <div class="flex items-center justify-between">
                    <div class="widget-label">
                        <h3>
                            New Fuel Requests
                        </h3>
                        <h1>
                            1
                        </h1>
                    </div>
                    <span class="icon widget-icon text-red-500"><i class="mdi mdi-message mdi-48px"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="card has-table">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                Fuel Stations
            </p>
        </header>
        <div class="card-content">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Station ID</th>
                        <th>Company</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>District</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $alls)
                    <tr>
                        <td class="image-cell">
                            <div class="image">
                                <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg"
                                    class="rounded-full">
                            </div>
                        </td>
                        <td data-label="Name">{{$alls->stationid}}</td>
                        <td data-label="Company">{{$alls->company_name}}</td>
                        <td data-label="City">{{$alls->city}}</td>
                        <td data-label="City">{{$alls->address}}</td>
                        <td data-label="City">{{$alls->district}}</td>
                        <td class="actions-cell">
                            <div class="buttons right nowrap">
                                <button class="button small blue --jb-modal" data-target="sample-modal-2"
                                    type="button">
                                    <span class="icon"><i class="mdi mdi-eye"></i></span>
                                </button>
                                <button class="button small red --jb-modal" data-target="sample-modal"
                                    type="button">
                                    <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</section>


@endsection
