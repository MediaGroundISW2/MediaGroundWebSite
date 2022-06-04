<a class="dropdown-item" href="{{ route('user.logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
        @csrf
    </form>
