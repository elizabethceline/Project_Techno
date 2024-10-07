<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/general.php'; ?>
    <link rel="stylesheet" href="assets/css/navbar.css">

    <style>
        @media (max-width: 640px) {
            .swal-popup {
                font-size: 14px;
            }
            .swal-title {
                font-size: 18px;
            }
            .swal-content {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <?php include 'include/navbar.php'; ?>
    <section class="bg-neutral-50 w-screen min-h-screen pt-16 pb-24 flex flex-col items-center">
        <div class="overflow-hidden max-w-2xl w-full mx-4">
            <div class="p-4 text-center">
                <h1 class="text-3xl font-bold">Profile</h1>
            </div>

            <div class="p-6">
                <form id="profileForm" class="space-y-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Full Name</label>
                        <input type="text" id="fullName" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="Stefanus William Sudargo" disabled>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="c14220049@john.petra.ac.id" disabled>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Phone Number</label>
                        <input type="tel" id="phone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="089506143551" disabled>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Address</label>
                        <input type="text" id="address" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" value="Surabaya Barat" disabled>
                    </div>

                    <div id="oldPasswordContainer" class="hidden">
                        <label class="block text-gray-700 font-semibold mb-2">Old Password</label>
                        <input type="password" id="oldPassword" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>

                    <div id="newPasswordContainer" class="hidden">
                        <label class="block text-gray-700 font-semibold mb-2">New Password</label>
                        <input type="password" id="newPassword" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>

                    <div class="flex justify-end space-x-4">
                        <button type="button" id="editBtn" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">Edit</button>
                        <button type="submit" id="saveBtn" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300 hidden">Save</button>
                        <button type="button" id="cancelBtn" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300 hidden">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php include "include/script.php"; ?>
    <script>
        const editBtn = document.getElementById('editBtn');
        const saveBtn = document.getElementById('saveBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        const oldPasswordContainer = document.getElementById('oldPasswordContainer');
        const newPasswordContainer = document.getElementById('newPasswordContainer');
        const oldPasswordInput = document.getElementById('oldPassword');
        const newPasswordInput = document.getElementById('newPassword');
        const profileForm = document.getElementById('profileForm');
        const inputs = profileForm.querySelectorAll('input');

        editBtn.addEventListener('click', () => {
            inputs.forEach(input => input.disabled = false);
            oldPasswordContainer.classList.remove('hidden');
            newPasswordContainer.classList.remove('hidden');
            editBtn.classList.add('hidden');
            saveBtn.classList.remove('hidden');
            cancelBtn.classList.remove('hidden');
        });

        saveBtn.addEventListener('click', (event) => {
        event.preventDefault();

        const oldPassword = oldPasswordInput.value;
        const newPassword = newPasswordInput.value;

        if (oldPassword !== "") {
            if(newPassword === "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please enter your new password!',
                    customClass: {
                        popup: 'swal-popup',
                        title: 'swal-title',
                        content: 'swal-content',
                    }
                });
                return;
            }
        }

        if (newPassword !== "") {
            if(oldPassword === "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please enter your old password!',
                    customClass: {
                        popup: 'swal-popup',
                        title: 'swal-title',
                        content: 'swal-content',
                    }
                });
                return;
            }
        }

        inputs.forEach(input => input.disabled = true);
        oldPasswordContainer.classList.add('hidden');
        newPasswordContainer.classList.add('hidden');
        editBtn.classList.remove('hidden');
        saveBtn.classList.add('hidden');
        cancelBtn.classList.add('hidden');
        oldPasswordInput.value = "";
        newPasswordInput.value = "";

        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'Profile saved successfully!',
            customClass: {
                popup: 'swal-popup',
                title: 'swal-title',
                content: 'swal-content',
            }
        });
    });

        cancelBtn.addEventListener('click', () => {
            inputs.forEach(input => input.disabled = true);
            oldPasswordContainer.classList.add('hidden');
            newPasswordContainer.classList.add('hidden');
            editBtn.classList.remove('hidden');
            saveBtn.classList.add('hidden');
            cancelBtn.classList.add('hidden');
            oldPasswordInput.value = "";
            newPasswordInput.value = "";
        });
    </script>
</body>

</html>