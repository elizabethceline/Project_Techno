<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('include/general.php') ?>
</head>

<body>
    <div class="fixed w-full px-5 py-3 border-b flex items-center gap-5">
        <a href="home.php">
            <i class="fa-solid fa-arrow-left fa-xl"></i>
        </a>
        <div class="flex items-center gap-3">
            <img src="assets/img/logo.png" alt="" class="w-[32px]">
            <h1 class="text-lg font-bold">EduRide Customer Service</h1>
        </div>
    </div>
    <div class="h-[100vh] flex flex-col justify-between pt-16">
        <div id="chat-container" class="w-fit pt-3 px-3 overflow-y-auto flex flex-col">
            <div class="flex">
                <div class="">
                    <img src="assets/img/logo.png" alt="" class="w-[32px]">
                </div>
                <p class="w-full bg-slate-100 rounded-e rounded-bl mx-2 mt-3 p-3">
                    Selamat datang di customer service EduRide. Apakah ada yang bisa dibantu?
                </p>
            </div>
        </div>
        <div class="flex items-center gap-3 m-2">
            <input type="text" id="message" placeholder="Write your messages here" autocomplete="off"
                class="block min-h-[auto] w-10/12 rounded-full border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none">
            <button
                type="button" onclick="sendMessage()"
                class="inline-block rounded-full bg-primary px-6 pb-2 pt-2.5 text-xs font-bold uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none">
                Send
            </button>
        </div>
    </div>
</body>

<?php include "include/script.php"; ?>
<script>
    function sendMessage() {
        const message = document.getElementById('message');

        document.getElementById('chat-container').insertAdjacentHTML('beforeend', `<div class="flex flex-row-reverse">
            <p class="w-fit bg-primary text-white text-end rounded-s rounded-br mx-2 mt-3 p-3">${message.value}</p>
        </div>`);
        message.value = '';
    }
</script>

</html>