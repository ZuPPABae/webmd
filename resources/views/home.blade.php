@extends('user.layout.index')

@section('content')
    <style>
        /* home.blade.php */
        html {
            font-size: 85%;
        }

        /* First Section */
        .satu {
            min-height: 100vh;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            background-image: url(../img/header.webp);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center top;
            position: relative;
            padding-right: 2rem;
        }

        .satu::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(6, 5, 5, 0.5);
        }

        .satu .content {
            margin-top: 8rem;
            padding: 1.4rem 7%;
            max-width: 55rem;
            z-index: 1;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            text-align: right;
        }

        .satu .content h1 {
            font-size: 5rem;
            font-weight: 600;
            color: var(--primary);
        }

        .satu .content p {
            font-size: 1.3rem;
            font-weight: 300;
            color: var(--primary);
            line-height: 1.8;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .satu .content .cta {
            margin-top: 4.5rem;
            display: inline-flex;
            align-items: center;
            padding: 0.7rem 2.4rem;
            font-size: 1.2rem;
            font-weight: 700;
            text-decoration: none;
            color: var(--primary);
            border: 3px solid rgba(255, 255, 255, 0.6);
            background-color: #d7820b;
            border-radius: 5rem;
            cursor: pointer;
            transition: background-color 0.3s ease, border-color 0.3s ease,
                color 0.3s ease;
        }

        .satu .content .cta:hover {
            color: #d7820b;
            background-color: rgba(255, 255, 255, 0.6);
        }

        @media (max-width: 768px) {
            .satu {
                padding-right: 1rem;
            }

            .satu .content .cta {
                margin-left: 0;
            }
        }

        @media (max-width: 400px) {
            .satu {
                padding-right: 0.5rem;
            }

            .satu .content h1 {
                font-size: 4rem;
            }

            .satu .content p {
                font-size: 1.1rem;
            }
        }

        /* First Section */

        /* Second Section */
        .two {
            padding: 6rem 7%;
            background-color: var(--primary);
        }

        .two .row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 3rem;
        }

        .row .about-img {
            display: grid;
            grid-template-areas:
                "img1 img2"
                "img1 img3";
            gap: 20px 15px;
        }

        .about-img img {
            margin: 0;
            padding: 0;
            display: block;
            width: 100%;
            height: auto;
            object-fit: cover;
            object-position: center;
        }

        .about-img .img1 {
            grid-area: img1;
            height: 426px;
        }

        .about-img .img2 {
            grid-area: img2;
            height: 250px;
        }

        .about-img .img3 {
            grid-area: img3;
            height: 156px;
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .row .content h2 {
            font-size: 3rem;
            font-weight: 600;
        }

        .row .content p {
            font-size: 1.2rem;
            padding-right: 3rem;
            margin-top: 2rem;
            line-height: 25px;
        }

        button.learn-more {
            width: 12rem;
            height: auto;
            position: relative;
            display: block;
            margin-top: 3.5rem;
            background-color: var(--primary);
            cursor: pointer;
        }

        button.learn-more .circle {
            position: relative;
            display: block;
            margin: 0;
            width: 3rem;
            height: 3rem;
            background: #282936;
            border-radius: 1.625rem;
            transition: 0.5s ease;
        }

        button.learn-more .circle .icon {
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            background: #fff;
            width: 1.125rem;
            height: 0.125rem;
            transition: 0.5s ease;
        }

        button.learn-more .circle .icon.arrow {
            left: 0.625rem;
            width: 1.125rem;
            height: 0.125rem;
            background: none;
        }

        button.learn-more .circle .icon.arrow::before {
            position: absolute;
            content: '';
            top: -0.3rem;
            right: 0.0625rem;
            width: 0.625rem;
            height: 0.625rem;
            border-top: 0.125rem solid #fff;
            border-right: 0.125rem solid #fff;
            transform: rotate(46deg);
        }

        button.learn-more .button-text {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 0.75rem 0;
            margin: 0 0 0 2.85rem;
            color: #282936;
            font-weight: 600;
            line-height: 1.6;
            text-align: center;
            text-transform: uppercase;
            text-decoration: none;
        }

        button:hover .circle {
            width: 100%;
        }

        button:hover .circle .icon.arrow {
            background: #fff;
            transform: translate(1rem, 0);
        }

        button:hover .button-text {
            color: #fff;
        }

        /* Second Section */

        /* Third Section */
        .three {
            background-color: #f1f1f1;
            padding: 3rem 0;
        }

        .popular h3 {
            padding: 40px;
            margin: 0;
            font-size: 48px;
            font-weight: 700;
            text-align: center;
            color: #111;
        }

        .popular p {
            padding: 10px 7%;
            font-size: 20px;
            font-weight: 300;
            text-align: center;
            color: #717171;
        }

        .tabs {
            margin-top: 2rem;
            font-size: 15px;
            font-weight: 500;
            padding: 0.5rem;
            display: flex;
            text-align: center;
            border-radius: 1000px;
            justify-content: center;
            align-items: center;
            gap: 4rem;
        }

        input[type='radio'] {
            display: none;
        }

        .tab {
            width: 150px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0.5rem;
            border-radius: inherit;
            cursor: pointer;
            z-index: 2;
        }

        .tabs .slider {
            width: 150px;
            height: 50px;
            position: absolute;
            border-radius: inherit;
            background-color: hsl(var(--slider) / 0.2);
            z-index: 0;
            transition: 0.25s ease;
        }

        input[type='radio']:checked+label {
            color: hsl(var(--slider));
        }

        input[id='rice']:checked~.slider {
            transform: translateX(-272%);
        }

        input[id='natural']:checked~.slider {
            transform: translateX(-137%);
        }

        input[id='seasoning']:checked~.slider {
            transform: translateX(-2%);
        }

        input[id='snack']:checked~.slider {
            transform: translateX(137%);
        }

        input[id='other']:checked~.slider {
            transform: translateX(272%);
        }

        .rice,
        .natural,
        .seasoning,
        .snack,
        .other {
            display: none;
            flex-wrap: wrap;
            justify-content: center;
            padding: 2rem 7%;
        }

        .rice.active,
        .natural.active,
        .seasoning.active,
        .snack.active,
        .other.active {
            display: flex;
        }

        /* All Container */
        .container1,
        .container2,
        .container3,
        .container4,
        .container5,
        .container6,
        .container7,
        .container8,
        .container9,
        .container10,
        .container11,
        .container12,
        .container13,
        .container14,
        .container15,
        .container16 {
            position: relative;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            margin: 2rem 2rem;
            transition: all 0.4s ease-in-out;
        }

        .container1:hover .text-section,
        .container2:hover .text-section,
        .container3:hover .text-section,
        .container4:hover .text-section,
        .container5:hover .text-section,
        .container6:hover .text-section,
        .container7:hover .text-section,
        .container8:hover .text-section,
        .container9:hover .text-section,
        .container10:hover .text-section,
        .container11:hover .text-section,
        .container12:hover .text-section,
        .container13:hover .text-section,
        .container14:hover .text-section,
        .container15:hover .text-section,
        .container16:hover .text-section {
            opacity: 1;
        }

        .text-section {
            position: absolute;
            top: 10px;
            left: 20px;
            width: 220px;
            opacity: 0;
            color: #282936;
            transition: all 0.4s ease-in-out;
        }

        h2 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 0.4rem;
        }

        p {
            margin-top: 1.2rem;
            font-size: 0.85rem;
            color: var(--text);
        }

        /* All Container */

        /* Rice, Snack */
        .container1:hover {
            width: 400px;
            height: 200px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid blue;
        }

        .container2:hover {
            width: 400px;
            height: 200px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid green;
        }

        .container3:hover {
            width: 400px;
            height: 200px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid black;
        }

        .container4:hover {
            width: 400px;
            height: 200px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid maroon;
        }

        .logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: auto;
            cursor: pointer;
            object-fit: cover;
            filter: drop-shadow(0 0 3px var(--secondary));
            transition: all 0.4s ease-in-out;
            pointer-events: none;
        }

        .product {
            position: absolute;
            top: -10px;
            right: -20px;
            width: 50%;
            height: auto;
            object-fit: cover;
            visibility: hidden;
            opacity: 0;
            transform: rotate(15deg);
            transition: all 0.4s ease-in-out;
            pointer-events: none;
        }

        .container1:hover .logo,
        .container2:hover .logo,
        .container3:hover .logo,
        .container4:hover .logo {
            pointer-events: auto;
            transform: scale(0);
        }

        .container1:hover .product,
        .container2:hover .product,
        .container3:hover .product,
        .container4:hover .product {
            filter: drop-shadow(0 0 3px var(--secondary));
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        /* Rice, Snack */

        /* Natural */
        .container5:hover {
            width: 280px;
            height: 180px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid green;
        }

        .container6:hover {
            width: 330px;
            height: 180px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid orange;
        }

        .container7:hover {
            width: 330px;
            height: 180px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid yellowgreen;
        }

        .container8:hover {
            width: 280px;
            height: 180px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid yellowgreen;
        }

        .nature {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: auto;
            cursor: pointer;
            object-fit: cover;
            filter: drop-shadow(0 0 3px var(--secondary));
            transition: all 0.4s ease-in-out;
            pointer-events: none;
        }

        .container7 .nature {
            left: 60%;
        }

        .container5 .nature,
        .container8 .nature {
            width: 100%;
        }

        .natura {
            position: absolute;
            height: auto;
            object-fit: cover;
            visibility: hidden;
            opacity: 0;
            transform: rotate(15deg);
            transition: all 0.4s ease-in-out;
            pointer-events: none;
        }

        .container5 .natura {
            width: 68%;
            top: -10px;
            right: -65px;
        }

        .container6 .natura {
            width: 50%;
            top: -20px;
            right: -20px;
        }

        .container7 .natura {
            width: 55%;
            top: -20px;
            right: -25px;
        }

        .container8 .natura {
            width: 65%;
            top: -10px;
            right: -60px;
        }

        .container5:hover .nature,
        .container6:hover .nature,
        .container7:hover .nature,
        .container8:hover .nature {
            pointer-events: auto;
            transform: scale(0);
        }

        .container5:hover .natura,
        .container6:hover .natura,
        .container7:hover .natura,
        .container8:hover .natura {
            filter: drop-shadow(0 0 3px var(--secondary));
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .container5 p,
        .container6 p,
        .container7 p,
        .container8 p {
            padding-right: 15%;
        }

        /* Natural */

        .container9:hover {
            width: 370px;
            height: 200px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid orange;
        }

        .container10:hover {
            width: 370px;
            height: 200px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid palevioletred;
        }

        .container11:hover {
            width: 370px;
            height: 200px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid green;
        }

        .container12:hover {
            width: 370px;
            height: 200px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid royalblue;
        }

        .container9:hover .kaldu,
        .container10:hover .kaldu,
        .container11:hover .kaldu,
        .container12:hover .kaldu {
            pointer-events: auto;
            transform: scale(0);
        }

        .container9:hover .kalhov,
        .container10:hover .kalhov,
        .container11:hover .kalhov,
        .container12:hover .kalhov {
            filter: drop-shadow(0 0 3px var(--secondary));
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .kaldu {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: auto;
            cursor: pointer;
            object-fit: cover;
            filter: drop-shadow(0 0 3px var(--secondary));
            transition: all 0.4s ease-in-out;
            pointer-events: none;
        }

        .kalhov {
            position: absolute;
            top: -10px;
            right: -20px;
            width: 50%;
            height: auto;
            object-fit: cover;
            visibility: hidden;
            opacity: 0;
            transform: rotate(15deg);
            transition: all 0.4s ease-in-out;
            pointer-events: none;
        }

        /* Other */
        .container13:hover {
            width: 350px;
            height: 200px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid green;
        }

        .container14:hover {
            width: 350px;
            height: 200px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid goldenrod;
        }

        .container15:hover {
            width: 350px;
            height: 200px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid burlywood;
        }

        .container16:hover {
            width: 350px;
            height: 200px;
            top: -20px;
            border-radius: 15px;
            background: var(--primary);
            border: 1px solid brown;
        }

        .etc {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120%;
            height: auto;
            cursor: pointer;
            object-fit: cover;
            filter: drop-shadow(0 0 3px var(--secondary));
            transition: all 0.4s ease-in-out;
            pointer-events: none;
        }

        .others {
            position: absolute;
            top: 5px;
            right: -35px;
            width: 50%;
            height: auto;
            object-fit: cover;
            visibility: hidden;
            opacity: 0;
            transform: rotate(15deg);
            transition: all 0.4s ease-in-out;
            pointer-events: none;
        }

        .container13:hover .etc,
        .container14:hover .etc,
        .container15:hover .etc,
        .container16:hover .etc {
            pointer-events: auto;
            transform: scale(0);
        }

        .container13:hover .others,
        .container14:hover .others,
        .container15:hover .others,
        .container16:hover .others {
            filter: drop-shadow(0 0 3px var(--secondary));
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        /* Other */

        .discover {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .discover .more {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1.2rem;
            font-size: 1rem;
            font-weight: 300;
            color: var(--primary);
            border: 3px solid rgba(255, 255, 255, 0.6);
            background-color: #d7820b;
            border-radius: 0;
            cursor: pointer;
            transition: background-color 0.3s ease, border-color 0.3s ease,
                color 0.3s ease;
        }

        .discover .more:hover {
            color: #d7820b;
            background-color: rgba(255, 255, 255, 0.6);
        }

        /* Third Section */

        /* Fourth Section */
        .four {
            background-color: #fff;
            padding: 3rem 0 5rem;
        }

        .article-title h3 {
            padding: 40px;
            margin: 0;
            font-size: 40px;
            font-weight: 700;
            text-align: center;
            color: #111;
        }

        .article-card .card {
            height: 405px;
        }

        .article-card .article-img img {
            object-position: center;
            object-fit: cover;
            height: 300px;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
        }

        @media (max-width: 540px) {
            .article-card .card {
                height: 275px;
            }

            .article-card .article-img img {
                height: 200px;
            }
        }

        /* Fourth Section */

        /* Fifth Section */
        .five {
            background-color: #fff;
            padding: 1rem 3%;
        }

        .e-commerce {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .e-commerce ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            animation: slide 45s linear infinite;
        }

        .e-commerce li {
            margin: 0;
            align-self: center;
        }

        .e-commerce a {
            color: black;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .e-commerce img {
            max-width: 128px;
            width: 77.5%;
            height: auto;
            margin: 0 9rem;
        }

        @keyframes slide {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-100%);
                /* Adjust to move half the width of the total items */
            }
        }

        @media (max-width: 576px) {
            .e-commerce img {
                max-width: 80px;
                margin: 0 7rem;
            }
        }

        /* Fifth Section */

        /* Count Section */
        .counter-stats {
            display: flex;
            justify-content: space-evenly;
            margin: 0 auto;
            padding: 1rem 0 2rem;
            max-width: 1400px;
            cursor: default;
            background-color: #fff;
        }

        .counter {
            width: 200px;
            text-align: center;
            padding: 20px;
            margin: 0 -50px;
            background-color: rgba(241, 241, 241, 0.3);
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .counter:hover {
            transform: translateY(-5px);
        }

        .counter h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .counter .count {
            font-size: 36px;
            font-weight: bold;
            color: #65b033;
        }

        /* Animasi */
        @keyframes count-up {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .counter .count {
            animation: count-up 1s ease;
        }

        .counter h2 {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: medium;
        }

        /* Count Section */

        /* Mobile */
        @media only screen and (max-width: 600px) {
            .counter-stats {
                padding: 0 5px;
            }

            .counter-stats .counter {
                width: calc(25% - 10px);
                height: fit-content;
                margin: 0;
                padding: 20px 0;
            }

            .counter .count {
                font-size: 22px;
                font-weight: bold;
            }

            .counter h2 {
                font-size: smaller;
            }
        }

        @media only screen and (min-width: 601px) and (max-width: 820px) {
            .counter-stats {
                padding: 0 20px;
            }

            .counter-stats .counter {
                width: calc(25% - 20px);
                margin: 0 10px;
            }
        }

        /* Count Section */

        /* Video Section */
        .videow {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
            padding: 0px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        .vid {
            width: 100%;
            height: auto;
            max-width: 560px;
            max-height: 315px;
            aspect-ratio: 16 / 9;
        }

        @media only screen and (max-width: 576px) {
            .videow {
                height: 40vh;
                margin: 20px 0 5px;
                padding: 0 10px;
            }
        }

        @media only screen and (max-width: 380px) {
            .videow {
                height: 35vh;
                margin: 20px 0 5px;
            }
        }

        /* Video Section */

        /* Desktop */
        @media (max-width: 1024px) {
            html {
                font-size: 80%;
            }

            .two .row {
                grid-template-columns: 1fr;
            }

            .row .content p {
                padding-right: 1rem;
            }

            .about-img .img1 {
                grid-area: img1;
                height: 300px;
            }

            .about-img .img2 {
                grid-area: img2;
                height: 170px;
            }

            .about-img .img3 {
                grid-area: img3;
                height: 110px;
            }

            .tabs .slider {
                width: 155px;
            }

            input[id='rice']:checked~.slider {
                transform: translateX(-257%);
            }

            input[id='natural']:checked~.slider {
                transform: translateX(-130%);
            }

            input[id='seasoning']:checked~.slider {
                transform: translateX(0%);
            }

            input[id='snack']:checked~.slider {
                transform: translateX(130%);
            }

            input[id='other']:checked~.slider {
                transform: translateX(257%);
            }

            /* Rice, Snack */
            .container1,
            .container2,
            .container3,
            .container4 {
                width: 130px;
            }

            .container1:hover {
                width: 250px;
                height: 160px;
                top: -20px;
                border-radius: 15px;
                background: var(--primary);
                border: 1px solid blue;
            }

            .container2:hover {
                width: 250px;
                height: 160px;
                top: -20px;
                border-radius: 15px;
                background: var(--primary);
                border: 1px solid green;
            }

            .container3:hover {
                width: 250px;
                height: 160px;
                top: -20px;
                border-radius: 15px;
                background: var(--primary);
                border: 1px solid black;
            }

            .container4:hover {
                width: 250px;
                height: 160px;
                top: -20px;
                border-radius: 15px;
                background: var(--primary);
                border: 1px solid maroon;
            }

            .product {
                top: 5px;
                right: -40px;
                width: 55%;
            }

            .container1 p,
            .container2 p,
            .container3 p,
            .container4 p {
                margin-top: 0.2rem;
                font-size: 0.8rem;
                padding-right: 35%;
            }

            h2 {
                font-size: 1.3rem;
            }

            /* Rice, Snack */

            /* Natural */
            .container5:hover {
                width: 220px;
                height: 180px;
                top: -20px;
            }

            .container6:hover {
                width: 220px;
                height: 180px;
                top: -20px;
            }

            .container7:hover {
                width: 220px;
                height: 180px;
            }

            .container8:hover {
                width: 220px;
                height: 180px;
                top: -20px;
            }

            .container5 .natura {
                width: 70%;
                top: 20px;
                right: -60px;
            }

            .container6 .natura {
                width: 55%;
                top: 20px;
                right: -40px;
            }

            .container7 .natura {
                width: 65%;
                top: 10px;
                right: -45px;
            }

            .container8 .natura {
                width: 70%;
                top: 10px;
                right: -65px;
            }

            .container6 p,
            .container7 p {
                padding-right: 35%;
            }

            .container5 p,
            .container8 p {
                padding-right: 30%;
            }

            /* Natural */

            /* Seasoning */
            .container9:hover {
                width: 220px;
                height: 180px;
                top: -20px;
            }

            .container10:hover {
                width: 220px;
                height: 180px;
                top: -20px;
            }

            .container11:hover {
                width: 220px;
                height: 180px;
                top: -20px;
            }

            .container12:hover {
                width: 220px;
                height: 180px;
                top: -20px;
            }

            .kaldu {
                width: 100%;
            }

            .kalhov {
                top: 25px;
                right: -40px;
                width: 55%;
            }

            .container9 h2,
            .container10 h2,
            .container11 h2,
            .container12 h2 {
                padding-right: 30%;
            }

            .container9 p,
            .container10 p,
            .container11 p,
            .container12 p {
                margin-top: 0.2rem;
                font-size: 0.8rem;
                padding-right: 40%;
            }

            /* Seasoning */

            /* Other */
            .container13,
            .container14,
            .container15,
            .container16 {
                width: 130px;
            }

            .container13:hover {
                width: 250px;
                height: 160px;
                top: -20px;
                border-radius: 15px;
                background: var(--primary);
                border: 1px solid blue;
            }

            .container14:hover {
                width: 250px;
                height: 160px;
                top: -20px;
                border-radius: 15px;
                background: var(--primary);
                border: 1px solid green;
            }

            .container15:hover {
                width: 250px;
                height: 160px;
                top: -20px;
                border-radius: 15px;
                background: var(--primary);
                border: 1px solid black;
            }

            .container16:hover {
                width: 250px;
                height: 160px;
                top: -20px;
                border-radius: 15px;
                background: var(--primary);
                border: 1px solid maroon;
            }

            .others {
                top: 5px;
                right: -40px;
                width: 55%;
            }

            .container13 p,
            .container14 p,
            .container15 p,
            .container16 p {
                margin-top: 0.2rem;
                font-size: 0.8rem;
                padding-right: 35%;
            }

            h2 {
                font-size: 1.3rem;
            }

            /* Other */

            .article {
                margin: 1rem 0 0;
            }

            .card__details p {
                font-size: 13px;
                line-height: 1.5rem;
            }
        }

        /* Tablet */
        @media (min-width: 851px) and (max-width: 950px) {
            input[id='rice']:checked~.slider {
                transform: translateX(-240%);
            }

            input[id='natural']:checked~.slider {
                transform: translateX(-120%);
            }

            input[id='seasoning']:checked~.slider {
                transform: translateX(0%);
            }

            input[id='snack']:checked~.slider {
                transform: translateX(125%);
            }

            input[id='other']:checked~.slider {
                transform: translateX(240%);
            }
        }

        @media (max-width: 850px) {
            input[id='rice']:checked~.slider {
                transform: translateX(-225%);
            }

            input[id='natural']:checked~.slider {
                transform: translateX(-115%);
            }

            input[id='seasoning']:checked~.slider {
                transform: translateX(0%);
            }

            input[id='snack']:checked~.slider {
                transform: translateX(115%);
            }

            input[id='other']:checked~.slider {
                transform: translateX(225%);
            }
        }

        @media (max-width: 820px) {
            html {
                font-size: 75%;
            }

            .two {
                padding: 4rem 5%;
            }

            button.learn-more .button-text {
                right: -10%;
                padding: 0.7rem 0;
                margin: 0 0 0 2rem;
            }

            button:hover .circle {
                width: 110%;
            }

            button:hover .circle .icon.arrow {
                background: #fff;
                transform: translate(0.8rem, 0);
            }

            .popular p {
                font-size: 1.5rem;
                padding-bottom: 1rem;
            }

            .tabs {
                gap: 1rem;
                text-align: center;
            }

            .tab {
                width: 130px;
            }

            .tabs .slider {
                width: 125px;
            }

            /* Rice */
            .container1,
            .container2,
            .container3,
            .container4 {
                width: 200px;
            }

            .container3,
            .container4 {
                top: 5px;
            }

            .container1:hover {
                width: 300px;
                height: 170px;
                top: -20px;
            }

            .container2:hover {
                width: 300px;
                height: 170px;
                top: -20px;
            }

            .container3:hover {
                width: 300px;
                height: 170px;
                top: -10px;
            }

            .container4:hover {
                width: 300px;
                height: 170px;
                top: -10px;
            }

            .container1 p,
            .container2 p,
            .container3 p,
            .container4 p {
                font-size: 0.85rem;
                padding-right: 25%;
            }

            /* Rice */

            /* Natural */
            .container5,
            .container6,
            .container7,
            .container8 {
                width: 200px;
            }

            .container5:hover {
                width: 280px;
                height: 160px;
                top: -10px;
            }

            .container6:hover {
                width: 280px;
                height: 160px;
                top: -20px;
            }

            .container7:hover {
                width: 280px;
                height: 160px;
            }

            .container8:hover {
                width: 280px;
                height: 160px;
                top: -20px;
            }

            .nature {
                width: 150px;
            }

            .container5 .nature,
            .container8 .nature {
                width: 130px;
            }

            .container7 .nature {
                left: 50%;
            }

            .container5 .natura {
                width: 65%;
                top: -10px;
                right: -60px;
            }

            .container6 .natura {
                width: 50%;
                top: -10px;
                right: -30px;
            }

            .container7 .natura {
                width: 55%;
                top: -20px;
                right: -35px;
            }

            .container8 .natura {
                width: 60%;
                top: -10px;
                right: -55px;
            }

            .container6 p,
            .container7 p {
                padding-right: 30%;
            }

            .container5 p,
            .container8 p {
                padding-right: 20%;
            }

            /* Natural */

            /* Seasoning */
            .container9,
            .container10,
            .container11,
            .container12 {
                width: 200px;
            }

            .container11,
            .container12 {
                top: 20px;
            }

            .container9:hover {
                width: 300px;
                height: 190px;
                top: -20px;
            }

            .container10:hover {
                width: 300px;
                height: 190px;
                top: -20px;
            }

            .container11:hover {
                width: 300px;
                height: 190px;
                top: 10px;
            }

            .container12:hover {
                width: 300px;
                height: 190px;
                top: 10px;
            }

            .kaldu {
                width: 150px;
            }

            .kalhov {
                top: -5px;
                right: -45px;
                width: 55%;
            }

            .container9 h2,
            .container10 h2,
            .container11 h2,
            .container12 h2 {
                padding-right: 10%;
            }

            .container9 p,
            .container10 p,
            .container11 p,
            .container12 p {
                font-size: 1rem;
                padding-right: 20%;
            }

            /* Seasoning */

            /* Other */
            .container13,
            .container14,
            .container15,
            .container16 {
                width: 200px;
            }

            .container15,
            .container16 {
                top: 5px;
            }

            .container13:hover {
                width: 300px;
                height: 170px;
                top: -20px;
            }

            .container14:hover {
                width: 300px;
                height: 170px;
                top: -20px;
            }

            .container15:hover {
                width: 300px;
                height: 170px;
                top: -10px;
            }

            .container16:hover {
                width: 300px;
                height: 180px;
                top: -10px;
            }

            .container13 p,
            .container14 p,
            .container15 p,
            .container16 p {
                font-size: 0.85rem;
                padding-right: 25%;
            }

            .etc {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 150px;
                height: 170px;
                cursor: pointer;
                object-fit: cover;
                filter: drop-shadow(0 0 5px #cd8585);
                transition: all 0.5s ease-in-out;
            }

            .others {
                top: -10px;
                right: -40px;
                width: 50%;
            }

            /* Other */

            h2 {
                font-size: 1.5rem;
            }

            .logo {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 150px;
                height: 170px;
                cursor: pointer;
                object-fit: cover;
                filter: drop-shadow(0 0 5px #cd8585);
                transition: all 0.5s ease-in-out;
            }

            .product {
                top: -10px;
                right: -40px;
                width: 55%;
            }

            /* .four {
                                                                                                                                            flex-wrap: wrap;
                                                                                                                                        } */

            .article {
                margin: 1rem 0 0;
            }

            .popular h3,
            .article-title h3 {
                font-size: 3rem;
                padding-bottom: 1.5rem;
            }

            .card__details .name {
                font-size: 24px;
                line-height: 2rem;
            }

            .card__details p {
                font-size: 14px;
                line-height: 1.4rem;
            }
        }

        /* Mobile Phone L */
        @media (max-width: 450px) {
            html {
                font-size: 55%;
            }

            .two {
                padding: 6rem 4% 5rem;
            }

            .row .content h2 {
                font-size: 2rem;
            }

            .row .content p {
                font-size: 1rem;
                padding-right: 0;
            }

            button.learn-more .button-text {
                right: -20%;
                padding: 0.4rem 0;
                margin: 0 0 0 4rem;
                font-size: 1.4rem;
            }

            button:hover .circle {
                width: 120%;
            }

            .popular h3,
            .article-title h3 {
                padding: 40px 0 10px;
                font-size: 3.3rem;
            }

            .popular p {
                display: none;
            }

            .tabs {
                margin-top: 4rem;
                font-size: 1rem;
                font-weight: 500;
                padding: 0.5rem;
                display: flex;
                border-radius: 1000px;
                justify-content: center;
                align-items: center;
                text-align: center;
                gap: 1rem;
            }

            input[type='radio'] {
                display: none;
            }

            .tab {
                width: 70px;
                height: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 0.3rem;
                border-radius: inherit;
                cursor: pointer;
                z-index: 2;
            }

            .tabs .slider {
                width: 70px;
                height: 35px;
                position: absolute;
                border-radius: inherit;
                background-color: hsl(var(--slider) / 0.2);
                z-index: 0;
                transition: 0.25s ease;
            }

            input[type='radio']:checked+label {
                color: hsl(var(--slider));
            }

            input[id='rice']:checked~.slider {
                transform: translateX(-225%);
            }

            input[id='natural']:checked~.slider {
                transform: translateX(-112%);
            }

            input[id='seasoning']:checked~.slider {
                transform: translateX(0%);
            }

            input[id='snack']:checked~.slider {
                transform: translateX(112%);
            }

            input[id='other']:checked~.slider {
                transform: translateX(225%);
            }

            /* Rice */
            .container1,
            .container2,
            .container3,
            .container4 {
                width: 150px;
            }

            .container1 p,
            .container2 p,
            .container3 p,
            .container4 p {
                font-size: 1rem;
                padding-right: 35%;
            }

            .container1:hover {
                width: 280px;
                height: 140px;
                top: 0px;
            }

            .container2:hover {
                width: 280px;
                height: 140px;
                top: 0px;
            }

            .container3:hover {
                width: 280px;
                height: 140px;
                top: 0px;
            }

            .container4:hover {
                width: 280px;
                height: 140px;
                top: 0px;
            }

            /* Rice */

            /* Other */
            .container13,
            .container14,
            .container15,
            .container16 {
                width: 150px;
            }

            .container13:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            .container14:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            .container15:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            .container16:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            .container16 h2 {
                padding-right: 30px;
            }

            .container13 p,
            .container14 p,
            .container15 p,
            .container16 p {
                margin-top: 15px;
            }

            /* Other */

            /* Natural */
            .container5,
            .container6,
            .container7,
            .container8 {
                width: 150px;
            }

            .container5:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            .container6:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            .container7:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            .container8:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            .nature {
                width: 150px;
            }

            .container5 .nature,
            .container8 .nature {
                width: 130px;
            }

            .container7 .nature {
                left: 50%;
            }

            .container5 .natura {
                width: 65%;
                top: -10px;
                right: -60px;
            }

            .container6 .natura {
                width: 50%;
                top: -10px;
                right: -30px;
            }

            .container7 .natura {
                width: 55%;
                top: -20px;
                right: -35px;
            }

            .container8 .natura {
                width: 60%;
                top: -10px;
                right: -55px;
            }

            .container6 p,
            .container7 p {
                font-size: 1rem;
                padding-right: 30%;
            }

            .container5 p,
            .container8 p {
                font-size: 1rem;
                padding-right: 20%;
            }

            /* Natural */

            /* Seasoning */
            .container9,
            .container10,
            .container11,
            .container12 {
                width: 150px;
                top: 0px;
            }

            .container9:hover {
                width: 270px;
                height: 140px;
                top: 0px;
            }

            .container10:hover {
                width: 270px;
                height: 140px;
                top: 0px;
            }

            .container11:hover {
                width: 270px;
                height: 140px;
                top: 0px;
            }

            .container12:hover {
                width: 270px;
                height: 140px;
                top: 0px;
            }

            .kaldu {
                width: 140px;
            }

            .kalhov {
                top: -15px;
                right: -35px;
                width: 45%;
            }

            .container9 h2,
            .container10 h2,
            .container11 h2,
            .container12 h2 {
                padding-right: 15%;
            }

            .container9 p,
            .container10 p,
            .container11 p,
            .container12 p {
                font-size: 1rem;
                padding-right: 20%;
            }

            .card__details .name {
                font-size: 20px;
                font-weight: 600;
                margin-top: 16px;
                color: var(--foot);
                line-height: 2.5rem;
            }

            .card__details p {
                font-size: 10px;
                color: var(--secondary);
                line-height: 1.8rem;
            }
        }

        /* Mobile Phone M */
        @media (max-width: 376px) {
            input[type='radio']:checked+label {
                color: hsl(var(--slider));
            }

            input[id='rice']:checked~.slider {
                transform: translateX(-215%);
            }

            input[id='natural']:checked~.slider {
                transform: translateX(-107%);
            }

            input[id='seasoning']:checked~.slider {
                transform: translateX(0%);
            }

            input[id='snack']:checked~.slider {
                transform: translateX(107%);
            }

            input[id='other']:checked~.slider {
                transform: translateX(215%);
            }

            /* Rice */
            .container1,
            .container2,
            .container3,
            .container4 {
                width: 150px;
            }

            .container1:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            .container2:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            .container3:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            .container4:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            /* Rice */

            /* Natural */
            .container5,
            .container6,
            .container7,
            .container8 {
                width: 150px;
            }

            .container5:hover {
                width: 220px;
                height: 140px;
                top: 0px;
            }

            .container6:hover {
                width: 220px;
                height: 140px;
                top: 0px;
            }

            .container7:hover {
                width: 220px;
                height: 140px;
                top: 0px;
            }

            .container8:hover {
                width: 220px;
                height: 140px;
                top: 0px;
            }

            .container6 p,
            .container7 p {
                font-size: 1rem;
                padding-right: 40%;
            }

            .container5 p,
            .container8 p {
                font-size: 1rem;
                padding-right: 30%;
            }

            /* Seasoning */
            .container9,
            .container10,
            .container11,
            .container12 {
                width: 150px;
            }

            .kaldu {
                width: 130px;
            }

            .kalhov {
                top: 10px;
                right: -25px;
                width: 40%;
            }

            /* Seasoning */

            /* Other */
            .container13:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            .container14:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            .container15:hover {
                width: 260px;
                height: 140px;
                top: 10px;
            }

            .container16:hover {
                width: 260px;
                height: 140px;
                top: 0px;
            }

            .container13 .etc {
                top: 70px;
                right: -25px;
                width: 80%;
            }

            .container14 {
                width: 130px;
            }

            .container14 .etc {
                top: 77px;
                right: -25px;
                width: 80%;
            }

            .container15 .etc {
                top: 30px;
                right: -25px;
                width: 80%;
            }

            .container16 .etc {
                top: 70px;
                right: -25px;
                width: 80%;
            }

            /* Other */

            .product {
                top: 10px;
                right: -25px;
                width: 50%;
            }

            .logo {
                width: 130px;
            }

            .others {
                width: 130px;
            }

            .nature {
                width: 130px;
            }

            .container5 .natura {
                width: 55%;
                top: 10px;
                right: -40px;
            }

            .container6 .natura {
                width: 45%;
                top: 10px;
                right: -30px;
            }

            .container7 .natura {
                width: 50%;
                top: 0px;
                right: -35px;
            }

            .container8 .natura {
                width: 50%;
                top: 10px;
                right: -40px;
            }

            .container9 h2,
            .container10 h2,
            .container11 h2,
            .container12 h2 {
                padding-right: 25%;
            }

            .container9 p,
            .container10 p,
            .container11 p,
            .container12 p {
                font-size: 1rem;
                padding-right: 20%;
            }
        }

        /* Mobile Phone S */
        @media (max-width: 360px) {

            .popular h3,
            .article-title h3 {
                font-size: 2.5rem;
            }

            input[type='radio']:checked+label {
                color: hsl(var(--slider));
            }

            input[id='rice']:checked~.slider {
                transform: translateX(-205%);
            }

            input[id='natural']:checked~.slider {
                transform: translateX(-102%);
            }

            input[id='snack']:checked~.slider {
                transform: translateX(102%);
            }

            input[id='other']:checked~.slider {
                transform: translateX(205%);
            }

            .container13 p,
            .container14 p,
            .container15 p {
                font-size: 0.9rem;
                padding-right: 35%;
            }

            .container16 h2 {
                padding-right: 50px;
            }

            .container16 p {
                font-size: 1rem;
                padding-right: 35%;
                margin-top: 5px;
            }
        }

        /* Mobile Phone S */
        @media (max-width: 345px) {
            .tabs .slider {
                width: 60px;
                height: 35px;
                position: absolute;
                border-radius: inherit;
                background-color: hsl(var(--slider) / 0.2);
                z-index: 0;
                transition: 0.25s ease;
            }

            input[type='radio']:checked+label {
                color: hsl(var(--slider));
            }

            input[id='rice']:checked~.slider {
                transform: translateX(-212%);
            }

            input[id='natural']:checked~.slider {
                transform: translateX(-107%);
            }

            input[id='seasoning']:checked~.slider {
                transform: translateX(0%);
            }

            input[id='snack']:checked~.slider {
                transform: translateX(107%);
            }

            input[id='other']:checked~.slider {
                transform: translateX(212%);
            }

            .container9 p,
            .container10 p,
            .container11 p,
            .container12 p {
                padding-right: 30%;
            }
        }

        @media (max-width: 285px) {
            .tabs .slider {
                width: 55px;
            }

            input[type='radio']:checked+label {
                color: hsl(var(--slider));
            }

            input[id='rice']:checked~.slider {
                transform: translateX(-205%);
            }

            input[id='natural']:checked~.slider {
                transform: translateX(-105%);
            }

            input[id='snack']:checked~.slider {
                transform: translateX(105%);
            }

            input[id='other']:checked~.slider {
                transform: translateX(205%);
            }
        }
    </style>
    <!-- Section 1 -->
    <section class="satu" id="satu">
        <main class="content">
            <h1>@lang('users.homesatuh1')</h1>
            <p>
                @lang('users.homesatup')<br />@lang('users.homesatubr')
            </p>
            <a href="{{ route('home') }}" class="cta"><i class="fa-solid fa-bag-shopping"
                    style="margin-right: 1rem"></i>@lang('users.homesatucta')</a>
        </main>
    </section>
    <!-- Section 1 -->

    <!-- About Section -->
    <section class="two" id="dua">
        <div class="row">
            <div class="about-img">
                <img src="{{ asset('img/section/dua/yellow.jpg
                                                                                                                                                ') }}"
                    class="img1" alt="IMG1" />
                <img src="{{ asset('img/section/dua/red.jpg
                                                                                                                                                ') }}"
                    class="img2" alt="IMG2" />
                <img src="{{ asset('img/section/dua/blue.jpg
                                                                                                                                                ') }}"
                    class="img3" alt="IMG3" />
            </div>
            <div class="content">
                <h2>@lang('users.homeduah2')</h2>
                <p>
                    @lang('users.homeduap')<br /><br />
                    @lang('users.homeduabr')
                </p>
                <div id="container">
                    <button class="learn-more">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <a href="{{ route('home') }}" class="button-text">@lang('users.homeduabtn')</a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->

    <!-- Popular Section -->
    <section class="three" id="tiga">
        <div class="popular">
            <h3>@lang('users.hometigah3')</h3>
            <p>
                @lang('users.hometigap')
            </p>
        </div>
        <div class="tabs">
            <input type="radio" id="rice" name="tabs" checked>
            <label class="tab" for="rice">@lang('users.hometigalabel1')</label>
            <input type="radio" id="natural" name="tabs">
            <label class="tab" for="natural">@lang('users.hometigalabel2')</label>
            <input type="radio" id="seasoning" name="tabs">
            <label class="tab" for="seasoning">@lang('users.hometigalabel3')</label>
            <input type="radio" id="snack" name="tabs">
            <label class="tab" for="snack">@lang('users.hometigalabel4')</label>
            <input type="radio" id="other" name="tabs">
            <label class="tab" for="other">@lang('users.hometigalabel5')</label>
            <span class="slider"></span>
        </div>
        <div class="rice initial-display">
            <div class="container1">
                <img src="{{ asset('img/section/tiga/rice/logo/BROWN RICE 2KG.webp') }}" class="logo" />
                <div class="text-section">
                    <h2>Brown Rice 2Kg</h2>
                    <p>
                        @lang('users.hometigabp1')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/rice/container/brown.webp') }}" alt="" class="product" />
            </div>
            <div class="container2">
                <img src="{{ asset('img/section/tiga/rice/logo/MD ORGANIC MIX ALL RICE 2KG.webp') }}" class="logo" />
                <div class="text-section">
                    <h2>Mix Rice 2Kg</h2>
                    <p>
                        @lang('users.hometigabp2')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/rice/container/mix.webp') }}" alt="" class="product" />
            </div>
            <div class="container3">
                <img src="{{ asset('img/section/tiga/rice/logo/MD ORGANIC BLACK RICE KUPAS KULIT 2KG.webp') }}"
                    class="logo" />
                <div class="text-section">
                    <h2>Black Rice 2Kg</h2>
                    <p>
                        @lang('users.hometigabp3')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/rice/container/black.webp') }}" alt="" class="product" />
            </div>
            <div class="container4">
                <img src="{{ asset('img/section/tiga/rice/logo/MD ORGANIC RED RICE KUPAS KULIT 2KG.webp') }}"
                    class="logo" />
                <div class="text-section">
                    <h2>Red Rice 2Kg</h2>
                    <p>
                        @lang('users.hometigabp4')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/rice/container/red.webp') }}" alt="" class="product" />
            </div>
        </div>
        <div class="natural">
            <div class="container5">
                <img src="{{ asset('img/section/tiga/natural/logo/sweet coconut sauce.webp') }}" class="nature" />
                <div class="text-section">
                    <h2>Sweet Coconut Sauce</h2>
                    <p style="font-size: 11px">
                        @lang('users.hometigapp1')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/natural/container/sweet coconut.webp') }}" alt=""
                    class="natura" />
            </div>
            <div class="container6">
                <img src="{{ asset('img/section/tiga/natural/logo/coconut-sugar.webp') }}" class="nature" />
                <div class="text-section">
                    <h2>Coconut Sugar</h2>
                    <p style="font-size: 11px">
                        @lang('users.hometigapp2')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/natural/container/coconut.webp') }}" alt=""
                    class="natura" />
            </div>
            <div class="container7">
                <img src="{{ asset('img/section/tiga/natural/logo/palm-sugar.webp') }}" class="nature" />
                <div class="text-section">
                    <h2>Palm Sugar</h2>
                    <p style="font-size: 11px">
                        @lang('users.hometigapp3')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/natural/container/palm.webp') }}" alt="" class="natura" />
            </div>
            <div class="container8">
                <img src="{{ asset('img/section/tiga/natural/logo/salty-coconut-sauce.webp') }}" class="nature" />
                <div class="text-section">
                    <h2>Salty Coconut Sauce</h2>
                    <p style="font-size: 11px">
                        @lang('users.hometigapp4')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/natural/container/Salty coconut.webp') }}" alt=""
                    class="natura" />
            </div>
        </div>
        <div class="seasoning">
            <div class="container9">
                <img src="{{ asset('img/section/tiga/seasoning/logo/Kaldu Ayam.webp') }}" class="kaldu" />
                <div class="text-section">
                    <h2>MD Natural Kaldu Ayam 75 Gram</h2>
                    <p>
                        @lang('users.hometigasep1')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/seasoning/container/Kaldu Ayam.webp') }}" alt=""
                    class="kalhov" />
            </div>
            <div class="container10">
                <img src="{{ asset('img/section/tiga/seasoning/logo/Kaldu Sapi.webp') }}" class="kaldu" />
                <div class="text-section">
                    <h2>MD Natural Kaldu Sapi 75 Gram</h2>
                    <p>
                        @lang('users.hometigasep2')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/seasoning/container/Kaldu Sapi.webp') }}" alt=""
                    class="kalhov" />
            </div>
            <div class="container11">
                <img src="{{ asset('img/section/tiga/seasoning/logo/Kaldu Jamur.webp') }}" class="kaldu" />
                <div class="text-section">
                    <h2>MD Natural Kaldu Jamur 75 Gram</h2>
                    <p>
                        @lang('users.hometigasep3')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/seasoning/container/Kaldu Jamur.webp') }}" alt=""
                    class="kalhov" />
            </div>
            <div class="container12">
                <img src="{{ asset('img/section/tiga/seasoning/logo/Kaldu Tuna.webp') }}" class="kaldu" />
                <div class="text-section">
                    <h2>MD Natural Kaldu Tuna 75 Gram</h2>
                    <p>
                        @lang('users.hometigasep4')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/seasoning/container/Kaldu Tuna.webp') }}" alt=""
                    class="kalhov" />
            </div>
        </div>
        <div class="snack">
            <div class="container1">
                <img src="{{ asset('img/section/tiga/snack/logo/apple.webp') }}" class="logo" />
                <div class="text-section">
                    <h2>Cal's Snack Apple</h2>
                    <p>
                        @lang('users.hometigasnp1')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/snack/container/apple.webp') }}" alt="" class="product" />
            </div>
            <div class="container2">
                <img src="{{ asset('img/section/tiga/snack/logo/banana.webp') }}" class="logo" />
                <div class="text-section">
                    <h2>Cal's Snack Banana</h2>
                    <p>
                        @lang('users.hometigasnp2')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/snack/container/banana.webp') }}" alt="" class="product" />
            </div>
            <div class="container3">
                <img src="{{ asset('img/section/tiga/snack/logo/broccoli.webp') }}" class="logo" />
                <div class="text-section">
                    <h2>Cal's Snack Broccoli</h2>
                    <p>
                        @lang('users.hometigasnp3')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/snack/container/broccoli.webp') }}" alt=""
                    class="product" />
            </div>
            <div class="container4">
                <img src="{{ asset('img/section/tiga/snack/logo/mango.webp') }}" class="logo" />
                <div class="text-section">
                    <h2>Cal's Snack Mango</h2>
                    <p>
                        @lang('users.hometigasnp4')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/snack/container/mango.webp') }}" alt="" class="product" />
            </div>
        </div>
        <div class="other">
            <div class="container13">
                <img src="{{ asset('img/section/tiga/other/logo/biostraw.webp') }}" class="etc" />
                <div class="text-section">
                    <h2>MD Biostraw 50pcs</h2>
                    <p>
                        @lang('users.hometigaop1')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/other/container/biostraw.webp') }}" alt="" class="others"
                    style="top: -40px;" />
            </div>
            <div class="container14">
                <img src="{{ asset('img/section/tiga/other/logo/ketanputih.webp') }}" class="etc" />
                <div class="text-section">
                    <h2>Beras Ketan Putih</h2>
                    <p>
                        @lang('users.hometigaop2')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/other/container/ketanputih.webp') }}" alt="" class="others"
                    style="top: -30px;" />
            </div>
            <div class="container15">
                <img src="{{ asset('img/section/tiga/other/logo/tepungumbi.webp') }}" class="etc"
                    style="top: 47%;" />
                <div class="text-section">
                    <h2>Tepung Pati Garut</h2>
                    <p>
                        @lang('users.hometigaop3')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/other/container/tepungumbi.webp') }}" alt="" class="others"
                    style="top: -40px;" />
            </div>
            <div class="container16">
                <img src="{{ asset('img/section/tiga/other/logo/ladaputih.webp') }}" class="etc" />
                <div class="text-section">
                    <h2>Lada Putih Bubuk Organik MD 75Gr</h2>
                    <p>
                        @lang('users.hometigaop4')
                    </p>
                </div>
                <img src="{{ asset('img/section/tiga/other/container/ladaputih.webp') }}" alt="" class="others"
                    style="top: -40px;" />
            </div>
        </div>
        <div class="discover">
            <a href="{{ route('home') }}" class="more" style="text-decoration: none">@lang('users.hometigadiscover')</a>
        </div>
    </section>
    <!-- Popular Section -->

    <!-- Carousel -->
    <section class="five" id="lima">
        <div class='e-commerce'>
            <ul>
                <li>
                    <a title="Tokopedia" href="https://www.tokopedia.com/berasorganikmd"><img width="128"
                            alt="Tokopedia"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Tokopedia.svg/128px-Tokopedia.svg.png"></a>
                </li>
                <li>
                    <a title="Bukalapak" href="https://www.bukalapak.com/md-organic-official"><img width="128"
                            alt="Bukalapak"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Bukalapak_%282020%29.svg/128px-Bukalapak_%282020%29.svg.png">
                    </a>
                </li>
                <li>
                    <a title="Shopee" href="https://shopee.co.id/md_organik"><img width="128" alt="Shopee"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Shopee.svg/128px-Shopee.svg.png"></a>
                </li>
                <li>
                    <a title="Lazada" href="https://www.lazada.co.id/shop/md-organic-shop"><img width="128"
                            alt="Lazada"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Lazada_%282019%29.svg/128px-Lazada_%282019%29.svg.png"></a>
                </li>
                <li>
                    <a title="Blibli"
                        href="https://www.blibli.com/merchant/umkm-md-organic/UMM-60222?pickupPointCode=PP-3071353"><img
                            width="128" alt="Blibli" src="assets/blibli.svg"></a>
                </li>
                <li>
                    <a title="Tokopedia" href="https://www.tokopedia.com/berasorganikmd"><img width="128"
                            alt="Tokopedia"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Tokopedia.svg/128px-Tokopedia.svg.png"></a>
                </li>
                <li>
                    <a title="Bukalapak" href="https://www.bukalapak.com/md-organic-official"><img width="128"
                            alt="Bukalapak"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Bukalapak_%282020%29.svg/128px-Bukalapak_%282020%29.svg.png">
                    </a>
                </li>
                <li>
                    <a title="Shopee" href="https://shopee.co.id/md_organik"><img width="128" alt="Shopee"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Shopee.svg/128px-Shopee.svg.png"></a>
                </li>
                <li>
                    <a title="Lazada" href="https://www.lazada.co.id/shop/md-organic-shop"><img width="128"
                            alt="Lazada"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Lazada_%282019%29.svg/128px-Lazada_%282019%29.svg.png"></a>
                </li>
                <li>
                    <a title="Blibli"
                        href="https://www.blibli.com/merchant/umkm-md-organic/UMM-60222?pickupPointCode=PP-3071353"><img
                            width="128" alt="Blibli" src="assets/blibli.svg"></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- Carousel -->

    {{-- Counter Stats --}}
    <section class="counter-stats" id="counterSection">
        <div class="counter">
            <h2><span class="count" id="islands">0</span> @lang('users.homeco1')</h2>
        </div>
        <div class="counter">
            <h2><span class="count" id="products">0</span> @lang('users.homeco2')</h2>
        </div>
        <div class="counter">
            <h2><span class="count" id="resellers">0</span> @lang('users.homeco3')</h2>
        </div>
        <div class="counter">
            <h2><span class="count" id="rating">0.0</span> @lang('users.homeco4')</h2>
        </div>
    </section>
    {{-- Counter Stats --}}

    {{-- Article Section --}}
    {{-- <section class="four" id="empat">
        <div class="article-title">
            <h3>@lang('users.homeempat')</h3>
        </div>
        <div class="article-body d-flex flex-column flex-sm-row pt-5 pt-sm-2 mx-3 px-sm-2">
            <div class="article-card col-12 col-md-6 mb-5 mb-sm-0 me-sm-2">
                @if ($featured)
                    <a href="{{ route('article') }}" class=" text-decoration-none">
                        <div class="card d-flex flex-column p-0">
                            <div class="article-img col-12">
                                @if ($featured->gambar)
                                    <img src="{{ Storage::url($featured->gambar) }}" class="card-img"
                                        alt="Article Image">
                                @else
                                    <img src="default-image.jpg" class="card-img" alt="Article Image">
                                @endif
                            </div>
                            <div class="article-content d-flex flex-column col-12 text-left p-2">
                                <h5 class="article-title" style="color: #65b033;">{{ Str::limit($featured->judul, 60) }}
                                </h5>
                                <p class="article-text p-0 m-0">{!! Str::limit($featured->content, 115) !!}</p>
                            </div>
                        </div>
                    </a>
                @endif
            </div>
            <div class="article-card col-12 col-md-6">
                @if ($latest)
                    <a href="{{ route('article') }}" class=" text-decoration-none">
                        <div class="card d-flex flex-column p-0">
                            <div class="article-img col-12">
                                @if ($latest->gambar)
                                    <img src="{{ Storage::url($latest->gambar) }}" class="card-img" alt="Article Image">
                                @else
                                    <img src="default-image.jpg" class="card-img" alt="Article Image">
                                @endif
                            </div>
                            <div class="article-content d-flex flex-column col-12 text-left p-2">
                                <h5 class="article-title" style="color: #65b033;">{{ Str::limit($latest->judul, 60) }}
                                </h5>
                                <p class="article-text p-0 m-0">{!! Str::limit($latest->content, 115) !!}</p>
                            </div>
                        </div>
                    </a>
                @endif
            </div>
        </div>
    </section> --}}
    {{-- Article Section --}}

    <!-- Video -->
    <section class="videow">
        <iframe class="vid" width="560" height="315"
            src="https://www.youtube-nocookie.com/embed/Eo8ODT5FADM?si=QIu6Is8QocUw9PQb" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </section>
    <!-- Video -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tabs Slider in section three
            const tabs = document.querySelectorAll('.tabs input[type="radio"]');
            const containers = document.querySelectorAll('.rice, .natural, .seasoning, .snack, .other');

            tabs.forEach((tab, index) => {
                tab.addEventListener('change', () => {
                    containers.forEach((container) => {
                        container.classList.remove('active');
                    });
                    containers[index].classList.add('active');
                });
            });

            // Trigger the 'change' event on the first radio input element with the id="rice"
            document.getElementById('rice').dispatchEvent(new Event('change'));

            // Mengatur nilai awal
            let islandsCount = 0;
            let productsCount = 0;
            let resellersCount = 0;
            let ratingCount = 0;
            let animationStarted = false;

            // Nilai target
            const targetIslands = 100;
            const targetProducts = 5000;
            const targetResellers = 10;
            const targetRating = 4.9;

            // Fungsi untuk mengupdate nilai pada tampilan
            function updateCounts() {
                document.getElementById('islands').textContent = islandsCount;
                if (productsCount >= targetProducts) {
                    document.getElementById('products').textContent = '50rb+';
                } else {
                    document.getElementById('products').textContent = productsCount;
                }
                document.getElementById('resellers').textContent = resellersCount;
                document.getElementById('rating').textContent = ratingCount.toFixed(1);
            }

            // Fungsi untuk menambah nilai pada setiap counter
            function countUp() {
                // Pastikan nilai tidak melebihi nilai target
                islandsCount = Math.min(islandsCount + 1, targetIslands);
                productsCount = Math.min(productsCount + 31, targetProducts);
                resellersCount = Math.min(resellersCount + 1, targetResellers);
                ratingCount = Math.min(ratingCount + 0.1, targetRating);

                // Perbarui tampilan
                updateCounts();

                // Jika masih ada nilai yang belum mencapai target, panggil fungsi countUp() lagi
                if (
                    islandsCount < targetIslands ||
                    productsCount < targetProducts ||
                    resellersCount < targetResellers ||
                    ratingCount < targetRating
                ) {
                    requestAnimationFrame(countUp);
                }
            }

            // Fungsi untuk mendeteksi apakah elemen masuk dalam viewport
            function isInViewport(element) {
                var bounding = element.getBoundingClientRect();
                return (
                    bounding.top >= 0 &&
                    bounding.left >= 0 &&
                    bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            // Fungsi untuk memulai animasi saat elemen masuk dalam viewport
            function startAnimationIfInView() {
                var section = document.getElementById('counterSection');
                if (isInViewport(section) && !animationStarted) {
                    // Memulai animasi saat section masuk dalam viewport
                    countUp();
                    animationStarted = true; // Tandai bahwa animasi telah dimulai
                }
            }

            // Mulai mengamati saat pengguna menggulir halaman
            window.addEventListener('scroll', startAnimationIfInView);

            // Panggil fungsi startAnimationIfInView() saat halaman dimuat untuk mengecek apakah section berada dalam viewport secara awal
            startAnimationIfInView();
        });
    </script>
@endsection
