<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview"><a href="{{ url('dashboard') }}"><i class='fa fa-dashboard'></i> <span>{{ trans('adminlte_lang::message.dashboard') }}</span></a></li>
            <li class="treeview"><a href="{{ url('viewinventory') }}"><i class='fa fa-table'></i> <span>{{ trans('adminlte_lang::message.viewinventory') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-gears'></i> <span>{{ trans('adminlte_lang::message.maintenance') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('departments') }}">{{ trans('adminlte_lang::message.departments') }}</a></li>
                    <li><a href="{{ url('division') }}">{{ trans('adminlte_lang::message.division') }}</a></li>
                    <li><a href="{{ url('location') }}">{{ trans('adminlte_lang::message.location') }}</a></li>
                    <li><a href="{{ url('equipment') }}">{{ trans('adminlte_lang::message.equipment') }}</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="{{ url('audit') }}"><i class='fa fa-exchange'></i> <span>{{ trans('adminlte_lang::message.audit') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('transfer') }}">{{ trans('adminlte_lang::message.transfer') }}</a></li>
                    <li><a href="{{ url('disposal') }}">{{ trans('adminlte_lang::message.disposal') }}</a></li>
                    <li><a href="{{ url('locationtracker') }}">{{ trans('adminlte_lang::message.locationtracker') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
