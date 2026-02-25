<x-layout>
<x-slot:title>
    Rediģēt kategoriju
    </x-slot:title>
    <div class="card">
    <h1>Rediģēt kategoriju</h1>
    <form method="POST" action="/categories/{{$category->id}}">
    @csrf
    @method('PUT')
       <label>
        <input name= "title" value= "{{old('title',$category->title) }}" />
       </label></br>
        @error("title")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</div>
</x-layout>