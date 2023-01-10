<x-admin-layout>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{route('owner.roles.store')}}">
                        @csrf
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Name <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="name" id="name" value="">
                            @error('name') <span class="flex bg-red-100 rounded-lg p-4 mb-2 mt-2 text-sm text-red-700">{{$message}}</span> @enderror
                        </div>
                        <div class="flex p-1">
                            <a href="{{route('owner.roles.index')}}" class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" required>Cancel</a>

                            <button type="submit" class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline ml-5" required>Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
