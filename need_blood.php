<?php require 'extras/header.php';
include 'extras/conn.php';
?>

<body>


  <!-- component -->
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

  <section class=" py-1 bg-blueGray-50">
    <!-- <hr class="mt-5 border-b-1 border-blueGray-300"> -->
    <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
        <div class="rounded-t bg-white mb-0 px-6 py-6">
          <div class="text-center flex justify-between">
            <h6 class="text-blueGray-700 text-xl font-bold">
              Need Blood</h6>
          </div>
        </div>
        <br>
        <div class="flex-auto px-4 lg:px-8 py-10 pt-0">
          <form action="#" method="POST" class="form">
            <div class="flex flex-wrap">
              <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="acc_name">
                    Hospital Name
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="acc_name" placeholder="abc">
                </div>
              </div>

              <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="acc_email">
                    E-mail Adddress
                  </label>
                  <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="acc_email" placeholder="abc@gmail.com">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="acc_address">
                    Address
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="acc_address" placeholder="Hospital Address">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="acc_mobile">
                    Mobile Number
                  </label>
                  <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="acc_mobile" placeholder="2345*****">
                </div>
              </div>
            </div>
            <hr class="mt-5 border-b-1 border-blueGray-300">
            <h2 class="mt-4 px-3 text-blueGray-600"><strong> Blood Group</strong></h2>
            <div class="flex flex-wrap">
              <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="acc_blood">
                    <select name="acc_blood">
                      <option class="text-blueGray-600">Select</option>
                      <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                  </label>
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="acc_pwd">
                    Password
                  </label>
                  <input type="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="acc_pwd">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="acc_confirm">
                    Confirm Password
                  </label>
                  <input type="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="acc_confirm">
                </div>
              </div>
              <div class="mx-auto" style="width: fit-content;">
                <input type="submit" value="Submit" name="sbmBtn" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150 mt-4">
              </div>
            </div>
        </div>
      </div>
      </form>

      <?php
      if (isset($_POST['sbmBtn'])) {

        $acc_name = $_POST['acc_name'];
        $acc_email = $_POST['acc_email'];
        $acc_address = $_POST['acc_address'];
        $acc_mobile = $_POST['acc_mobile'];
        $acc_blood = $_POST['acc_blood'];
        $acc_pwd = $_POST['acc_pwd'];
        $acc_confirm = $_POST['acc_confirm'];

        // echo 'User submitted.';
        $result = mysqli_query($conn, "insert into acc_info values('','$acc_name','$acc_email','$acc_address','$acc_mobile','$acc_blood','$acc_pwd','$acc_confirm')");

        if ($result) {
          if ($acc_pwd == $acc_confirm) {
            echo 'registered successfully';
          } else {
            echo 'regisration failed';
          }
        }
      }

      ?>


    </div>
    </div>

    </div>
  </section>
  <?php include('extras/footer.php'); ?>
</body>

</html>