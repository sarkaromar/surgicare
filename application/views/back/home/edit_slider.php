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
                    <?php echo form_open_multipart(site_url("admin_panel/do_edit_slider"), array("class" => "form-horizontal")) ?>
                        <div class="box-body">
                            <!-- tilte -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Title<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Title" name="title" value="<?=$list[0]->title?>" required>
                                </div>
                            </div>
                            <!-- desc -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Short Description<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <textarea class="form-control"  name="desc" rows="2" required><?=$list[0]->desc?></textarea>
                                </div>
                            </div>
                            <!-- link -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Link<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="e.g: http://www.example.com" name="link" value="<?=$list[0]->link?>" required>
                                </div>
                            </div>
                            <!-- image -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Image<sup style="color: red">*</sup></label>
                                <div class="col-sm-2">
                                    <input type="file"  name="image"  id="myFile" onchange="imageshow(this);" />
                                    <input type="hidden" name="img" value="<?=$list[0]->image?>" />
                                </div>
                                <div class="col col-lg-4">
                                    <img id="previewImg1" src="<?=base_url()?>assets/img/slider/<?=$list[0]->image?>" width="130px" />
                                    <script>
                                        function imageshow(input) {

                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function(e) {
                                                    $('#previewImg1')
                                                            .attr('src', e.target.result)
                                                            .width(130);
                                                }
                                                reader.readAsDataURL(input.files[0]);

                                            } else {
                                                var filename = "";
                                                filename = "file:\/\/" + input.value;
                                                document.form2.previewImg1.src = filename;
                                                document.form2.previewImg1.style.width = "80px";
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-6">
                                    <input type="hidden" name="id" value="<?=$list[0]->id?>" />
                                    <button type="submit" class="btn btn-primary">Update Slider</button>
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