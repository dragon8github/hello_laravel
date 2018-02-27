<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	    <a class="navbar-brand" href="#">Laravel App</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarColor01">
	      <ul class="navbar-nav mr-auto">
	        <li class="nav-item active">
	          <a class="nav-link" href="{{ route('home') }}">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="{{ route('help') }}">Help</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="{{ route('about') }}">About</a>
	        </li>
	      </ul>
	      <form class="form-inline">
	        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
	      </form>
	    </div>
	</div>
</nav>
