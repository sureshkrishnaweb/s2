<?php
// Database connection
include("../../../dp.php");

// Fetch existing data
$id = 1; // Example ID, change this as needed
$sql = "SELECT * FROM mybanner WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fname = $row['fname'];
    $lname = $row['lname'];
    $mtext = $row['maintext'];
    $mimg = $row['mainimg'];
    $vwork = $row['viewwork'];
    $fcontactme = $row['contactme'];
    $cgtexts = $row['cgtext'];
    $newcgtexts = $row['newcgtext'];
    
  //  $reyimage = $_FILES["mainimg"]["name"];
} else {
    echo "No record found!";
}

// Update logic
if (isset($_POST['update2'])) {
    $new_fname = $_POST['fname'];
$new_lname = $_POST['lname'];
$new_mtext = $_POST['Maintext'];
$new_vwork = $_POST['viewwork'];
$new_fcontactme = $_POST['contactme'];
$new_cgtexts = $_POST['cgtext'];



if(!empty($_FILES["mainimg"]["name"])) {
    // Define folder to store uploaded images
    $target_dir = "uploads/";
    
    // Get the uploaded file name
    $target_file = $target_dir . basename($_FILES["mainimg"]["name"]);
    
    // Move uploaded file to specified directory
    if(move_uploaded_file($_FILES["mainimg"]["tmp_name"], $target_file)) {
        echo "The file ".  ($_FILES["mainimg"]["name"]). " has been uploaded.";
    }}
    else{ echo "image empty.";}


if(!empty($_FILES["mainimg"]["name"])) {
    

$sql = "UPDATE mybanner SET fname = ?, lname = ?, maintext = ?,mainimg= ?,viewwork= ?, contactme = ? ,cgtext = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssi", $new_fname, $new_lname, $new_mtext, $target_file, $new_vwork, $new_fcontactme,$new_cgtexts , $id); // Corrected type definition
}
else{
    $sql = "UPDATE mybanner SET fname = ?, lname = ?, maintext = ?,viewwork= ?, contactme = ?,cgtext = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $new_fname, $new_lname, $new_mtext, $new_vwork, $new_fcontactme ,$new_cgtexts , $id); // Corrected type definition    

}
    if($stmt->execute()) {
        echo "Record updated successfully!";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

?>
<!-- 22222222222222222222 -->

<?php
// Database connection
include("../../../dp.php");

// Fetch existing data
$id = 1; // Example ID, change this as needed
$sql = "SELECT * FROM sidenav WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $simg = $row['sideimg'];
    $sfname = $row['sidefname'];
    $slname = $row['sidelname'];
    $sidechangename = $row['sidechangename'];
    $slinkedin = $row['linkedin'];
    $sgithub = $row['github'];
    $sbehance = $row['behance'];
    $swhatsup = $row['whatsup'];
    $sidenavmail = $row['sidenavmail'];
    $scvbtn = $row['cvbtn'];
    
  //  $reyimage = $_FILES["mainimg"]["name"];
} else {
    echo "No record found!";
}

// Update logic
if (isset($_POST['update'])) {
    $new_sfname = $_POST['sfname'];
$new_slname = $_POST['slname'];
$new_sidechangename= $_POST['sidechangename'];
$new_slinkedin = $_POST['linkedin'];
$new_sgithub = $_POST['github'];
$new_sbehance = $_POST['behance'];
$new_swhatsup = $_POST['whatsup'];
$new_ssidenavmail = $_POST['sidenavmail'];

if(!empty($_FILES["sideimg"]["name"])) {
    // Define folder to store uploaded images
    $target_dir = "uploads/";
    
    // Get the uploaded file name
    $target_file2 = $target_dir . basename($_FILES["sideimg"]["name"]);
    
    // Move uploaded file to specified directory
    if(move_uploaded_file($_FILES["sideimg"]["tmp_name"], $target_file2)) {
        echo "The file ".  ($_FILES["sideimg"]["name"]). " has been uploaded.";
    }}
    else{ echo "image empty.";}

if(!empty($_FILES["scvbtn"]["name"])) {
    // Define folder to store uploaded images
    $target_dir = "uploads/";
    
    // Get the uploaded file name
    $target_file3 = $target_dir . basename($_FILES["scvbtn"]["name"]);
    
    // Move uploaded file to specified directory
    if(move_uploaded_file($_FILES["scvbtn"]["tmp_name"], $target_file3)) {
        echo "The file ".  ($_FILES["scvbtn"]["name"]). " has been uploaded.";
    }}
    else{ echo "image empty.";}

if(!empty($_FILES["scvbtn"]["name"])) {   

$sql = "UPDATE sidenav SET sideimg = ? , sidefname = ?, sidelname = ?, sidechangename = ?,linkedin= ?,github= ?, behance = ? ,whatsup = ? ,sidenavmail = ? ,cvbtn = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssi",$target_file2, $new_sfname, $new_slname, $new_sidechangename,$new_slinkedin, $new_sgithub , $new_sbehance,$new_swhatsup ,$new_ssidenavmail, $target_file3 , $id); // Corrected type definition
}
else{
    $sql = "UPDATE sidenav SET  sidefname = ?, sidelname = ?, sidechangename = ?,linkedin= ?,github= ?, behance = ? ,whatsup = ? ,sidenavmail = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssi", $new_sfname, $new_slname, $new_sidechangename ,$new_slinkedin, $new_sgithub , $new_sbehance,$new_swhatsup ,$new_ssidenavmail, $id); // Corrected type definition    

}
    if($stmt->execute()) {
        echo "Record updated successfully!";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


?>
<!-- // about---- -->
<?php
// Database connection
include("../../../dp.php");

// Fetch existing data
$id = 1; // Example ID, change this as needed
$sql = "SELECT * FROM aboutme WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $abouttitle = $row['title'];
    $abouttext = $row['abouttext'];
    $aboutname = $row['aboutname'];
    $aboutage = $row['age'];
    $aboutphone = $row['phone'];
    $aboutemail = $row['email'];
    $aboutexperience = $row['experience'];
    $aboutnationality = $row['nationality'];
    
    
  //  $reyimage = $_FILES["mainimg"]["name"];
} else {
    echo "No record found!";
}

// Update logic
if (isset($_POST['update3'])) {
    $new_abouttitle = $_POST['title'];
    $new_abouttext= $_POST['abouttext'];
    $new_aboutname= $_POST['aboutname'];
    $new_aboutage = $_POST['age'];
    $new_aboutphone = $_POST['phone'];
    $new_aboutemail = $_POST['email'];
    $new_aboutexperience = $_POST['experience'];
    $new_aboutnationality = $_POST['nationality'];

 
    $sql = "UPDATE aboutme SET title = ? , abouttext = ?, aboutname = ?, age = ?,phone= ?,email= ?, experience = ? ,nationality = ?  WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssi", $new_abouttitle, $new_abouttext, $new_aboutname,$new_aboutage,$new_aboutphone, $new_aboutemail , $new_aboutexperience,$new_aboutnationality, $id); // Corrected type definition
    
    if($stmt->execute()) {
        echo "Record updated successfully!";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Project Add</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->


                <!-- Sidebar Menu -->

                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Project Add</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Project Add</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- Main content -->            
            <section class="content">
            <div class="container-fluid">
                <div class="row flex-row">
                   <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Side Navbar</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                           <form action="" method="POST"  enctype="multipart/form-data">
                            
                           <div class="card-body">
                           Upload Image: <input type="file" name="sideimg" ><br><br>
                           <img src="\mysite/myadmin\pages\examples\<?php echo $simg;?>" alt="" width="20%">
                                <div class="form-group">
                                    <label for="fname">First Name</label>                                   
                                    <input type="text" id="fname" class="form-control" name="sfname" value="<?php echo htmlspecialchars($sfname); ?>" >
                                </div>
                                <div class="form-group">
                                    <label for="lname">last Name</label>
                                    <input type="text" id="lname" class="form-control" name="slname" required value="<?php echo htmlspecialchars($slname); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="fname">Changeble Text</label>                                   
                                    <input type="text" id="fname" class="form-control" name="sidechangename" value="<?php echo ($sidechangename); ?>" required>
                                </div>                           
                               
                                <div class="form-group">
                                <label for="linkedin">LinkedIn:</label>
                                <input type="url" id="linkedin" name="linkedin" class="form-control" value ="<?php echo ($slinkedin); ?>">
                                </div>
                                <div class="form-group">
                                <label for="github">GitHub:</label>
                                <input type="url" id="github" name="github" class="form-control" value ="<?php echo ($sgithub); ?>">
                                </div>
                                <div class="form-group">
                                <label for="behance">Behance:</label>
                                <input type="url" id="behance" name="behance" class="form-control" value ="<?php echo ($sbehance); ?>">
                                </div>
                                <div class="form-group">
                                <label for="whatsup">WhatsApp:</label>
                                <input type="tel" id="whatsup" name="whatsup" class="form-control" value ="<?php echo ($swhatsup); ?>">
                                </div>
                                <div class="form-group">
                                <label for="sidenavmail">Email:</label>
                                <input type="url" id="sidenavmail" name="sidenavmail" class="form-control" value ="<?php echo ($sidenavmail); ?>">
                                </div>                              
                                Upload PDF: <input type="file" id="fileInput" class="input-file" accept="application/pdf" name="scvbtn"><br><br>
                    
                            </div>
                                <input type="submit" value="Update" class="btn btn-success float-right" name="update">
                            </div>                            
                           </form>                           
                        </div>
                        <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Main Name</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                           <form action="" method="POST"  enctype="multipart/form-data">
                           <div class="card-body">
                                <div class="form-group">
                                    <label for="fname">First Name</label>                                   
                                    <input type="text" id="fname" class="form-control" name="fname" value="<?php echo htmlspecialchars($fname); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="lname">last Name</label>
                                    <input type="text" id="lname" class="form-control" name="lname" required value="<?php echo htmlspecialchars($lname); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="fname">Changeble Text</label>                                   
                                    <input type="text" id="fname" class="form-control" name="cgtext" value="<?php echo htmlspecialchars($cgtexts); ?>" required>
                                </div>
                                
                                <div class="form-group">
                         <label>Textarea</label>
                         <textarea class="form-control" rows="3" name="Maintext" placeholder="Enter ..."><?php echo $mtext;?></textarea><br>
                         Upload Image: <input type="file" name="mainimg" ><br><br>
                         <img src="\mysite/myadmin\pages\examples\<?php echo $mimg;?>" alt="" width="20%">

                         <div class="form-group">
                                    <label for="fname">View Work btn</label>                                   
                                    <input type="text" id="fname" class="form-control" name="viewwork" value="<?php echo htmlspecialchars($vwork); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="fname">contact btn</label>                                   
                                    <input type="text" id="fname" class="form-control" name="contactme" value="<?php echo htmlspecialchars($fcontactme); ?>" >
                                </div>
                            </div>
                                <input type="submit" value="Update" class="btn btn-success float-right" name="update2">
                            </div>
                            
                           </form>
                           
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">About Me</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                           <form action="" method="POST"  enctype="multipart/form-data">
                           <div class="card-body">
                           <div class="form-group">
                                    <label for="fname">About title</label>                                   
                                    <input type="text" id="abouttext" class="form-control" name="title" value="<?php echo ($abouttitle) ?>" >
                                </div>
                                <div class="form-group">
                                <label>Textarea</label>
                                <textarea class="form-control" rows="3" name="abouttext" placeholder="Enter ..."><?php echo ($abouttext) ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="lname">detail</label>
                                    <input type="text" id="lname" class="form-control" name="aboutname" required placeholder= "Name"  value="<?php echo htmlspecialchars($aboutname); ?>"><br>
                                    <input type="text" id="lname" class="form-control" name="age" required  placeholder= "Age" value="<?php echo htmlspecialchars($aboutage); ?>"><br>
                                    <input type="text" id="lname" class="form-control" name="phone" required placeholder= "Phone"  value="<?php echo htmlspecialchars($aboutphone); ?>"><br>
                                    <input type="text" id="lname" class="form-control" name="email" required placeholder= "Email"  value="<?php echo htmlspecialchars($aboutemail); ?>"><br>
                                    <input type="text" id="lname" class="form-control" name="experience" required  placeholder= "Experience" value="<?php echo htmlspecialchars($aboutexperience); ?>"><br>
                                    <input type="text" id="lname" class="form-control" name="nationality" required placeholder= "Nationality"  value="<?php echo htmlspecialchars($aboutnationality); ?>">
                                </div>                              
                            </div>
                                <input type="submit" value="Update" class="btn btn-success float-right" name="update3">
                            </div>
                           </form>
                        </div>
                       
                        <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Education Details</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                           <form action="" method="POST"  enctype="multipart/form-data" id="educationForm">
                           <div class="card-body" id="educationFields" >                        
                                
                           <div class="form-group education-entry">
                                    <label for="lname">detail</label>
                                    <input type="text" id="lname" class="form-control" name="degree[]"   placeholder= "degree" value=""><br>
                                    <input type="text" id="lname" class="form-control" name="institution[]"  placeholder= "institution"  value="<?php echo htmlspecialchars($aboutnationality); ?>"><br>
                                    <label>Textarea</label>
                                    <textarea class="form-control" rows="3" name="description[]" placeholder="Enter ..."><?php echo ($abouttext) ?></textarea>
                                </div>                              
                            </div>
                            <button type="button" onclick="addMore()" class="btn">+ Add More</button>
                                <input type="submit" value="Update" class="btn btn-success float-right" name="update4">
                            </div>
                           </form>
                        </div>
                        </div>
                        <script>
        function addMore() {
            const newEntry = document.createElement("div");
            newEntry.classList.add("education-entry");
            newEntry.innerHTML = `
                 <div class="form-group">
                                    <label for="lname">detail</label>
                                    <input type="text" id="lname" class="form-control" name="degree[]"   placeholder= "degree" value=""><br>
                                    <input type="text" id="lname" class="form-control" name="institution[]"  placeholder= "institution"  value="<?php echo htmlspecialchars($aboutnationality); ?>"><br>
                                    <label>Textarea</label>
                                    <textarea class="form-control" rows="3" name="edcdescription[]" placeholder="Enter ..."><?php echo ($abouttext) ?></textarea>
                                </div>                              
                            </div>
                <hr>
            `;
            document.getElementById("educationFields").appendChild(newEntry);
        }
    </script>
                    </div>
                    </div>
                 </div>
                        
                    </div>
                 </div>
                
                </div>
                </div>
            </section>
          
          
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>

</html>