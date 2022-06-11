<link href="{{ asset('css/display.css') }}" rel="stylesheet">
@props(['category'])

<div>
    <!-- Well begun is half done. - Aristotle -->
    <div>{{ $category->nombre_categoria }} </div>
    @foreach ($category->children as $child)
        <div style="margin-left: 20px;" class="alert alert-primary"><x-category-item :category="$child" />
        </div>
      
    @endforeach
</div>