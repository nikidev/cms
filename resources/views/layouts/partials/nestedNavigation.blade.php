
<li>
 	@if(count($category->children) == 0)
		<a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $category['name'] }}</a>
	@else
		<a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $category['name'] }} <span class="fa arrow"></span></a>
	@endif

	@if (count($category['children']) > 0)
	    <ul class="nav nav-second-level">
	    	
			    @foreach($category['children'] as $category)

			        @include('layouts.partials.nestedNavigation', $category)
			        
			    @endforeach

	    </ul>
	@endif
</li>


