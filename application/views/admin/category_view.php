admin_view.php<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">จัดการหมวดหมู่</h1>
        </div>
        <!-- /.col-lg-12 -->

        <table class="table">
            <div class="col-lg-12">
                <div class="text-right">

                    <a href="<?php print base_url('admin/add_category')?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> เพิ่มหมวดหมู่</a>

                </div>
                <tr>
                    <th>#</th>
                    <th>ชื่อหมวดหมู่</th>
                    <th>จัดการ</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>กีฬา</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> แก้ไข</a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-recycle"></i> ลบ</a>
                    </td>

                </tr>
            </div>
        </table>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->