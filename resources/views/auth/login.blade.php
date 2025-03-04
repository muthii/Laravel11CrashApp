<x-layout>
    <h1 class="title">Login</h1>

    <div class="mx-auto max-w-screen-sm card ">

        <form action="{{route('login')}}" method="POST" autocomplete="off">
            @csrf

            {{-- Invalid credetial erro display --}}
            @error('failed')
            <div class="mb12 bg-red-500 p-4 rounded-lg">
                <span class="mb12 bg-red-500 p-4 rounded-lg animate-pulse rounded-full p-2 bg-teal-400 text-black text-sm">
                    <span >Invalid Credential</span>
                </span>
            @enderror
            </div>

           {{-- Email --}}
           <div class="mb-4 ">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{old('email')}}"
            class="input  @error('email') border-red-500 @enderror">
            @error('email')
                <p class="error">{{$message}}</p>
            @enderror
        </div>
        {{-- Password --}}
        <div class="mb-4 ">
            <label for="password">Password</label>
            <input type="password" name="password" value="{{old('password')}}"
            class="input  @error('password') border-red-500 @enderror">
            @error('password')
                <p class="error">{{$message}}</p>
            @enderror
        </div>
            {{-- Remember Me --}}
            <div class="mb-4">
                <label for="remember" class="inline-flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <span>Remember me</span>
                </label>
            </div>

            {{-- Submit --}}
            <div class="mb-4">
                <button type="submit" class="btn w-full mb12 bg-slate-800 p-4 rounded-lg text text-white py-2">Login</button>
            </div>

        </form>
    </div>
</x-layout>