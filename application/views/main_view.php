<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My view</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <br /> <br /> <br />
        <h3 align="center">Insert Data</h3><br />
        <form method="post" action="<?php echo base_url()?>main/form_validation">
          <?php
           if($this->uri->segment(2) == "inserted")
           {
                echo '<p class="text-success">Data Inserted</p>';
           }
          ?>
          <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" class="form-control" />
            <span class="text-danger"><?php echo form_error("first_name"); ?></span>
          </div>

          <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" class="form-control" />
            <span class="text-danger"><?php echo form_error("last_name"); ?></span>
          </div>

          <div class="form-group">
            <input type="submit" name="insert" value="Insert" class="btn btn-info" />
          </div>
        </form>
        <br /> <br />
        <h3>Fetching</h3> <br />

        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
            <tr>
          <?php
          if($fetch_data->num_rows() > 0)
           {
                foreach($fetch_data->result() as $row)
                {
           ?>
                <tr>
                     <td><?php echo $row->id; ?></td>
                     <td><?php echo $row->first_name; ?></td>
                     <td><?php echo $row->last_name; ?></td>
                </tr>
           <?php
                }
           }
           else
           {
           ?>
                <tr>
                     <td colspan="5">No Data Found</td>
                </tr>
           <?php
           }
           ?>
          </table>
        </div>
    </div>
  </body>
</html>
