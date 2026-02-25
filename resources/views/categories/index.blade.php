<x-layout>
<h1>Visas kategorijas</h1>
<div class="card" >
    <ul style="flex-direction:column; text-align:center; width:fit-content;align-self:center;">
  @foreach ($categories as $category)
  <li style="margin-bottom:10px;"><a href="/categories/{{ $category->id}}">{{ $category->title }}</a></li>
  @endforeach
</ul>
</div>
</x-layout>