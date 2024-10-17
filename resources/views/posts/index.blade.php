<x-layout>
    <div class="container">
        <h2 class="display-4 fw-normal text-body-emphasis text-center" >Blog Posts</h2>

        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5  class="card-subtitle mb-2 text-body-secondary">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="container">
        <h2>Create a New Post</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Post</button>
        </form>
    </div>
</x-layout>
