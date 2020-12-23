<?php $this->load->view('Auth/header');  ?>
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2"> Blog</h1>
        </div>
<div class="container">
        <?php 
        if(!empty($query)){
        foreach($query as $row){ ?>
      <div class="row">
         <!-- <div class="col-md-4">
         <img src="<?php echo base_url().'asset/upload/images'.$row->image; ?>" class="img-responsive"> 
            <img src="images/11.jpeg"/>;
          </div> -->
          <div class="col-md-8">
          	<p class="bg-light pt2 pb-2 pl-3">
          		<a href="#" class="text-muted text-uppercase">DIGITAL MARKETING</a>
            </p>
              <h3><a href=""><?php echo $row->title; ?></a></h3>
          	  <p><?php echo word_limiter(strip_tags($row->description),50); ?></p>
              <p class="text-muted">posted by <strong><?php echo $row->author; ?> </strong> on 
                <strong><?php echo $row->created_at; ?></strong></p>
          </div>
      </div>
      <?php 
          }
         }
      ?>
</div>


<?php $this->load->view('Auth/footer');  ?>