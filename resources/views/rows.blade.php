<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($users->count() > 0)
                        <table>
                            <thead>
                                <tr>
                                    <th>Row Number</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Registered at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $user)
                                    <tr class="{{ $index % 2 === 0 ? 'bg-red-100' : '' }}">
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        @if ($index === 0)
                                            <td class="font-bold">{{ $user->email }}</td>
                                        @else
                                            <td>{{ $user->email }}</td>
                                        @endif
                                        <td>{{ $user->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h1>No Content</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
