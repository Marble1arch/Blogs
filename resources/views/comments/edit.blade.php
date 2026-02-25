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
        <input name= "comment" value= "{{old('comment',$comment->title) }}" />
       </label></br>
        @error("comment")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</div>
</x-layout>