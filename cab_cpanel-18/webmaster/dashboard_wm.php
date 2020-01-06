<?php
include "initialization.php";
check_logged_in();
$sql = "SELECT * FROM `article` ORDER BY `File_Id` DESC";
$article_rows = mysqli_query($con, $sql);
$sql1 = "SELECT * FROM `industry_news` ORDER BY `Id` DESC ";
$inews_rows = mysqli_query($con, $sql1);
$sql2 = "SELECT * FROM `mock_test` ORDER BY `Id` DESC";
$mk_rows = mysqli_query($con, $sql2);
$sql4 = "SELECT * FROM `forms` ORDER BY `Id` DESC ";
$form_rows = mysqli_query($con, $sql4);
$sql3 = "SELECT * FROM `user` ORDER BY `id` DESC";
$user_rows = mysqli_query($con, $sql3);
$sql4 = "SELECT * FROM `faqs` ORDER BY `Id` DESC";
$faq_rows = mysqli_query($con, $sql4);
$sql5 = "SELECT * FROM `register` ORDER BY `Id` DESC";
$reg_rows = mysqli_query($con, $sql5);
$sql6 = "SELECT * FROM `contact_us` ORDER BY `Id` DESC";
$contact_rows = mysqli_query($con, $sql6);
$sql7 = "SELECT * FROM `blog` ORDER BY `post_id` DESC";
$blog_rows = mysqli_query($con, $sql7);

$sql8 = "SELECT * FROM `post_comments` ORDER BY `id` DESC";
$commt_rows = mysqli_query($con, $sql8);

$userid=$_SESSION['id'];
$sql3 = "SELECT * FROM `user` WHERE  `id`=$userid";
$rows = mysqli_query($con, $sql3);
$row=mysqli_fetch_array($rows);
$role=$row['role'];
?>
<!DOCTYPE html>
<html>

<head>
  <title>LIC</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/css/mdb.min.css" rel="stylesheet">
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/js/mdb.min.js"></script>
  <script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="ckeditor/ckeditor.js"></script>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!--The Header -->
  <nav class="navbar navbartop" style="background-color: #FBC707;">
    <a href="dashboard_wm.php"><img src="img/logo.png" style="width:120px;height:70px;"></a>
    <div style="color: black;margin-left:-130px;">
      <a class="navbar-brand" href="#" style="color: black;"><b>Welcome to 
     <?php if($role=='WebMaster'){?>
      WebMaster Panel
       <?php }
        else
       {?>
      Support panel
       <?php } ?>
</b></a>
    </div>
    <div class=" navbar-brand float-right logout">
      <a href="logout.php" style="text-decoration:none;color:Black;">
        <span> <b>
            <pre>  <i class="fas fa-user-circle" style="font-size:30px;"></i><br>Sign-Out</b></pre>
      </a>
      </span>
    </div>
  </nav>
  <!--The Header closed-->
  <div class="tab-content">
    <!--The Content of whole page started-->
    <div class="tab-pane fade in show active" id="panel555" role="tabpanel">
      <!--The Side bar started-->
      <div class="row">
        <div class="col-md-2 tab_bar" style="background-color:#1D4E9E">
          <ul class="nav md-pills pills-primary flex-column tab_style" role="tablist">
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel25" role="tab" style="overflow:hidden">Dashboard</a>
            </li>
            <?php if($role=='WebMaster'){?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel23" role="tab" style="border-top: 1px solid white;">User</a>
            </li>
            <?php } ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel24" role="tab" style="border-top: 1px solid white;">Mock Test</a>
            </li>
            <li class="nav-item dropdown" id=dropdownn>
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="border-top: 1px solid white;">Knowledge Center</a>
              <div class="dropdown-menu dropdown-default" style="background-color:#1D4E9E;margin-top:-3.5%;width:100% ">
                <a class="dropdown-item" data-toggle="tab" href="#panel21" id="article" role="tab" style="border-top: 1px solid white;">Articles</a>
                <a class="dropdown-item" data-toggle="tab" href="#panel22" role="tab" style="border-top: 1px solid white;">Industry News</a>
                <a class="dropdown-item" data-toggle="tab" href="#panel26" role="tab" style="border-top: 1px solid white;">Forms</a>
                <a class="dropdown-item" data-toggle="tab" href="#panel27" role="tab" style="border-top: 1px solid white;">FAQ's</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#blog_panel" role="tab" style="border-top: 1px solid white;">Blog</a>
            </li>
            <?php if($role=='WebMaster'){?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel30" role="tab" style="border-top: 1px solid white;">Agent Registration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel31" role="tab" style="border-top: 1px solid white;">Visitors Queries</a>
            </li>
            <?php } ?>
          </ul>
        </div>
        
        <div class="col-md-10">
           <!--The alert part-->
           <div style="margin-left:-1.3%">
  <?php
    $change_password_successfully = (isset($_SESSION['cp_scs'])) ? $_SESSION['cp_scs'] : '';
    if (!empty($change_password_successfully)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Your password changed successfully..!</strong>
          </div>';
      unset($_SESSION['cp_scs']);
    }
    $no_paper_type = (isset($_SESSION['no_paper_type'])) ? $_SESSION['no_paper_type'] : '';
    if (!empty($no_paper_type)) {
      echo '<div class="alert alert-danger alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>You can only upload the file of type pdf and docx</strong>
          </div>';
      unset($_SESSION['no_paper_type']);
    }
    $paper_size_er = (isset($_SESSION['paper_size_er'])) ? $_SESSION['paper_size_er'] : '';
    if (!empty($paper_size_er)) {
      echo '<div class="alert alert-danger alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Your file is too big</strong>
          </div>';
      unset($_SESSION['paper_size_er']);
    }
    $paper_upl_scs = (isset($_SESSION['paper_upl_scs'])) ? $_SESSION['paper_upl_scs'] : '';
    if (!empty($paper_upl_scs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Paper uploaded succeccfully</strong>
          </div>';
      unset($_SESSION['paper_upl_scs']);
    }
    $no_form_type = (isset($_SESSION['no_form_type'])) ? $_SESSION['no_form_type'] : '';
    if (!empty($no_form_type)) {
      echo '<div class="alert alert-danger alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>You can only upload the file of type pdf and docx</strong>
          </div>';
      unset($_SESSION['no_form_type']);
    }
    $paper_size_er = (isset($_SESSION['form_size_er'])) ? $_SESSION['form_size_er'] : '';
    if (!empty($form_size_er)) {
      echo '<div class="alert alert-danger alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Your file is too big</strong>
          </div>';
      unset($_SESSION['form_size_er']);
    }
    $form_upl_scs = (isset($_SESSION['form_upl_scs'])) ? $_SESSION['form_upl_scs'] : '';
    if (!empty($form_upl_scs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Form uploaded succeccfully</strong>
          </div>';
      unset($_SESSION['form_upl_scs']);
    }
    $article_upl_scs = (isset($_SESSION['article_upl_scs'])) ? $_SESSION['article_upl_scs'] : '';
    if (!empty($article_upl_scs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Article uploaded succeccfully</strong>
          </div>';
      unset($_SESSION['article_upl_scs']);
    }
    $no_article_type = (isset($_SESSION['no_article_type'])) ? $_SESSION['no_article_type'] : '';
    if (!empty($no_article_type)) {
      echo '<div class="alert alert-danger alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>You can only upload the file of type jpg , jpeg , png , pdf and docx</strong>
          </div>';
      unset($_SESSION['no_article_type']);
    }
    $article_size_er = (isset($_SESSION['article_size_er'])) ? $_SESSION['article_size_er'] : '';
    if (!empty($article_size_er)) {
      echo '<div class="alert alert-danger alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Your file is too big</strong>
          </div>';
      unset($_SESSION['article_size_er']);
    }
    $add_user = (isset($_SESSION['user_added'])) ? $_SESSION['user_added'] : '';
    if (!empty($add_user)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>User Added succeccfully</strong>
          </div>';
      unset($_SESSION['user_added']);
    }
    $inews_upl_scs = (isset($_SESSION['inews_upl_scs'])) ? $_SESSION['inews_upl_scs'] : '';
    if (!empty($inews_upl_scs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Industry News uploaded succeccfully</strong>
          </div>';
      unset($_SESSION['inews_upl_scs']);
    }
    $post_upl_scs = (isset($_SESSION['post_upl_scs'])) ? $_SESSION['post_upl_scs'] : '';
    if (!empty($post_upl_scs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Blog Post uploaded succeccfully</strong>
          </div>';
      unset($_SESSION['post_upl_scs']);
    }
    $inews_size_er = (isset($_SESSION['inews_size_er'])) ? $_SESSION['inews_size_er'] : '';
    if (!empty($inews_size_er)) {
      echo '<div class="alert alert-danger alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Your file is too big</strong>
          </div>';
      unset($_SESSION['inews_size_er']);
    }
    $no_inews_type = (isset($_SESSION['no_inews_type'])) ? $_SESSION['no_inews_type'] : '';
    if (!empty($no_inews_type)) {
      echo '<div class="alert alert-danger alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>You can only upload the file of type jpg , jpeg and png</strong>
          </div>';
      unset($_SESSION['no_inews_type']);
    }
    $faq_sucs = (isset($_SESSION['faq_upl_scs'])) ? $_SESSION['faq_upl_scs'] : '';
    if (!empty($faq_sucs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>FAQ uploaded succeccfully</strong>
          </div>';
      unset($_SESSION['faq_upl_scs']);
    }
    $delete_user_sucs = (isset($_SESSION['delete_user_scs'])) ? $_SESSION['delete_user_scs'] : '';
    if (!empty($delete_user_sucs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>User deleted succeccfully</strong>
          </div>';
      unset($_SESSION['delete_user_scs']);
    }
    $delete_post_sucs = (isset($_SESSION['delete_post_scs'])) ? $_SESSION['delete_post_scs'] : '';
    if (!empty($delete_post_sucs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Post deleted succeccfully</strong>
          </div>';
      unset($_SESSION['delete_post_scs']);
    }
    $delete_paper_sucs = (isset($_SESSION['delete_paper_scs'])) ? $_SESSION['delete_paper_scs'] : '';
    if (!empty($delete_paper_sucs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Paper deleted succeccfully</strong>
          </div>';
      unset($_SESSION['delete_paper_scs']);
    }
    $delete_article_sucs = (isset($_SESSION['delete_article_scs'])) ? $_SESSION['delete_article_scs'] : '';
    if (!empty($delete_article_sucs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Article deleted succeccfully</strong>
          </div>';
      unset($_SESSION['delete_article_scs']);
    }
    $delete_inews_sucs = (isset($_SESSION['delete_inews_scs'])) ? $_SESSION['delete_inews_scs'] : '';
    if (!empty($delete_inews_sucs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Industry News deleted succeccfully</strong>
          </div>';
      unset($_SESSION['delete_inews_scs']);
    }
    $delete_form_sucs = (isset($_SESSION['delete_form_scs'])) ? $_SESSION['delete_form_scs'] : '';
    if (!empty($delete_form_sucs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Form deleted succeccfully</strong>
          </div>';
      unset($_SESSION['delete_form_scs']);
    }
    $delete_faq_sucs = (isset($_SESSION['delete_faq_scs'])) ? $_SESSION['delete_faq_scs'] : '';
    if (!empty($delete_faq_sucs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>FAQ deleted succeccfully</strong>
          </div>';
      unset($_SESSION['delete_faq_scs']);
    }
    $delete_comment_sucs = (isset($_SESSION['delete_comment_scs'])) ? $_SESSION['delete_comment_scs'] : '';
    if (!empty($delete_comment_sucs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Comment deleted succeccfully</strong>
          </div>';
      unset($_SESSION['delete_comment_scs']);
    }
    $paper_upd_scs = (isset($_SESSION['paper_upd_scs'])) ? $_SESSION['paper_upd_scs'] : '';
    if (!empty($paper_upd_scs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Paper updated succeccfully</strong>
          </div>';
      unset($_SESSION['paper_upd_scs']);
    }
    $article_upd_scs = (isset($_SESSION['article_upd_scs'])) ? $_SESSION['article_upd_scs'] : '';
    if (!empty($article_upd_scs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Article updated succeccfully</strong>
          </div>';
      unset($_SESSION['article_upd_scs']);
    }
    $inews_upd_scs = (isset($_SESSION['inews_upd_scs'])) ? $_SESSION['inews_upd_scs'] : '';
    if (!empty($inews_upd_scs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Industry News updated succeccfully</strong>
          </div>';
      unset($_SESSION['inews_upd_scs']);
    }
    $form_upd_scs = (isset($_SESSION['form_upd_scs'])) ? $_SESSION['form_upd_scs'] : '';
    if (!empty($form_upd_scs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Form updated succeccfully</strong>
          </div>';
      unset($_SESSION['form_upd_scs']);
    }
    $faq_upd_scs = (isset($_SESSION['faq_upd_scs'])) ? $_SESSION['faq_upd_scs'] : '';
    if (!empty($faq_upd_scs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>FAQ updated succeccfully</strong>
          </div>';
      unset($_SESSION['faq_upd_scs']);
    }
    $user_upd_scs = (isset($_SESSION['user_upd_scs'])) ? $_SESSION['user_upd_scs'] : '';
    if (!empty($user_upd_scs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>User Details updated succeccfully</strong>
          </div>';
      unset($_SESSION['user_upd_scs']);
    }
    $blog_upd_scs = (isset($_SESSION['blog_upd_scs'])) ? $_SESSION['blog_upd_scs'] : '';
    if (!empty($blog_upd_scs)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Post updated succeccfully</strong>
          </div>';
      unset($_SESSION['blog_upd_scs']);
    }
    $ac_vst = (isset($_SESSION['You are accepted the visitor'])) ? $_SESSION['You are accepted the visitor'] : '';
    if (!empty($ac_vst)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>You are accepted the visitor</strong>
          </div>';
      unset($_SESSION['You are accepted the visitor']);
    }
    $rej_vst = (isset($_SESSION['You are rejected the Aspirant'])) ? $_SESSION['You are rejected the Aspirant'] : '';
    if (!empty($rej_vst)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>You are rejected the Aspirant</strong>
          </div>';
      unset($_SESSION['You are rejected the Aspirant']);
    }
    $respn = (isset($_SESSION['You are responded'])) ? $_SESSION['You are responded'] : '';
    if (!empty($respn)) {
      echo '<div class="alert alert-success alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>You are responded</strong>
          </div>';
      unset($_SESSION['You are responded']);
    }
    $mailerror = (isset($_SESSION['mailerror'])) ? $_SESSION['mailerror'] : '';
    if (!empty($mailerror)) {
      echo '<div class="alert alert-danger alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Something went wrong! please try again!!</strong>
          </div>';
      unset($_SESSION['mailerror']);
    }
    $user_deleteerror = (isset($_SESSION['parent_user_deleteerror'])) ? $_SESSION['parent_user_deleteerror'] : '';
    if (!empty($user_deleteerror)) {
      echo '<div class="alert alert-danger alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Cannot delete a parent user!!</strong>
          </div>';
      unset($_SESSION['parent_user_deleteerror']);
    }
    $email_exist = (isset($_SESSION['email_exist'])) ? $_SESSION['email_exist'] : '';
    if (!empty($email_exist)) {
      echo '<div class="alert alert-danger alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>This email already exists!!</strong>
          </div>';
      unset($_SESSION['email_exist']);
    }
    $userid_exist = (isset($_SESSION['userid_exist'])) ? $_SESSION['userid_exist'] : '';
    if (!empty($userid_exist)) {
      echo '<div class="alert alert-danger alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>This UserID already exists!!</strong>
          </div>';
      unset($_SESSION['userid_exist']);
    }
    $error = (isset($_SESSION['error'])) ? $_SESSION['error'] : '';
    if (!empty($error)) {
      echo '<div class="alert alert-danger alert-dismissible"">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Something went wrong! please try again!!</strong>
          </div>';
      unset($_SESSION['error']);
    }
    
  ?>
  </div>
  <!--The alert part closed-->
          <!-- The content of each link in the side bar -->
          <div class="tab-content vertical">
            <!-- The article panel started -->
            <div class="tab-pane fade" id="panel21" role="tabpanel" style="">
              <!--The tabs of article -->
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#upload_article" role="tab" aria-controls="home" aria-selected="true"><span class="anchor" id="up_Ar"></span>Upload Article</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="list_articles" data-toggle="tab" href="#list_article" role="tab" aria-controls="profile" aria-selected="false">List of Articles</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <!--The content inside the tabs of article-->
                <div class="tab-pane fade show active" id="upload_article" role="tabpanel" aria-labelledby="home-tab">
                  <!--The upload article started-->
                  <form action="upload_article.php" method="post" enctype="multipart/form-data" class="text-center border border-light p-5" style="width: 60%;margin-top: 3%;">
                    <input type="text" class="form-control mb-4" name="Article_Title" placeholder="Title" required>
                    <input type="text" class="form-control mb-4" name="Article_Source" placeholder="Source" required>
                    <input type="text" class="form-control mb-4" name="Article_Date" placeholder="Published_Date" onfocus="(this.type='date')" required>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="Article" required>
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>
                    <textarea rows="3" cols="10" class="form-control mb-4 ckeditor" placeholder="Description" name="description" required></textarea>
                    <button class="btn btn-block" name="submit" type="submit" style="width: 25%;background-color:#1D4E9E;margin-left: 200px;margin-top: 30px ">Submit</button>
                  </form>
                </div>
                <div class="tab-pane fade" id="list_article" role="tabpanel" aria-labelledby="profile-tab">
                  <!--The List of aricles-->
                  <table class="table" id="mydatatable3">
                    <thead>
                      <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Source</th>
                        <th scope="col">Published Date</th>
                        <th scope="col">Uploaded Date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $x = 0;
                      while ($article_row = mysqli_fetch_array($article_rows)) {
                        ?>
                        <tr>
                          <th scope="row"><?php echo ++$x; ?></th>

                          <?php
                          $Ext = explode('/', $article_row['Content-type']);
                          $ActualExt = strtolower(end($Ext));
                          if ($ActualExt == 'pdf') {
                            ?>
                            <div class="container">
                              <td width="170px">
                                <a data-toggle="modal" data-target="#myModal<?php echo '-a' . $x ?>" style="color: blue;text-decoration: underline;"><?php echo $article_row['Title']; ?></a><i class="fas fa-file-pdf fa-1x text-danger"></i>
                                <?php
                                if (date('F-Y', strtotime($article_row['Published_Date'])) == date('F-Y')) {
                                  echo "<img src='img/front-end/new1.gif' height=30' width='40'>";
                                }
                                ?>
                              </td>
                              <div id="myModal<?php echo '-a' . $x ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                      <embed src="<?php echo $article_row['File_Path']; ?>" frameborder="0" width="100%" height="500px">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php } elseif($ActualExt=='jpg'|| $ActualExt=='jpeg'|| $ActualExt=='png') {
                          ?>
                            
                          <td>
                            <a href="display_article.php?<?php echo 'file_id=' . $article_row['File_Id'] ?>" style="color: blue;text-decoration: underline;"><?php echo $article_row['Title']; ?></a>
                            <?php if (date('F-Y', strtotime($article_row['Published_Date'])) == date('F-Y')) {
                              echo "<img src='img/front-end/new1.gif' height=30' width='40'>";
                            }
                            ?>
                          </td>
                          <?php }
                          
                          else{
                            ?>
                              
                            <td>
                              <a href="<?php echo $article_row['File_Path']; ?>" style="color: blue;text-decoration: underline;" download><?php echo $article_row['Title']; ?><i class='fas fa-file-alt' style='color:#6495ed'>  </i></a>
                              <?php if (date('F-Y', strtotime($article_row['Published_Date'])) == date('F-Y')) {
                                echo "<img src='img/front-end/new1.gif' height=30' width='40'>";
                              }
                              ?>
                            </td>
                            <?php }

                          ?>

                          <td><?php echo $article_row['Description']; ?></td>
                          <td><?php echo $article_row['Source'] ?></td>
                          <td><?php echo date('d-F-Y', strtotime($article_row['Published_Date'])) ?></td>
                          <td><?php echo date('d-F-Y', strtotime($article_row['Reproduction'])) ?></td>
                          <td>
                            <div class="form-modification">
                              <form action="update_article.php?<?php echo 'Id=' . $article_row['File_Id'] ?>" enctype="multipart/form-data" method="post" class="edit-form">
                                <div class="modal fade" id="modalupdatpaper<?php echo '-a' . $x; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document" style="max-width:750px;">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3>Edit</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-1">
                                        <input type="text" name="article_title" class="form-control mb-4" placeholder="Title" value="<?php echo $article_row['Title'] ?>" required>
                                        <input type="text" name="article_source" class="form-control mb-4" placeholder="Source" value="<?php echo $article_row['Source'] ?>" required>
                                        <input type="text" class="form-control mb-4" name="article_Date" placeholder="Published_Date" onfocus="(this.type='date')" value="<?php echo $article_row['Published_Date'] ?>" required>
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                          </div>
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="article" value="<?php echo $form_row['File_Path'] ?>">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                          </div>
                                        </div>
                                        <textarea rows="3" cols="10" name="description" class="form-control mb-4 ckeditor" placeholder="Description" required><?php echo $article_row['Description'] ?></textarea>
                                      </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" name="submit">Update</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div class="form-deletion">
                              <form action="delete_article.php?<?php echo 'Id=' . $article_row['File_Id'] ?>" method="post">
                                <div class="modal fade" id="modaldeletepaper<?php echo '-a' . $x; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <h4 style="margin-left: 23px;">Are you sure you want to delete this item?</h4>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-block" title="click to Delete model paper details" style="width: 25%;background-color:#1D4E9E" type="submit" name="delete">Delete</button>
                                        &nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" data-dismiss="modal">Cancel</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <?php if($role=='WebMaster' || ($role=='Staff' && $article_row['User_Id']==$userid)){?>
                            <div class="btn-group">
                              <a class="btn btn-light " style="width:20px;height:35px" title="click to update article details" data-toggle="modal" data-target="#modalupdatpaper<?php echo '-a' . $x; ?>">
                                <i class="far fa-edit"></i>
                              </a>&nbsp;&nbsp;&nbsp;
                              <button class="btn btn-light " style="width:20px;height:35px" title="click to article paper details" data-toggle="modal" data-target="#modaldeletepaper<?php echo '-a' . $x; ?>">
                                <i class="far fa-trash-alt"></i>
                              </button>
                            </div>
                            <?php } ?>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- The article panel closed -->
            <!-- The Industry news panel started -->
            <div class="tab-pane fade" id="panel22" role="tabpanel" style="">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#inew" role="tab" aria-controls="home" aria-selected="true">Upload Industry News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#inewsss" role="tab" aria-controls="profile" aria-selected="false">List of IndustryNews</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <!--The Upload Industry News-->
                <div class="tab-pane fade show active" id="inew" role="tabpanel" aria-labelledby="home-tab">
                  <form action="upload_inews.php" method="post" enctype="multipart/form-data" class="text-center border border-light p-5" style="width: 60%;margin-top: 3%;">
                    <input type="text" class="form-control mb-4" name="inews_Title" placeholder="Title" required>
                    <input type="text" class="form-control mb-4" name="inews_Source" placeholder="Source" required>
                    <input type="text" class="form-control mb-4" name="inews_Date" placeholder="Published_Date" onfocus="(this.type='date')" required>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="inews" required>
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>
                    <textarea rows="3" cols="10" class="form-control mb-4 ckeditor" placeholder="Description" name="description" required></textarea>
                    <button class="btn btn-block" type="submit" name="submit" style="width: 25%;background-color:#1D4E9E;margin-left: 200px;margin-top: 30px ">Submit</button>
                  </form>
                </div>
                <!--The List of Industry News-->
                <div class="tab-pane fade" id="inewsss" role="tabpanel" aria-labelledby="profile-tab">
                  <table class="table inews-table" id="mydatatable1">
                    <thead>
                      <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Title</th>
                        <th scope="col" style="width: 181px;">Description</th>
                        <th scope="col">Source</th>
                        <th scope="col">Published Date</th>
                        <th scope="col">Uploaded Date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $x1 = 0;
                      while ($inews_row = mysqli_fetch_array($inews_rows)) {
                        ?>
                        <tr>
                          <th scope="row"><?php echo ++$x1; ?></th>
                          <?php
                          $Ext = explode('/', $inews_row['Content-type']);
                          $ActualExt = strtolower(end($Ext));
                          if ($ActualExt == 'pdf') {
                            ?>
                            <div class="container">
                              <td width="170px">
                                <a data-toggle="modal" data-target="#myModal<?php echo '-i' . $x1 ?>" style="color: blue;text-decoration: underline;"><?php echo $inews_row['Title']; ?></a><i class="fas fa-file-pdf fa-1x text-danger"></i>
                                <?php
                                if (date('F-Y', strtotime($inews_row['Published_Date'])) == date('F-Y')) {
                                  echo "<img src='img/front-end/new1.gif' height=30' width='40'>";
                                }
                                ?>
                              </td>
                              <div id="myModal<?php echo '-i' . $x1 ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                      <embed src="<?php echo $inews_row['File_Path']; ?>" frameborder="0" width="100%" height="500px">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php } else if($ActualExt=='jpg'|| $ActualExt=='jpeg'|| $ActualExt=='png') {
                          ?>
                            <td width="170px"><a href="display_IndustryNews.php?id='<?php echo $inews_row['Id'] ?>'" style="color: blue;text-decoration: underline;"><?php echo $inews_row['Title'] ?></a>
                              <?php
                              if (date('F-Y', strtotime($inews_row['Published_Date'])) == date('F-Y')) {
                                echo "<img src='img/front-end/new1.gif' height=30' width='40'>";
                              }
                              ?>
                            </td>
                          <?php }
                          
                          else{
                            ?>
                              <td width="170px"><a href="<?php echo $inews_row['File_Path']; ?>" style="color: blue;text-decoration: underline;" download><?php echo $inews_row['Title'] ?> <i class='fas fa-file-alt' style='color:#6495ed'>  </i></a>
                                <?php
                                if (date('F-Y', strtotime($inews_row['Published_Date'])) == date('F-Y')) {
                                  echo "<img src='img/front-end/new1.gif' height=30' width='40'>";
                                }
                                ?>
                              </td>
                            <?php }

                          ?>
                          
                           <div class="view-content">
                                <div class="modal fade" id="modalviewdesc<?php echo '-i' . $x1; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                                  <div class="modal-dialog" role="document" style="max-width:750px;">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="container">
                                      <?php echo $inews_row['Description']; ?>
                                      </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="button" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          
                          <td><a style="color: blue;text-decoration: underline;" data-toggle="modal" data-target="#modalviewdesc<?php echo '-i' . $x1; ?>">Click to view Description</a>
                          </td>
                          <td><?php echo $inews_row['Source']; ?></td>
                          <td><?php echo date('d-F-Y', strtotime($inews_row['Published_Date'])) ?></td>
                          <td><?php echo date('d-F-Y', strtotime($inews_row['Reproduction'])) ?></td>
                          <td>
                            <div class="form-modification">
                              <form action="update_inews.php?<?php echo 'Id=' . $inews_row['Id'] ?>" enctype="multipart/form-data" method="post" class="edit-form">
                                <div class="modal fade" id="modalupdatpaper<?php echo '-i' . $x1; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document" style="max-width:750px;">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-1">
                                        <input type="text" name="inews_title" class="form-control mb-4" placeholder="Title" value="<?php echo $inews_row['Title'] ?>" required>
                                        <input type="text" name="inews_source" class="form-control mb-4" placeholder="Source" value="<?php echo $inews_row['Source'] ?>" required>
                                        <input type="text" class="form-control mb-4" name="inews_Date" placeholder="Published_Date" onfocus="(this.type='date')" value="<?php echo date('d-F-Y', strtotime($inews_row['Published_Date'])) ?>" required>
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                          </div>
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="inews" value="<?php echo $form_row['File_Path'] ?>">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                          </div>
                                        </div>
                                        <textarea rows="3" cols="10" name="description" class="form-control mb-4 ckeditor" placeholder="Description" required><?php echo $inews_row['Description'] ?></textarea>
                                      </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" name="submit">Update</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div class="form-deletion">
                              <form action="delete_inews.php?<?php echo 'Id=' . $inews_row['Id'] ?>" method="post">
                                <div class="modal fade" id="modaldeletefaq<?php echo '-i' . $x1; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <h4 style="margin-left: 23px;">Are you sure you want to delete this item?</h4>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-block" title="click to Delete faq details" style="width: 25%;background-color:#1D4E9E" type="submit" name="delete">Delete</button>
                                        &nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <?php if($role=='WebMaster' || ($role=='Staff' && $inews_row['User_Id']==$userid)){?>
                            <div class="btn-group">
                              <a class="btn btn-light " style="width:20px;height:35px" title="click to update industry news details" data-toggle="modal" data-target="#modalupdatpaper<?php echo '-i' . $x1; ?>">
                                <i class="far fa-edit"></i>
                              </a>&nbsp;&nbsp;&nbsp;
                              <button class="btn btn-light " style="width:20px;height:35px" title="click to update industry news details" data-toggle="modal" data-target="#modaldeletefaq<?php echo '-i' . $x1; ?>"><i class="far fa-trash-alt"></i></button>
                            </div>
                            <?php } ?>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- The Industry News panel closed -->
            <!-- The Forms panel started -->
            <div class="tab-pane fade" id="panel26" role="tabpanel" style="">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#form" role="tab" aria-controls="home" aria-selected="true">Upload Forms</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#forms" role="tab" aria-controls="profile" aria-selected="false">List of Forms</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <!--The Upload Form-->
                <div class="tab-pane fade show active" id="form" role="tabpanel" aria-labelledby="home-tab">
                  <form action="upload_form.php" method="post" enctype="multipart/form-data" class="text-center border border-light p-5" style="width: 60%;margin-top: 3%;">
                    <input type="text" class="form-control mb-4" name="form_Title" placeholder="Title" required>
                    <input type="text" class="form-control mb-4" name="form_Source" placeholder="Source" required>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="form" required>
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>
                    <textarea rows="3" cols="10" class="form-control mb-4 ckeditor" placeholder="Description" name="description" required></textarea>
                    <button class="btn btn-block" type="submit" name="submit" style="width: 25%;background-color:#1D4E9E;margin-left: 200px;margin-top: 30px ">Submit</button>
                  </form>
                </div>
                <div class="tab-pane fade" id="forms" role="tabpanel" aria-labelledby="profile-tab">
                  <!--The List of Forms-->
                  <table class="table" id="mydatatable4">
                    <thead>
                      <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">View</th>
                        <th scope="col">Source</th>
                        <th scope="col">Uploaded Date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $x2 = 0;
                      while ($form_row = mysqli_fetch_array($form_rows)) {
                        ?>
                        <tr>
                          <th scope="row"><?php echo ++$x2; ?></th>
                          <td><?php echo $form_row['Title']; ?></a></td>
                          
                          <div class="view-desc">
                                <div class="modal fade" id="modalviewdesc<?php echo '-f' . $x2; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                                  <div class="modal-dialog" role="document" style="max-width:750px;">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="container">
                                      <?php echo $form_row['Description']; ?>
                                      </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="button" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          
                          <td><a style="color: blue;text-decoration: underline;" data-toggle="modal" data-target="#modalviewdesc<?php echo '-f' . $x2; ?>">Click to view Description</a></td>
                         
                          <?php
                          $Ext = explode('/', $form_row['Content-type']);
                          $ActualExt = strtolower(end($Ext));
                          if ($ActualExt == 'pdf') {
                            ?>
                          <div class="container">
                            <td><a data-toggle="modal" data-target="#myModal<?php echo '-f' . $x2; ?>" style="color: blue;text-decoration: underline;">Show Form</a><i class="fas fa-file-pdf fa-1x text-danger"></i></td>
                            <div id="myModal<?php echo '-f' . $x2; ?>" class="modal fade" role="dialog">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button> </div>
                                  <div class="modal-body">
                                    <embed src="<?php echo $form_row['Path']; ?>" frameborder="0" width="100%" height="500px">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php }
                          
                          else{
                            ?>
                              
                            <td>
                              <a href="<?php echo $form_row['Path']; ?>" style="color: blue;text-decoration: underline;" download>Show Form</a>
                            </td>
                            <?php }
                          
                          ?>
                          <td><?php echo $form_row['Source']; ?></td>
                          <td><?php echo date('d-F-Y', strtotime($form_row['Reproduction'])) ?></td>
                          <td>
                            <div class="form-modification">
                              <form action="update_form.php?<?php echo 'Id=' . $form_row['Id'] ?>" enctype="multipart/form-data" method="post" class="edit-form">
                                <div class="modal fade" id="modalupdatpaper<?php echo '-f' . $x2; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document" style="max-width:750px;">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3>Edit</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-1">
                                        <input type="text" name="form_title" class="form-control mb-4" placeholder="Title" value="<?php echo $form_row['Title'] ?>" required>
                                        <input type="text" name="form_source" class="form-control mb-4" placeholder="Source" value="<?php echo $form_row['Source'] ?>" required>
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                          </div>
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="form" value="<?php echo $form_row['Path'] ?>">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                          </div>
                                        </div>
                                        <textarea rows="3" cols="10" name="description" class="form-control mb-4 ckeditor" placeholder="Description" required><?php echo $form_row['Description'] ?></textarea>
                                      </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" name="submit">Update</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div class="form-deletion">
                              <form action="delete_form.php?<?php echo 'Id=' . $form_row['Id'] ?>" method="post">
                                <div class="modal fade" id="modaldeletepaper<?php echo '-f' . $x2; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <h4 style="margin-left:23px">Are you sure you want to delete this item?</h4>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-block" title="click to Delete form details" style="width: 25%;background-color:#1D4E9E" type="submit" name="delete">Delete</button>
                                        &nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" data-dismiss="modal">Cancel</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <?php if($role=='WebMaster' || ($role=='Staff' && $form_row['User_id']==$userid)){?>
                            <div class="btn-group">
                              <a class="btn btn-light " style="width:20px;height:35px" title="click to update form details" data-toggle="modal" data-target="#modalupdatpaper<?php echo '-f' . $x2; ?>">
                                <i class="far fa-edit"></i>
                              </a>&nbsp;&nbsp;&nbsp;
                              <button class="btn btn-light " style="width:20px;height:35px" title="click to update form details" data-toggle="modal" data-target="#modaldeletepaper<?php echo '-f' . $x2; ?>"><i class="far fa-trash-alt"></i></button>
                           </div>
                            <?php } ?>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- The Forms panel closed -->
            <!-- The FAQ's Panel Started -->
            <div class="tab-pane" id="panel27" role="tabpanel" style="">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#FAQs" role="tab" aria-controls="home" aria-selected="true">Upload FAQ's</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#lFAQs" role="tab" aria-controls="profile" aria-selected="false">List of FAQ's</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="FAQs" role="tabpanel" aria-labelledby="home-tab">
                  <form action="upload_faq.php" method="post" enctype="multipart/form-data" class="text-center border border-light p-5" style="width: 60%;margin-top: 3%;">
                    <input type="text" class="form-control mb-4" name="question" placeholder="Question?" required>
                    <textarea name="answer" rows="3" cols="10" class="form-control mb-4 ckeditor" placeholder="Answer" required></textarea>
                    <button class="btn btn-block" type="submit" name="submit" style="width: 25%;background-color:#1D4E9E;margin-left: 200px;margin-top: 30px ">Submit</button>
                  </form>
                </div>
                <div class="tab-pane fade" id="lFAQs" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="py-3">
                    <div class="row">
                      <div class="col-12 mx-auto">
                        <div class="accordion" id="faqExample">
                          <?php
                          $x6 = 0;
                          $temp = 0;
                          while ($faq_row = mysqli_fetch_array($faq_rows)) {
                            ++$x6;
                            ?>
                            <div class="card">
                              <div class="card-header p-2 inline-headers">
                                <h5 class="mb-0">
                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $temp; ?>">
                                    Q: <?php echo $faq_row['question']; ?>?
                                  </button>
                                </h5>
                                <div class="form-modification">
                                  <form action="update_faq.php?<?php echo 'Id=' . $faq_row['Id'] ?>" enctype="multipart/form-data" method="post" class="edit-form">
                                    <div class="modal fade" id="modalupdatpaper<?php echo '-fa' . $x6; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document" style="max-width:750px;">
                                        <div class="modal-content">
                                          <div class="modal-header text-center">
                                            <h3>Edit</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body mx-1">
                                            <input type="text" name="question" class="form-control mb-4" placeholder="Source" value="<?php echo $faq_row['question'] ?>" required>
                                            <textarea rows="3" cols="10" name="answer" class="form-control mb-4 ckeditor" placeholder="Description" required><?php echo $faq_row['answer'] ?></textarea>
                                          </div>
                                          <div class="modal-footer d-flex justify-content-center">
                                            <button type="submit" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" name="submit">Update</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                                <div class="form-deletion">
                                  <form action="delete_faq.php?<?php echo 'Id=' . $faq_row['Id']; ?>" method="post">
                                    <div class="modal fade" id="modaldeletepaper<?php echo '-fa' . $x6; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header text-center">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <h4 style="margin-left:23px">Are you sure you want to delete this item?</h4>
                                          <div class="modal-footer d-flex justify-content-center">
                                            <button class="btn btn-block" title="click to Delete form details" style="width: 25%;background-color:#1D4E9E" type="submit" name="delete">Delete</button>
                                            &nbsp;&nbsp;&nbsp;
                                            <button type="button" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" data-dismiss="modal">Cancel</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                                <?php if($role=='WebMaster' || ($role=='Staff' && $faq_row['user_id']==$userid)){?>
                                <div class="btn-group faq-buttons" style="margin-left: 918px;margin-top: -5pc;">
                                  <a class="btn btn-light " style="" title="click to update form details" data-toggle="modal" data-target="#modalupdatpaper<?php echo '-fa' . $x6; ?>">
                                    <i class="far fa-edit"></i></a>
                                  &nbsp;&nbsp;&nbsp;
                                  <button class="btn btn-light " style="" title="click to delete form details" data-toggle="modal" data-target="#modaldeletepaper<?php echo '-fa' . $x6; ?>">
                                  <i class="far fa-trash-alt"></i></button>
                                </div>
                                <?php } ?>
                              </div>
                              <div id="collapse<?php echo $temp ?>" class="collapse" aria-labelledby="headingOne" data-parent="#faqExample">
                                <div class="card-body">
                                  <div class="container">
                                    <?php echo $faq_row['answer']; ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php ++$temp;
                          } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- The FAQ's Panel closed -->
            <!-- The Dashboard Panel started -->
            <div class="tab-pane  active dashboard" id="panel25" role="tabpanel">
              <div class="container">
                <div class="row" style="margin-top:10%;margin-left:8%;">
                  <div class="col-md-3">
                    <img src="./img/front-end/article.png" width="90px" height="80px" /><br>
                    <h3>Articles</h5>
                      <h2 style="color:grey"><?php echo $x; ?></h2>
                  </div>
                  <div class="col-md-3">
                    <img src="./img/front-end/inews.jpg" width="90px" height="80px" /><br>
                    <h3>Industry News</h3>
                    <h2 style="color:grey"><?php echo $x1; ?></h2>
                  </div>
                  <div class="col-md-3">
                    <img src="./img/front-end/forms.png" width="90px" height="80px" /><br>
                    <h3>Forms</h3>
                    <h2 style="color:grey"><?php echo $x2; ?></h2>
                  </div>
                  <div class="col-md-3">
                    <img src="./img/front-end/faqs.png" class="rounded-circle" width="90px" height="80px" /><br>
                    <h3>FAQ's</h3>
                    <h2 style="color:grey"><?php echo $x6; ?></h2>
                  </div>
                </div>
              </div>
            </div>
            <!-- The Dashboard Panel closed -->
            <!-- The User Panel started -->
            <div class="tab-pane " id="panel23" role="tabpanel">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#add_user" role="tab" aria-controls="home" aria-selected="true">Add User</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#display_user" role="tab" aria-controls="profile" aria-selected="false">Available Users</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <!--The Add user Form-->
                <div class="tab-pane fade show active" id="add_user" role="tabpanel" aria-labelledby="home-tab" style="">
                  <form action="adduser.php" method="post" enctype="multipart/form-data" class="text-center border border-light p-5" style="width: 60%;margin-top: 3%;">
                    <input type="text" class="form-control mb-4" name="name" placeholder="UserName" required>
                    <input type="email" class="form-control mb-4" name="email" placeholder="Email">
                     <input type="text" class="form-control mb-4" name="ph_no" placeholder="Phone Number" required>
                    <input type="text" class="form-control mb-4" name="userid" placeholder="UserID">
                    <input type="password" class="form-control mb-4" pattern=".{8,12}" name="password" placeholder="Password (min 8 to max 12 characters)" required title="min 8 to max 12 characters">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="">Role</label>
                      </div>
                      <select class="browser-default custom-select" name="role" required>
                        <option selected>Choose...</option>
                        <option>WebMaster</option>
                        <option>Support</option>
                      </select>
                    </div>
                    <button class="btn btn-block" name="submit" type="submit" style="width: 25%;background-color:#1D4E9E;margin-left: 200px;margin-top: 30px ">Submit</button>
                  </form>
                </div>
                <div class="tab-pane fade" id="display_user" role="tabpanel" aria-labelledby="profile-tab" style="">
                  <!--The List of Users-->
                  <table class="table" id="mydatatable2">
                    <thead>
                      <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">UserId</th>
                        <th scope="col">Password</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $x4 = 0;
                      while ($user_row = mysqli_fetch_array($user_rows)) {
                        ?>
                        <tr>
                          <th scope="row"><?php echo ++$x4; ?></th>
                          <td><?php echo $user_row['name']; ?></td>
                          <td><?php echo $user_row['username']; ?></td>
                          <td><?php echo $user_row['phone_no']; ?></td>
                          <td><?php echo $user_row['userid']; ?></td>
                          <td>
                            <form action="change_password.php" method="post">
                              <input type="password" pattern=".{8,12}" name="password" placeholder="New Password" required title="min 8 to max 12 characters">
                              <input type="hidden" name="id" value="<?php echo $user_row['id']; ?>">
                              <input type="submit" value="submit">
                            </form>
                          </td>
                          <td><?php echo $user_row['role']; ?></td>
                          <td>
                            <div class="form-modification">
                              <form action="update_user.php?<?php echo 'Id=' . $user_row['id'] ?>" enctype="multipart/form-data" method="post" class="edit-form">
                                <div class="modal fade" id="modalupdatpaper<?php echo '-u' . $x4; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3>Edit</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-1">
                                        <input type="text" name="name" class="form-control mb-4" placeholder="Name" value="<?php echo $user_row['name'] ?>" required>
                                        <input type="email" name="email" class="form-control mb-4" placeholder="Email" value="<?php echo $user_row['username'] ?>" required>
                                        <input type="text" name="ph_no" class="form-control mb-4" placeholder="Phone Number" value="<?php echo $user_row['phone_no'] ?>" required>
                                        <input type="text" name="userid" class="form-control mb-4" placeholder="UserID" value="<?php echo $user_row['userid'] ?>" required>
                                        <select class="browser-default custom-select form-control mb-4"  name="role" required>
                                          <option selected><?php echo $user_row['role'] ?></option>
                                          <option>WebMaster</option>
                                          <option>Support</option>
                                        </select>
                                      </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" name="submit" value="submit">Update</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div class="form-deletion">
                              <form action="delete_user.php?<?php echo 'user_id=' . $user_row['id'] ?>" method="post">
                                <div class="modal fade" id="modaldeletepaper<?php echo '-u' . $x4; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <h4 style="margin-left:23px">Are you sure you want to delete this item?</h4>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-block " style="width: 25%;background-color:#1D4E9E" type="submit" name="delete">Delete</button>
                                        &nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" data-dismiss="modal">Cancel</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div class="btn-group">
                              <a class="btn btn-light " style="width:20px;height:35px" title="click to update user details" data-toggle="modal" data-target="#modalupdatpaper<?php echo '-u' . $x4; ?>">
                                <i class="far fa-edit"></i>
                              </a>&nbsp;&nbsp;&nbsp;
                              <a class="btn btn-light " style="width:20px;height:35px" title="click to delete user details" data-toggle="modal" data-target="#modaldeletepaper<?php echo '-u' . $x4; ?>">
                                <i class="far fa-trash-alt"></i></a>
                            </div>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- The User Panel closed -->
            <!-- The Mock Test Panel Started -->
            <div class="tab-pane fade" id="panel24" role="tabpanel">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#upload_paper" role="tab" aria-controls="home" aria-selected="true">Upload Model Paper</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#download_paper" role="tab" aria-controls="profile" aria-selected="false">View Model Papers</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="upload_paper" role="tabpanel" aria-labelledby="home-tab" style="">
                  <form action="upload_paper.php" method="post" enctype="multipart/form-data" class="text-center border border-light p-5" style="width: 60%;margin-top: 3%;">
                    <input type="text"  class="form-control mb-4" name="paper_title" placeholder="Title" required>
                    <input type="text" class="form-control mb-4" name="paper_source" placeholder="Source" required>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="paper" required>
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>
                    <textarea rows="3" cols="10" class="form-control mb-4 ckeditor" placeholder="Description" name="description" required></textarea>
                    <button class="btn btn-block" type="submit" name="submit" style="width: 25%;background-color:#1D4E9E;margin-left: 200px;margin-top: 30px ">Submit</button>
                  </form>
                </div>
                <div class="tab-pane fade" id="download_paper" role="tabpanel" aria-labelledby="profile-tab" style="">
                  <table class="table" id="mydatatable5">
                    <thead>
                      <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">View</th>
                        <th scope="col">Source</th>
                        <th scope="col">Uploaded date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $x1 = 0;
                      while ($mk_row = mysqli_fetch_array($mk_rows)) {
                        ?>
                        <tr>
                          <th scope="row"><?php echo ++$x1; ?></th>
                          <td><?php echo $mk_row['Title']; ?></a></td>
                          <td><?php echo $mk_row['Description']; ?></td>
                          <div class="container">
                            <td><a data-toggle="modal" data-target="#myModal<?php echo '-p' . $x1; ?>" style="color: blue;text-decoration: underline;">Show model paper</a><i class="fas fa-file-pdf fa-1x text-danger"></i></td>
                            <div id="myModal<?php echo '-p' . $x1; ?>" class="modal fade" role="dialog">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <embed src="<?php echo $mk_row['File_Path']; ?>" frameborder="0" width="100%" height="500px">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <td><?php echo $mk_row['Source']; ?></td>
                          <td><?php echo date('d-F-Y', strtotime($mk_row['Reproduction'])) ?></td>
                          <td>
                            <div class="form-modification">
                              <form action="update_paper.php?<?php echo 'Id=' . $mk_row['Id'] ?>" enctype="multipart/form-data" method="post" class="edit-form">
                                <div class="modal fade" id="modalupdatpaper<?php echo '-p' . $x1; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document" style="max-width:750px;">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3>Edit</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-1">
                                        <input type="text" name="paper_title" class="form-control mb-4" placeholder="Title" value="<?php echo $mk_row['Title'] ?>" required>
                                        <input type="text" name="paper_source" class="form-control mb-4" placeholder="Source" value="<?php echo $mk_row['Source'] ?>" required>
                                        <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                          </div>
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="paper" value="<?php echo $form_row['File_Path'] ?>">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                          </div>
                                        </div>
                                        <textarea rows="3" cols="10" name="description" class="form-control mb-4 ckeditor" placeholder="Description" required><?php echo $mk_row['Description'] ?></textarea>
                                      </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" name="submit">Update</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div class="form-deletion">
                              <form action="delete_paper.php?<?php echo 'Id=' . $mk_row['Id'] ?>" method="post" class="delete-form">
                                <div class="modal fade" id="modaldeletepaper<?php echo '-m' . $x1; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <h4 style="margin-left:23px">Are you sure you want to delete this item?</h4>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-block" title="click to Delete model paper details" style="width: 25%;background-color:#1D4E9E" type="submit" name="delete">Delete</button>
                                        &nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" data-dismiss="modal">Cancel</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <?php if($role=='WebMaster' || ($role=='Staff' && $mk_row['User_Id']==$userid)){?>
                            <div class="btn-group">
                              <a class="btn btn-light " style="width:20px;height:35px" title="click to update model paper details" data-toggle="modal" data-target="#modalupdatpaper<?php echo '-p' . $x1; ?>">
                                <i class="far fa-edit"></i>
                              </a>&nbsp;&nbsp;&nbsp;
                              <a class="btn btn-light " style="width:20px;height:35px" title="click to delete model details" data-toggle="modal" data-target="#modaldeletepaper<?php echo '-m' . $x1; ?>">
                                <i class="far fa-trash-alt"></i></a>
                            </div>
                            <?php } ?>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- The Mock Test Panel closed -->
            <!-- The Registration Panel -->
            <div class="tab-pane " id="panel30" role="tabpanel" style="height: 500px;overflow-x:scroll">
              <form class='ui form' method='post' action='genXL_C.php'>
                <input type='hidden' name='year' value="" />
                <input type='hidden' name='name' value="download" />
                <button class='ui  button' name="submit" style="margin-left: 0px;" type='submit'>
                <i class="fa fa-download" aria-hidden="true"></i></button>
              </form>
              <table class="table" id="mytable9">
                <thead>
                  <tr>
                    <th scope="col">S.NO</th>
                    <th scope="col">Registration_Date</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col"> Mob_Number</th>
                    <th scope="col">Age</th>
                    <th scope="col">Qualification</th>
                    <th scope="col">Occupation</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col">Pincode</th>
                    <th scope="col">Address</th>
                    <th scope="col">About</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $x7 = 0;
                  while ($reg_row = mysqli_fetch_array($reg_rows)) {
                    ?>
                    <tr>
                      <td><?php echo ++$x7; ?></td>
                      <td><?php echo date('d-F-Y', strtotime($reg_row['registration_time'])); ?></td>
                      <td><?php echo $reg_row['name']; ?></td>
                      <td><?php echo $reg_row['email']; ?></td>
                      <td><?php echo $reg_row['ph_no']; ?></td>
                      <td><?php echo $reg_row['age']; ?></td>
                      <td><?php echo $reg_row['qualification']; ?></td>
                      <td><?php echo $reg_row['occupation']; ?></td>
                      <td><?php echo $reg_row['city']; ?></td>
                      <td><?php echo $reg_row['state']; ?></td>
                      <td><?php echo $reg_row['pincode']; ?></td>
                      <td><?php echo $reg_row['address']; ?></td>
                      <td><?php echo $reg_row['about']; ?></td>
                      <td>
                        <form action="mail_to_registered_user.php?Id=<?php echo $reg_row['Id']; ?>" method="post" class="edit-form">
                          <div class="modal fade" id="accept_registration<?php echo $x7; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header text-center">
                                  <h2>Invite The Aspirant </h2>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body mx-1">
                                  <input type="text" name="userid" class="form-control mb-4" placeholder="UseriD" value="<?php echo $reg_row['email']; ?>" required>
                                  <input type="text" name="password" class="form-control mb-4" placeholder="Password" required>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                  <button type="submit" class="btn btn-block" style="width: 40%;background-color:#1D4E9E" name="submit">Send Credentials</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                        <div class="btn-group">
                          <a class="btn btn-light " style="width:20px;height:35px" title="click to Accept visitor" data-toggle="modal" data-target="#accept_registration<?php echo $x7; ?>">
                            <i class="fa fa-check" style="color:green" aria-hidden="true"></i>
                          </a>&nbsp;&nbsp;&nbsp;
                          <a href="mail_to_reject_aspirant.php?Id=<?php echo $reg_row['Id']; ?>" class="btn btn-light " style="width:20px;height:35px" title="click to reject visitor">
                            <i class="fa fa-times" style="color:red" aria-hidden="true"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- The Registration Panel closed -->
            <!-- The contactus Panel -->
            <div class="tab-pane " id="panel31" role="tabpanel">
              <table class="table" id="mydatatable">
                <thead>
                  <tr>
                    <th scope="col">S.NO</th>
                    <th scope="col">contact_date</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Query</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $x8 = 0;
                  while ($contact_row = mysqli_fetch_array($contact_rows)) {
                    ?>
                    <tr>
                      <td><?php echo ++$x8; ?></td>
                      <td><?php echo date('d-F-Y', strtotime($contact_row['contact_time'])); ?></td>
                      <td><?php echo $contact_row['name']; ?></td>
                      <td><?php echo $contact_row['email']; ?></td>
                      <td><?php echo $contact_row['ph_no']; ?></td>
                      <td><?php echo $contact_row['query']; ?></td>
                      <td>
                        <form action="mail_response.php?Id=<?php echo $contact_row['Id']; ?>" method="post" class="edit-form">
                          <div class="modal fade" id="response<?php echo $x8; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header text-center">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body mx-1">
                                  <input type="text" name="name" class="form-control mb-4" placeholder="Name" value="<?php echo $contact_row['name']; ?>" required>
                                  <input type="text" name="email" class="form-control mb-4" placeholder="Email" value="<?php echo $contact_row['email']; ?>" required>
                                  <textarea rows="3" cols="10" name="response" class="form-control mb-4 ckeditor" placeholder="Response" required></textarea>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                  <button type="submit" class="btn btn-block" style="width: 27%;background-color:#1D4E9E" name="submit">Respond</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                        <a class="btn btn-light " style="width:20px;height:35px" title="click to respond to visitor" data-toggle="modal" data-target="#response<?php echo $x8; ?>">
                          <i class="fa fa-reply" style="color:green" aria-hidden="true"></i>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                <tbody>
              </table>
            </div>
            <!-- The contactus Panel closed-->
            <!-- The Blog Panel Started -->
            <div class="tab-pane fade" id="blog_panel" role="tabpanel">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#upload_post" role="tab" aria-controls="home" aria-selected="true">Upload Post</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#view_post" role="tab" aria-controls="profile" aria-selected="false">View Posts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#view_comments" role="tab" aria-controls="profile" aria-selected="false">View Comments</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="upload_post" role="tabpanel" aria-labelledby="home-tab" >
                  <form action="upload_post.php" method="post" enctype="multipart/form-data" class="text-center border border-light p-5" style="width: 60%;margin-top: 3%;">
                    <input type="text"  class="form-control mb-4" name="post_title" placeholder="Title" required>
                    <textarea rows="3" cols="10" class="form-control mb-4" placeholder="Description" name="description" required></textarea>
                    <textarea rows="3" cols="10" class="form-control mb-4 ckeditor" placeholder="Content" name="content"  required></textarea>
                    <br>
                    <input type="text" class="form-control mb-4" name="post_source" placeholder="Source" required>
                    <button class="btn btn-block" type="submit" name="submit" style="width: 25%;background-color:#1D4E9E;margin-left: 200px;margin-top: 30px ">Submit</button>
                  </form>
                </div>
                <div class="tab-pane fade" id="view_post" role="tabpanel" aria-labelledby="profile-tab">
                  <table class="table" id="mydatatable6">
                    <thead>
                      <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col" style="width: 180px;">Title</th>
                        <th scope="col" style="width: 300px;">Description</th>
                        <th scope="col">Content</th>
                        <th scope="col">Source</th>
                        <th scope="col">Posted On</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $y1 = 0;
                      while ($blog_row = mysqli_fetch_array($blog_rows)) {
                        ?>
                        <tr>
                          <th scope="row"><?php echo ++$y1; ?></th>
                          <td><?php echo $blog_row['post_title']; ?></a></td>
                          <td><?php echo $blog_row['post_desc']; ?></td>

                          <div class="view-content">
                                <div class="modal fade" id="modalviewcontent<?php echo '-b' . $y1; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                                  <div class="modal-dialog" role="document" style="max-width:750px;">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="container">
                                      <?php echo $blog_row['post_content']; ?>
                                      </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="button" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          <td><a style="color: blue;text-decoration: underline;" data-toggle="modal" data-target="#modalviewcontent<?php echo '-b' . $y1; ?>">Click to view content</a></td>
                          <td><?php echo $blog_row['source']; ?></td>
                          <td><?php echo date('d-F-Y', strtotime($blog_row['posted_on'])) ?></td>
                         <td> 
                         <div class="form-modification">
                              <form action="update_post.php?Id=<?php echo $blog_row['post_id']?>"  method="post">
                                <div class="modal fade" id="modalupdateblog<?php echo '-b' . $y1; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document" style="max-width:750px;">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <h3>Edit</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body mx-1">
                                        <input type="text" name="blog_title" class="form-control mb-4" placeholder="Title" value="<?php echo $blog_row['post_title']; ?>" required>
                                        <textarea rows="3" cols="10" name="description" class="form-control mb-4" placeholder="Description" required><?php echo $blog_row['post_desc']; ?></textarea>
                                        <textarea rows="3" cols="10" name="content" class="form-control mb-4 ckeditor" placeholder="Content"  required><?php echo $blog_row['post_content']; ?></textarea>
                                        <br>
                                        <input type="text" name="paper_source" class="form-control mb-4" placeholder="Source" value="<?php echo $blog_row['source']; ?>" required>
                                      </div>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button type="submit" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" name="submit">Update</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div class="form-deletion">
                              <form action="delete_post.php?Id=<?php echo $blog_row['post_id'];?>" method="post" class="delete-blog">
                                <div class="modal fade" id="modaldeleteblog<?php echo '-b' . $y1; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <h4 style="margin-left:23px">Are you sure you want to delete this item?</h4>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-block" title="click to Delete model paper details" style="width: 25%;background-color:#1D4E9E" type="submit" name="delete">Delete</button>
                                        &nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" data-dismiss="modal">Cancel</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <?php if($role=='WebMaster' || ($role=='Staff' && $blog_row['User-Id']==$userid)){?>
                         <div class="btn-group">
                              <a class="btn btn-light " style="width:20px;height:35px" title="click to update model paper details" data-toggle="modal" data-target="#modalupdateblog<?php echo '-b' . $y1; ?>">
                                <i class="far fa-edit"></i>
                              </a>&nbsp;&nbsp;&nbsp;
                              <a class="btn btn-light " style="width:20px;height:35px" title="click to delete model details" data-toggle="modal" data-target="#modaldeleteblog<?php echo '-b' . $y1; ?>">
                                <i class="far fa-trash-alt"></i></a>
                            </div>
                            <?php } ?>
                      </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="view_comments" role="tabpanel" aria-labelledby="profile-tab">
                <table class="table" id="mydatatable11">
                    <thead>
                      <tr>
                        <th scope="col">S.NO</th>
                        <th scope="col" style="width: 180px;">Post Title</th>
                        <th scope="col" style="width: 300px;">Comment</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $y21 = 0;
                      while ($commt_row = mysqli_fetch_array($commt_rows)) {
                        ?>
                        <tr>
                          <th scope="row"><?php echo ++$y21; ?></th>
                          <?php
                          $post_id=$commt_row['post_id'];
                           $sql3 = "SELECT * FROM `blog` WHERE  `post_id`=$post_id";
                           $rows = mysqli_query($con, $sql3);
                           $row=mysqli_fetch_array($rows);
                           $post_title=$row['post_title'];
                          ?>
                          <td><?php echo $post_title; ?></a></td>
                          <td><?php echo $commt_row['comment']; ?></td>
                          <td><?php echo $commt_row['name']; ?></td>
                          <td><?php echo $commt_row['email']; ?></td>
                         <td> 
                            <div class="form-deletion">
                              <form action="delete_comment.php?Id=<?php echo $commt_row['id'];?>" method="post" class="delete-blog">
                                <div class="modal fade" id="modaldeletecomment<?php echo '-b' . $y21; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <h4 style="margin-left:23px">Are you sure you want to delete this item?</h4>
                                      <div class="modal-footer d-flex justify-content-center">
                                        <button class="btn btn-block" title="click to Delete model paper details" style="width: 25%;background-color:#1D4E9E" type="submit" name="delete">Delete</button>
                                        &nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-block" style="width: 25%;background-color:#1D4E9E" data-dismiss="modal">Cancel</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <?php if($role=='WebMaster'){?>
                         <div class="btn-group">
                              <a class="btn btn-light " style="width:20px;height:35px" title="click to delete model details" data-toggle="modal" data-target="#modaldeletecomment<?php echo '-b' . $y21; ?>">
                                <i class="far fa-trash-alt"></i></a>
                            </div>
                            <?php } ?>
                      </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- The Blog Panel closed -->
          </div>
        </div>
      </div>
    </div>

  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#mytable9').DataTable();
    });
    $(document).ready(function() {
      $('#mydatatable').DataTable();
    });
    $(document).ready(function() {
      $('#mydatatable1').DataTable();
    });
    $(document).ready(function() {
      $('#mydatatable2').DataTable();
    });
    $(document).ready(function() {
      $('#mydatatable4').DataTable();
    });
    $(document).ready(function() {
      $('#mydatatable5').DataTable();
    });
    $(document).ready(function() {
      $('#mydatatable3').DataTable();
    });
    $(document).ready(function() {
      $('#mydatatable6').DataTable();
    });
    $(document).ready(function() {
      $('#mydatatable11').DataTable();
    });

    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $(document).ready(function() {
				CKEDITOR.replaceClass = 'ckeditor';
			});
  </script>
</body>

</html>