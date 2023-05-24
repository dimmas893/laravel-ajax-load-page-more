@foreach ($articles as $article)
    <h2>{{ $article->id }}</h2>
    <div>{!! $article->id !!}</div>
    <div>
        <span class="btn btn-primary">Posted {{ $article->created_at }}</span>

    </div>
    <hr>
@endforeach
