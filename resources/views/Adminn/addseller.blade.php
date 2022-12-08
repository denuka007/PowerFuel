@extends('admin')

@section('content')

    <div class="mt-10 sm:mt-0 stationform">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form action="{{ route('admin.addseller.fuel') }}" method="POST">
                    @csrf
                    <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="company_name" class="block text-sm font-medium text-gray-700">Company Name</label>
                                    <input type="text" name="company_name" id="company name" placeholder="Ex: John Pvt"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm forminput">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="regid" class="block text-sm font-medium text-gray-700">Registration ID</label>
                                    <input type="text" name="regid" id="regid" placeholder="Enter ID"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="manager_name" class="block text-sm font-medium text-gray-700">Manager Name</label>
                                    <input type="text" name="manager_name" id="manager name" placeholder="Ex: John"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="district" class="block text-sm font-medium text-gray-700">District</label>
                                    <select id="district" name="district"
                                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option value="galle">Galle</option>
                                        <option value="mathara">Mathara</option>
                                        <option value="hambanthota">Hambanthota</option>
                                        <option value="colombo">Colombo</option>
                                        <option value="jaffna">Jaffna</option>
                                        <option value="gampaha">Gampaha</option>
                                        <option value="kalutara">Kalutara</option>
                                        <option value="kandy">Kandy</option>
                                        <option value="matale">Matale</option>
                                        <option value="nuwara Eliya">Nuwara Eliya</option>
                                        <option value="kilinochchi">Kilinochchi</option>
                                        <option value="Mannar">Mannar</option>
                                        <option value="vavuniya">Vavuniya</option>
                                        <option value="mullaitivu">Mullaitivu</option>
                                        <option value="batticaloa">Batticaloa</option>
                                        <option value="ampara">Ampara</option>
                                        <option value="trincomalee">Trincomalee</option>
                                        <option value="kurunegala">Kurunegala</option>
                                        <option value="puttalam">Puttalam</option>
                                        <option value="anuradhapura">Anuradhapura</option>
                                        <option value="polonnaruwa">Polonnaruwa</option>
                                        <option value="badulla">Badulla</option>
                                        <option value="moneragala">Moneragala</option>
                                        <option value="ratnapura">Ratnapura</option>
                                        <option value="kegalle">Kegalle</option>

                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                        address</label>
                                    <input type="text" name="email" id="email" placeholder="Enter Email"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6">
                                    <label for="street-address" class="block text-sm font-medium text-gray-700">Address</label>
                                    <input type="text" name="address" id="address"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="contact" class="block text-sm font-medium text-gray-700">Contact Number</label>
                                    <input type="text" name="contact" id="contact"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="region" class="block text-sm font-medium text-gray-700">Password</label>
                                    <input type="password" name="password" id="password"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

@endsection
