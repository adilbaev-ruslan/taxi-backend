<x-admin-layout>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{route('owner.permissions.update', ['permission' => $permission->id])}}">
                        @method('PUT')
                        @csrf
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Name <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="name" id="name" value="{{ $permission->name }}">
                            @error('name') <span class="flex bg-red-100 rounded-lg p-4 mb-2 mt-2 text-sm text-red-700">{{$message}}</span> @enderror
                        </div>
                        <div class="flex p-1">
                            <a href="{{route('owner.permissions.index')}}" class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" required>Cancel</a>

                            <button type="submit" class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline ml-5" required>Save</button>
                        </div>
                    </form>
                </div>
                

            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-5">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-6 text-gray-900">
                        Roles
                    </div>
                    <div class="mb-4">
                        <div class="flex p-1">
                            @foreach($permission->roles as $permission_role)
                            <form method="POST" action="{{ route('owner.permission.roles.remove', ['permission' => $permission->id, 'role' => $permission_role->id]) }}" onsubmit="return confirm('Are you sure you want to delete this item?')">
                            @method('DELETE')
                            @csrf
                             <button type="submit" class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">{{ $permission_role->name }}</button>
                            
                        </form>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-5">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{route('owner.permissions.roles', ['permission' => $permission->id])}}">
                        @csrf
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Roles <span class="text-red-500">*</span></label></br>
                            <select name="role" class="border-2 border-gray-300 p-2 w-full" id="role">
                              @foreach($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="flex p-1">
                            <button type="submit" class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline ml-5" required>Assign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>