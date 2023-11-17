<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('boards.index')}}">게시판1</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('boards.index')}}">캘린더</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('boards.index')}}">포인트</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('boards.index')}}">출석체크</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('boards.index')}}">일정</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/')}}/board">게시판</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/')}}/member">회원관리</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}/category">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}/login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}/register">Reister</a>
              </li>
          </ul>
        </div>
    </div>
</nav>