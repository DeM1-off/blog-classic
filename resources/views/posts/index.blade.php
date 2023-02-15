<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>

    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('posts.create')}}">
                <button class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'>
                    Create
                </button>
            </a>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                <div class="p-6 text-gray-900">


                    <table class="table table-dark">
                        <thead>
                        <th scope="col">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->user_id}}</td>
                            <td>
                                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tbody>

                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
