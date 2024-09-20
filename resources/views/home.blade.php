@if(auth()->user()->isAdmin == 1 && auth()->user()->status == 1)
	@include('admin')
@elseif(auth()->user()->isAdmin == 2 && auth()->user()->status == 1)
	@include('manager')
@else
  @include('blocked')
@endif
