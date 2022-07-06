<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Description
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Role
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($users))
                                    @foreach ($users as $user)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4">
                                            {{$user->name}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$user->description}}
                                        </td>
                                        <td class="px-6 py-4">
                                            @switch($user->role)
                                            @case(1)
                                            <span
                                                class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Admin</span>
                                            @break
                                            @case(2)
                                            <span
                                                class="bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">Manager</span>
                                            @break
                                            @case(3)
                                            <span
                                                class="bg-purple-100 text-purple-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-900">User</span>
                                            @break
                                            @default

                                            @endswitch
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="{{route('edit',[$user->id,$user->name,$user->description,$user->role])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline p-3">Edit</a>
                                            <a href="{{route('delete',[$user->id])}}" class="font-medium text-red-600 dark:text-red-500 hover:underline p-3">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>