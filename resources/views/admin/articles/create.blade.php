@extends('admin.master')
@section('content')
    <div>
        <div class="card">

            <div class="flex justify-between">
                <h4 class="mb-5 text-bold text-indigo-800">{{ __('Publish Article') }}</h4>

                <div>

                    <span class="error">*</span>
                    <span class="dark:text-gray-200"> = {{ __('required') }}</span>
                </div>
                <div class="flex space-x-2 justify-end p-3">
                    <a href="{{ route('admin.articles.index') }}"class="btn btn-primary p-3">{{ __('Back To Article') }}</a>

                </div>
            </div>

            <form method="post" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <div class="rounded-md shadow-sm">
                        {{-- Article Title --}}
                        <label for="Article Title" class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Article Title</strong></label>
                        <input type="text" name='title'
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm"
                            value="  {{ old('title') }}">
                        @error('title')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        {{-- Article Excerpt --}}
                        <label for="Article excerpt"  class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Article Excerpt</strong></label>
                        <textarea type="text" name='excerpt' rows="10"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                            {{ old('excerpt') }}
                        </textarea>
                        @error('excerpt')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        {{-- Article Cover Image --}}
                        <label for="Article cover_image"  class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Article CoverImage</strong></label>
                        <input type="file" name='cover_image'
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">


                        @error('cover_image')
                            <p class="error">{{ $message }}</p>
                        @enderror
                         {{-- Article Category  --}}
                         <label for="Article category" class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Article Category</strong></label>
                         <select type="text" name='category_id'
                             class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm"
                             value="  {{ old('category_id') }}">
                             @foreach ($categories as $category)
                             <option value="{{ $category->id }}">{{ $category->name }}</option>
                             @endforeach

                            </select>
                         @error('category_id')
                             <p class="error">{{ $message }}</p>
                         @enderror
                        {{-- Article content --}}
                        <label for="Article Content"  class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"><strong>Article Content</strong></label>
                        <textarea type="text" name='content' rows="10"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                              {{ old('content') }}
                            </textarea>
                        @error('content')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <button class="btn btn-primary mt-5 d-flex justify-end" type="submit">Publish</button>
                </div>

            </form>







        </div>
    </div>
@endsection
