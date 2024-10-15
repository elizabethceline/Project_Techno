<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/general.php'; ?>
</head>

<body>
    <section class="w-screen h-fit min-h-screen py-10 flex flex-col justify-center items-center bg-neutral-50">
        <div class="max-w-md sm:max-w-lg relative flex flex-col p-4 rounded-md">
            <div class="title font-bold mb-2 text-center">Join <span class="text-[var(--yellow)]">EduRide</span></div>
            <div class="font-normal mb-4 text-center">Create your account</div>
            <div class="flex flex-col gap-3">
                <div class="block relative">
                    <label for="name" class="block text-gray-600 cursor-text leading-[140%] font-normal mb-2">Full Name</label>
                    <input type="text" id="name" class="rounded border border-gray-200 w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2 ring-gray-900 outline-0">
                </div>

                <div class="block relative">
                    <label for="phone" class="block text-gray-600 cursor-text leading-[140%] font-normal mb-2">Phone Number</label>
                    <input type="tel" id="phone" class="rounded border border-gray-200 w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2 ring-gray-900 outline-0">
                </div>

                <div class="block relative">
                    <label for="address" class="block text-gray-600 cursor-text leading-[140%] font-normal mb-2">Address</label>
                    <input type="text" id="address" class="rounded border border-gray-200 w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2 ring-gray-900 outline-0">
                </div>

                <div class="block relative">
                    <label for="email" class="block text-gray-600 cursor-text leading-[140%] font-normal mb-2">Email</label>
                    <input type="email" id="email" class="rounded border border-gray-200 w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2 ring-gray-900 outline-0">
                </div>

                <div class="block relative">
                    <label for="password" class="block text-gray-600 cursor-text leading-[140%] font-normal mb-2">Password</label>
                    <input type="password" id="password" class="rounded border border-gray-200 w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2 ring-gray-900 outline-0">
                </div>

                <div class="block relative">
                    <label for="confirm_password" class="block text-gray-600 cursor-text leading-[140%] font-normal mb-2">Confirm Password</label>
                    <input type="password" id="confirm_password" class="rounded border border-gray-200 w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2 ring-gray-900 outline-0">
                </div>

                <button onclick="window.location='login.php'" type="submit" class="bg-[var(--yellow)] w-full mt-4 m-auto px-6 py-3 rounded-full text-white font-normal">SIGN UP</button>

            </div>
            <div class="text-center mt-[1.6rem]">Already have an account? <a class="text-[var(--yellow)]" href="login.php">Login your account now!</a></div>
        </div>
    </section>

    <?php include 'include/script.php'; ?>
</body>

</html>