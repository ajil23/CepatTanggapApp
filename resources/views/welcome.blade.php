<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{asset('backend/img/favicon.png')}}" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <style>
        /*=============== GOOGLE FONTS ===============*/
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        /*=============== VARIABLES CSS ===============*/
        :root {
            --header-height: 3.5rem;
            /*56px*/

            /*========== Colors ==========*/
            /*Color mode HSL(hue, saturation, lightness)*/
            --hue: 152;
            --first-color: #09884b;
            --first-color-alt: #085e34;
            --first-color-light: hsl(var(--hue), 24%, 66%);
            --first-color-lighten: #09884b;
            --nav-link-color: #858585;
            --title-color: hsl(var(--hue), 4%, 15%);
            --text-color: #858585;
            --text-color-light: hsl(var(--hue), 4%, 55%);
            --body-color: hsl(var(--hue), 0%, 100%);
            --container-color: #FFF;

            /*========== Font and typography ==========*/
            /*.5rem = 8px | 1rem = 16px ...*/
            --body-font: 'Poppins', sans-serif;
            --big-font-size: 2rem;
            --h1-font-size: 1.5rem;
            --h2-font-size: 1.25rem;
            --h3-font-size: 1rem;
            --normal-font-size: .938rem;
            --small-font-size: .813rem;
            --smaller-font-size: .75rem;

            /*========== Font weight ==========*/
            --font-medium: 500;
            --font-semi-bold: 600;

            /*========== Margenes Bottom ==========*/
            /*.5rem = 8px | 1rem = 16px ...*/
            --mb-0-5: .5rem;
            --mb-0-75: .75rem;
            --mb-1: 1rem;
            --mb-1-5: 1.5rem;
            --mb-2: 2rem;
            --mb-2-5: 2.5rem;

            /*========== z index ==========*/
            --z-tooltip: 10;
            --z-fixed: 100;
        }

        /* Responsive typography */
        @media screen and (min-width: 968px) {
            :root {
                --big-font-size: 3.5rem;
                --h1-font-size: 2.25rem;
                --h2-font-size: 1.5rem;
                --h3-font-size: 1.25rem;
                --normal-font-size: 1rem;
                --small-font-size: .875rem;
                --smaller-font-size: .813rem;
            }
        }

        /*=============== BASE ===============*/
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body,
        button,
        input,
        textarea {
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
        }

        body {
            margin: var(--header-height) 0 0 0;
            background-color: var(--body-color);
            color: var(--text-color);
            transition: .4s;
            /*For animation dark mode*/
        }

        button {
            cursor: pointer;
            border: none;
            outline: none;
        }

        h1,
        h2,
        h3 {
            color: var(--title-color);
            font-weight: var(--font-semi-bold);
        }

        ul {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /*=============== REUSABLE CSS CLASSES ===============*/
        .section {
            padding: 5.5rem 0 1rem;
        }

        .section__title,
        .section__title-center {
            font-size: var(--h2-font-size);
            margin-bottom: var(--mb-2);
            line-height: 140%;
        }

        .section__title-center {
            text-align: center;
        }

        .container {
            max-width: 968px;
            margin-left: var(--mb-1-5);
            margin-right: var(--mb-1-5);
        }

        .grid {
            display: grid;
        }

        .main {
            overflow: hidden;
            /*For animation*/
        }

        /*=============== HEADER ===============*/
        .header {
            width: 100%;
            background-color: var(--body-color);
            position: fixed;
            top: 0;
            left: 0;
            z-index: var(--z-fixed);
            transition: .4s;
            /*For animation dark mode*/
        }

        /*=============== NAV ===============*/
        .nav {
            height: var(--header-height);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav__logo,
        .nav__toggle,
        .nav__close {
            color: var(--title-color);
        }

        .nav__logo {
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: -1px;
            display: inline-flex;
            align-items: center;
            column-gap: .5rem;
            transition: .3s;
        }

        .nav__logo-icon {
            font-size: 1.15rem;
            color: var(--first-color);
        }

        .nav__logo:hover {
            color: var(--first-color);
        }

        .nav__toggle {
            display: inline-flex;
            font-size: 1.25rem;
            cursor: pointer;
        }

        @media screen and (max-width: 767px) {
            .nav__menu {
                position: fixed;
                background-color: var(--container-color);
                width: 80%;
                height: 100%;
                top: 0;
                right: -100%;
                box-shadow: -2px 0 4px hsla(var(--hue), 24%, 15%, .1);
                padding: 4rem 0 0 3rem;
                border-radius: 1rem 0 0 1rem;
                transition: .3s;
                z-index: var(--z-fixed);
            }
        }

        .nav__close {
            font-size: 1.5rem;
            position: absolute;
            top: 1rem;
            right: 1.25rem;
            cursor: pointer;
        }

        .nav__list {
            display: flex;
            flex-direction: column;
            row-gap: 1.5rem;
        }

        .nav__link {
            color: var(--nav-link-color);
            font-weight: var(--font-medium);
            transition: .3s;
        }

        .nav__link:hover {
            color: var(--first-color);
        }

        /* Show menu */
        .show-menu {
            right: 0;
        }

        /* Change background header */
        .scroll-header {
            box-shadow: 0 1px 4px hsla(var(--hue), 4%, 15%, .1);
        }

        /* Active link */
        .active-link {
            position: relative;
            color: var(--first-color);
        }

        .active-link::after {
            content: '';
            position: absolute;
            bottom: -.5rem;
            left: 0;
            width: 50%;
            height: 2px;
            background-color: var(--first-color);
        }

        /*=============== HOME ===============*/
        .home {
            padding: 3.5rem 0 2rem;
        }

        .home__container {
            position: relative;
            row-gap: 2rem;
        }

        .home__img {
            width: 200px;
            justify-self: center;
            margin-bottom: 70px;
            margin-top: 50px;
        }

        .home__title {
            font-size: var(--big-font-size);
            line-height: 140%;
            margin-bottom: var(--mb-1);
        }

        .home__description {
            margin-bottom: var(--mb-2-5);
        }

        .home__social {
            position: absolute;
            top: 2rem;
            right: -1rem;
            display: grid;
            justify-items: center;
            row-gap: 3.5rem;
        }

        .home__social-follow {
            font-weight: var(--font-medium);
            font-size: var(--smaller-font-size);
            color: var(--first-color);
            position: relative;
            transform: rotate(90deg);
        }

        .home__social-follow::after {
            content: '';
            position: absolute;
            width: 1rem;
            height: 2px;
            background-color: var(--first-color);
            right: -45%;
            top: 50%;
        }

        .home__social-links {
            display: inline-flex;
            flex-direction: column;
            row-gap: .25rem;
        }

        .home__social-link {
            font-size: 1rem;
            color: var(--first-color);
            transition: .3s;
        }

        .home__social-link:hover {
            transform: translateX(.25rem);
        }

        /*=============== BUTTONS ===============*/
        .button {
            display: inline-block;
            background-color: var(--first-color);
            color: #FFF;
            padding: 1rem 1.75rem;
            border-radius: .5rem;
            font-weight: var(--font-medium);
            transition: .3s;
        }

        .button:hover {
            background-color: var(--first-color-alt);
        }

        .button__icon {
            transition: .3s;
        }

        .button:hover .button__icon {
            transform: translateX(.25rem);
        }

        .button--flex {
            display: inline-flex;
            align-items: center;
            column-gap: .5rem;
        }

        .button--link {
            color: var(--first-color);
            font-weight: var(--font-medium);
        }

        .button--link:hover .button__icon {
            transform: translateX(.25rem);
        }

        /*=============== ABOUT ===============*/
        .about__container {
            row-gap: 1rem;
        }

        .about__img {
            width: 280px;
            justify-self: center;
            margin-top: 90px;
        }

        .about__title {
            margin-bottom: var(--mb-1);
        }

        .about__description {
            margin-bottom: var(--mb-2);
            text-align: justify;
        }

        .about__details {
            display: grid;
            row-gap: 1rem;
            margin-bottom: var(--mb-2-5);
        }

        .about__details-description {
            display: inline-flex;
            column-gap: .5rem;
            font-size: var(--small-font-size);
        }

        .about__details-icon {
            font-size: 1rem;
            color: var(--first-color);
            margin-top: .15rem;
        }

        /*=============== STEPS ===============*/
        .steps__bg {
            background-color: var(--first-color);
            padding: 3rem 2rem 2rem;
            border-radius: 1rem;
        }

        .steps__container {
            gap: 2rem;
            padding-top: 1rem;
        }

        .steps__title {
            color: #FFF;
        }

        .steps__card {
            background-color: var(--container-color);
            padding: 2.5rem 3rem 2rem 1.5rem;
            border-radius: 1rem;
        }

        .steps__card-number {
            display: inline-block;
            background-color: var(--first-color-alt);
            color: #FFF;
            padding: .5rem .75rem;
            border-radius: .25rem;
            font-size: var(--h2-font-size);
            margin-bottom: var(--mb-1-5);
            transition: .3s;
        }

        .steps__card-title {
            font-size: var(--h3-font-size);
            margin-bottom: var(--mb-0-5);
        }

        .steps__card-description {
            font-size: var(--small-font-size);
        }

        .steps__card:hover .steps__card-number {
            transform: translateY(-.25rem);
        }

        /*=============== PRODUCTS ===============*/
        .product__description {
            text-align: center;
        }

        .product__container {
            padding: 3rem 0;
            grid-template-columns: repeat(2, 1fr);
            gap: 2.5rem 3rem;
        }

        .product__card {
            display: grid;
            position: relative;
        }

        .product__img {
            position: relative;
            width: 120px;
            justify-self: center;
            margin-bottom: var(--mb-0-75);
            transition: .3s;
        }

        .product__title,
        .product__price {
            font-size: var(--small-font-size);
            font-weight: var(--font-semi-bold);
            color: var(--title-color);
        }

        .product__title {
            margin-bottom: .25rem;
        }

        .product__button {
            position: absolute;
            right: 0;
            bottom: 0;
            background-color: var(--first-color);
            color: #FFF;
            padding: .25rem;
            border-radius: .35rem;
            font-size: 1.15rem;
        }

        .product__button:hover {
            background-color: var(--first-color-alt);
        }

        .product__circle {
            width: 90px;
            height: 90px;
            background-color: var(--first-color-lighten);
            border-radius: 50%;
            position: absolute;
            top: 18%;
            left: 5%;
        }

        .product__card:hover .product__img {
            transform: translateY(-.5rem);
        }

        /*=============== Testimonial ===============*/
        .services {
            background-color: var(--first-color-lighten);
        }

        .testimonial__container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            width: 100%;
        }

        .testimonial__card {
            width: 500px;
            box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.1);
            background-color: #FFF;
            padding: 20px;
            margin: 15px;
            cursor: pointer;
            border-radius: .55rem;
        }

        .card__top {
            margin-bottom: 8px;
        }

        .profile__img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 10px;
        }

        .profile__img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .profile {
            display: flex;
            align-items: center;
        }

        .name__user {
            display: flex;
            flex-direction: column;
        }

        .comments p {
            font-size: 0.9rem;
        }

        .testimonial__card:hover {
            transform: translateY(-10px);
            transition: all ease 0.3s;
        }

        /*=============== QUESTIONS ===============*/
        .questions {
            background-color: hsl(var(--hue), 24%, 92%);
        }

        .questions__container {
            gap: 1.5rem;
            padding: 1.5rem 0;
        }

        .questions__group {
            display: grid;
            row-gap: 1.5rem;
        }

        .questions__item {
            background-color: var(--container-color);
            border-radius: .25rem;
        }

        .questions__item-title {
            font-size: var(--small-font-size);
            font-weight: var(--font-medium);
        }

        .questions__icon {
            font-size: 1.25rem;
            color: var(--title-color);
        }

        .questions__description {
            font-size: var(--smaller-font-size);
            padding: 0 1.25rem 1.25rem 2.5rem;
        }

        .questions__header {
            display: flex;
            align-items: center;
            column-gap: .5rem;
            padding: .75rem .5rem;
            cursor: pointer;
        }

        .questions__content {
            overflow: hidden;
            height: 0;
        }

        .questions__item,
        .questions__header,
        .questions__item-title,
        .questions__icon,
        .questions__description,
        .questions__content {
            transition: .3s;
        }

        .questions__item:hover {
            box-shadow: 0 2px 8px hsla(var(--hue), 4%, 15%, .15);
        }

        /*Rotate icon, change color of titles and background*/
        .accordion-open .questions__header,
        .accordion-open .questions__content {
            background-color: #09884b;
        }

        .accordion-open .questions__item-title,
        .accordion-open .questions__description,
        .accordion-open .questions__icon {
            color: #FFF;
        }

        .accordion-open .questions__icon {
            transform: rotate(45deg);
        }

        /*=============== CONTACT ===============*/
        .contact__container {
            row-gap: 3.5rem;
        }

        .contact__data {
            display: grid;
            row-gap: 2rem;
        }

        .contact__subtitle {
            font-size: var(--normal-font-size);
            font-weight: var(--font-medium);
            color: var(--text-color);
            margin-bottom: var(--mb-0-5);
        }

        .contact__description {
            display: inline-flex;
            align-items: center;
            column-gap: .5rem;
            color: var(--title-color);
            font-weight: var(--font-medium);
        }

        .contact__icon {
            font-size: 1.25rem;
        }

        .contact__inputs {
            display: grid;
            row-gap: 2rem;
            margin-bottom: var(--mb-2-5);
        }

        .contact__content {
            position: relative;
            height: 3rem;
            border-bottom: 1px solid var(--text-color-light);
        }

        .contact__input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 1rem 1rem 1rem 0;
            background: none;

            color: var(--text-color);


            border: none;
            outline: none;
            z-index: 1;
        }

        .contact__label {
            position: absolute;
            top: .75rem;
            width: 100%;
            font-size: var(--small-font-size);
            color: var(--text-color-light);
            transition: .3s;
        }

        .contact__area {
            height: 7rem;
        }

        .contact__area textarea {
            resize: none;
        }

        /*Input focus move up label*/
        .contact__input:focus+.contact__label {
            top: -.75rem;
            left: 0;
            font-size: var(--smaller-font-size);
            z-index: 10;
        }

        /*Input focus sticky top label*/
        .contact__input:not(:placeholder-shown).contact__input:not(:focus)+.contact__label {
            top: -.75rem;
            font-size: var(--smaller-font-size);
            z-index: 10;
        }

        /*=============== FOOTER ===============*/
        .footer__container {
            row-gap: 3rem;
        }

        .footer__logo {
            display: inline-flex;
            align-items: center;
            column-gap: .5rem;
            color: var(--title-color);
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: -1px;
            margin-bottom: var(--mb-2-5);
            transition: .3s;
        }

        .footer__logo-icon {
            font-size: 1.15rem;
            color: var(--first-color);
        }

        .footer__logo:hover {
            color: var(--first-color);
        }

        .footer__title {
            font-size: var(--h3-font-size);
            margin-bottom: var(--mb-1-5);
        }

        .footer__subscribe {
            background-color: var(--first-color-lighten);
            padding: .75rem;
            display: flex;
            justify-content: space-between;
            border-radius: .5rem;
        }

        .footer__input {
            width: 70%;
            padding: 0 .5rem;
            background: none;
            color: var(--text-color);
            border: none;
            outline: none;
        }

        .footer__button {
            padding: 1rem;
        }

        .footer__data {
            display: grid;
            row-gap: .75rem;
        }

        .footer__information {
            font-size: var(--small-font-size);
        }

        .footer__social {
            display: inline-flex;
            column-gap: .75rem;
        }

        .footer__social-link {
            font-size: 1rem;
            color: var(--text-color);
            transition: .3s;
        }

        .footer__social-link:hover {
            transform: translateY(-.25rem);
        }

        .footer__cards {
            display: inline-flex;
            align-items: center;
            column-gap: .5rem;
        }

        .footer__card {
            width: 35px;
        }

        .footer__copy {
            text-align: center;
            font-size: var(--smaller-font-size);
            color: var(--text-color-light);
            margin: 5rem 0 1rem;
        }

        /*=============== SCROLL UP ===============*/
        .scrollup {
            position: fixed;
            background-color: var(--first-color);
            right: 1rem;
            bottom: -30%;
            display: inline-flex;
            padding: .5rem;
            border-radius: .25rem;
            z-index: var(--z-tooltip);
            opacity: .8;
            transition: .4s;
        }

        .scrollup__icon {
            font-size: 1rem;
            color: #FFF;
        }

        .scrollup:hover {
            background-color: var(--first-color-alt);
            opacity: 1;
        }

        /* Show Scroll Up*/
        .show-scroll {
            bottom: 3rem;
        }

        /*=============== SCROLL BAR ===============*/
        ::-webkit-scrollbar {
            width: .6rem;
            background: hsl(var(--hue), 4%, 53%);
        }

        ::-webkit-scrollbar-thumb {
            background: hsl(var(--hue), 4%, 29%);
            border-radius: .5rem;
        }

        /*=============== BREAKPOINTS ===============*/
        /* For small devices */
        @media screen and (max-width: 320px) {
            .container {
                margin-left: var(--mb-1);
                margin-right: var(--mb-1);
            }

            .home__img {
                width: 180px;
            }

            .home__title {
                font-size: var(--h1-font-size);
            }

            .steps__bg {
                padding: 2rem 1rem;
            }

            .steps__card {
                padding: 1.5rem;
            }

            .product__container {
                grid-template-columns: .6fr;
                justify-content: center;
            }
        }

        /* For medium devices */
        @media screen and (min-width: 576px) {
            .steps__container {
                grid-template-columns: repeat(2, 1fr);
            }

            .product__description {
                padding: 0 4rem;
            }

            .product__container {
                grid-template-columns: repeat(2, 170px);
                justify-content: center;
                column-gap: 5rem;
            }

            .footer__subscribe {
                width: 400px;
            }
        }

        @media screen and (min-width: 767px) {
            body {
                margin: 0;
            }

            .nav {
                height: calc(var(--header-height) + 1.5rem);
                column-gap: 3rem;
            }

            .nav__toggle,
            .nav__close {
                display: none;
            }

            .nav__list {
                flex-direction: row;
                column-gap: 3rem;
            }

            .nav__menu {
                margin-left: auto;
            }

            .home__container,
            .about__container,
            .questions__container,
            .contact__container,
            .footer__container {
                grid-template-columns: repeat(2, 1fr);
            }

            .home {
                padding: 10rem 0 5rem;
            }

            .home__container {
                align-items: center;
            }

            .home__img {
                width: 280px;
                order: 1;
            }

            .home__social {
                top: 30%;
            }

            .questions__container {
                align-items: flex-start;
            }

            .footer__container {
                column-gap: 3rem;
            }

            .footer__subscribe {
                width: initial;
            }
        }

        /* For large devices */
        @media screen and (min-width: 992px) {
            .container {
                margin-left: auto;
                margin-right: auto;
            }

            .section {
                padding: 8rem 0 1rem;
            }

            .section__title,
            .section__title-center {
                font-size: var(--h1-font-size);
            }

            .home {
                padding: 13rem 0 5rem;
            }

            .home__img {
                width: 350px;
            }

            .home__description {
                padding-right: 7rem;
            }

            .about__img {
                width: 380px;
            }

            .steps__container {
                grid-template-columns: repeat(3, 1fr);
            }

            .steps__bg {
                padding: 3.5rem 2.5rem;
            }

            .steps__card-title {
                font-size: var(--normal-font-size);
            }

            .product__description {
                padding: 0 16rem;
            }

            .product__container {
                padding: 4rem 0;
                grid-template-columns: repeat(3, 185px);
                gap: 4rem 6rem;
            }

            .product__img {
                width: 160px;
            }

            .product__circle {
                width: 110px;
                height: 110px;
            }

            .product__title,
            .product__price {
                font-size: var(--normal-font-size);
            }

            .questions__container {
                padding: 1rem 0 4rem;
            }

            .questions__title {
                text-align: initial;
            }

            .questions__group {
                row-gap: 2rem;
            }

            .questions__header {
                padding: 1rem;
            }

            .questions__description {
                padding: 0 3.5rem 2.25rem 2.75rem;
            }

            .footer__logo {
                font-size: var(--h3-font-size);
            }

            .footer__container {
                grid-template-columns: 1fr .5fr .5fr .5fr;
            }

            .footer__copy {
                margin: 7rem 0 2rem;
            }
        }

        @media screen and (min-width: 1200px) {
            .home__social {
                right: -3rem;
                row-gap: 4.5rem;
            }

            .home__social-follow {
                font-size: var(--small-font-size);
            }

            .home__social-follow::after {
                width: 1.5rem;
                right: -60%;
            }

            .home__social-link {
                font-size: 1.15rem;
            }

            .about__container {
                column-gap: 7rem;
            }

            .scrollup {
                right: 3rem;
            }
        }
    </style>
    <title>CepatTanggap</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#home" class="nav__logo">
                <img src="{{asset('backend/img/1.png')}}" width="150px" height="400px">
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Beranda</a>
                    </li>
                    <li class="nav__item">
                        <a href="#service" class="nav__link">Layanan</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">Tentang</a>
                    </li>
                    <li class="nav__item">
                        <a href="#faqs" class="nav__link">Faq</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__btns">
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <img src="{{asset('backend/img/ay.jpg')}}" alt="" class="home__img">

                <div class="home__data">
                    <h1 class="home__title">
                        CepatTanggap
                    </h1>
                    <p class="home__description">
                        Inovasi Dalam Pelayanan Kesehatan Untuk Seluruh Masyarakat
                    </p>
                    <a href="{{ route('login') }}" class="button button--flex">
                        Daftarkan diri anda
                    </a>
                </div>
            </div>
        </section>

        <!--==================== SERVICE ====================-->
        <section class="services section" id="service">
            <h2 class="section__title-center steps__title">
                Kami menyediakan layanan
            </h2>
            <div class="testimonial__container">
                <div class="testimonial__card">
                    <div class="card__top">
                        <div class="profile">
                            <div class="profile__img">
                                <img src="{{asset('backend/img/phone-call.png')}}" alt="">
                            </div>
                            <br>
                            <div class="name__user">
                                <h3>Panggil Ambulans</h3>
                            </div>
                        </div>
                    </div>

                    <div class="comments">
                        <p>Panggil Ambulans merupakan layanan pesan ambulans online yang berbasis lokasi. Secara
                            otomatis, sistem akan mencari ambulans yang tedekat dari lokasi pengguna.</p>
                    </div>
                </div>
                <div class="testimonial__card">
                    <div class="card__top">
                        <div class="profile">
                            <div class="profile__img">
                                <img src="{{asset('backend/img/medical-team.png')}}" alt="">
                            </div>
                            <br>
                            <div class="name__user">
                                <h3>Panggil Nakes</h3>
                            </div>
                        </div>
                    </div>

                    <div class="comments">
                        <p>Panggil Nakes merupakan layanan pesan tenaga kesehatan untuk kepentingan tertentu seperti,
                            pengecekan kesehatan, antar obat-obatan, dan antar fasilitas kesehatan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section container" id="about">
            <div class="about__container grid">
                <img src="{{asset('backend/img/1.png')}}" alt="" class="about__img">

                <div class="about__data">
                    <h2 class="section__title about__title">
                        Tentang CepatTanggap
                    </h2>

                    <p class="about__description">
                        CepatTanggap merupakan inovasi dalam layanan kesehatan yang berfokus pada proses pemesanan
                        ambulans dan tenaga kesehatan secara online. CepatTanggap memungkinkan tiap pengguna nya untuk
                        dapat memesan ambulans yang terdekat dari lokasi nya, dan juga memungkinkan tiap pengguna untuk
                        meminta tenaga kesehatan datang ke rumah untuk melakukan pengecekan kesehatan, pemberian
                        obat-obatan, atau pemberian fasilitas kesehatan.
                    </p>
                </div>
            </div>
        </section>

        <!--==================== QUESTIONS ====================-->
        <section class="questions section" id="faqs">
            <h2 class="section__title-center questions__title container">
                Beberapa pertanyaan <br> Yang sering diajukan
            </h2>

            <div class="questions__container container grid">
                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Berapa lama waktu yang dibutuhkan ambulans untuk sampai ke lokasi saya?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Karena berbasis lokasi, maka sistem akan mencarikan pusat kesehatan dengan layanan ambulans yang paling dekat dengan lokasi anda.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Apakah ada batasan jarak atau area layanan ambulans online ini?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Karena sistem ini masih dalam tahap pengembangan, jadi untuk saat ini baru ada beberapa desa saja yang dapat kami layani.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Apakah saya dapat meminta ambulans dengan fitur khusus, seperti defibrilator atau peralatan medis lainnya?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Tentu saja, pada saat pemesanan ambulans anda nantinya akan diberi opsi untuk meminta peralatan medis tertentu.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="questions__group">
                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Bagaimana jika saya perlu membatalkan pemesanan ambulans?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Anda dapat menghubungi pusat bantuan untuk dapat melakukan pembatalan pemesanan.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Apakah ada biaya yang harus dibayar untuk menggunakan layanan ambulans online ini?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Anda hanya perlu membayar biaya layanan ambulans secara normal, mengikuti peraturan & undang-undang yang berlaku tanpa ada biaya tambahan dari aplikasi.
                            </p>
                        </div>
                    </div>

                    <div class="questions__item">
                        <header class="questions__header">
                            <i class="ri-add-line questions__icon"></i>
                            <h3 class="questions__item-title">
                                Apakah sistem ini menghubungkan langsung ke rumah sakit atau pusat kesehatan terdekat?
                            </h3>
                        </header>

                        <div class="questions__content">
                            <p class="questions__description">
                                Benar, begitu anda menekan tombol 'Panggil Ambulans' maka secara otomatis sistem akan mengirim panggilan anda ke rumah sakit atau pusat kesehatan yang terdekat dari lokasi anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <img src="{{asset('backend/img/1.png')}}" alt="" width="140px" height="200px">
                </a>

                <h3 class="footer__title">
                    Inovasi Pelayanan Kesehatan
                </h3>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Alamat</h3>

                <ul class="footer__data">
                    <li class="footer__information">68487-Taman Suruh, Bangorejo, Kec. Bangorejo, Kabupaten Banyuwangi, Jawa Timur</li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Kontak</h3>

                <ul class="footer__data">
                    <li class="footer__information">+1 234 567 890</li>

                    <div class="footer__social">
                        <a href="https://www.facebook.com/" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" class="footer__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </ul>
            </div>
        </div>

        <p class="footer__copy">&#169; Aone. All rigths reserved</p>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>

    <!--=============== SCROLL REVEAL ===============-->
    <script>
        /*! @license ScrollReveal v4.0.9

	Copyright 2021 Fisssion LLC.

	Licensed under the GNU General Public License 3.0 for
	compatible open source projects and non-commercial use.

	For commercial sites, themes, projects, and applications,
	keep your source code private/proprietary by purchasing
	a commercial license from https://scrollrevealjs.org/
*/
        var ScrollReveal = function() {
            "use strict";
            var r = {
                delay: 0,
                distance: "0",
                duration: 600,
                easing: "cubic-bezier(0.5, 0, 0, 1)",
                interval: 0,
                opacity: 0,
                origin: "bottom",
                rotate: {
                    x: 0,
                    y: 0,
                    z: 0
                },
                scale: 1,
                cleanup: !1,
                container: document.documentElement,
                desktop: !0,
                mobile: !0,
                reset: !1,
                useDelay: "always",
                viewFactor: 0,
                viewOffset: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
                afterReset: function() {},
                afterReveal: function() {},
                beforeReset: function() {},
                beforeReveal: function() {}
            };
            var n = {
                success: function() {
                    document.documentElement.classList.add("sr"), document.body ? document.body.style.height = "100%" : document.addEventListener("DOMContentLoaded", function() {
                        document.body.style.height = "100%"
                    })
                },
                failure: function() {
                    return document.documentElement.classList.remove("sr"), {
                        clean: function() {},
                        destroy: function() {},
                        reveal: function() {},
                        sync: function() {},
                        get noop() {
                            return !0
                        }
                    }
                }
            };

            function o(e) {
                return "object" == typeof window.Node ? e instanceof window.Node : null !== e && "object" == typeof e && "number" == typeof e.nodeType && "string" == typeof e.nodeName
            }

            function u(e, t) {
                if (void 0 === t && (t = document), e instanceof Array) return e.filter(o);
                if (o(e)) return [e];
                if (n = e, i = Object.prototype.toString.call(n), "object" == typeof window.NodeList ? n instanceof window.NodeList : null !== n && "object" == typeof n && "number" == typeof n.length && /^\[object (HTMLCollection|NodeList|Object)\]$/.test(i) && (0 === n.length || o(n[0]))) return Array.prototype.slice.call(e);
                var n, i;
                if ("string" == typeof e) try {
                    var r = t.querySelectorAll(e);
                    return Array.prototype.slice.call(r)
                } catch (e) {
                    return []
                }
                return []
            }

            function s(e) {
                return null !== e && e instanceof Object && (e.constructor === Object || "[object Object]" === Object.prototype.toString.call(e))
            }

            function f(n, i) {
                if (s(n)) return Object.keys(n).forEach(function(e) {
                    return i(n[e], e, n)
                });
                if (n instanceof Array) return n.forEach(function(e, t) {
                    return i(e, t, n)
                });
                throw new TypeError("Expected either an array or object literal.")
            }

            function h(e) {
                for (var t = [], n = arguments.length - 1; 0 < n--;) t[n] = arguments[n + 1];
                if (this.constructor.debug && console) {
                    var i = "%cScrollReveal: " + e;
                    t.forEach(function(e) {
                        return i += "\n — " + e
                    }), console.log(i, "color: #ea654b;")
                }
            }

            function t() {
                var n = this,
                    i = {
                        active: [],
                        stale: []
                    },
                    t = {
                        active: [],
                        stale: []
                    },
                    r = {
                        active: [],
                        stale: []
                    };
                try {
                    f(u("[data-sr-id]"), function(e) {
                        var t = parseInt(e.getAttribute("data-sr-id"));
                        i.active.push(t)
                    })
                } catch (e) {
                    throw e
                }
                f(this.store.elements, function(e) {
                    -1 === i.active.indexOf(e.id) && i.stale.push(e.id)
                }), f(i.stale, function(e) {
                    return delete n.store.elements[e]
                }), f(this.store.elements, function(e) {
                    -1 === r.active.indexOf(e.containerId) && r.active.push(e.containerId), e.hasOwnProperty("sequence") && -1 === t.active.indexOf(e.sequence.id) && t.active.push(e.sequence.id)
                }), f(this.store.containers, function(e) {
                    -1 === r.active.indexOf(e.id) && r.stale.push(e.id)
                }), f(r.stale, function(e) {
                    var t = n.store.containers[e].node;
                    t.removeEventListener("scroll", n.delegate), t.removeEventListener("resize", n.delegate), delete n.store.containers[e]
                }), f(this.store.sequences, function(e) {
                    -1 === t.active.indexOf(e.id) && t.stale.push(e.id)
                }), f(t.stale, function(e) {
                    return delete n.store.sequences[e]
                })
            }

            function N(e) {
                if (e.constructor !== Array) throw new TypeError("Expected array.");
                if (16 === e.length) return e;
                if (6 !== e.length) throw new RangeError("Expected array with either 6 or 16 values.");
                var t = z();
                return t[0] = e[0], t[1] = e[1], t[4] = e[2], t[5] = e[3], t[12] = e[4], t[13] = e[5], t
            }

            function z() {
                for (var e = [], t = 0; t < 16; t++) t % 5 == 0 ? e.push(1) : e.push(0);
                return e
            }

            function F(e, t) {
                for (var n = N(e), i = N(t), r = [], o = 0; o < 4; o++)
                    for (var s = [n[o], n[o + 4], n[o + 8], n[o + 12]], a = 0; a < 4; a++) {
                        var c = 4 * a,
                            l = [i[c], i[c + 1], i[c + 2], i[c + 3]],
                            d = s[0] * l[0] + s[1] * l[1] + s[2] * l[2] + s[3] * l[3];
                        r[o + c] = d
                    }
                return r
            }

            function D(e, t) {
                var n = z();
                return n[0] = e, n[5] = "number" == typeof t ? t : e, n
            }
            var S = function() {
                var n = {},
                    i = document.documentElement.style;

                function e(e, t) {
                    if (void 0 === t && (t = i), e && "string" == typeof e) {
                        if (n[e]) return n[e];
                        if ("string" == typeof t[e]) return n[e] = e;
                        if ("string" == typeof t["-webkit-" + e]) return n[e] = "-webkit-" + e;
                        throw new RangeError('Unable to find "' + e + '" style property.')
                    }
                    throw new TypeError("Expected a string.")
                }
                return e.clearCache = function() {
                    return n = {}
                }, e
            }();

            function p(e) {
                var t = window.getComputedStyle(e.node),
                    n = t.position,
                    i = e.config,
                    r = {},
                    o = (e.node.getAttribute("style") || "").match(/[\w-]+\s*:\s*[^;]+\s*/gi) || [];
                r.computed = o ? o.map(function(e) {
                    return e.trim()
                }).join("; ") + ";" : "", r.generated = o.some(function(e) {
                    return e.match(/visibility\s?:\s?visible/i)
                }) ? r.computed : o.concat(["visibility: visible"]).map(function(e) {
                    return e.trim()
                }).join("; ") + ";";
                var s, a, c, l, d, u, f, h, p, m, y, v, g, b = parseFloat(t.opacity),
                    w = isNaN(parseFloat(i.opacity)) ? parseFloat(t.opacity) : parseFloat(i.opacity),
                    E = {
                        computed: b !== w ? "opacity: " + b + ";" : "",
                        generated: b !== w ? "opacity: " + w + ";" : ""
                    },
                    j = [];
                if (parseFloat(i.distance)) {
                    var T = "top" === i.origin || "bottom" === i.origin ? "Y" : "X",
                        k = i.distance;
                    "top" !== i.origin && "left" !== i.origin || (k = /^-/.test(k) ? k.substr(1) : "-" + k);
                    var O = k.match(/(^-?\d+\.?\d?)|(em$|px$|%$)/g),
                        x = O[0];
                    switch (O[1]) {
                        case "em":
                            k = parseInt(t.fontSize) * x;
                            break;
                        case "px":
                            k = x;
                            break;
                        case "%":
                            k = "Y" === T ? e.node.getBoundingClientRect().height * x / 100 : e.node.getBoundingClientRect().width * x / 100;
                            break;
                        default:
                            throw new RangeError("Unrecognized or missing distance unit.")
                    }
                    "Y" === T ? j.push((c = k, (l = z())[13] = c, l)) : j.push((s = k, (a = z())[12] = s, a))
                }
                i.rotate.x && j.push((d = i.rotate.x, u = Math.PI / 180 * d, (f = z())[5] = f[10] = Math.cos(u), f[6] = f[9] = Math.sin(u), f[9] *= -1, f)), i.rotate.y && j.push((h = i.rotate.y, p = Math.PI / 180 * h, (m = z())[0] = m[10] = Math.cos(p), m[2] = m[8] = Math.sin(p), m[2] *= -1, m)), i.rotate.z && j.push((y = i.rotate.z, v = Math.PI / 180 * y, (g = z())[0] = g[5] = Math.cos(v), g[1] = g[4] = Math.sin(v), g[4] *= -1, g)), 1 !== i.scale && (0 === i.scale ? j.push(D(2e-4)) : j.push(D(i.scale)));
                var R = {};
                if (j.length) {
                    R.property = S("transform"), R.computed = {
                        raw: t[R.property],
                        matrix: function(e) {
                            if ("string" == typeof e) {
                                var t = e.match(/matrix(3d)?\(([^)]+)\)/);
                                if (t) return N(t[2].split(", ").map(parseFloat))
                            }
                            return z()
                        }(t[R.property])
                    }, j.unshift(R.computed.matrix);
                    var q = j.reduce(F);
                    R.generated = {
                        initial: R.property + ": matrix3d(" + q.join(", ") + ");",
                        final: R.property + ": matrix3d(" + R.computed.matrix.join(", ") + ");"
                    }
                } else R.generated = {
                    initial: "",
                    final: ""
                };
                var A = {};
                if (E.generated || R.generated.initial) {
                    A.property = S("transition"), A.computed = t[A.property], A.fragments = [];
                    var P = i.delay,
                        L = i.duration,
                        M = i.easing;
                    E.generated && A.fragments.push({
                        delayed: "opacity " + L / 1e3 + "s " + M + " " + P / 1e3 + "s",
                        instant: "opacity " + L / 1e3 + "s " + M + " 0s"
                    }), R.generated.initial && A.fragments.push({
                        delayed: R.property + " " + L / 1e3 + "s " + M + " " + P / 1e3 + "s",
                        instant: R.property + " " + L / 1e3 + "s " + M + " 0s"
                    }), A.computed && !A.computed.match(/all 0s|none 0s/) && A.fragments.unshift({
                        delayed: A.computed,
                        instant: A.computed
                    });
                    var I = A.fragments.reduce(function(e, t, n) {
                        return e.delayed += 0 === n ? t.delayed : ", " + t.delayed, e.instant += 0 === n ? t.instant : ", " + t.instant, e
                    }, {
                        delayed: "",
                        instant: ""
                    });
                    A.generated = {
                        delayed: A.property + ": " + I.delayed + ";",
                        instant: A.property + ": " + I.instant + ";"
                    }
                } else A.generated = {
                    delayed: "",
                    instant: ""
                };
                return {
                    inline: r,
                    opacity: E,
                    position: n,
                    transform: R,
                    transition: A
                }
            }

            function m(r, e) {
                e.split(";").forEach(function(e) {
                    var t = e.split(":"),
                        n = t[0],
                        i = t.slice(1);
                    n && i && (r.style[n.trim()] = i.join(":"))
                })
            }

            function y(e) {
                var i, r = this;
                try {
                    f(u(e), function(e) {
                        var t = e.getAttribute("data-sr-id");
                        if (null !== t) {
                            i = !0;
                            var n = r.store.elements[t];
                            n.callbackTimer && window.clearTimeout(n.callbackTimer.clock), m(n.node, n.styles.inline.generated), e.removeAttribute("data-sr-id"), delete r.store.elements[t]
                        }
                    })
                } catch (e) {
                    return h.call(this, "Clean failed.", e.message)
                }
                if (i) try {
                    t.call(this)
                } catch (e) {
                    return h.call(this, "Clean failed.", e.message)
                }
            }

            function v(n) {
                for (var e = [], t = arguments.length - 1; 0 < t--;) e[t] = arguments[t + 1];
                if (s(n)) return f(e, function(e) {
                    f(e, function(e, t) {
                        s(e) ? (n[t] && s(n[t]) || (n[t] = {}), v(n[t], e)) : n[t] = e
                    })
                }), n;
                throw new TypeError("Target must be an object literal.")
            }

            function g(e) {
                return void 0 === e && (e = navigator.userAgent), /Android|iPhone|iPad|iPod/i.test(e)
            }
            var e, b = (e = 0, function() {
                return e++
            });

            function w() {
                var n = this;
                t.call(this), f(this.store.elements, function(e) {
                    var t = [e.styles.inline.generated];
                    e.visible ? (t.push(e.styles.opacity.computed), t.push(e.styles.transform.generated.final), e.revealed = !0) : (t.push(e.styles.opacity.generated), t.push(e.styles.transform.generated.initial), e.revealed = !1), m(e.node, t.filter(function(e) {
                        return "" !== e
                    }).join(" "))
                }), f(this.store.containers, function(e) {
                    var t = e.node === document.documentElement ? window : e.node;
                    t.addEventListener("scroll", n.delegate), t.addEventListener("resize", n.delegate)
                }), this.delegate(), this.initTimeout = null
            }

            function c(e, t) {
                void 0 === t && (t = {});
                var n = t.pristine || this.pristine,
                    i = "always" === e.config.useDelay || "onload" === e.config.useDelay && n || "once" === e.config.useDelay && !e.seen,
                    r = e.visible && !e.revealed,
                    o = !e.visible && e.revealed && e.config.reset;
                return t.reveal || r ? function(e, t) {
                    var n = [e.styles.inline.generated, e.styles.opacity.computed, e.styles.transform.generated.final];
                    t ? n.push(e.styles.transition.generated.delayed) : n.push(e.styles.transition.generated.instant);
                    e.revealed = e.seen = !0, m(e.node, n.filter(function(e) {
                        return "" !== e
                    }).join(" ")), a.call(this, e, t)
                }.call(this, e, i) : t.reset || o ? function(e) {
                    var t = [e.styles.inline.generated, e.styles.opacity.generated, e.styles.transform.generated.initial, e.styles.transition.generated.instant];
                    e.revealed = !1, m(e.node, t.filter(function(e) {
                        return "" !== e
                    }).join(" ")), a.call(this, e)
                }.call(this, e) : void 0
            }

            function a(e, t) {
                var n = this,
                    i = t ? e.config.duration + e.config.delay : e.config.duration,
                    r = e.revealed ? e.config.beforeReveal : e.config.beforeReset,
                    o = e.revealed ? e.config.afterReveal : e.config.afterReset,
                    s = 0;
                e.callbackTimer && (s = Date.now() - e.callbackTimer.start, window.clearTimeout(e.callbackTimer.clock)), r(e.node), e.callbackTimer = {
                    start: Date.now(),
                    clock: window.setTimeout(function() {
                        o(e.node), e.callbackTimer = null, e.revealed && !e.config.reset && e.config.cleanup && y.call(n, e.node)
                    }, i - s)
                }
            }

            function l(e, t) {
                if (void 0 === t && (t = this.pristine), !e.visible && e.revealed && e.config.reset) return c.call(this, e, {
                    reset: !0
                });
                var n = this.store.sequences[e.sequence.id],
                    i = e.sequence.index;
                if (n) {
                    var r = new d(n, "visible", this.store),
                        o = new d(n, "revealed", this.store);
                    if (n.models = {
                            visible: r,
                            revealed: o
                        }, !o.body.length) {
                        var s = n.members[r.body[0]],
                            a = this.store.elements[s];
                        if (a) return j.call(this, n, r.body[0], -1, t), j.call(this, n, r.body[0], 1, t), c.call(this, a, {
                            reveal: !0,
                            pristine: t
                        })
                    }
                    if (!n.blocked.head && i === [].concat(o.head).pop() && i >= [].concat(r.body).shift()) return j.call(this, n, i, -1, t), c.call(this, e, {
                        reveal: !0,
                        pristine: t
                    });
                    if (!n.blocked.foot && i === [].concat(o.foot).shift() && i <= [].concat(r.body).pop()) return j.call(this, n, i, 1, t), c.call(this, e, {
                        reveal: !0,
                        pristine: t
                    })
                }
            }

            function E(e) {
                var t = Math.abs(e);
                if (isNaN(t)) throw new RangeError("Invalid sequence interval.");
                this.id = b(), this.interval = Math.max(t, 16), this.members = [], this.models = {}, this.blocked = {
                    head: !1,
                    foot: !1
                }
            }

            function d(e, i, r) {
                var o = this;
                this.head = [], this.body = [], this.foot = [], f(e.members, function(e, t) {
                    var n = r.elements[e];
                    n && n[i] && o.body.push(t)
                }), this.body.length && f(e.members, function(e, t) {
                    var n = r.elements[e];
                    n && !n[i] && (t < o.body[0] ? o.head.push(t) : o.foot.push(t))
                })
            }

            function j(e, t, n, i) {
                var r = this,
                    o = ["head", null, "foot"][1 + n],
                    s = e.members[t + n],
                    a = this.store.elements[s];
                e.blocked[o] = !0, setTimeout(function() {
                    e.blocked[o] = !1, a && l.call(r, a, i)
                }, e.interval)
            }

            function i(e, a, t) {
                var c = this;
                void 0 === a && (a = {}), void 0 === t && (t = !1);
                var l, d = [],
                    n = a.interval || r.interval;
                try {
                    n && (l = new E(n));
                    var i = u(e);
                    if (!i.length) throw new Error("Invalid reveal target.");
                    f(i.reduce(function(e, t) {
                        var n = {},
                            i = t.getAttribute("data-sr-id");
                        i ? (v(n, c.store.elements[i]), m(n.node, n.styles.inline.computed)) : (n.id = b(), n.node = t, n.seen = !1, n.revealed = !1, n.visible = !1);
                        var r = v({}, n.config || c.defaults, a);
                        if (!r.mobile && g() || !r.desktop && !g()) return i && y.call(c, n), e;
                        var o, s = u(r.container)[0];
                        if (!s) throw new Error("Invalid container.");
                        return s.contains(t) && (null === (o = function(t) {
                            var e = [],
                                n = arguments.length - 1;
                            for (; 0 < n--;) e[n] = arguments[n + 1];
                            var i = null;
                            return f(e, function(e) {
                                f(e, function(e) {
                                    null === i && e.node === t && (i = e.id)
                                })
                            }), i
                        }(s, d, c.store.containers)) && (o = b(), d.push({
                            id: o,
                            node: s
                        })), n.config = r, n.containerId = o, n.styles = p(n), l && (n.sequence = {
                            id: l.id,
                            index: l.members.length
                        }, l.members.push(n.id)), e.push(n)), e
                    }, []), function(e) {
                        (c.store.elements[e.id] = e).node.setAttribute("data-sr-id", e.id)
                    })
                } catch (e) {
                    return h.call(this, "Reveal failed.", e.message)
                }
                f(d, function(e) {
                    c.store.containers[e.id] = {
                        id: e.id,
                        node: e.node
                    }
                }), l && (this.store.sequences[l.id] = l), !0 !== t && (this.store.history.push({
                    target: e,
                    options: a
                }), this.initTimeout && window.clearTimeout(this.initTimeout), this.initTimeout = window.setTimeout(w.bind(this), 0))
            }
            var T, k = Math.sign || function(e) {
                    return (0 < e) - (e < 0) || +e
                },
                O = (T = Date.now(), function(e) {
                    var t = Date.now();
                    16 < t - T ? e(T = t) : setTimeout(function() {
                        return O(e)
                    }, 0)
                }),
                x = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || O;

            function R(e, t) {
                for (var n = t ? e.node.clientHeight : e.node.offsetHeight, i = t ? e.node.clientWidth : e.node.offsetWidth, r = 0, o = 0, s = e.node; isNaN(s.offsetTop) || (r += s.offsetTop), isNaN(s.offsetLeft) || (o += s.offsetLeft), s = s.offsetParent;);
                return {
                    bounds: {
                        top: r,
                        right: o + i,
                        bottom: r + n,
                        left: o
                    },
                    height: n,
                    width: i
                }
            }

            function q(e, t) {
                var i = this;
                void 0 === e && (e = {
                    type: "init"
                }), void 0 === t && (t = this.store.elements), x(function() {
                    var n = "init" === e.type || "resize" === e.type;
                    f(i.store.containers, function(e) {
                        n && (e.geometry = R.call(i, e, !0));
                        var t = function(e) {
                            var t, n;
                            return n = e.node === document.documentElement ? (t = window.pageYOffset, window.pageXOffset) : (t = e.node.scrollTop, e.node.scrollLeft), {
                                top: t,
                                left: n
                            }
                        }.call(i, e);
                        e.scroll && (e.direction = {
                            x: k(t.left - e.scroll.left),
                            y: k(t.top - e.scroll.top)
                        }), e.scroll = t
                    }), f(t, function(e) {
                        (n || void 0 === e.geometry) && (e.geometry = R.call(i, e)), e.visible = function(e) {
                            void 0 === e && (e = {});
                            var t = this.store.containers[e.containerId];
                            if (t) {
                                var n = Math.max(0, Math.min(1, e.config.viewFactor)),
                                    i = e.config.viewOffset,
                                    r = e.geometry.bounds.top + e.geometry.height * n,
                                    o = e.geometry.bounds.right - e.geometry.width * n,
                                    s = e.geometry.bounds.bottom - e.geometry.height * n,
                                    a = e.geometry.bounds.left + e.geometry.width * n,
                                    c = t.geometry.bounds.top + t.scroll.top + i.top,
                                    l = t.geometry.bounds.right + t.scroll.left - i.right,
                                    d = t.geometry.bounds.bottom + t.scroll.top - i.bottom,
                                    u = t.geometry.bounds.left + t.scroll.left + i.left;
                                return r < d && u < o && c < s && a < l || "fixed" === e.styles.position
                            }
                        }.call(i, e)
                    }), f(t, function(e) {
                        e.sequence ? l.call(i, e) : c.call(i, e)
                    }), i.pristine = !1
                })
            }
            var A, P, L, M, I, C, W, Y, $ = "4.0.9";

            function H(e) {
                var t;
                if (void 0 === e && (e = {}), void 0 === this || Object.getPrototypeOf(this) !== H.prototype) return new H(e);
                if (!H.isSupported()) return h.call(this, "Instantiation failed.", "This browser is not supported."), n.failure();
                try {
                    t = v({}, C || r, e)
                } catch (e) {
                    return h.call(this, "Invalid configuration.", e.message), n.failure()
                }
                try {
                    if (!u(t.container)[0]) throw new Error("Invalid container.")
                } catch (e) {
                    return h.call(this, e.message), n.failure()
                }
                return !(C = t).mobile && g() || !C.desktop && !g() ? (h.call(this, "This device is disabled.", "desktop: " + C.desktop, "mobile: " + C.mobile), n.failure()) : (n.success(), this.store = {
                    containers: {},
                    elements: {},
                    history: [],
                    sequences: {}
                }, this.pristine = !0, A = A || q.bind(this), P = P || function() {
                    var n = this;
                    f(this.store.elements, function(e) {
                        m(e.node, e.styles.inline.generated), e.node.removeAttribute("data-sr-id")
                    }), f(this.store.containers, function(e) {
                        var t = e.node === document.documentElement ? window : e.node;
                        t.removeEventListener("scroll", n.delegate), t.removeEventListener("resize", n.delegate)
                    }), this.store = {
                        containers: {},
                        elements: {},
                        history: [],
                        sequences: {}
                    }
                }.bind(this), L = L || i.bind(this), M = M || y.bind(this), I = I || function() {
                    var t = this;
                    f(this.store.history, function(e) {
                        i.call(t, e.target, e.options, !0)
                    }), w.call(this)
                }.bind(this), Object.defineProperty(this, "delegate", {
                    get: function() {
                        return A
                    }
                }), Object.defineProperty(this, "destroy", {
                    get: function() {
                        return P
                    }
                }), Object.defineProperty(this, "reveal", {
                    get: function() {
                        return L
                    }
                }), Object.defineProperty(this, "clean", {
                    get: function() {
                        return M
                    }
                }), Object.defineProperty(this, "sync", {
                    get: function() {
                        return I
                    }
                }), Object.defineProperty(this, "defaults", {
                    get: function() {
                        return C
                    }
                }), Object.defineProperty(this, "version", {
                    get: function() {
                        return $
                    }
                }), Object.defineProperty(this, "noop", {
                    get: function() {
                        return !1
                    }
                }), Y || (Y = this))
            }
            return H.isSupported = function() {
                return ("transform" in (t = document.documentElement.style) || "WebkitTransform" in t) && ("transition" in (e = document.documentElement.style) || "WebkitTransition" in e);
                var e, t
            }, Object.defineProperty(H, "debug", {
                get: function() {
                    return W || !1
                },
                set: function(e) {
                    return W = "boolean" == typeof e ? e : W
                }
            }), H(), H
        }();
    </script>

    <!--=============== MAIN JS ===============-->
    <script>
        /*=============== SHOW MENU ===============*/
        const navMenu = document.getElementById('nav-menu'),
            navToggle = document.getElementById('nav-toggle'),
            navClose = document.getElementById('nav-close')

        /*===== MENU SHOW =====*/
        /* Validate if constant exists */
        if (navToggle) {
            navToggle.addEventListener('click', () => {
                navMenu.classList.add('show-menu')
            })
        }

        /*===== MENU HIDDEN =====*/
        /* Validate if constant exists */
        if (navClose) {
            navClose.addEventListener('click', () => {
                navMenu.classList.remove('show-menu')
            })
        }

        /*=============== REMOVE MENU MOBILE ===============*/
        const navLink = document.querySelectorAll('.nav__link')

        function linkAction() {
            const navMenu = document.getElementById('nav-menu')
            // When we click on each nav__link, we remove the show-menu class
            navMenu.classList.remove('show-menu')
        }
        navLink.forEach(n => n.addEventListener('click', linkAction))

        /*=============== CHANGE BACKGROUND HEADER ===============*/
        function scrollHeader() {
            const header = document.getElementById('header')
            // When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
            if (this.scrollY >= 80) header.classList.add('scroll-header');
            else header.classList.remove('scroll-header')
        }
        window.addEventListener('scroll', scrollHeader)

        /*=============== QUESTIONS ACCORDION ===============*/
        const accordionItems = document.querySelectorAll('.questions__item')

        accordionItems.forEach((item) => {
            const accordionHeader = item.querySelector('.questions__header')

            accordionHeader.addEventListener('click', () => {
                const openItem = document.querySelector('.accordion-open')

                toggleItem(item)

                if (openItem && openItem !== item) {
                    toggleItem(openItem)
                }
            })
        })

        const toggleItem = (item) => {
            const accordionContent = item.querySelector('.questions__content')

            if (item.classList.contains('accordion-open')) {
                accordionContent.removeAttribute('style')
                item.classList.remove('accordion-open')
            } else {
                accordionContent.style.height = accordionContent.scrollHeight + 'px'
                item.classList.add('accordion-open')
            }

        }

        /*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
        const sections = document.querySelectorAll('section[id]')

        function scrollActive() {
            const scrollY = window.pageYOffset

            sections.forEach(current => {
                const sectionHeight = current.offsetHeight,
                    sectionTop = current.offsetTop - 58,
                    sectionId = current.getAttribute('id')

                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
                } else {
                    document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
                }
            })
        }
        window.addEventListener('scroll', scrollActive)

        /*=============== SHOW SCROLL UP ===============*/
        function scrollUp() {
            const scrollUp = document.getElementById('scroll-up');
            // When the scroll is higher than 400 viewport height, add the show-scroll class to the a tag with the scroll-top class
            if (this.scrollY >= 400) scrollUp.classList.add('show-scroll');
            else scrollUp.classList.remove('show-scroll')
        }
        window.addEventListener('scroll', scrollUp)

        /*=============== DARK LIGHT THEME ===============*/
        const themeButton = document.getElementById('theme-button')
        const darkTheme = 'dark-theme'
        const iconTheme = 'ri-sun-line'

        // Previously selected topic (if user selected)
        const selectedTheme = localStorage.getItem('selected-theme')
        const selectedIcon = localStorage.getItem('selected-icon')

        // We obtain the current theme that the interface has by validating the dark-theme class
        const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
        const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'ri-moon-line' : 'ri-sun-line'

        // We validate if the user previously chose a topic
        if (selectedTheme) {
            // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
            document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
            themeButton.classList[selectedIcon === 'ri-moon-line' ? 'add' : 'remove'](iconTheme)
        }

        // Activate / deactivate the theme manually with the button
        themeButton.addEventListener('click', () => {
            // Add or remove the dark / icon theme
            document.body.classList.toggle(darkTheme)
            themeButton.classList.toggle(iconTheme)
            // We save the theme and the current icon that the user chose
            localStorage.setItem('selected-theme', getCurrentTheme())
            localStorage.setItem('selected-icon', getCurrentIcon())
        })

        /*=============== SCROLL REVEAL ANIMATION ===============*/
        const sr = ScrollReveal({
            origin: 'top',
            distance: '60px',
            duration: 2500,
            delay: 400,
            // reset: true
        })

        sr.reveal(`.home__data`)
        sr.reveal(`.home__img`, {
            delay: 500
        })
        sr.reveal(`.home__social`, {
            delay: 600
        })
        sr.reveal(`.about__img, .contact__box`, {
            origin: 'left'
        })
        sr.reveal(`.about__data, .contact__form`, {
            origin: 'right'
        })
        sr.reveal(`.steps__card, .product__card, .questions__group, .footer`, {
            interval: 100
        })
    </script>
</body>

</html>