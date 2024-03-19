<?php require 'extras/header.php';
include 'extras/conn.php';
?>

<body>

  <!-- component -->
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


  <section class=" py-1 bg-blueGray-50">
    <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
        <div class="rounded-t bg-white mb-0 px-6 py-6">
          <div class="text-center flex justify-between">
            <h6 class="text-blueGray-700 text-xl font-bold">
              Donate Blood
            </h6>
            <a href="need_blood.php" class="text-blueGray-700 text-xl font-bold active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
              Need Blood
            </a>


          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
          <form action="#" method="POST">
            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
              Donor information
            </h6>
            <div class="flex flex-wrap">
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label for="donor_name" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Name
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="donor_name" placeholder="abc" required>
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label for="donor_email" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Email address
                  </label>
                  <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="donor_email" placeholder="scb@example.com" required>
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label for="donor_number" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Mobile Number
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="donor_number" placeholder="2345*****" required>
                </div>
              </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
              <div class="relative w-full mb-3">
                <label for="donor_age" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                  Age
                </label>
                <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="donor_age" placeholder="18 & above" required>
                <br>
                <br>
                <p class="block uppercase text-blueGray-600 text-xs font-bold mb-2"><label for="donor_gender">Gender</label></p>
                <select name="donor_gender">
                  <option>Select</option>
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>
                </select>
              </div>
            </div>
        </div>
        <hr class="mt-5 border-b-1 border-blueGray-300">
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
          Blood Group
        </h6>

        <div class="flex flex-wrap">
          <div class="w-full lg:w-12/12 px-4">
            <div class="relative w-full mb-3">
              <label for="blood_group" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                <select name="blood_group">
                  <option value="" selected disabled>Select</option>
                  <?php include 'conn.php';
                  $sql = "select * from blood_group ";
                  $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                    <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
                  <?php } ?>
                </select>
              </label>
              <hr class="mt-6 border-b-1 border-blueGray-300">

              <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                Contact Information
              </h6>
              <div class="flex flex-wrap">
                <div class="w-full lg:w-12/12 px-4">
                  <div class="relative w-full mb-3">
                    <label for="donor_address" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                      Address
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="donor_address" placeholder="abc colony" required>
                  </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label for="donor_city" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                      City
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="donor_city" placeholder="ahmedabad" required>
                  </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label for="donor_country" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                      Country
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="donor_country" placeholder="india">
                  </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label for="donor_postalcode" class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                      Postal Code
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="donor_postalcode" placeholder="postal code">
                  </div>
                </div>
              </div>
              <br>
              <div class="text-center">
                <input type="submit" value="Submit" name="submit" class="button bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
              </div>
            </div>
          </div>
        </div>
        </form>

        <?php
        if (isset($_POST['submit'])) {
          $donor_name = $_POST['donor_name'];
          $donor_email = $_POST['donor_email'];
          $donor_number = $_POST['donor_number'];
          $donor_age = $_POST['donor_age'];
          $donor_gender = $_POST['donor_gender'];
          $blood_group = $_POST['blood_group'];
          $donor_address = $_POST['donor_address'];
          $donor_city = $_POST['donor_city'];
          $donor_country = $_POST['donor_country'];
          $donor_postalcode = $_POST['donor_postalcode'];

          $res = mysqli_query($conn, "insert into donor_info values('','$donor_name','$donor_email','$donor_number','$donor_age','$donor_gender','$blood_group','$donor_address','$donor_city','$donor_country','$donor_postalcode')");

          if ($res) {
            echo 'registered successfully';
          } else {
            echo 'regisration failed';
          }
        }


        ?>
      </div>
    </div>

    </div>
    <?php include('extras/footer.php'); ?>
  </section>
</body>

</html>