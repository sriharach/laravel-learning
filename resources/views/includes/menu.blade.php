
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('../')}}">DevTest</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('../')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('link') }}">link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('#') }}">employee</a>
        </li><li class="nav-item">
          <a class="nav-link" href="{{url('view_deptmanager') }}">deptmanager</a>
        </li>
        <li class="nav-item text-right">
          <a class="nav-link text-right" href="{{url('login')}}">login</a>
        </li>
      </ul>
    </div>
  </nav>