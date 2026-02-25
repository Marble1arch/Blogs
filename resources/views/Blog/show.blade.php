<x-layout>
    <x-slot:title>
    {{$blog->title}}
    </x-slot:title>
    <div class="card">
        <h1>{{$blog->title}}</h1>
    <p>{{$blog->content}}</p>
    <p>Kategorija -> {{ $blog->categories->title}}</p>
    <a href="/blogs/{{$blog->id}}/edit">Edit</a>
    <form action="{{$blog->id}}" method="POST">
        @csrf
        @method ("delete")
        <button>Delete</button>
    </form>

</div>
</x-layout>