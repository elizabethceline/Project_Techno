<title>EduRide</title>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">

<style>
    * {
        /* font-family: 'Roboto', sans-serif; */
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --bg: #f9f9f9;
        --yellow: #dea81c;
        --yellow2: #fcd34d;
        --yellow3: #fcfae3;
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
        color: var(--text-color);
        line-height: 1.25rem;
    }

    .title {
        font-size: var(--h1-font-size);
        color: var(--title-color);
        line-height: 2rem;
    }

    ul {
        list-style: none;
    }

    a {
        text-decoration: none;
    }
</style>