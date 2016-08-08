<li>
	<a href="#">{{ $category['name'] }}</a>
	@if (count($category['children']) > 0)
	    <ul class="">
		    @foreach($category['children'] as $category)

		        @include('layouts.partials.nestedNavigation', $category)
		        
		    @endforeach
	    </ul>
	@endif
</li>