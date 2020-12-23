
<?php $this->load->view('Auth/header');  ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Blog</h1>
        </div>
   <!--
    1.create controller blogc and load virw add.php    
    2.create view add.php and copy dashboard common code and add form tag for title,descrition
    3.create frm validation in controller and apply to add view
    4.add form_error() in view for displaying error for textbox validation
    5.create table blogs and all field from form
    6.create model and load in controller and add database connectivity for inserting data



         -->     
           
        <form name="blogform" id="blogform" action="<?php echo base_url().'Blogc/add';?>" method="post">
          	<div class="form-group">
          		<label>Title</label>
          		<input type="text" name="title" id="title" value="<?php echo set_value('title');?>" class="form-control">
          		<p class="help-block"><?php echo form_error('title');?></p>
          	</div>
          	<div class="form-group">
          		<label>Description</label>
          		<input type="text" name="description" id="description" rows=5 value="<?php echo set_value('description');?>" class="form-control">
          		<p class="help-block"><?php echo form_error('description');?></p>
          	</div>
          	<div class="form-group">
          		<label>Author</label>
          		<input type="text" name="author" id="author" value="<?php echo set_value('author');?>" class="form-control">
          		<p class="help-block"><?php echo form_error('author');?></p>
          	</div>
       
          	<div class="form-group">
          		<button class="btn btn-primary">Create</button>
          	</div>
          </form>
           
    </main>
<?php $this->load->view('Auth/footer');  ?>