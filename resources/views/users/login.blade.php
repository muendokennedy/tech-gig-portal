<x-layout>
<x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Sign in</h2>
      <p class="mb-4">Login your account to view your gigs</p>
    </header>
    <form method="POST" action="{{route('login.user')}}">
      @csrf
      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">Enter Your Email</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full         @error('email')
        border-rose-600 border-2
        @enderror" name="email" value="{{old('email')}}" />
        @error('email')
        <p class="text-red-500 text-base mt-1 font-medium">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="password" class="inline-block text-lg mb-2">
         Enter Your Password
        </label>
        <input type="password" class="border border-gray-200 rounded p-2 w-full           @error('password')
        border-rose-600 border-2
        @enderror" name="password"
          value="{{old('password')}}" />
        @error('password')
        <p class="text-red-500 text-base mt-1 font-medium">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Login
        </button>
      </div>
      <div class="mt-8">
        <p>
          Don't have an account?
          <a href="{{route('user.create')}}" class="text-laravel">Create account</a>
        </p>
      </div>
    </form>
  </x-card>
</x-layout>
