<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Laravel: Routs and Views</title>
</head>
<body>

	<h1>This is a Users view file</h1>

	@foreach($users as $user)
		{{ $user->name }}
		{{ $user->age }}
	@endforeach
	

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	<div class="links">
        <a href="/">HOME</a>
        <a href="/sample">SAMPLE</a>
    </div>
		
</body>
</html>