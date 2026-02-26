<x-layout>
    <x-slot:title>
    {{$blog->title}}
    </x-slot:title>
    <div class="card">
        <h1>{{$blog->title}}</h1>
    <p>{{$blog->content}}</p>
    <p>Kategorija -> {{ $blog->category->title}}</p>
    <a href="/blogs/{{$blog->id}}/edit">Edit</a>
    <form action="{{$blog->id}}" method="POST">
        @csrf
        @method ("delete")
        <button>Delete blog</button>
    </form>
    <div class="card">
    @if (!empty($blog->comments))
        @foreach ($blog->comments as $comment)
                <p>{{ "Autors: ".$comment->title."    ".$comment->date}}</br>{{"komentārs: ".$comment->content}}</p>
                <a href="/comments/{{$comment->id}}/edit">Rediģēt</a>
                <form action="/comments/{{$comment->id}}" method="POST">
                        @csrf
                        @method ("delete")
                    <button>Delete comment</button>
                </form>
                @endforeach
            @endif
    <form action= /comments method="POST">
    @csrf
            <label>Autors:</label>
                <input name="Author" /> </br>
            <label>Komentārs:</label>
            <textarea name="text"></textarea></br>
                <input name="blog_id" value = "{{$blog->id}}" type = "hidden"/>
            <button>Add comment</button>
    </form>
    </div>
</div>
</x-layout>