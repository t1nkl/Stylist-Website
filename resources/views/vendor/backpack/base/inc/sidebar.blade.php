@if (Auth::check())
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">{{ trans('backpack::base.administration') }}</li>
      <!-- ================================================ -->
      <!-- ==== Recommended place for admin menu items ==== -->
      <!-- ================================================ -->
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/about') }}"><i class="fa fa-user-circle-o"></i> <span>О нас</span></a></li>

      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/service') }}"><i class="fa fa-shopping-bag"></i> <span>Услуги</span></a></li>

      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/project') }}"><i class="fa fa-file-image-o"></i> <span>Портфолио</span></a></li>

      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/reviewshow') }}"><i class="fa fa-files-o"></i> <span>Отзывы на сайте</span></a></li>

      <li class="treeview">
        <a href="#"><i class="fa fa-newspaper-o"></i> <span>Записи, категории, теги</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/article') }}"><i class="fa fa-newspaper-o"></i> <span>Блог</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/vlog') }}"><i class="fa fa-files-o"></i> <span>VLOG</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/category') }}"><i class="fa fa-list"></i> <span>Категории</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/tag') }}"><i class="fa fa-tag"></i> <span>Теги</span></a></li>
        </ul>
      </li>

      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/lid') }}"><i class="fa fa-comments"></i> <span>Лиды</span></a></li>

      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/review') }}"><i class="fa fa-comment-o"></i> <span>Отзывы</span></a></li>

      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/contact') }}"><i class="fa fa-phone"></i> <span>Контакты</span></a></li>

      <li class="treeview">
        <a href="#"><i class="fa fa-cog"></i> <span>Настройки</span><i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>Файловый менеджер</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/backup') }}"><i class="fa fa-hdd-o"></i> <span>Бекапы</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/log') }}"><i class="fa fa-terminal"></i> <span>Логи</span></a></li>
          <!-- <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/language') }}"><i class="fa fa-flag-o"></i> <span>Языки</span></a></li> -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/language/texts/ru/messages') }}"><i class="fa fa-language"></i> <span>Статические тексты</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Администрирование</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Пользователи</span></a></li>
              <!-- <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Роли</span></a></li> -->
              <!-- <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Права</span></a></li> -->
            </ul>
          </li>
        </ul>
      </li>


      <!-- ======================================= -->
      <li class="header">{{ trans('backpack::base.user') }}</li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
@endif
