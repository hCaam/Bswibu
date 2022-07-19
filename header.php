
<div id="header">
    <nav  class="fixed bg-blue-300 border-gray-200 px-2 ring-2 ring-blue-500/50 sm:px-4 py-2.5 rounded dark:bg-gray-800 ">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
          
            <span class="self-center text-xl font-semibold  whitespace-nowrap dark:text-white" id="dropdown">Basement Wibu</span>
          
          
          <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
  
              <li>
                <a href="../../home" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
              </li>
              <li>
                <a href="../../guide/home" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Isekai Guide</a>
              </li>
              <li>
                <a href="../../Sortmanga" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Manga List Rec</a>
              </li>
              <li>
                <a href="../../About me/caam" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About Me</a>
              </li>
              <li>
               <a href="../../game/home" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Game?</a>
             </li>
             <li class="md:dark:hover:bg-transparent block py-2 pr-4 pl-3 hover:bg-gray-50 md:hover:bg-transparent md:border-0 ">
                <a class="flex flex-col " href="<?php if (isset($_SESSION['ign'])){ 
                                                            echo "profile.php?ign=" . $_SESSION['ign'];} 
                                                            else {echo "signup";} ?>
                                                ">
                  <img class="" src="<?php  
                  $profile = "SELECT picture FROM akun WHERE ign = $sessionign";
                  $resultprof = $conn->query($profile);
                  $rowprof = $resultprof->fetch_assoc();
                  if (isset($sessionign)){
                  echo $rowprof['picture'];} 
                  else {
                  echo "login.png";
                  }
                  ?>">
                  <P class="text-gray-700 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white ">
                  <?php
                  if (isset($sessionign)){ 
                  echo $rowprof['ign'];}
                  else {
                    echo "LOGIN";
                  }
                  ?>
                  </P>
    
                </a>
               </li>
            </ul>
          </div>
        </div>
      </nav>

</div>

<script>
    const dropdownButton = document.querySelector("#dropdown");
    const dropdownList = document.querySelector("#dropdown + div.hidden");
    
    dropdownButton.addEventListener("click", () => {
      dropdownList.classList.toggle("hidden");
    });

    $("span").click(function() {
    $('html,body').animate({
        scrollTop: $(".second").offset().top},
        'slow');
    });
</script>
