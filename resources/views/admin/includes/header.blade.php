<div id="header">
    <div>
        <a href="index.html"><img src="{{asset('images/logo.gif')}}" alt=""></a>
        <ul>
            <li><a type="button"  class="btn" href="{{ route('admin.home') }}">Home</a></li>
            <li><a type="button"  class="btn" href="{{ route('admin.dashboard') }}">Insert Gejala</a></li>
            <li>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="btn">Logout</button>
                </form>
            </li> 
        </ul>
    </div>
</div>
