<!DOCTYPE html>
<?php 
include('func1.php');
$con=mysqli_connect("localhost","root","","hospitalms");
$doctor = $_SESSION['dname'];
if(isset($_GET['cancel']))
  {
    $query=mysqli_query($con,"update appointmenttb set doctorStatus='0' where ID = '".$_GET['ID']."'");
    if($query)
    {
      echo "<script>alert('Your appointment successfully cancelled');</script>";
    }
  }

 


?>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#"><i class="fa fa-hospital-o" aria-hidden="true"></i> VMed</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <style >
      .btn-outline-light:hover{
        color: #25bef7;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
      }
    </style>

  <style >
    .bg-primary {
      background: #F0F2F0;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #000C40, #F0F2F0);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #000C40, #F0F2F0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
.list-group-item.active {
  z-index: 2;
    color: #fff;
    background: #F0F2F0; 
    background: -webkit-linear-gradient(to right, #000C40, #F0F2F0);
    background: linear-gradient(to right, #000C40, #F0F2F0);
    border-color: #c3c3c3;
}
.text-primary {
    color: #342ac1!important;
}
  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Enter contact number" aria-label="Search" name="contact">
      <input type="submit" class="btn btn-primary" id="inputbtn" name="search_submit" value="Search">
    </form>
  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
    <h3 style = "margin-left: 47%; padding-bottom: 20px;font-family:'IBM Plex Sans', sans-serif;, margin-left:50px"> Welcome &nbsp<?php echo $_SESSION['dname'] ?>  </h3>
    <div class="row">
  <div class="col-md-4" style="max-width:18%;margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" href="#list-dash" role="tab" aria-controls="home" data-toggle="list">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list" role="tab" data-toggle="list" aria-controls="home">Appointments</a>
      <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list" role="tab" data-toggle="list" aria-controls="home"> Prescription List</a>
      
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 3%;background-color:transparent;">
    <div class="tab-content" id="nav-tabContent" style="width: 950px;">
      <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        
              <div class="container-fluid container-fullw bg-transparent" >
              <div class="row">

               <div class="col-sm-4" style="left: 10%">

                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                     <img style="height:100px;"src="data:image/png;base64,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">
                      <h4 class="StepTitle" style="margin-top: 5%;"> View Appointments</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script>                      
                      <p class="links cl-effect-1">
                        <a href="#list-app" onclick="clickDiv('#list-app-list')">
                          Appointment List
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4" style="left: 15%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                    <img style="height:100px;"src="https://tse3.mm.bing.net/th?id=OIP.IzpEUEpVZ9semQKppNGs7gHaHa&pid=Api&P=0">

                      <h4 class="StepTitle" style="margin-top: 5%;"> Stock of Medicine</h4>
                        
                      <p class="links cl-effect-1">
                        <a id="log" href="Stocky.php">Stock of Medicine</a>
                      </p>
                    </div>
                  </div>
                </div>  
                

                <div class="col-sm-4" style="left: 15%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                    <img style="height:100px;"src="https://previews.123rf.com/images/cowpland/cowpland1706/cowpland170600153/80267165-medical-prescription-icon.jpg">

                      <h4 class="StepTitle" style="margin-top: 5%;"> Prescriptions</h4>
                        
                      <p class="links cl-effect-1">
                        <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                          Prescription List
                        </a>
                      </p>
                    </div>
                  </div>
                </div>    

             </div>
           </div>
         </div>
    

    <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-home-list">
        
              <table class="table table-hover" style="font-size: 13px">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Patient</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    <th scope="col">Prescribe</th>

                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;
                    $dname = $_SESSION['dname'];
                    $query = "select pid,ID,fname,lname,gender,email,contact,appdate,apptime,userStatus,doctorStatus from appointmenttb where doctor='$dname';";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      ?>
                      <tr>
                      <td><?php echo $cnt;?></td>
                        <td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['appdate'];?></td>
                        <td><?php echo $row['apptime'];?></td>
                        <td>
                    <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
                    {
                      echo "Active";
                    }
                    if(($row['userStatus']==0) && ($row['doctorStatus']==1))  
                    {
                      echo "Cancelled by Patient";
                    }

                    if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
                    {
                      echo "Cancelled by You";
                    }
                        ?></td>

                     <td>
                        <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
                        { ?>

													
	                        <a href="doctor-panel.php?ID=<?php echo $row['ID']?>&cancel=update" 
                              onClick="return confirm('Are you sure you want to cancel this appointment ?')"
                              title="Cancel Appointment" tooltip-placement="top" tooltip="Remove"><button class="btn btn-danger">Cancel</button></a>
	                        <?php } else {

                                echo "Cancelled";
                                } ?>
                        
                        </td>

                        <td>

                        <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
                        { ?>

                        <a href="prescribe.php?pid=<?php echo $row['pid']?>&ID=<?php echo $row['ID']?>&fname=<?php echo $row['fname']?>&lname=<?php echo $row['lname']?>&appdate=<?php echo $row['appdate']?>&apptime=<?php echo $row['apptime']?>"
                        tooltip-placement="top" tooltip="Remove" title="prescribe">
                        <button class="btn btn-success">Prescribe</button></a>
                        <?php } else {

                            echo "-";
                            } ?>
                        
                        </td>


                      </tr></a>
                    <?php $cnt++; } ?>
                </tbody>
              </table>
        <br>
      </div>

      

      <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
        <table class="table table-hover" style="font-size: 13px">
                <thead>
                  <tr>
                    
                    <th scope="col">#</th>
                    <th scope="col">Patient</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Disease</th>
                    <th scope="col">Allergy</th>
                    <th scope="col">Prescribe</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;

                    $query = "select pid,fname,lname,ID,appdate,apptime,disease,allergy,prescription from prestb where doctor='$doctor';";
                    
                    $result = mysqli_query($con,$query);
                    if(!$result){
                      echo mysqli_error($con);
                    }
                    
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                      <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>                        
                        <td><?php echo $row['appdate'];?></td>
                        <td><?php echo $row['apptime'];?></td>
                        <td><?php echo $row['disease'];?></td>
                        <td><?php echo $row['allergy'];?></td>
                        <td><?php echo $row['prescription'];?></td>
                    
                      </tr>
                    <?php $cnt++; }
                    ?>
                </tbody>
              </table>
      </div>




      <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list">
        
              <table class="table table-hover" style="font-size: 13px">
                <thead>
                  <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Consultancy Fees</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","hospitalms");
                    global $con;

                    $query = "select * from appointmenttb;";
                    $result = mysqli_query($con,$query);
                    while ($row = mysqli_fetch_array($result)){
              
                      
                  ?>
                      <tr>
                        <td><?php echo $row['fname'];?></td>
                        <td><?php echo $row['lname'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['doctor'];?></td>
                        <td><?php echo $row['docFees'];?></td>
                        <td><?php echo $row['appdate'];?></td>
                        <td><?php echo $row['apptime'];?></td>
                      </tr>
                    <?php } ?>
                </tbody>
              </table>
        <br>
      </div>





      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
                  <div class="col-md-4"><label>Doctor Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="doctor" required></div><br><br>
                  <div class="col-md-4"><label>Password:</label></div>
                  <div class="col-md-8"><input type="password" class="form-control"  name="dpassword" required></div><br><br>
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="demail" required></div><br><br>
                  
                </div>
          <input type="submit" name="docsub" value="Add Doctor" class="btn btn-primary">
        </form>
      </div>
       <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>
    </div>
  </div>
</div>
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
   <style>
        body {
          background-image: url("https://img.freepik.com/free-vector/clean-medical-background_53876-97927.jpg?size=626&ext=jpg");
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center;
          background-size: 100% 100%;
       
        }
        
        </style>
  </body>
</html>