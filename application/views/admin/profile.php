<div class="col-sm-2"></div>
<div class="col-sm-8" style="margin-top: 5%;">
    <div class="box">
        <div class="box-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" placeholder="Name" value="<?php echo($name); ?>"></div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" placeholder="Email" value="<?php echo($email); ?>"></div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Current Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="curpass" placeholder="Current Password">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">New Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="newpass" placeholder="New Password">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Re-type New Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="repass" placeholder="Re-type New Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <a id="Submit" class="btn btn-danger">Submit</a>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>
<div class="col-sm-2"></div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script>
    $('#Submit').click(function(){
        var name = $('#name').val();
        var email = $('#email').val();
        var curpass = $('#curpass').val();
        var newpass = $('#newpass').val();
        var repass = $('#repass').val();
        if (newpass != repass) {
            alert("Confirm Password is Wrong");
            return;
        }
        $.ajax({
            url: '<?php echo base_url() ?>saveprofile',
            data: {'name': name, 'email': email, 'curpass': curpass, 'newpass': newpass},
            type: 'POST',
            success: function(data) {
                alert(data);
            }
        });
    });
</script>