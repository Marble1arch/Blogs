<x-layout>
<x-slot:title>
    Izveidot blogu
    </x-slot:title>
    <h1>Izveidot blogu</h1>
    <div class="card">
    <form method="POST" action="/blogs">
    @csrf
        <label>Bloga nosaukums: </br></label><input name="title" /></br>
        <label>Bloga ieraksts: </br></label><input name="content" /></br>
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