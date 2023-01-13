<x-owner-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company create') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{route('owner.companies.store')}}">
                        @csrf
                        <div class="mb-4">
                            <div class="mb-4 grid grid-cols-2 gap-4">
                              <div class="flex flex-col">
                            <label for="text" class="mb-2 font-semibold">Owner company</label>
                            <select name="user_id" class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40">
                                <option value="0">Selected company owner...</option>
                              @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                              @endforeach
                          </select>
                            @error('user_id') <span class="flex bg-red-100 rounded-lg p-4 mb-2 mt-2 text-sm text-red-700">{{$message}}</span> @enderror
                        </div>
                        <div class="flex flex-col">
                                <label for="working" class="mb-2 font-semibold">Working</label>
                                <select name="working" class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                          </select>
                          @error('working') <span class="flex bg-red-100 rounded-lg p-4 mb-2 mt-2 text-sm text-red-700">{{$message}}</span> @enderror
                              </div>
                    </div>
                        </div>
                        <div class="mb-4">
                            <div class="mb-4 grid grid-cols-2 gap-4">
                              <div class="flex flex-col">
                                <label for="licence_number" class="mb-2 font-semibold">Licence number</label>
                                <input name="licence_number" type="text" class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" />
                                @error('licence_number') <span class="flex bg-red-100 rounded-lg p-4 mb-2 mt-2 text-sm text-red-700">{{$message}}</span> @enderror
                              </div>
                              <div class="flex flex-col">
                                <label for="expiry_date" class="mb-2 font-semibold">Expiry date</label>
                                <input name="expiry_date" type="date" class="w-full max-w-lg rounded-lg border border-slate-200 px-2 py-1 hover:border-blue-500 focus:outline-none focus:ring focus:ring-blue-500/40 active:ring active:ring-blue-500/40" />
                                @error('expiry_date') <span class="flex bg-red-100 rounded-lg p-4 mb-2 mt-2 text-sm text-red-700">{{$message}}</span> @enderror
                              </div>
                            </div>
                        </div>
                        <div class="flex p-1">
                            <a href="{{route('owner.companies.index')}}" class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" required>Cancel</a>

                            <button type="submit" class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline ml-5" required>Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-owner-layout>
