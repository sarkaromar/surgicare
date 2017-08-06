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
                    <?php $gl = $this->session->flashdata('globalmsg');
                    if (!empty($gl)) { ?>
                        <!-- notice -->
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fa fa-check"></i><?php echo $this->session->flashdata('globalmsg') ?></h5>
                        </div>
                    <?php } ?>
                    <!-- form -->
                    <?php echo form_open_multipart(site_url("admin_panel/do_edit_doctor"), array("class" => "form-horizontal")) ?>
                        <div class="box-body">

                            <!-- dept -->
                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Department<sup style="color: red">*</sup></label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="dept_name">
                                    <?php foreach($depts as $dept) : ?>
                                        <option value="<?=$dept->dept_name?>" <?php if ($dept->dept_name == $list[0]->dept_name) echo 'selected'; ?> ><?=$dept->dept_name?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- name -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Name<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="Name" name="name" value="<?=$list[0]->name?>" required>
                                </div>
                            </div>

                            <!-- Speciality -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Speciality<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="e.g: Obstetrics and Gynecology" name="special" value="<?=$list[0]->special?>" required>
                                </div>
                            </div>
                            <!-- education -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Education<sup style="color: red">*</sup></label>
                                <div class="col-sm-8"> 
                                    <input class="form-control" type="text" placeholder="e.g: MBBS, OB/GYN" name="edu" value="<?=$list[0]->edu?>"  required>
                                </div>
                            </div>
                            <!-- working days -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Work Days<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="e.g: Monday, Wednesday, Thursday" name="work_days" value="<?=$list[0]->work_days?>" required>
                                </div>
                            </div>
                            <!-- speech -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Some Speech<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <textarea class="form-control"  name="speech" rows="10" required><?=$list[0]->speech?></textarea>
                                </div>
                            </div>
                            <hr />
                            <!-- fb -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Facebook<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="e.g: http://www.facebook.com/your_fb_link" name="fb" value="<?=$list[0]->fb?>" required>
                                </div>
                            </div>
                            <!-- twt -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Twitter<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="e.g: http://www.twitter.com" name="twt" value="<?=$list[0]->twt?>" required>
                                </div>
                            </div>
                            <!-- skype -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Skype<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="e.g: your_id_name" name="skype" value="<?=$list[0]->skype?>" required>
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
                                    <img id="previewImg1" src="<?=base_url()?>assets/img/doctor/<?=$list[0]->image?>" width="130px" />
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
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div><!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->