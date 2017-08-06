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
                        <h3 class="box-title"><?=$title?> form</h3>
                    </div><!-- /.box-header -->
                    <!-- form -->
                    <?php echo form_open_multipart(site_url("admin_panel/do_edit_faqs"), array("class" => "form-horizontal")) ?>
                        <div class="box-body">
                            <!-- tilte -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Question<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Question" name="ques" value="<?=$list[0]->ques?>" required>
                                </div>
                            </div>
                            <!-- desc -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Answer<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <textarea class="form-control"  name="ansr" rows="2" required><?=$list[0]->ansr?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-6">
                                    <input type="hidden" name="id" value="<?=$list[0]->id?>" />
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div><!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->