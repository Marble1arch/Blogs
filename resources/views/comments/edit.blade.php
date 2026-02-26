<x-layout>
<x-slot:title>
    Rediģēt komentāru
    </x-slot:title>
    <div class="card">
    <h1>Rediģēt komentāru</h1>
    <form method="POST" action="/comments/{{$comment->id}}">
    @csrf
    @method('PUT')
       <label>
        <input name= "author" value= "{{old('author',$comment->title) }}" />
        <input name= "text" value= "{{old('text',$comment->content) }}" />
       </label></br>
        @error("title")
            <p>{{ $message }}</p>
        @enderror
        @error("content")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</div>
</x-layout>
