<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Blogs') }}
        </h2>
    </x-slot>

    <x-slot name="content">
        <div class="pt-5 p-5 pb-0 d-flex justify-content-end">
            <a href="{{ route('blog.create') }}" class="btn btn-outline-primary">Add Blog <i class="fa fa-plus"></i></a>
        </div>

        <div class="p-5">
            <div class="card p-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>date published</th>
                            <th>tags</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                           <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->created_at->format('d M Y') }}</td>
                            <td>{!! $blog->tags !!}</td>
                           </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </x-slot>
</x-app-layout>
