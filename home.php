<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/general.php'; ?>
    <link rel="stylesheet" href="assets/css/navbar.css">

    <style>
        .slider-container {
            position: relative;
            width: 100%;
            height: 10px;
        }

        .slider-track {
            position: absolute;
            width: 100%;
            height: 10px;
            background: #e5e7eb;
            border-radius: 5px;
        }

        .slider-range {
            position: absolute;
            height: 10px;
            background: var(--yellow2);
            border-radius: 5px;
        }

        input[type="range"] {
            -webkit-appearance: none;
            appearance: none;
            position: absolute;
            width: 100%;
            height: 10px;
            background: transparent;
            pointer-events: none;
            outline: none;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 15px;
            height: 15px;
            background: var(--yellow2);
            border-radius: 50%;
            cursor: pointer;
            pointer-events: auto;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
            border: none;
            outline: none;
        }

        input[type="range"]::-moz-range-thumb {
            width: 15px;
            height: 15px;
            background: var(--yellow2);
            border-radius: 50%;
            cursor: pointer;
            pointer-events: auto;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
            border: none;
            outline: none;
        }

        input[type="range"]:focus::-webkit-slider-thumb {
            background: var(--yellow2);
        }

        input[type="range"]:active::-webkit-slider-thumb {
            background: var(--yellow2);
        }

        input[type="range"]:focus::-moz-range-thumb {
            background: var(--yellow2);
        }

        input[type="range"]:active::-moz-range-thumb {
            background: var(--yellow2);
        }

        .price-values {
            display: flex;
            justify-content: space-between;
            font-size: 0.875rem;
        }
    </style>
</head>

<body>
    <?php include 'include/navbar.php'; ?>
    <section class="bg-neutral-50 w-screen min-h-screen h-fit flex flex-col pt-16 pb-24 lg:py-24 items-center">
        <div class="w-[90%] lg:grid grid-cols-3 gap-6">
            <div class="relative flex flex-col items-stretch mt-2">
                <h2 class="mb-2">Sekolah</h2>
                <button id="dropdownButtonSekolah" type="button"
                    class="w-full border border-white bg-white rounded-md shadow-sm pl-3 pr-3 py-[0.32rem] mb-3 text-left cursor-pointer focus:outline-none focus:ring-1 focus:ring-[var(--yellow)] focus:border-[var(--yellow)] relative">
                    <span id="dropdownPlaceholderSekolah" class="block truncate">Select Sekolah</span>
                    <svg class="h-3 w-3 absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 pointer-events-none"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 16a1 1 0 01-.707-.293l-8-8a1 1 0 011.414-1.414L10 13.586 16.293 7.293a1 1 0 011.414 1.414l-8 8A1 1 0 0110 16z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div id="dropdownMenuSekolah"
                    class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-60 rounded-md py-1 px-1 sm:px-2 text-base ring-1 ring-black ring-opacity-5 overflow-auto hidden top-full">
                    <div class="p-2">
                        <input id="searchInputSekolah" type="text" placeholder="Search..."
                            class="w-full border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-1 focus:ring-[var(--yellow)]">
                    </div>

                    <label class="relative pl-8 py-2 flex items-center cursor-pointer hover:bg-gray-100">
                        <input type="checkbox" value="stroke" id="selectAllSekolah"
                            class="absolute left-2 h-4 w-4 text-[var(--yellow)] border-gray-300 rounded focus:ring-[var(--yellow)]">
                        <span class="ml-3 block truncate text-black whitespace-normal">Select All</span>
                    </label>
                    <label class="relative pl-8 py-2 flex items-center cursor-pointer hover:bg-gray-100">
                        <input type="checkbox" name="sekolah[]" value="SD Kristen Petra 1"
                            class="absolute left-2 h-4 w-4 text-[var(--yellow)] border-gray-300 rounded focus:ring-[var(--yellow)]">
                        <span class="ml-3 block truncate text-black whitespace-normal">SD Kristen Petra 1</span>
                    </label>
                    <label class="relative pl-8 py-2 flex items-center cursor-pointer hover:bg-gray-100">
                        <input type="checkbox" name="sekolah[]" value="SD Kristen Petra 10"
                            class="absolute left-2 h-4 w-4 text-[var(--yellow)] border-gray-300 rounded focus:ring-[var(--yellow)]">
                        <span class="ml-3 block truncate text-black whitespace-normal">SD Kristen Petra 10</span>
                    </label>
                    <label class="relative pl-8 py-2 flex items-center cursor-pointer hover:bg-gray-100">
                        <input type="checkbox" name="sekolah[]" value="SD Kristen Petra 11"
                            class="absolute left-2 h-4 w-4 text-[var(--yellow)] border-gray-300 rounded focus:ring-[var(--yellow)]">
                        <span class="ml-3 block truncate text-black whitespace-normal">SD Kristen Petra 11</span>
                    </label>
                </div>
            </div>

            <div class="relative flex flex-col items-stretch mt-2">
                <h2 class="mb-2">Lokasi</h2>
                <button id="dropdownButtonLokasi" type="button"
                    class="w-full border border-white bg-white rounded-md shadow-sm pl-3 pr-3 py-[0.32rem] mb-3 text-left cursor-pointer focus:outline-none focus:ring-1 focus:ring-[var(--yellow)] focus:border-[var(--yellow)] relative">
                    <span id="dropdownPlaceholderLokasi" class="block truncate">Select Lokasi</span>
                    <svg class="h-3 w-3 absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 pointer-events-none"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 16a1 1 0 01-.707-.293l-8-8a1 1 0 011.414-1.414L10 13.586 16.293 7.293a1 1 0 011.414 1.414l-8 8A1 1 0 0110 16z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div id="dropdownMenuLokasi"
                    class="absolute z-10 mt-1 w-full bg-white shadow-lg max-h-60 rounded-md py-1 px-1 sm:px-2 text-base ring-1 ring-black ring-opacity-5 overflow-auto hidden top-full">
                    <div class="p-2">
                        <input id="searchInputLokasi" type="text" placeholder="Search..."
                            class="w-full border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring-1 focus:ring-[var(--yellow)]">
                    </div>

                    <label class="relative pl-8 py-2 flex items-center cursor-pointer hover:bg-gray-100">
                        <input type="checkbox" value="stroke" id="selectAllLokasi"
                            class="absolute left-2 h-4 w-4 text-[var(--yellow)] border-gray-300 rounded focus:ring-[var(--yellow)]">
                        <span class="ml-3 block truncate text-black whitespace-normal">Select All</span>
                    </label>
                    <label class="relative pl-8 py-2 flex items-center cursor-pointer hover:bg-gray-100">
                        <input type="checkbox" name="lokasi[]" value="Sukomanunggal"
                            class="absolute left-2 h-4 w-4 text-[var(--yellow)] border-gray-300 rounded focus:ring-[var(--yellow)]">
                        <span class="ml-3 block truncate text-black whitespace-normal">Sukomanunggal</span>
                    </label>
                    <label class="relative pl-8 py-2 flex items-center cursor-pointer hover:bg-gray-100">
                        <input type="checkbox" name="lokasi[]" value="Sambikerep"
                            class="absolute left-2 h-4 w-4 text-[var(--yellow)] border-gray-300 rounded focus:ring-[var(--yellow)]">
                        <span class="ml-3 block truncate text-black whitespace-normal">Sambikerep</span>
                    </label>
                    <label class="relative pl-8 py-2 flex items-center cursor-pointer hover:bg-gray-100">
                        <input type="checkbox" name="lokasi[]" value="Lakarsantri"
                            class="absolute left-2 h-4 w-4 text-[var(--yellow)] border-gray-300 rounded focus:ring-[var(--yellow)]">
                        <span class="ml-3 block truncate text-black whitespace-normal">Lakarsantri</span>
                    </label>
                </div>
            </div>

            <div class="relative flex flex-col items-stretch mt-2">
                <h2 class="mb-2">Range Harga</h2>
                <div class="slider-container">
                    <div class="slider-track"></div>
                    <div class="slider-range" id="sliderRange"></div>
                    <input id="sliderMin" type="range" min="0" max="2000000" step="50000" value="0">
                    <input id="sliderMax" type="range" min="0" max="2000000" step="50000" value="2000000">
                </div>
                <div class="price-values mt-2">
                    <span id="minPrice">Rp0</span>
                    <span id="maxPrice">Rp2.000.000</span>
                </div>
            </div>
        </div>

        <div id="list-anjem" class="w-[90%] grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-2 mt-6">
            <!-- <div
                class="block max-w-[18rem] rounded-lg bg-white text-surface shadow-secondary-1">
                <div class="relative overflow-hidden bg-cover bg-no-repeat">
                    <img
                        class="rounded-t-lg"
                        src="https://antarjemputsekolahsurabaya.wordpress.com/wp-content/uploads/2014/12/brosur-antar-jemput-sekolah-surabaya.jpg"
                        alt="" />
                </div>
                <div class="p-2">
                    <p class="font-bold truncate">
                        Antar Jemput XYZ
                    </p>
                    <p class="text-xs">SD Kristen Petra 1</p>
                    <p class="font-bold mt-2 text-success">Rp500.000</p>
                    <p class="text-xs"><i class="fa-solid fa-location-dot fa-xs"></i> Sambikerep, Lakarsantri</p>
                </div>
            </div>
            <div
                class="block max-w-[18rem] rounded-lg bg-white text-surface shadow-secondary-1">
                <div class="relative overflow-hidden bg-cover bg-no-repeat">
                    <img
                        class="rounded-t-lg"
                        src="https://tecdn.b-cdn.net/img/new/standard/nature/182.jpg"
                        alt="" />
                </div>
                <div class="p-2">
                    <p class="font-bold truncate">
                        Antar Jemput ABC
                    </p>
                    <p class="text-xs">SD Kristen Petra 1</p>
                    <p class="font-bold mt-2 text-success">Rp450.000</p>
                    <p class="text-xs"><i class="fa-solid fa-location-dot fa-xs"></i> Sukomanunggal</p>
                </div>
            </div>
            <div
                class="block max-w-[18rem] rounded-lg bg-white text-surface shadow-secondary-1">
                <div class="relative overflow-hidden bg-cover bg-no-repeat">
                    <img
                        class="rounded-t-lg"
                        src="https://tecdn.b-cdn.net/img/new/standard/nature/182.jpg"
                        alt="" />
                </div>
                <div class="p-2">
                    <p class="font-bold truncate">
                        Antar Jemput XYZ
                    </p>
                    <p class="text-xs">SD Kristen Petra 1</p>
                    <p class="font-bold mt-2 text-success">Rp500.000</p>
                    <p class="text-xs"><i class="fa-solid fa-location-dot fa-xs"></i> Sambikerep, Lakarsantri</p>
                </div>
            </div>
            <div
                class="block max-w-[18rem] rounded-lg bg-white text-surface shadow-secondary-1">
                <div class="relative overflow-hidden bg-cover bg-no-repeat">
                    <img
                        class="rounded-t-lg"
                        src="https://tecdn.b-cdn.net/img/new/standard/nature/182.jpg"
                        alt="" />
                </div>
                <div class="p-2">
                    <p class="font-bold truncate">
                        Antar Jemput ABC
                    </p>
                    <p class="text-xs">SD Kristen Petra 1</p>
                    <p class="font-bold mt-2 text-success">Rp450.000</p>
                    <p class="text-xs"><i class="fa-solid fa-location-dot fa-xs"></i> Sukomanunggal</p>
                </div>
            </div> -->
        </div>

    </section>

    <?php include "include/script.php"; ?>

    <script>
        const ANJEMS = [{
                name: 'Antar Jemput XYZ',
                school: 'SD Kristen Petra 1',
                location: 'Sambikerep',
                price: 500000,
                img: 'https://tecdn.b-cdn.net/img/new/standard/nature/182.jpg'
            },
            {
                name: 'Antar Jemput ABC',
                school: 'SD Kristen Petra 1',
                location: 'Sukomanunggal',
                price: 450000,
                img: 'https://tecdn.b-cdn.net/img/new/standard/nature/182.jpg'
            },
            {
                name: 'Antar Jemput EFG',
                school: 'SD Kristen Petra 10',
                location: 'Sambikerep',
                price: 500000,
                img: 'https://tecdn.b-cdn.net/img/new/standard/nature/182.jpg'
            },
            {
                name: 'Antar Jemput QRS',
                school: 'SD Kristen Petra 11',
                location: 'Lakarsantri',
                price: 600000,
                img: 'https://tecdn.b-cdn.net/img/new/standard/nature/182.jpg'
            }
        ];
        var filterSchool = [];
        var filterLocation = [];
        var minPrice = 0;
        var maxPrice = 2000000;

        document.addEventListener('DOMContentLoaded', function() {
            setupDropdown('Sekolah');
            setupDropdown('Lokasi');
            showAnjem(ANJEMS);

            function showAnjem(anjems) {
                if (anjems) {
                    const listAnjem = document.getElementById('list-anjem');
                    listAnjem.innerHTML = '';
                    anjems.forEach(anjem => {
                        const format = new Intl.NumberFormat('id-ID', {
                            style: 'currency',
                            currency: 'IDR'
                        });
                        listAnjem.insertAdjacentHTML('beforeend', `<div
                                                    class="block max-w-[18rem] rounded-lg bg-white text-surface shadow-secondary-1">
                                                    <div class="relative overflow-hidden bg-cover bg-no-repeat">
                                                        <img
                                                            class="rounded-t-lg"
                                                            src="${anjem.img}"
                                                            alt="" />
                                                    </div>
                                                    <div class="p-2">
                                                        <p class="font-bold truncate">${anjem.name}</p>
                                                        <p class="text-xs">${anjem.school}</p>
                                                        <p class="font-bold mt-2 text-success">${format.format(anjem.price)}</p>
                                                        <p class="text-xs"><i class="fa-solid fa-location-dot fa-xs"></i> ${anjem.location}</p>
                                                    </div>
                                                </div>`)
                    });
                }
            }

            function getAnjemByFilter() {
                console.log(filterSchool);
                console.log(filterLocation);
                
                
                return ANJEMS.filter(anjem => {
                    const schoolMatches = filterSchool.length > 0 ? filterSchool.includes(anjem.school) : true;
                    const locationMatches = filterLocation.length > 0 ? filterLocation.includes(anjem.location) : true;
                    const minPriceMatches = anjem.price >= minPrice;
                    const maxPriceMatches = anjem.price <= maxPrice;

                    return schoolMatches && locationMatches && minPriceMatches && maxPriceMatches;
                });
            }

            function setupDropdown(type) {
                const dropdownButton = document.getElementById(`dropdownButton${type}`);
                const dropdownMenu = document.getElementById(`dropdownMenu${type}`);
                const checkboxes = dropdownMenu.querySelectorAll('input[type="checkbox"]:not(#selectAll' + type + ')');
                const selectAllCheckbox = document.getElementById('selectAll' + type);
                const placeholder = document.getElementById(`dropdownPlaceholder${type}`);
                const searchInput = document.getElementById(`searchInput${type}`);

                dropdownButton.addEventListener('click', function() {
                    dropdownMenu.classList.toggle('hidden');
                });

                selectAllCheckbox.addEventListener('change', function() {
                    if (type == 'Sekolah') 
                        filterSchool = [];
                    else if (type == 'Lokasi') 
                        filterLocation = [];
                    checkboxes.forEach(function(checkbox) {
                        checkbox.checked = selectAllCheckbox.checked;
                        if (checkbox.checked) {
                            addFilter(checkbox.parentElement.querySelector('span').textContent.trim());
                        } else {
                            removeFilter(checkbox.parentElement.querySelector('span').textContent.trim());
                        }
                    });
                    updatePlaceholder();
                    showAnjem(getAnjemByFilter());
                });

                checkboxes.forEach(function(checkbox) {
                    checkbox.addEventListener('change', function() {
                        if (!checkbox.checked) {
                            selectAllCheckbox.checked = false;
                            removeFilter(checkbox.parentElement.querySelector('span').textContent.trim());
                        } else if (Array.from(checkboxes).every(i => i.checked)) {
                            selectAllCheckbox.checked = true;
                        } else {
                            addFilter(checkbox.parentElement.querySelector('span').textContent.trim());
                        }
                        updatePlaceholder();
                        showAnjem(getAnjemByFilter());
                    });
                });

                function updatePlaceholder() {
                    const selectedOptions = Array.from(checkboxes).filter(i => i.checked).map(i => {
                        const label = i.parentElement.querySelector('span');
                        return label.textContent.trim();
                    });

                    if (selectedOptions.length) {
                        const selectedText = selectedOptions.join(', ');
                        placeholder.textContent = selectedText;

                        if (placeholder.scrollWidth > placeholder.clientWidth) {
                            placeholder.textContent = `${selectedOptions.length} options selected`;
                        }
                    } else {
                        placeholder.textContent = `Select ${type}`;
                    }
                }

                function removeFilter(filter) {
                    if (type == 'Sekolah') {
                        filterSchool.pop(filter);
                    } else if (type == 'Lokasi') {
                        filterLocation.pop(filter);
                    }
                }

                function addFilter(filter) {
                    if (type == 'Sekolah') {
                        filterSchool.push(filter);
                    } else if (type == 'Lokasi') {
                        filterLocation.push(filter);
                    }
                }

                searchInput.addEventListener('input', function() {
                    const filter = searchInput.value.toLowerCase();
                    const labels = dropdownMenu.querySelectorAll('label');

                    labels.forEach(function(label) {
                        const text = label.textContent.toLowerCase();
                        if (text.includes(filter)) {
                            label.style.display = '';
                        } else {
                            label.style.display = 'none';
                        }
                    });
                });

                document.addEventListener('click', function(event) {
                    if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                        dropdownMenu.classList.add('hidden');
                    }
                });
            }

            const sliderMin = document.getElementById('sliderMin');
            const sliderMax = document.getElementById('sliderMax');
            const sliderRange = document.getElementById('sliderRange');
            const minPriceDisplay = document.getElementById('minPrice');
            const maxPriceDisplay = document.getElementById('maxPrice');
            const min = parseInt(sliderMin.min);
            const max = parseInt(sliderMax.max);

            function updateSlider() {
                const minVal = parseInt(sliderMin.value);
                const maxVal = parseInt(sliderMax.value);

                if (minVal > maxVal) {
                    sliderMin.value = maxVal;
                } else if (maxVal < minVal) {
                    sliderMax.value = minVal;
                }

                minPrice = sliderMin.value;
                maxPrice = sliderMax.value;
                showAnjem(getAnjemByFilter());

                const percentMin = ((sliderMin.value - min) / (max - min)) * 100;
                const percentMax = ((sliderMax.value - min) / (max - min)) * 100;
                sliderRange.style.left = `${percentMin}%`;
                sliderRange.style.right = `${100 - percentMax}%`;

                minPriceDisplay.textContent = `Rp${parseInt(sliderMin.value).toLocaleString('id-ID')}`;
                maxPriceDisplay.textContent = `Rp${parseInt(sliderMax.value).toLocaleString('id-ID')}`;
            }

            updateSlider();

            sliderMin.addEventListener('input', updateSlider);
            sliderMax.addEventListener('input', updateSlider);
        });
    </script>
</body>

</html>