<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
  .header {
    overflow: hidden;
    background-color: #333;
    top: 0;
    width: 100%;
    padding: 10px 5px;
    color: #FF0404;
  }

  Style the header links .header a {
    float: left;
    color: white;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
    font-weight: bold;
  }

  /* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger) */
  .header a.logo {
    font-size: 25px;
    font-weight: bold;
    color: #FF0404;
  }

  .header a:hover {
    background-color: #ddd;
    color: black;
  }




  .header-right {
    float: right;
  }


  @media screen and (max-width: 500px) {
    .header a {
      float: none;
      display: block;
      text-align: left;
    }

    .header-right {
      float: none;
    }
  }

  Style the active/current link a.act {
    background: linear-gradient(to right, #fd746c 0%, #ff9068 100%);
    color: white;
    border-radius: 30px;
  }

  a.logo2 {
    background-color: #333;
  }

  nav {
    box-shadow: 5px 10px 5px #E75B63;
    padding: 10px;
    border-style: outset;

  }
</style>

<?php require 'extras/conn.php'; ?>
<?php require 'extras/header.php';
?>

<body>
  <?php
  if (isset($_POST["send"])) {
    $query_name = $_POST['query_name'];
    $query_email = $_POST['query_email'];
    $query_number = $_POST['query_number'];
    $query_message = $_POST['query_message'];
    $connect = mysqli_connect("sql211.infinityfree.com", "if0_36183735", "HqPUbkFbZO4T9Jh", "if0_36183735_blood_bank") or die("Connection error");
    $sql = "Insert into query_contact (query_name,query_email,query_number,query_message) values('{$query_name}','{$query_number}','{$query_email}','{$query_message}')";
    $result = mysqli_query($connect, $sql) or die("query unsuccessful.");
    echo '<div class="alert alert-success alert_dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button></b><b>Query Sent, We will contact you shortly. </b></div>';
  } ?>


  <!-- <nav>
<i class="fa fa-home fa-3x" aria-hidden="true"></i> 
</a>
</nav> -->
  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
    <div class="container">
      <div id="content-wrap" style="padding-bottom:50px;">
        <h1 class="mt-4 mb-3">Contact</h1>
        <div class="row">
          <div class="col-lg-8 mb-4">
            <h3>Send us a Message</h3>
            <form name="sentMessage" method="post">
              <div class="control-group form-group">
                <div class="controls">
                  <label>Full Name:</label>
                  <input type="text" class="form-control" id="query_name" name="query_name" required>
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Phone Number:</label>
                  <input type="tel" class="form-control" id="query_number" name="query_number" required>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Email Address:</label>
                  <input type="email" class="form-control" id="query_email" name="query_email" required>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Message:</label>
                  <textarea rows="10" cols="100" class="form-control" id="query_message" name="query_message" required maxlength="999" style="resize:none"></textarea>
                </div>
              </div>
              <button type="submit" name="send" class="btn btn-primary">Send Message</button>
            </form>
          </div>
          <div class="col-lg-4 mb-4">
            <h2>Contact Details</h2>
            <?php
            include 'extras/conn.php';
            $sql = "select * from contact_info";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) { ?>
                <br>
                <p>
                <h4>Address :</h4><?php echo $row['contact_address']; ?>
                </p>
                <p>
                <h4>Contact Number :</h4><?php echo $row['contact_phone']; ?>
                </p>
                <p>
                <h4> Email: </h4><a href="#"><?php echo $row['contact_mail']; ?></a>
                </a></b>
                </p>
            <?php }
            } ?>
          </div>
        </div>
        <!-- /.row -->


      </div>
    </div>
    <?php include 'extras/footer.php' ?>
  </div>
</body>

</html>