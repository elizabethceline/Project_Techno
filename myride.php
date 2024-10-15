<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/general.php'; ?>
    <link rel="stylesheet" href="assets/css/navbar.css">

</head>

<body>
    <?php include 'include/navbar.php'; ?>
    <section onclick="window.location = 'track.php'" class="bg-neutral-50 w-screen min-h-screen h-fit flex flex-col pt-16 pb-24 lg:py-24 items-center">
        <div class="w-[90%] flex rounded-lg bg-white text-surface shadow-secondary-1 relative">
            <div class="p-4 w-full">
                <div class="flex items-center gap-2">
                    <i class="fa-regular fa-circle-dot fa-xs text-success"></i>
                    <p class="text-xs text-success font-bold">
                        Active
                    </p>
                </div>
                <p class="font-bold mt-2 text-black">
                    Antar Jemput ABC
                </p>
                <div class="flex flex-col justify-center mt-2">
                    <h1 class="font-semibold text-xs m-0 leading-none">Sekolah</h1>
                    <h1 class="font-bold m-0 text-black">SD Kristen Petra 1</h1>
                </div>
                <div class="flex flex-col justify-center mt-2">
                    <h1 class="font-semibold text-xs m-0 leading-none">Rute</h1>
                    <h1 class="font-bold m-0 text-black">Sambikerep, Lakarsantri</h1>
                </div>
            </div>
            <img src="https://antarjemputsekolahsurabaya.wordpress.com/wp-content/uploads/2014/12/brosur-antar-jemput-sekolah-surabaya.jpg" alt="" class="absolute top-4 right-4 w-[120px] h-auto rounded-md">
        </div>
    </section>

    <?php include "include/script.php"; ?>

</body>

</html>