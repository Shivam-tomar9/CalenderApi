<?php 
// Include configuration file 
include_once 'config.php'; 
 
$status = $statusMsg = ''; 
if(!empty($_SESSION['status_response'])){ 
    $status_response = $_SESSION['status_response']; 
    $status = $status_response['status']; 
    $statusMsg = $status_response['status_msg']; 
     
    unset($_SESSION['status_response']); 
} 
?>

<!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <div class="alert alert-<?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>
<body>

<div class="cont">

   

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <div class="col-md-8"><br><Br><Br><br>
        <h3> Upload File To the Google Drive</h3>
        <div class="card bg-primary text-white">
          
           

                <form method="post" action="upload.php" class="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Choose File To Upload</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" name="date" class="form-control">
                    </div>
</div>
</div>
                    
                        <input type="submit" class=" btn btn-success" name="submit" value="Upload"/>
                    
                </form>
            </div>
</div>
            
        </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</body>