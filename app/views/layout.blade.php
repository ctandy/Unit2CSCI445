<!DOCTYPE html>
<html>
<head>
	@section('head')
	    <title>Team Unit 2</title>
	    {{ HTML::style('/css/style.css') }}
	@show
</head>
<body>
    <div id="container">
    	@yield('content')
        <div id="nav">
            <ul>
                <li><a href="{{ URL::route('showAll') }}">Show all Pets</a></li>
                <li><a href="{{ URL::route('dogs') }}">Show only dogs</a></li>
                <li><a href="{{ URL::route('orderAge') }}">Order pets by age</a></li>
                
            </ul>
        </div><!-- end nav -->  
    </div><!-- end container -->
</body>
</html>