<div class="col-xs-12">
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table of Leads</h3>
  </div>
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr class="success">
          <th>Full Name</th>
          <th>Address</th>
          <th>Email</th>
          <th>Telephone</th>
          <th>IP Address</th>
          <th>Country Name</th>
          <th>Comments</th>
          <th>Creation Date</th>
          <th>Modified Date</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>
        <?php echo $xml; ?>
      </tbody>
      <tfoot>
        <tr class="success">
          <th>Full Name</th>
          <th>Address</th>
          <th>Email</th>
          <th>Telephone</th>
          <th>IP Address</th>
          <th>Country Name</th>
          <th>Comments</th>
          <th>Creation Date</th>
          <th>Modified Date</th>
          <th>Edit</th>
        </tr>
      </tfoot>
    </table>
</div>
</div>
</div>