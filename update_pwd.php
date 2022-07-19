<?php
if (isset($_POST['submit'])){
    $new_password = md5($_POST['password']);
    $forget_pwd_email = $_GET['id'];

    $change_password = "UPDATE akun SET password = $new_password 
    WHERE forget = $forget_pwd_email ";
    $change_pwd_result = $conn->query($change_password);
}

?>


<div class="flex">
    <div class="relative flex flex-col justify-center m-32 overflow-hidden" id="register">
        <div class="w-full p-5 m-auto bg-white dark:bg-gray-900 rounded ring-2 ring-blue-800/50 lg:max-w-md">
            <form method="GET" class="hidden">
                <input name="id">
            </form>
            <h1 class="text-3xl font-semibold text-center text-blue-700">Input New Password</h1>
    
            <form class="mt-6" method="POST">
                <div>
                    <label for="password" class="block text-sm text-gray-800  dark:text-gray-100">Password</label>
                    <input type="text" name="password" 
                        class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                <div class="mt-4">
                        <div class="mt-6">
                        <button
                            name="submit"
                            class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-purple-600">
                        
                            Change password
                        </button>
                    </div>
            </form>
            
        </div>
    </div>

</div>