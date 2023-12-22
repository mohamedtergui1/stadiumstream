
<?php  ob_start();  ?>
<div class="signup-form">

    <form action="<?= $result ?   '../updateteam'  : '../insertteam' ?>" method="post">

		<h2><?=$title?></h2>

		<p class="hint-text">Fill below form.</p>
       
        <div class="form-group">
            <input type="text" value="<?= $result ? $result->getName() : ''?>"  class="form-control" name="name" placeholder="Enter team name  " required="true" >
        </div>

        <div class="form-group">
        	<input type="test" value="<?= $result ? $result->getCountry() : ''  ?>" class="form-control" name="country" placeholder="Enter country name" required="true">
        </div>
		
		<div class="form-group">
            <textarea class="form-control" name="description" placeholder="Enter Your Address" required="true"><?= $result ? $result->getDescription() : ''  ?></textarea>
        </div>
		<input type="hidden" name="id" value="<?= $result ? $result->getId() : ''?>" >
      
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        </div>

    </form>

	<div class="text-center">View Aready Inserted Data!!  <a href="../../">View</a></div>
    
</div>

<!-- <script src="https://cdn.tiny.cloud/1/8bbf5ux15rmt3choi30m1dz7v2m6imkwwv77qovmswf0mq5z/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<!-- <script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script> -->
<?php  $body=ob_get_clean(); ?>
