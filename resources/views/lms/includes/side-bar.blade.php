<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('admin/courses*') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="{{ route('courses.index') }}">
                <i class="fa fa-certificate"></i><span>Courses</span>
            </a>
        </li>
        {{-- <li class="nav-item {{ Request::is('admin/languages*') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="{{ route('languages.index') }}">
                <i class="fa fa-language"></i><span>Languages</span>
            </a>
        </li> --}}
        <li class="nav-item {{ Request::is('admin/announcements*') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="{{ route('announcements.index') }}">
                <i class="fa fa-bullhorn"></i><span>Announcements</span>
            </a>
        </li>



        @role('super-admin')
            <li class="nav-item {{ Request::is('admin/cms*') ? 'active' : '' }}">
                <a class="nav-link collapsed" data-bs-target="#cms-nav" data-bs-toggle="collapse" href="#">
                    <i class="fa fa-calculator"></i><span>CMS</span><i class="bi bi-chevron-down ml-auto"></i>
                </a>
                <ul id="cms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    {{-- <li>
                        <a href="{{ route('cms.index') }}">
                            <i class="ri-home-2-fill"></i><span>Home</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('home-page.index') }}">
                            <i class="bi bi-circle"></i><span>Home Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('faqs.index') }}">
                            <i class="bi bi-circle"></i><span>FAQ`s</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('timelines.index') }}">
                            <i class="bi bi-circle"></i><span>Time Line(Road Map)</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('profiles.index') }}">
                            <i class="bi bi-circle"></i><span>Profile Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('trainings.index') }}">
                            <i class="bi bi-circle"></i><span>Trainings</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Request::is('admin/capitals*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="{{ route('capitals.index') }}">
                    <i class="fa fa-bullhorn"></i><span>Map Setting(Temp)</span>
                </a>
            </li>
        @endrole
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-in-left"></i><span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>

    </ul>

</aside>
