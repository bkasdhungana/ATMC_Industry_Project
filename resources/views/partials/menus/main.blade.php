<ul class="navbar-nav mr-auto">
    <li class="nav-item {{ request()->route()->getName() == 'shop.index' ? 'active': '' }}">
        <a class="nav-link" href="{{ route('shop.index') }}">Shop</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
    </li>
     </li>
    
</ul>