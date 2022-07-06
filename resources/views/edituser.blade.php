<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('update')}}" method="POST">
                        @csrf
                        <label class="block pt-0.5">
                            <span class="block text-sm font-medium text-slate-700">Username</span>
                            <!-- Using form state modifers, the classes can be identical for every input -->
                            <input type="text" value="{{$name}}" class="mt-1 block w-full px-3 py-2 bg-white  rounded-md text-sm shadow-sm placeholder-slate-400
                            
                            disabled:bg-slate-50 disabled:text-slate-500  disabled:shadow-none
                            invalid:border-pink-500 invalid:text-pink-600
                            focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                          " placeholder="name" name="name" />
                        </label>
                        <label class="block pt-0.5">
                            <span class="block text-sm font-medium text-slate-700">Description</span>
                            <!-- Using form state modifers, the classes can be identical for every input -->
                            <input type="text"  value="{{$description}} "class="mt-1 block w-full px-3 py-2 bg-white  rounded-md text-sm shadow-sm placeholder-slate-400
                            
                            disabled:bg-slate-50 disabled:text-slate-500  disabled:shadow-none
                            invalid:border-pink-500 invalid:text-pink-600
                            focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                          " placeholder="description" name="description" />
                        </label>
                        <label class="block pt-0.5">
                            <label for="countries"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Role</label>
                            <select id="countries" name="role"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected="">Choose a role</option>
                                <option value="3">Manager</option>
                                <option value="2">User</option>
                                <option value="1">Superadmin</option>
                            </select>
                        </label>
                        <button class="rounded" style="padding: 10px; margin-top:10px; background:#7dec;">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>