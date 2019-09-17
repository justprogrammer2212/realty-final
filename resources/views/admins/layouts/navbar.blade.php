<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img
                src="{{ auth()->user()->getAvatarUrl() }}"
                width="48" height="48" alt="User"/>
            <a href="{{route('indexPage')}}" class="btn btn-success">Go to main website</a>

        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true"
                 aria-expanded="false">{{auth()->user()->name}}</div>
            <div class="email">
                {{auth()->user()->email}}
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ route('admin.users.index') }}">
                    <i class="material-icons">people</i>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.offers.index') }}">
                    <i class="material-icons">menu_book</i>
                    <span>Offers</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.categories.index') }}">
                    <i class="material-icons">category</i>
                    <span>Categories</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.feedback.index') }}">
                    <i class="material-icons">feedback</i>
                    <span>Feedback</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; {{\Carbon\Carbon::now()->year}} <a href="{{url('/')}}">Realty</a>.
        </div>
    </div>
    <!-- #Footer -->
</aside>
