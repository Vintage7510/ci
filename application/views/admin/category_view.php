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
                <?php if($categories->num_rows() >0) {
                    foreach ($categories->result() as $category){
                    ?>
                <tr>
                    <td>1</td>
                    <td><?php print $category->name ?></td>

                    <td>

                        <a href="<?php print base_url('admin/edit_category/'.$category->category_id)?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> แก้ไข</a>
                        <a href="<?php print base_url('admin/delete_category'.$category->category_id)?>" class="btn btn-sm btn-danger"><i
                                onclick="return confirm('แน่ใจรึปล่าว');"class="fa fa-recycle"></i> ลบ</a>
                    </td>

                </tr>
                <?php }}else{ ?>
                <tr>
                    <td colspan="3" >== ไม่มีข้อมูล ==</td>
                </tr>
                <?php }?>
            </div>
        </table>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->