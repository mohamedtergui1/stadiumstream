
<?php  ob_start();  ?>
<div class="signup-form">
    <form action="../insertteam" method="POST">
		<h2>Fill Data</h2>
		<p class="hint-text">Fill below form.</p>
       
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Enter team name  " required="true" >
        </div>
        <div class="form-group">
        	<input type="test" class="form-control" name="country" placeholder="Enter country name" required="true">
        </div>
		
		<div class="form-group">
            <textarea class="form-control" name="description" placeholder="Enter Your Address" required="true"></textarea>
        </div>
		
      
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        </div>
    </form>
	<div class="text-center">View Aready Inserted Data!!  <a href="index.php">View</a></div>
</div>
<?php  $body=ob_get_clean(); ?>
