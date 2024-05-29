<?php
    session_start();
    if(isset($_SESSION['name'])){
        $msg = $_SESSION['name'];
        echo "<script>
                alert('$msg');
            </script>";
    }
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="md:bg-[url('./img/bg-img.jpg')] bg-[#000637]">
    <div class="h-screen container m-auto p-5 max-w-[500px] flex flex-col items-center justify-center ">
        <div class="bg-[#fff] rounded-xl form w-full p-4">
            <form action="Sql/addUser.php" method="POST">
                <div class="flex flex-col items-center text-xl ">
                    <img src="./img/profile.png" alt="" height="80px" width="80px">
                    <h6 class=" mt-3 text-center font-bold">User Sign-Up</h6>
                </div>
                <div class="form-group mt-2 flex flex-col items-left font-semibold">
                    <label for="name" class="ml-1">Name <span><sup class="text-red-500">*</sup></span></label>
                    <input type="text" id="name" name="name" placeholder="Enter Your Name" required class="border rounded-sm p-2">
                </div>
                <div class="form-group mt-2 flex flex-col items-left font-semibold">
                    <label for="mobile" class="ml-1">Mobile No. <span><sup class="text-red-500">*</sup></span></label>
                    <input type="text" id="mobile" name="mobile" maxlength="10" placeholder="Enter Mobile Number" required class="border rounded-sm p-2">
                </div>
                <div class="form-group mt-2 flex flex-col items-left font-semibold">
                    <label for="email" class="ml-1">Email Id <span><sup class="text-red-500">*</sup></span></label>
                    <input type="text" id="email" name="email" placeholder="Enter Your Name" required class="border rounded-sm p-2">
                </div>
                <div class="form-group mt-2 flex flex-col items-left font-semibold">
                    <label for="username" class="ml-1">User Name <span><sup class="text-red-500">*</sup></span></label>
                    <input type="text" id="username" name="username" placeholder="Enter a User Name" class="border rounded-sm p-2">
                </div>
                <div class="form-group mt-2 flex flex-col items-left font-semibold">
                    <label for="password" class="ml-1">Password <span><sup class="text-red-500">*</sup></span></label>
                    <input type="password" id="password" name="password" maxlength="8" placeholder="********" class="border rounded-sm p-2">
                </div>
                <!-- <div class="form-group mt-2 flex flex-col items-left font-semibold">
                    <label for="password" class="ml-1">Password <span><sup class="text-red-500">*</sup></span></label>
                    <input type="password" id="password" name="password" placeholder="**********" class="border rounded-sm p-2">
                </div> -->
                <div class="flex flex-col justify-center items-center">
                    <div class="text-center bg-[#87CEEB] mt-5 btn text-lg font-bold p-2 rounded-lg shadow-[rgba(6,_24,_44,_0.4)_0px_0px_0px_2px,_rgba(6,_24,_44,_0.65)_0px_4px_6px_-1px,_rgba(255,_255,_255,_0.08)_0px_1px_0px_inset] hover:bg-[#fff] duration-300 hover:scale-x-105 cursor-pointer">
                        <input class="cursor-pointer" type="submit" name="ok" value="Submit"> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>