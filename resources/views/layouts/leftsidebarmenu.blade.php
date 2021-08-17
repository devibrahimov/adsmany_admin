<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Main</span>
            <hr/>
        </li>
        <li>
            <a href="{{route('admin')}}">
                <div class="pull-left"><i class="ti-book mr-20"></i>
                    <span class="right-nav-text">Ana Səhifə</span></div>
                <div class="clearfix"></div></a>
        </li>
        <li>
            <a href="{{route('languagesSetting')}}">
                <div class="pull-left"><i class=" ti-map-alt mr-20"></i>
                    <span class="right-nav-text">Dillərin İdarəsi</span></div>
                <div class="clearfix"></div></a>
        </li>
        <li>
            <a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="ti-dashboard mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="ti-angle-down"></i></div><div class="clearfix"></div></a>
            <ul id="dashboard_dr" class="collapse collapse-level-1">
                <li>
                    <a class="active-page" href="index.html">Analytical</a>
                </li>
                <li>
                    <a href="index2.html"><div class="pull-left"><span>Cryptocurrency</span></div><div class="pull-right"><span class="label label-success">Hot</span></div><div class="clearfix"></div></a>
                </li>
                <li>
                    <a href="profile.html">Profile</a>
                </li>
            </ul>
        </li>

    </ul>
</div>
<!-- /Left Sidebar Menu -->
