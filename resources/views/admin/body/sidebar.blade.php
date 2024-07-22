<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.profile.description')}}" class="waves-effect">
                        <i class="ri-file-user-line"></i>
                        <span>Sobre Mim</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('testimonials')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Testemunhos</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-medal-line"></i>
                        <span>Serviços</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('add.service')}}">Adicionar</a></li>
                        <li><a href="{{route('services')}}">Ver serviços</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-suitcase-fill"></i>
                        <span>Portfolios</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('add.portfolio')}}">Adicionar</a></li>
                        <li><a href="{{route('portfolio')}}">Ver portfolios</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-newspaper-line"></i>
                        <span>Artigos do blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('add.post')}}">Adicionar</a></li>
                        <li><a href="{{route('posts')}}">Ver posts</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('contacts')}}" class="waves-effect">
                        <i class="ri-file-info-fill"></i>
                        <span>Informações de contacto</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>