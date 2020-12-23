
<?php $this->load->view('Auth/header');  ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">View Blog</h1>
        </div>
   <!--
    1.create controller blogc and load view listv.php    
    2.create view listv.php and copy dashboard common code and add form tag for title,descrition
    

         -->     
    <div class="table-responsive">
      <table class="table table-striped">
         <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Author</th>
            <th width="200">Action</th>
         </tr>
                  <?php foreach($query as $row): ?>
                  <tr>   
                      <td><?php echo $row->blog_id; ?></td>
                      <td><?php echo $row->title; ?></td>
                      <td><?php echo $row->description; ?></td>
                      <td><?php echo $row->author; ?></td>
                      <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                                              </td>
                  </tr>
                  <?php endforeach; ?>
         

      </table>


    </div>           
           
    </main>
<?php $this->load->view('Auth/footer');  ?>
