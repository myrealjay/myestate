<aside class="main-sidebar mysidebar" id="sidebar-wrapper" style="">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
            @if(Auth::user()->pic)
                <img src="/images/{{Auth::user()->pic}}" class="img-circle"
                     alt="User Image"/>
            @endif
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>Bethel Estate</p>
                @else
                    <p>{{ Auth::user()->firstname}}</p>
                @endif
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <!--<form action="search" method="post" class="sidebar-form">
        {!! csrf_field() !!}
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="phone or email"/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
        </form>-->
        <!-- Sidebar Menu -->

        <ul class="sidebar-menu" data-widget="tree" style="background-color:#312C2C;">
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>