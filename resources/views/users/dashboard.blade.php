<!-- filepath: /E:/muthii/Laravel11crashapp/resources/views/users/dashboard.blade.php -->
<x-layout>
    <div class="flex">
        <x-sidebar />
        <div class="flex-10 ml-20 p-8">
            <h1 class="text-2xl font-semibold">Dashboard</h1>
            <h2 class="subtitle">Hello, {{auth()->user()->username}}</h2>
            <p>Welcome to your dashboard!</p>
        </div>
    </div>
</x-layout>