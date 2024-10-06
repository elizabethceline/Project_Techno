<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/general.php'; ?>
    <link rel="stylesheet" href="assets/css/navbar.css">
</head>

<body>
    <div class="bg-white fixed top-0 z-20 border-gray-300 border-[1px] w-screen flex items-center justify-start gap-6 px-4 py-3 shadow-md">
        <i class="fa-solid fa-arrow-left fa-lg text-[var(--yellow)]"></i>
        <h1 class=" text-black text-lg">Booking</h1>
    </div>
    <section class="bg-neutral-50 w-screen min-h-screen h-fit flex flex-col items-center pt-20 pb-[3.5rem]">
        <div class="w-[90%] rounded-2xl bg-white border-gray-300 border-[1px] p-3 flex flex-col justify-center">
            <div class="flex items-center gap-3">
                <i class="fa-solid fa-car fa-xl text-[var(--yellow)]"></i>
                <h1 class="font-bold text-black truncate">Antar Jemput XYZ</h1>
            </div>
            <div class="flex items-center gap-3 mt-3">
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
        </div>
        <form class="flex flex-col gap-3 w-[90%] mt-4">
            <div class="block relative">
                <label for="nama_ortu" class="block text-gray-600 cursor-text leading-[140%] font-normal mb-2">Nama Orang Tua</label>
                <input type="text" id="nama_ortu" class="rounded border border-gray-200 w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2  ring-gray-900 outline-0">
            </div>
            <div class="block relative">
                <label for="no_telp" class="block text-gray-600 cursor-text leading-[140%] font-normal mb-2">Nomor Telepon</label>
                <input type="text" id="no_telp" class="rounded border border-gray-200 w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2  ring-gray-900 outline-0">
            </div>
            <div class="block relative">
                <label for="alamat" class="block text-gray-600 cursor-text leading-[140%] font-normal mb-2">Alamat</label>
                <input type="text" id="alamat" class="rounded border border-gray-200 w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2  ring-gray-900 outline-0">
            </div>
            <div class="block relative">
                <label for="nama_anak" class="block text-gray-600 cursor-text leading-[140%] font-normal mb-2">Nama Anak</label>
                <input type="text" id="nama_anak" class="rounded border border-gray-200 w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2  ring-gray-900 outline-0">
            </div>
        </form>
        <div class="flex flex-col w-full items-center py-4 mt-4 bg-white">
            <div class="flex w-[90%] justify-between">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-sack-dollar fa-lg text-[var(--danger)]"></i>
                    <h1 class="text-black">Metode Pembayaran</h1>
                </div>
                <div class="w-1/3">
                    <select data-te-select-init>
                        <option value="1">BCA</option>
                        <option value="2">BNI</option>
                        <option value="3">BRI</option>
                        <option value="4">Mandiri</option>
                        <option value="5">Go-Pay</option>
                        <option value="6">OVO</option>
                        <option value="7">DANA</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full items-center py-4 mt-2 bg-white">
            <div class="flex flex-col w-[90%] mt-2">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-calendar-week fa-lg text-[var(--yellow)]"></i>
                    <h1 class="text-black">Rincian Pembayaran</h1>
                </div>
                <div class="flex items-center justify-between mt-5">
                    <h1 class="font-semibold text-xs m-0">Subtotal untuk Produk</h1>
                    <h1 class="font-semibold text-xs m-0">Rp500.000</h1>
                </div>
                <div class="flex items-center justify-between mt-1">
                    <h1 class="font-semibold text-xs m-0">Biaya Layanan</h1>
                    <h1 class="font-semibold text-xs m-0">Rp10.000</h1>
                </div>
                <div class="flex items-center justify-between mt-1">
                    <h1 class=" text-black font-semibold text-xs">Total Pembayaran</h1>
                    <h1 class="text-[var(--yellow)] font-semibold text-xs">Rp510.000</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full items-center py-4 mt-2 bg-white mb-4">
            <div class="flex w-[90%] justify-between">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-book fa-lg text-gray-400"></i>
                    <h1 class="text-black leading-none">Dengan melanjutkan, Saya setuju dengan Syarat dan Ketentuan yang berlaku.</h1>
                </div>
            </div>
        </div>

    </section>
    <div class="bg-white fixed bottom-0 z-20 border-gray-300 border-[1px] w-screen !h-[3.5rem] flex items-center justify-start gap-2">
        <div class="text-right w-[60%] flex flex-col justify-center items-end px-1 h-full">
            <h1 class="mb-[0.1rem]">Total Pembayaran</h1>
            <h1 class="font-bold text-lg text-[var(--yellow)] leading-none">Rp510.000</h1>
        </div>
        <div class="w-[40%] text-center bg-[var(--yellow)] flex justify-center items-center h-full">
            <h1 class="font-bold text-white">Buat Pesanan</h1>
        </div>
    </div>

    <?php include "include/script.php"; ?>

</body>

</html>