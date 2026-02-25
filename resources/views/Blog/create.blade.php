<x-layout>
<x-slot:title>
    Izveidot blogu
    </x-slot:title>
    <h1>Izveidot blogu</h1>
    <div class="card">
    <form method="POST" action="/blogs">
    @csrf
        <label>Bloga nosaukums: </br></label><input name="title" value= "{{old('title') }}" /></br>
        <label>Bloga ieraksts: </br></label><input name="content" value= "{{old('content') }}"/></br>
        <label>Kategorija
        <select name="catid">
            <option value="">-- Izvēlieties kategoriju --</option>
            @foreach ($categories as $category)
                <option value="{{old('catid',$category->id)}}">
                    {{ $category->title}}
                </option>
            @endforeach
        </select>
    </label>
        @error("title")
    <p>{{ $message }}</p>
        @enderror
        @error("catid")
    <p>{{ $message }}</p>
        @enderror
        @error("content")
    <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</div>
</x-layout>