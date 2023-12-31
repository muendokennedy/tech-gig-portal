<x-layout>
<x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Register</h2>
      <p class="mb-4">Create an account to post tech gigs</p>
    </header>
    <form method="POST" action="{{route('user.store')}}">
      @csrf
      <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-2"> Enter Name </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full        @error('name')
        border-rose-600 border-2
        @enderror" name="name" value="{{old('name')}}" />
        @error('name')
        <p class="text-red-500 text-base mt-1 font-medium">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">Enter Email</label>
        <input type="email" class="border border-gray-200 rounded p-2 w-full         @error('email')
        border-rose-600 border-2
        @enderror" name="email" value="{{old('email')}}" />
        @error('email')
        <p class="text-red-500 text-base mt-1 font-medium">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="password" class="inline-block text-lg mb-2">
         Enter Password
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
        <label for="password2" class="inline-block text-lg mb-2">
          Confirm Password
        </label>
        <input type="password" class="border border-gray-200 rounded p-2 w-full           @error('password_confirmation')
        border-rose-600 border-2
        @enderror" name="password_confirmation"
          value="{{old('password_confirmation')}}" />
        @error('password_confirmation')
        <p class="text-red-500 text-base mt-1 font-medium">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Sign Up
        </button>
      </div>
      <div class="mt-8">
        <p>
          Already have an account?
          <a href="{{route('user.login')}}" class="text-laravel">Login</a>
        </p>
      </div>
    </form>
  </x-card>
</x-layout>
