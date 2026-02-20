<x-layout>
<h1>Visi blogi</h1>
<div class="card" >
    <ul style="flex-direction:column; text-align:center; width:fit-content;align-self:center;">
  @foreach ($blogs as $blog)
  <li style="margin-bottom:10px;"><a href="/blogs/{{ $blog->id}}">{{ $blog->title }}</a></li>
  @endforeach
</ul>
</div>
</x-layout>