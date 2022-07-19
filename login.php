<?php


if (isset($_POST['submit'])) {
    $login_ign = $_POST['ign'];
    $login_password = md5($_POST['password']);
 
    $login = "SELECT ign , password FROM users WHERE ign = $login_ign AND password = $login_password ";
    $result = mysqli_query($conn, $login);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['ign'] = $row['ign'];
        sleep(5);
        echo "<script>window.location.href=''</script>";
        
    } else {
        echo "<script>alert('Silahkan coba lagi!, password atau nama mungkin salah')</script>";
    }
}
 
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>

<div class="flex flex-col md:flex-row mx-10">
    <div class="relative flex flex-col justify-center min-h-screen overflow-hidden" id="login">
        <div class="w-80 p-5 m-auto bg-white dark:bg-gray-800 rounded ring-2 ring-blue-800/50 ">
            <h1 class="text-3xl font-semibold text-center text-blue-700">Login</h1>
    
            <form class="mt-6">
                <div>
                    <label for="ign" class="block text-sm text-gray-800 dark:text-gray-100">IGN</label>
                    <input type="ign"
                        class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                <div class="mt-4">
                    <div>
                        <label for="password" class="block text-sm text-gray-800 dark:text-gray-100">Password</label>
                        <input type="password"
                            class="block w-full px-4 py-2 mt-2 text-blue-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    <div class="mt-6">
                        <button
                            class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-purple-600">
                            Login
                        </button>
                    </div>
            </form>
            <div class="my-1">
            <p><a href="#" class="font-medium text-blue-600 font-semibold justify-center text-center hover:underline" onclick="signup()">Sign up</a></p>
            <p><a href="#" class="font-medium text-blue-600 font-semibold justify-center text-center hover:underline" onclick="signup()">Forget Password</a></p>
        </div>
        </div>
    </div>
</div>
