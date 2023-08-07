<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Edit the Gig</h2>
      <p class="mb-4">Edit this gig to find a developer</p>
    </header>

    <form method="POST" action="{{route('listing.update', $listing->id)}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="company" class="inline-block text-lg mb-2">Company Name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full @error('company')
        border-rose-600 border-2
        @enderror" name="company" value="{{$listing->company}}"/>
        @error('company')
        <p class="text-red-500 text-base mt-1 font-medium">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Job Title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full
        @error('title')
        border-rose-600 border-2
        @enderror" name="title"
          placeholder="Example: Senior Laravel Developer" value="{{$listing->title}}"/>
          @error('title')
          <p class="text-red-500 text-base mt-1 font-medium">{{$message}}</p>
          @enderror
      </div>
      <div class="mb-6">
        <label for="location" class="inline-block text-lg mb-2">Job Location</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full
        @error('location')
        border-rose-600 border-2
        @enderror" name="location"
          placeholder="Example: Remote, Boston MA, etc" value="{{$listing->location}}"/>
          @error('location')
          <p class="text-red-500 text-base mt-1 font-medium">{{$message}}</p>
          @enderror
      </div>
      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">
          Contact Email
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full
        @error('email')
        border-rose-600 border-2
        @enderror" name="email" value="{{$listing->email}}"/>
        @error('email')
        <p class="text-red-500 text-base mt-1 font-medium">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="website" class="inline-block text-lg mb-2">
          Website/Application URL
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full
        @error('website')
        border-rose-600 border-2
        @enderror" name="website" value="{{$listing->website}}"/>
        @error('website')
        <p class="text-red-500 text-base mt-1 font-medium">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">
          Tags (Comma Separated)
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full
        @error('tags')
        border-rose-600 border-2
        @enderror" name="tags"
          placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$listing->tags}}" />
          @error('tags')
          <p class="text-red-500 text-base mt-1 font-medium">{{$message}}</p>
          @enderror
      </div>
      <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
          Company Logo
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full
        @error('logo')
        border-rose-600 border-2
        @enderror" name="logo" value="{{$listing->logo}}" />
        @error('logo')
        <p class="text-red-500 text-base mt-1 font-medium">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
          Job Description
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full
        @error('description')
        border-rose-600 border-2
        @enderror" name="description" rows="10"
          placeholder="Include tasks, requirements, salary, etc">{{$listing->description}}</textarea>
          @error('description')
          <p class="text-red-500 text-base mt-1 font-medium">{{$message}}</p>
          @enderror
      </div>
      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Edit this Gig
        </button>
        <a href="{{ route('listing.show', $listing->id) }}" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>
