<ul id="menu" class="page-sidebar-menu">

    <li {!! (Request::is('admin') ? 'class="active"' : '' ) !!}>
        <a href="{{ route('admin.dashboard') }}">
            <i class="livicon" data-name="dashboard" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Панель приборов</span>
        </a>
    </li>
    
    <li {!! (Request::is('admin/authors') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL::to('admin/authors') }}">
            <i class="livicon" data-name="authors" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Автор</span>
        </a>
    </li>
    <li {!! (Request::is('admin/genres') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL::to('admin/genres') }}">
            <i class="livicon" data-name="genre" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Жанр</span>
        </a>
    </li>
    <li {!! (Request::is('admin/books') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL::to('admin/books') }}">
            <i class="livicon" data-name="books" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Книги</span>
        </a>
    </li>
    <li {!! (Request::is('admin/books/authorList/show') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL::to('admin/books/authorList/show') }}">
            <i class="livicon" data-name="books" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Авторы и книги</span>
        </a>
    </li>
    <li {!! (Request::is('admin/books/list/list') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL::to('admin/books/list/list') }}">
            <i class="livicon" data-name="books" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Список книг ,Автор ,Жанр</span>
        </a>
    </li>
    
    <li {!! (Request::is('admin/users') || Request::is('admin/bulk_import_users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="user" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
            <span class="title">Пользователи</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/users') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Пользователи
                </a>
            </li>
            <li {!! (Request::is('admin/users/create') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/users/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Добавить нового
                </a>
            </li>
            <li {!! ((Request::is('admin/users/*')) && !(Request::is('admin/users/create')) || Request::is('admin/user_profile') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::route('admin.users.show',Sentinel::getUser()->id) }}">
                    <i class="fa fa-angle-double-right"></i>
                    Просмотреть профиль
                </a>
            </li>
            <li {!! (Request::is('admin/deleted_users') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/deleted_users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Удаленные 
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/roles') || Request::is('admin/roles/create') || Request::is('admin/roles/*') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Роли</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/roles') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/roles') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Список ролей
                </a>
            </li>
            <li {!! (Request::is('admin/roles/create') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/roles/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Добавить новую роль
                </a>
            </li>
        </ul>
    </li>
    

    <li {!! (Request::is('admin/log_viewers') || Request::is('admin/log_viewers/logs') ? 'class="active"' : '' ) !!}>

        <a href="{{  URL::to('admin/log_viewers') }}">
            <i class="livicon" data-name="help" data-size="18" data-c="#1DA1F2" data-hc="#1DA1F2" data-loop="true"></i>
            Просмотр журнала
        </a>
    </li>
    <li {!! (Request::is('admin/activity_log') ? 'class="active"' : '' ) !!}>
        <a href="{{  URL::to('admin/activity_log') }}">
            <i class="livicon" data-name="eye-open" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
            Журнал активности
        </a>
    </li>
  
    <!-- <li {!! (Request::is('admin/news') || Request::is('admin/news_item') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="move" data-c="#ef6f6c" data-hc="#ef6f6c" data-size="18" data-loop="true"></i>
            <span class="title">News</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/news') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/news') }}">
                    <i class="fa fa-angle-double-right"></i>
                    News
                </a>
            </li>
            <li {!! (Request::is('admin/news_item') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/news_item') }}">
                    <i class="fa fa-angle-double-right"></i>
                    News Details
                </a>
            </li>
        </ul>
    </li> -->
 
    <!-- Menus generated by CRUD generator -->
   
</ul>
