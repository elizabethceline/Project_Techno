<title>EduRide</title>

<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />
<script src="https://cdn.tailwindcss.com/3.3.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

<style>
    * {
        /* font-family: 'Roboto', sans-serif; */
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --bg: #f9f9f9;
        --yellow: #efc14e;
        --danger: #701210;
        --success: #00cc66;
        --text: #333;

        --header-height: 3rem;

        --hue: 174;
        --sat: 63%;
        --first-color: hsl(var(--hue), var(--sat), 40%);
        --first-color-alt: hsl(var(--hue), var(--sat), 36%);
        --title-color: hsl(var(--hue), 12%, 15%);
        --text-color: hsl(var(--hue), 8%, 35%);
        --body-color: hsl(var(--hue), 100%, 99%);
        --container-color: #fff;

        --body-font: "Open Sans", sans-serif;
        --h1-font-size: 1.5rem;
        --normal-font-size: 0.938rem;
        --tiny-font-size: 0.625rem;

        --z-tooltip: 10;
        --z-fixed: 100;
    }

    @media screen and (min-width: 968px) {
        :root {
            --h1-font-size: 2.25rem;
            --normal-font-size: 1rem;
        }
    }

    html {
        scroll-behavior: smooth;
    }

    html,
    body {
        overflow-x: hidden;
    }

    body {
        margin: var(--header-height) 0 0 0;
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        background-color: var(--body-color);
        color: var(--text-color);
    }

    ul {
        list-style: none;
    }

    a {
        text-decoration: none;
    }
</style>