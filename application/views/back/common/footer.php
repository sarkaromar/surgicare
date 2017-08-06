    </div>
        <!-- ./wrapper -->
        <script src="<?=base_url()?>assets/back/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="<?=base_url()?>assets/back/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/back/dist/js/app.min.js"></script>
        <script src="<?=base_url()?>assets/back/plugins/ckeditor/ckeditor.js"></script>
        <script src="<?=base_url()?>assets/back/dist/js/demo.js"></script>
        <script>
            $(document).ready (function(){
                $(".alert-dismissable").fadeTo(2000, 500).fadeOut(500, function(){
                $(".alert-dismissable").alert('close');
                });
            });
        </script>
    </body>
</html>