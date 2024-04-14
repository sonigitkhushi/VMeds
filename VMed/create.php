<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "medicine";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);


$medcine="";
$stock="";
$expirydate="";

$errorMessage="";
$successMessage="";

if ($SERVER['REQUEST_METHOD'] == 'POST'){
    unset($SERVER['REQUEST_METHOD']);
    $name=$_POST["medicine"];
    $email=$_POST["stock"];
    $phone=$_POST["expirydate"];
    
do{
    if(empty($medcine) || empty($stock) || empty($expirydate) ){
        $errorMessage ="All the fields are required";
        break;
    }
    //add new client to database
    $sql = "INSERT INTO client(medicine,stock,expirydate)";
           "VALUES ('$medicine','$stock','expirydate')";
    $result =$connection->query($sql);
    if(!$result){
        $errorMessage="Invalid query:" ;$connection->error;
        break;
    }

    $medicine="";
    $stock="";
    $expirydate="";
    
    $successMessage="Client added correctly";

    header("location:/VMed/medicine.php");
    exit; 

    
}while(false);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF=8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
    <title>Stock of Medicine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 

</head>
<body>
    <div class="container my-5">
        <h2>New Client</h2>
        <?php 
        if(!empty($errorMessage)){
            echo"
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            </div>
            ";
        }
        ?>
        
<form method="post">
    <div class="row mb-3"><label class="col-sm-3 col-form-label">Medicine</label>
    <div class="col-sm-6">
        <input type="text" class="form-control" name="name" value="<?php echo $medicine; ?>">
    </div>
    </div>
    <div class="row mb-3"><label class="col-sm-3 col-form-label">Stock</label>
    <div class="col-sm-6">
        <input type="text" class="form-control" name="email" value="<?php echo $stock; ?>">
    </div>
    </div>
    <div class="row mb-3"><label class="col-sm-3 col-form-label">Expiry Date</label>
    <div class="col-sm-6">
        <input type="text" class="form-control" name="phone" value="<?php echo $expirydate; ?>">
    </div>
    </div>
    
    <?php
    if(!empty($successMessage)){
        echo"
        <div class='row mb-3>
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$successMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            </div>
            </div>
            </div>
            ";

    }
    

    ?>
    <div class="row mb-3">
        <div class="offset-sm-col-sm-3 d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
        <div class="col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href="/hey/medicine.php" role="button">Cancel</a>
        </div>
    </div>
    

    
</form>
</div>
</body>
</html>