@extends('admin')

@section('content')

<div class="card has-table mt-5">
    <header class="card-header">
        <p class="card-header-title mb-5">
            <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
            Fuel Stations
        </p>
    </header>
    <div class="card-content">
        <table>
            <thead>
                <tr>
                    <th>Station Name</th>
                    <th>Company</th>
                    <th>District</th>
                    <th>City</th>
                    <th>Time</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Name">Rebecca Bauch</td>
                    <td data-label="Company">Daugherty-Daniel</td>
                    <td data-label="City">South Cory</td>
                    <td data-label="City">South Cory</td>
                    <td data-label="Created">
                        <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
                    </td>
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
        </table>
    </div>
</div>

@endsection
