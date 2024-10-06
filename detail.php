<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/general.php'; ?>
    <link rel="stylesheet" href="assets/css/navbar.css">
</head>

<body>
    <section class="bg-neutral-100 w-screen min-h-screen h-fit flex flex-col items-center">
        <div class="relative w-full">
            <div class="absolute bottom-11 left-4 bg-white bg-opacity-95 w-8 h-8 flex items-center justify-center rounded-full z-10 shadow-md">
                <i class="fa-solid fa-arrow-left fa-lg text-neutral-800"></i>
            </div>
            <img src="https://antarjemputsekolahsurabaya.wordpress.com/wp-content/uploads/2014/12/brosur-antar-jemput-sekolah-surabaya.jpg" alt="" class="w-full h-[260px] brightness-90 ">
        </div>

        <div class="absolute bg-neutral-50 w-screen mt-[230px] rounded-t-[2rem] flex flex-col items-center pt-6 pb-24">
            <div class="w-[90%]">
                <div class="w-full rounded-2xl bg-[var(--yellow3)] border-[var(--yellow2)] border-2 p-3 flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-car fa-xl text-[var(--yellow)]"></i>
                        <h1 class="font-bold text-black truncate">Antar Jemput XYZ</h1>
                    </div>
                    <h1 class="font-semibold">3 / 8</h1>
                </div>
                <div class="w-full rounded-2xl bg-white border-gray-300 border-[1px] p-3 flex flex-col justify-center mt-4">
                    <div class="flex items-center gap-3">
                        <i class="fa-solid fa-school fa-lg text-[#381b06]"></i>
                        <div class="flex flex-col justify-center">
                            <h1 class="font-semibold text-xs m-0 leading-none">Sekolah</h1>
                            <h1 class="font-bold text-black m-0 ">SD Kristen Petra 1</h1>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 mt-3">
                        <i class="fa-solid fa-location-dot fa-2xl text-[#04300b]"></i>
                        <div class="flex flex-col justify-center">
                            <h1 class="font-semibold text-xs m-0 leading-none">Rute</h1>
                            <h1 class="font-bold text-black m-0 ">Sambikerep, Lakarsantri</h1>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 mt-3">
                        <i class="fa-solid fa-car-side fa-lg text-[var(--danger)]"></i>
                        <div class="flex flex-col justify-center">
                            <h1 class="font-semibold text-xs m-0 leading-none">Kendaraan</h1>
                            <h1 class="font-bold text-black m-0 ">Kijang Innova</h1>
                        </div>
                    </div>
                </div>
                <div class="w-full rounded-2xl bg-white border-gray-300 border-[1px] p-3 flex flex-col justify-center mt-4">
                    <div class="flex items-center justify-between gap-3">
                        <div class="flex flex-col justify-center">
                            <h1 class="font-semibold text-xs m-0"><i class="fa-solid fa-user mr-1"></i> Detail Driver</h1>
                            <h1 class="font-bold text-black mt-2">Stefanus William</h1>
                            <h1 class="font-semibold text-black text-xs m-0">31 tahun</h1>
                            <h1 class="font-semibold text-black text-xs m-0">Pengalaman: 4 tahun</h1>
                        </div>
                        <img src="assets/img/dargo.png" alt="" class="w-1/3 h-[100px] rounded-2xl">
                    </div>
                </div>
                <div class="w-full rounded-2xl bg-white border-gray-300 border-[1px] px-3 py-4 flex flex-col justify-center mt-4">
                    <h1 class="font-semibold text-xs m-0"><i class="fa-solid fa-book mr-1"></i> Description</h1>
                    <h1 class=" text-black mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint quisquam odit fugiat ducimus quia quas delectus ipsum accusamus iusto quos. Corporis debitis aliquam in sed ut hic ad distinctio sunt?</h1>
                    <h1 class=" text-black mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia laboriosam eius nobis earum ipsum architecto delectus sapiente enim suscipit nam, aliquam tempore tempora beatae minus dolorem nulla cupiditate! Inventore, ipsam nemo exercitationem distinctio nam animi culpa provident perferendis natus architecto.</h1>
                </div>
            </div>
        </div>

    </section>
    <div class="bg-white fixed bottom-0 z-20 border-gray-300 border-[1px] w-screen flex flex-col items-center justify-center">
        <!-- <div class="w-[90%] bg-[#80bae0] px-4 py-2 mt-4 rounded-full">
            <h1 class="text-white">Harga belum termasuk biaya jasa aplikasi</h1>
        </div> -->
        <div class="w-[90%] bg-[var(--yellow)] px-4 py-2 my-4 rounded-full flex justify-between items-center">
            <h1 class="text-white font-bold">Book Now!</h1>
            <div class="flex items-center gap-2">
                <h1 class="text-white font-bold">Rp500.000</h1>
                <div class="bg-white w-6 h-6 flex justify-center items-center rounded-full">
                    <i class="fa-solid fa-arrow-right text-[var(--yellow)]"></i>
                </div>
            </div>

        </div>
    </div>

    <?php include "include/script.php"; ?>

</body>

</html>