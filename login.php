<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/general.php'; ?>
    <link rel="stylesheet" href="assets/css/navbar.css">
</head>

<body>
    <section class="w-screen h-screen flex flex-col justify-center items-center bg-neutral-100">
        <div class="max-w-md sm:max-w-lg relative flex flex-col p-4 rounded-md">
            <div class="title font-bold mb-2 text-center">Welcome back to <span class="text-[var(--yellow)]">EduRide</span></div>
            <div class="font-normal mb-4 text-center">Log in to your account</div>
            <form class="flex flex-col gap-3">
                <div class="block relative">
                    <label for="email" class="block text-gray-600 cursor-text leading-[140%] font-normal mb-2">Email</label>
                    <input type="text" id="email" class="rounded border border-gray-200 w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2  ring-gray-900 outline-0">

                </div>
                <div class="block relative">
                    <label for="password" class="block text-gray-600 cursor-text leading-[140%] font-normal mb-2">Password</label>
                    <input type="text" id="password" class="rounded border border-gray-200 w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2 ring-gray-900 outline-0">

                </div>
                <div>
                    <a class="text-[var(--yellow)]" href="#">Forgot your password?
                    </a>
                </div>
                <button type="submit" class="bg-[var(--yellow)] w-full m-auto px-6 py-3 rounded-full text-white font-normal">LOGIN</button>

            </form>
            <div class="text-center mt-[1.6rem]">Don’t have an account yet? <a class="text-[var(--yellow)]" href="#">Sign up for free!</a></div>
        </div>
    </section>
</body>

</html>