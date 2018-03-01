@extends ('layouts.master')

@section('main')
	<div class="container">
        <div class="row">
			<div class="col-sm-8">
				<h1>Sign in</h1>
				<form method="POST" action="/login">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Sign In</button>
					</div>
				</form>
				@include('layouts.errors')
			</div>
		</div>
	</div>
@endsection