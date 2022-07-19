
<?php
ini_set('display_errors', 1);


 if (isset($_POST['submit'])) {


    $regist_ign = $_POST['ign'];
    $regist_email = $_POST['email'];
    $regist_password = md5($_POST['password']);

  $oldign = "SELECT ign FROM akun WHERE ign = $regist_ign";
  $oldemail = "SELECT email FROM akun WHERE email = $regist_email";
  $oldignresult = mysqli_query($conn, $oldign);
  $oldemailresult = mysqli_query($conn, $oldemail);
  $oldignrow = mysqli_fetch_assoc($oldignresult);
  $oldemailrow = mysqli_fetch_assoc($oldemailresult);

    if ($regist_ign != $oldignrow && $regist_email != $oldemailrow && $regist_ign != "NULL" && $regist_email != "NULL"){
      $stmt = $conn->prepare("INSERT INTO akun (ign, email, password, picture, forget) VALUES (?, ?, ?, ?, ?)");
      $stmt->bind_param("ssss", $regist_ign, $regist_email, $regist_password, $picture);
        $regist_ign = $_POST['ign'];
    	$regist_email = $_POST['email'];
    	$regist_password = md5($_POST['password']);
      	$picture = "null";
        $forget = "null";
      $stmt->execute();
      echo "<script>alert('Succes!')</script>";

    } else "<script>alert('Name or Email Already used')</script>";
  }
?>


<div class="flex">
    <div class="relative flex flex-col justify-center m-32 overflow-hidden" id="register">
        <div class="w-full p-5 m-auto bg-white dark:bg-gray-900 rounded ring-2 ring-blue-800/50 lg:max-w-md">
            <h1 class="text-3xl font-semibold text-center text-gray-100">Register, tapi ni web emang ada apanya?</h1>
    
            <form class="mt-6" method="post">
                <div class="mt-4 form-group">
                    <label for="email" class="block text-sm text-gray-800  dark:text-gray-100">Email</label>
                    <input type="email" name="email" 
                        class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                <div class="mt-4 form-group">
                    <label for="ign" class="block text-sm text-gray-800  dark:text-gray-100">IGN</label>
                    <input type="text" name="ign" 
                        class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                <div class="mt-4 form-group">
                    <div>
                        <label for="password" class="block text-sm text-gray-800 dark:text-gray-100">Password</label>
                        <input type="password" name="password"
                            class="block w-full px-4 py-2 mt-2 text-blue-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    <div class="mt-6 ">
                        <button
                            name="submit" value="submit"
                            class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-purple-600">
                        
                            Regist
                        </button>
                    </div>
                  </div></div>
            </form>
            <p><a href="#" class="font-medium text-blue-600 font-semibold justify-center text-center hover:underline" >Back to Login</a></p>
            <p class="font-medium text-red-600 font-semibold justify-center text-center "><?php if(isset($pesan)){ echo $pesan; }?></p>
        </div>
    </div>
