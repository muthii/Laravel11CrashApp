<x-layout>
    <h1 class="title">Register</h1>

    <div class="mx-auto max-w-screen-sm card">

        <form action="{{route('register')}}" method="POST" autocomplete="off">
            @csrf
            {{-- Username --}}
            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" value="{{old('username')}}"
                class="input w-full @error('username') border-red-500 @enderror">
                @error('username')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>
            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{old('email')}}"
                class="input w-full @error('email') border-red-500 @enderror">
                @error('email')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>
            {{-- Password --}}
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" value="{{old('password')}}"
                class="input w-full @error('password') border-red-500 @enderror">
                @error('password')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>
            {{-- Password Confirmation --}}
            <div class="mb-4">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}"
                class="input w-full @error('password_confirmation') border-red-500 @enderror">
                @error('password_confirmation')
                    <p class="error">{{$message}}</p>
                @enderror
            </div>
            {{-- Submit --}}
            <div class="mb-4">
                <button type="submit" class="btn w-full mb12 bg-slate-800 p-4 rounded-lg text text-white py-2">Register</button>
            </div>

        </form>
    </div>
</x-layout>