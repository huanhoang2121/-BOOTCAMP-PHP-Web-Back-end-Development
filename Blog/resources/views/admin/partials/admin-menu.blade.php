<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
{{--header--}}
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg">
        <div>
            <p class="app-sidebar__user-name">Huấn Hoàng</p>
            <p class="app-sidebar__user-designation">Backend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="{{ route('admin.posts') }}"><i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Trang chủ</span>
            </a>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-laptop"></i>
                <span class="app-menu__label">Bài viết</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="{{ route('admin.posts') }}"><i class="icon fa fa-circle-o"></i> Danh sách</a>
                </li>
                <li>
                    <a class="treeview-item" href="{{ route('admin.posts.create') }}"><i class="icon fa fa-circle-o"></i> Thêm</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-laptop"></i>
                <span class="app-menu__label">Danh mục</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="{{ route('admin.categories') }}"><i class="icon fa fa-circle-o"></i> Danh sách</a>
                </li>
                <li>
                    <a class="treeview-item" href="{{ route('admin.categories.create') }}"><i class="icon fa fa-circle-o"></i> Thêm</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
{{--header--}}
