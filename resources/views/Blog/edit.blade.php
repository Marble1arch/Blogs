<x-layout>
<x-slot:title>
    Rediģēt blogu
    </x-slot:title>
    <div class="card">
    <h1>Rediģēt blogu</h1>
    <form method="POST" action="/blogs/{{$blog->id}}">
    @csrf
    @method('PUT')
       <label>
        <input name= "title" value= "{{old('title',$blog->title) }}" />
       </label></br>
        @error("title")
            <p>{{ $message }}</p>
        @enderror
        <label>
        <textarea name= "content" >{{old('content',$blog->content) }}</textarea>
       </label>
       @error("blog")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</div>
</x-layout>