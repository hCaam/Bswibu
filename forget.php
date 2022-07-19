<?php

if (isset($_POST['submit'])) {
    $ign_mail = $_POST['ign'];
    $random_base64 = base64_encode(random_bytes($ign_mail));
 
    $sql_mail = "SELECT email, forget  FROM akun WHERE ign = $ign_mail";
    $sent_mail = mysqli_query($conn, $sql_mail);

    $change_forget = "UPDATE akun SET forget = $random_base64 WHERE ign = $ign_mail";
    $change_forget_result = $conn->query($change_forget);

    if ($sent_mail->num_rows > 0) {
        $row        = mysqli_fetch_assoc($sent_mail);
      
        $to         = $row['email'];
        $subject    = "Click this link to reset your password";
        $mesage     = "bswibu.xyz/update_pwd.php?id=" . $random_base64;
        $headers    = 'from: Bswibu@';
        mail($to, $subject, $mesage, $headers);

    }
}
?>


<div class="flex">
    <div class="relative flex flex-col justify-center m-32 overflow-hidden" id="register">
        <div class="w-full p-5 m-auto bg-white dark:bg-gray-900 rounded ring-2 ring-blue-800/50 lg:max-w-md">
            <h1 class="text-3xl font-semibold text-center text-blue-700">Forget Password</h1>
    
            <form class="mt-6" method="post">
                <div>
                    <label for="ign" class="block text-sm text-gray-800  dark:text-gray-100">IGN</label>
                    <input type="ign" name="ign" 
                        class="block w-full px-4 py-2 mt-2 text-purple-700 bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                <div class="mt-4">
                        <div class="mt-6">
                        <button
                            name="submit"
                            class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-purple-600">
                        
                            Send Mail
                        </button>
                    </div>
            </form>
            <p<a href="#" class="font-medium text-blue-600 font-semibold justify-center text-center hover:underline" >Back to Login</a></p>
        </div>
    </div>

</div>
