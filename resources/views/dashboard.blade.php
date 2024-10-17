<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="container text-white">
        <h2>Manage Posts</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ ucfirst($post->content) }}</td>
                        <td>{{ ucfirst($post->status) }}</td>
                        <td>
                            @if ($post->status === 'pending')
                                <form action="{{ route('admin.posts.approve', $post->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Approve</button>
                                </form>
                            @else
                                Approved
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
