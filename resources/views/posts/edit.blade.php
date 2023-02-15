<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post - Update') }}
        </h2>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Update Post') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Fill in all the fields in this block.') }}
                        </p>
                    </header>

                    <form action="{{ route('posts.update', $posts) }}" method="post">
                        @csrf
                        @method('put')

                        <div>
                            <x-input-label for="current_password" :value="__('Title')"/>
                            <x-text-input id="current_password" name="title" type="text"
                                          value="{{$posts->title}}"
                                          class="mt-1 block w-full" autocomplete="current-password"/>
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2"/>
                        </div>

                        <div>
                            <x-input-label for="password" :value="__('Description')"/>
                            <x-text-input id="password"
                                          value="{{$posts->description}}"

                                          name="description" type="text" class="mt-1 block w-full"
                                          autocomplete="new-password"/>
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2"/>
                        </div>
                        <x-text-input id="password_confirmation" name="user_id" type="hidden"
                                      class="mt-1 block w-full" value="{{ Auth()->user()->id}}"/>
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"
                                       class="mt-2"/>



                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
