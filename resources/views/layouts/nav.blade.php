<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">A simple application that allows a user to login with a username and password and be presented with a photo. The user should be able to rate the photo either thumbs up or thumbs down by clicking on a link or icon. After rating an image the user should be presented a new image to rate. The application will store the user’s rating for each image and allow the user to see their own previous ratings on a dashboard page that displays a row for each image they have rated, and includes a thumbnail of the image with the rating they gave.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="mailto:mailboxofsteven@gmail.com" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="/photos" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Photo Rating App</strong>
          </a>
          @if (Auth::check())
            <div class="text-light ml-auto pr-3">
              <span class="pr-2">
                <a href="/users/{{ Auth::user()->id }}" class="text-white" style="text-decoration: none;">
                  Hi, {{ Auth::user()->name }}
                </a>
              </span>
              
              <a href="/logout" class="btn btn-outline-danger btn-sm">Log Out</a>
            </div>
          @else
            <div class="text-light ml-auto pr-3">
              <a href="/login" class="btn btn-outline-primary btn-sm">Log In</a>
              <a href="/register" class="btn btn-outline-warning btn-sm">Register</a>
            </div>
          @endif
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>