<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{URL('home')}}" @if (Request::segment(1) == 'home')
                    class="active"
                @endif ><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="{{URL('shoes')}}" @if (Request::segment(1) == 'shoes')
                    class="active"
                @endif><i class="lnr lnr-home"></i> <span>Shoes</span></a></li>
                <li><a href="{{URL('category')}}" @if (Request::segment(1) == 'category')
                    class="active"
                @endif><i class="lnr lnr-code"></i> <span>Category</span></a></li>
                <li><a href="{{URL('brand')}}" @if (Request::segment(1) == 'brand')
                    class="active"
                @endif><i class="lnr lnr-chart-bars"></i> <span>Brand</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->