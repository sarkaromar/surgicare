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
        <div class="row">
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
        </div>
        <?php echo form_open_multipart(site_url("admin_panel/do_edit_common_settings"), array("class" => "form-horizontal")) ?>
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <!-- box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Main Settings</h3>
                        <div class="box-tools pull-right">
                            <button type="submit" class="btn btn-success btn-sm">Update Settings</button>
                       </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?=$list[0]->id?>" />
                        <!-- logo -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Logo</label>
                            <div class="col-sm-2">
                                <input type="file"  name="image"  id="myFile" onchange="imageshow(this);" />
                                <input type="hidden" name="img" value="<?=$list[0]->logo?>" />
                            </div>
                            <div class="col col-lg-4">
                                <img id="previewImg1" src="<?=base_url()?>assets/img/settings/<?=$list[0]->logo?>" width="130px" />
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
                        <!-- add -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Address<sup style="color: red">*</sup></label>
                            <div class="col-sm-8">
                                <textarea class="form-control"  name="add" rows="2" required><?=$list[0]->add?></textarea>
                            </div>
                        </div>
                        <!-- mail -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Email 01<sup style="color: red">*</sup></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" placeholder="e.g: abc@example.com" name="mail1" value="<?=$list[0]->mail1?>" required>
                            </div>
                        </div>
                        <!-- mail -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Email 02</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" placeholder="e.g: abc@example.com" name="mail2" value="<?=$list[0]->mail2?>" required>
                            </div>
                        </div>
                        <!-- phn -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Phone 01</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" placeholder="e.g: 012-3456789" name="phn1" value="<?=$list[0]->phn1?>" required>
                            </div>
                        </div>
                        <!-- phn -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Phone 02</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" placeholder="e.g: 012-3456789" name="phn2" value="<?=$list[0]->phn2?>" required>
                            </div>
                        </div>
                        <!-- phn -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Emergency Number</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" placeholder="e.g: 999-99999" name="eme_phn" value="<?=$list[0]->eme_phn?>" required>
                            </div>
                        </div>
                        <!-- phn -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Doctor Appointment Number</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" placeholder="e.g: 999-99999" name="appoint_phn" value="<?=$list[0]->appoint_phn?>" required>
                            </div>
                        </div>
                        <!-- copy -->
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Copyright info</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" placeholder="e.g: Copyright 2017. All Rights Reserved." name="copyright" value="<?=$list[0]->copyright?>" required>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
        <!-- row -->
        <div class="row">
            <div class="col-md-6">
                <!-- box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Office Hour</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <!-- sun-thu -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label"> Sunday - Thursday <sup style="color: red">*</sup></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" placeholder="8:30 am to 5:00 pm" name="sun_thu" value="<?=$list[0]->sun_thu?>" required>
                            </div>
                        </div>
                        <!-- friday -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label"> Friday <sup style="color: red">*</sup></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" placeholder="8:30 am to 5:00 pm / Closed" name="fri" value="<?=$list[0]->fri?>" required>
                            </div>
                        </div>
                        <!-- saterday -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label"> Saterday <sup style="color: red">*</sup></label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" placeholder="8:30 am to 5:00 pm" name="sat" value="<?=$list[0]->sat?>" required>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box -->
            </div>
            <div class="col-md-6">
                <!-- box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Social Media</h3>
                    </div><!-- /.box-header -->
                        <div class="box-body">
                            <!-- link -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Facebook<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="e.g: http://www.example.com" name="fb" value="<?=$list[0]->fb?>" required>
                                </div>
                            </div>
                            <!-- link -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Twitter<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="e.g: http://www.example.com" name="twt" value="<?=$list[0]->twt?>" required>
                                </div>
                            </div>
                            <!-- link -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Linkedin<sup style="color: red">*</sup></label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" placeholder="e.g: http://www.example.com" name="link" value="<?=$list[0]->link?>" required>
                                </div>
                            </div>
                        </div>
                </div><!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
        <?php form_close(); ?>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->