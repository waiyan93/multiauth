@if(Auth::guard('web')->check())
	<p class="text-success">
		You are logged in as <b>USER</b>
	</p>
@else
	<p class="text-danger">
		You are logged out as <b>USER</b>
	</p>
@endif
@if(Auth::guard('admin')->check())
	<p class="text-success">
		You are logged in as <b>Admin</b>
	</p>
@else
	<p class="text-danger">
		You are logged out as <b>Admin</b>
	</p>
@endif