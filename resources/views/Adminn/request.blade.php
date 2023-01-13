@extends('admin')

@section('content')

<div class="card has-table mt-5">
    <header class="card-header">
        <p class="card-header-title mb-5">
            <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
            Fuel Requests
        </p>
    </header>
    <div class="card-content">
        <table>
            <thead>
                <tr>
                    <th>Station ID</th>
                    <th>Company</th>
                    <th>District</th>
                    <th>City</th>
                    <th>Time</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $req)
                <tr>
                    <td data-label="Station Name">{{ $req->fid }}</td>
                    <td data-label="Company">{{ $req->company }}</td>
                    <td data-label="District">{{ $req->district }}</td>
                    <td data-label="City">{{ $req->city }}</td>
                    <td data-label="Time">
                        <small class="text-gray-500">{{date('Y-m-d', strtotime($req->created_at))}}</small>
                    </td>
                    <td class="actions-cell">
                        <div class="buttons right nowrap">
                             <a href="{{ route('admin.request.view' , $req->id) }}"
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full mr-2">View</button>
                             </a>
                             <a href="{{ route('admin.request.accept' , $req->id) }}"
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2">Accept</button>
                        </a>
                        <a href="{{ route('admin.request.delete' , $req->id) }}"
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Cancel</button>
                        </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
