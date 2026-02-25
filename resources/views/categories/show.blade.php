<x-layout>
    <x-slot:title>
    {{$category->title}}
    </x-slot:title>
    <div class="card">
        <h1>{{$category->title}}</h1>
    <a href="/categories/{{$category->id}}/edit">Edit</a>
    <form action="{{$category->id}}" method="POST">
        @csrf
        @method ("delete")
        <button>Delete</button>
    </form>
</div>
</x-layout>