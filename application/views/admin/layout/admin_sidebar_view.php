

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?php print base_url('admin')?>"><i class="fa fa-dashboard fa-fw"></i> หน้าหลัก</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-gear fa-spin"></i> จัดการ<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php print base_url('admin/category')?>"><i class="fa fa-github-alt"></i> จัดการหมวดหมู่<span class="fa arrow"></span></a>
                    </li>
                    <li>
                        <a href="<?php print base_url('admin/news')?>"><i class="fa fa-book"></i> จัดการข่าว </a>
                    </li>
                    <li>
                        <a href="<?php print base_url('admin/comment')?>"><i class="fa fa-comment"></i> จัดการความคิดเห็น </a>
                    </li>
                    <li>
                        <a href="<?php print base_url('admin/user')?>"><i class="fa fa-user"></i> จัดการผู้ใช้งาน </a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->

</nav>
