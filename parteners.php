


<div id="ss" class="mb-4"  >

<br>
<br>
</div>



<div class="container mt-4" id="therapist_id">
  <div class="row justify-content-center">
    <div class="text-center col-lg-8">
      <h1 style="color: green;">
    
    
المعالجين
    
    
    
    </h1>
      <div class="accordion" id="faqAccordion">
        <!-- Accordion items go here -->
      </div>
    </div>
  </div>
</div>
















<div class="container mt-4 d-flex justify-content-center">


  <div class="row">

<?php




$folderPath = 'parteners'; // Replace with the actual folder path

// Open the folder
$folder = opendir($folderPath);

if ($folder) {
   
    
    // Read each file in the folder
    while (($file = readdir($folder)) !== false) {
        // Check if the file is an image (you can add more image extensions if needed)
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif','webp'];
        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
        
        if (in_array(strtolower($fileExtension), $imageExtensions)) {
            //echo $file . "<br>";





echo '







    <div class="col-sm-6 col-lg-3" data-aos-duration="1500" data-aos="zoom-in-up">
      <img   data-myvariable="parteners/'.$file.'" src="parteners/'.$file.'" alt="Image 1" class="img-fluid" data-bs-toggle="modal" data-bs-target="#imageModal1" width="300" height="300" >
    </div>


     


 

    




















';













            
        }
    }
    
    // Close the folder
    closedir($folder);
} else {
    echo "Unable to open the folder.";
}
?>

 
</div>
</div>





















<!-- Modal 1 -->
<div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="model_image" src="https://picsum.photos/id/237/1200/900" alt="Image 1" class="img-fluid">
      </div>
    </div>
  </div>
</div>
 
 









  <style>
    @media (max-width: 576px) {
      .cases_row {
        display: flex;
        flex-wrap: nowrap;
      }
      .col-sm-6 {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }








    .modal-dialog-centered .modal-content .modal-body {
    display: flex;
    justify-content: center;
    align-items: center;
  }



  </style>
</div>



<script>

 //alert("wwe");
$(document).ready(function() {
  $('#imageModal1').on('show.bs.modal', function(event) {

   
    //alert("opend");

    
    var button = $(event.relatedTarget); // Button that triggered the modal
    var myVariable = button.data('myvariable'); // Extract the value from the data-* attribute

    // Update the content of the modal body with the variable value
    //$('#modalContent').text(myVariable);

    $('#model_image').attr('src', myVariable);

    
  });
});

</script>