<x-owner-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User show: ') . $user->name }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>User name: {{$user->name}}</p>
                   <p>User email: {{$user->email}}</p> 
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-5">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-1 text-gray-900">
                        Roles
                    </div>
                    <div class="mb-4">
                        <div class="flex p-1">
                            @foreach($user->roles as $user_role)
                            <form method="POST" action="{{ route('owner.users.roles.remove', ['user' => $user->id, 'role' => $user_role->id]) }}" onsubmit="return confirm('Are you sure you want to delete this item?')">
                            @method('DELETE')
                            @csrf
                             <button type="submit" class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">{{ $user_role->name }}</button>
                            
                        </form>
                        @endforeach
                        </div>
                        <form method="POST" action="{{route('owner.users.roles', ['user' => $user->id])}}">
                        @csrf
                        <div class="mb-4">
                            <select name="role" class="border-2 border-gray-300 p-1 w-full" id="role">
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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-5">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-1 text-gray-900">
                        Permissions
                    </div>
                    <div class="mb-4">
                        <div class="flex p-1">
                            @foreach($user->permissions as $user_permission)
                            <form method="POST" action="{{ route('owner.users.permissions.revoke', ['user' => $user->id, 'permission' => $user_permission->id]) }}" onsubmit="return confirm('Are you sure you want to delete this item?')">
                            @method('DELETE')
                            @csrf
                             <button type="submit" class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">{{ $user_permission->name }}</button>
                            
                        </form>
                        @endforeach
                        </div>
                        <form method="POST" action="{{route('owner.users.permissions', ['user' => $user->id])}}">
                        @csrf
                        <div class="mb-4">
                            <select name="permission" class="border-2 border-gray-300 p-1 w-full" id="permission">
                              @foreach($permissions as $permission)
                                <option value="{{ $permission->name }}">{{ $permission->name }}</option>
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
    </div>
</x-owner-layout>