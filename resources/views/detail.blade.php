<img src="{{ asset('storage/images/'. $post -> path) }}" alt="{{ $post -> hotelName }}">
<h1>{{ $post -> hotelName }}</h1>
<small>{{ $post -> location }}</small>
<p>
    @foreach($post->category as $value)
        {{$value}}
     @endforeach
</p>
<p>{{ $post -> desc }}</p>

<form action="{{ route('delete', ['post' => $post -> id]) }}" method="post">
    @method('delete')
    @csrf
    <button>Delete</button>
</form>
