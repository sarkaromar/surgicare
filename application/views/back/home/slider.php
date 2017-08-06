<div class="content-wrapper">
    <section class="content-header">
        <h1><?=$title?></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin Panel</a></li>
            <li class="active"><?=$title?></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- slider form row -->
        <div class="row">
            <div class="col-md-12">
                <!-- box -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add slider form</h3>
                    </div><!-- /.box-header -->
                    <?php $success = $this->session->flashdata('success');
                    if (!empty($success)) { ?>
                        <!-- notice -->
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fa fa-check"></i><?php echo $this->session->flashdata('success') ?></h5>
                        </div>
                    <?php } ?>
                    <?php $danger = $this->session->flashdata('danger');
                    if (!empty($danger)) { ?>
                        <!-- notice -->
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fa fa-check"></i><?php echo $this->session->flashdata('danger') ?></h5>
                        </div>
                    <?php } ?>
                    <!-- form -->
                    <?php echo form_open_multipart(site_url("admin_panel/add_slider"), array("class" => "form-horizontal")) ?>
                        <div class="box-body">
                            <!-- tilte -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Title<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Title" name="title" required>
                                </div>
                            </div>
                            <!-- desc -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Short Description<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <textarea class="form-control"  name="desc" rows="2" required></textarea>
                                </div>
                            </div>
                            <!-- link -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Link<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="e.g: http://www.example.com" name="link" required>
                                </div>
                            </div>
                            <!-- image -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Image<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input type="file" name="image" required>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary">Add Slider</button>
                                    <button type="reset" value="Reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div><!-- /.box -->
            </div>
        </div>
        
        <!-- slider list row -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <!-- box header -->
                    <?php if(empty($lists)) : ?>
                        <div class="box-header">
                            <h3 class="box-title">No Slider Found!</h3>
                        </div>
                    <?php else: ?>
                    <div class="box-header">
                        <h3 class="box-title">Slider List</h3>
                    </div>
                    <!-- box content -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Title</th>
                                    <th>Short desc.</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                <?php $x = 0; foreach($lists as $list) : $x++; ?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td>
                                        <?php 
                                            $a = $list->title;
                                            if (strlen($a) > 30) {
                                                $stringCut = substr($a, 0, 30);
                                                echo $stringCut . '...';
                                            }else{
                                                echo $a;
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $a = $list->desc;
                                            if (strlen($a) > 30) {
                                                $stringCut = substr($a, 0, 30);
                                                echo $stringCut . '...';
                                            }else{
                                                echo $a;
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url(); ?>assets/img/slider/<?php echo $list->image; ?>" alt="<?php echo $list->title; ?>" width="120px" height="50px" >
                                    </td>
                                    <td>
                                        <a href="<?=site_url('admin_panel/edit_slider/' . $list->id) ?>" data-toggle="tooltip" title="Edit" data-original-title="Edit"><i class="fa  fa-file-text"></i></a>
                                        |
                                        <a href="<?=site_url('admin_panel/delete_slider/' . $list->id . '/' . $list->image) ?>" onclick="return checkDelete();"><i class="fa fa-trash text-red"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php endif; ?>
                </div>  
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->