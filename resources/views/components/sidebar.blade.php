<!-- filepath: /e:/muthii/Laravel11crashapp/resources/views/components/sidebar.blade.php -->
<div class="bg-blue-800 text-white w-64 min-h-screen fixed left-0 top-16">
    <div class="p-4">
        <h2 class="text-xl font-semibold"></h2>
        <ul class="mt-4">
            <li class="mb-2">
                <a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-blue-700 rounded">Dashboard</a>
            </li>
            <li class="mb-2">
                <a href="#" class="block py-2 px-4 hover:bg-blue-700 rounded">Profile</a>
            </li>
            <li class="mb-2">
                <a href="#" class="block py-2 px-4 hover:bg-blue-700 rounded">Settings</a>
            </li>
            <li class="mb-2">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="block w-full text-left hover:bg-slate-100 pl-4 pr-8 py-2">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</div>