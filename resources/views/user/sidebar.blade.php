<div class="span3">
    <div class="sidebar">
        <ul class="widget widget-menu unstyled">
            <li class="active"><a href="{{route('user.home')}}"><i class="menu-icon icon-dashboard"></i>user home
            </a></li>
            <li><a href="{{route('show.all.users')}}"><i class="menu-icon icon-bullhorn"></i>Show All Users </a>
            </li>
            <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
            11</b> </a></li>
            <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
            19</b> </a></li>
        </ul>
        <!--/.widget-nav-->


        <ul class="widget widget-menu unstyled">
            <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
            <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
            <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
            <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
            <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
        </ul>
        <!--/.widget-nav-->
        <ul class="widget widget-menu unstyled">
        <li><a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
           <i class="menu-icon icon-signout"></i>{{ __('Logout') }}
       </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form></li>
</ul>
</div>
<!--/.sidebar-->
</div>