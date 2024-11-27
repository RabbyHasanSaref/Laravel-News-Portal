<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bogra Blog</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <h1 class="container mt-4">Search Results</h1>
    @if($news->count())
        @foreach($news as $item)

            <div class="container mt-4">
                <!-- News Card -->
                <div class="row border rounded p-3 mb-3">
                    <div class="col-md-8">
                        <h5 class="fw-bold">{{ $item->Post_Title }}</h5>
                        <p class="text-muted">
                            {{ \Illuminate\Support\Str::limit($item->Post_Content, 150) }}
                        </p>
                        <a href="{{ route('blog.show', $item->id) }}" class="btn btn-primary">Read more</a>
                    </div>
                    <div class="col-md-4">
                        <img src="{{env('STORAGE_PATH')}}/{{$item->Post_Image}}" class="img-fluid rounded" alt="News Image">
                    </div>
                </div>
            </div>

        @endforeach

        {{ $news->links() }}
    @else
        <p class="container mt-4">No news found for your search.</p>
    @endif
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>

