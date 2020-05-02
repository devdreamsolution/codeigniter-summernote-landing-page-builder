<div class="row">
    <div class="col-md-12">
        <div class="" style="margin-top: 10px; margin-bottom: 10px;">
            <button id="edit" class="btn btn-primary" onclick="edit()" type="button">Edit</button>
            <button id="save" class="btn btn-primary" onclick="save()" type="button">Save</button>
        </div>
        <div class="box">
            <div class="box-body">
                <div class="click2edit">
                    <?php echo $strvalue; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var edit = function() {
        $('.click2edit').summernote({
            height: ($(window).height() - 300),
            callbacks: {
                onImageUpload: function(image) {
                    uploadImage(image[0]);
                }
            }
        });
    };

    
    function uploadImage(image) {
        var data = new FormData();
        data.append("file", image);
        $.ajax({
            url: 'adminlandingUpload',
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: "post",
            success: function(url) {
                 $('.click2edit').summernote("insertImage", url);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }

    var save = function() {
        var markup = $('.click2edit').summernote('code');
        console.log(markup);
        $.ajax({
            url: '<?php echo base_url(); ?>adminlandingSave',
            data: {'strvalue': markup},
            type: 'POST',
            dataType: 'json',
            success: function(data) {
                if (data=='success') {

                }
                else
                {

                }
            }
        });
      $('.click2edit').summernote('destroy');
    };
</script>