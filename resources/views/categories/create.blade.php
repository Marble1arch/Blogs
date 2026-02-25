<x-layout>
<x-slot:title>
    Izveidot kategoriju
    </x-slot:title>
    <h1>Izveidot kategoriju</h1>
    <div class="card">
    <form method="POST" action="/categories">
    @csrf
        <label>Kategorijas nosaukums: </br></label><input name="title" value= "{{old('title',$category->title) }}" /></br>
        @error("title")
    <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</div>
</x-layout>