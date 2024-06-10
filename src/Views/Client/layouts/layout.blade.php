<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Spartan", sans-serif;
        }

        /* Global Styles */

        h1 {
            font-size: 50px;
            line-height: 64px;
            color: #222;
        }

        h2 {
            font-size: 46px;
            line-height: 54px;
            color: #222;
        }

        h4 {
            font-size: 20px;
            color: #222;
        }

        h6 {
            font-weight: 700;
            font-size: 12px;
        }

        p {
            font-size: 16px;
            color: #465b52;
            margin: 15px 0 20px 0;
        }

        .section-p1 {
            padding: 40px 80px;
        }

        .section-m1 {
            margin: 40px 0;
        }

        button.normal {
            font-size: 14px;
            font-weight: 600;
            padding: 15px 30px;
            background-color: #fff;
            border-radius: 4px;
            color: #000;
            cursor: pointer;
            border: none;
            outline: none;
            transition: 0.2s;
        }

        body {
            width: 100%;
        }

        /*  Header start  */
        #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 80px;
            background: #e3e6f3;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
            z-index: 999;
            position: sticky;
            top: 0;
            left: 0;
        }

        #navbar {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #navbar li {
            list-style: none;
            padding: 0 20px;
            position: relative;
        }

        #navbar li a {
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            color: #1a1a1a;
            transition: 0.3s ease;
        }

        #navbar li a:hover,
        #navbar li a.active {
            color: #088178;
        }

        #navbar li a.active::after,
        #navbar li a:hover::after {
            content: "";
            width: 30%;
            height: 2px;
            background: #088178;
            position: absolute;
            bottom: -4px;
            left: 20px;
        }

        /*  Home page  */
        #hero {
            background-image: url("img/hero4.png");
            height: 90vh;
            width: 100%;
            background-size: cover;
            background-position: top 25% right 0;
            padding: 0 80px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
        }

        #hero h4 {
            padding-bottom: 15px;
        }

        #hero h1 {
            color: #088178;
        }

        #hero button {
            background-image: url(img/button.png);
            background-color: transparent;
            color: #088178;
            border: 0;
            padding: 14px 80px 14px 65px;
            background-repeat: no-repeat;
            font-weight: 700;
            font-size: 15px;
        }

        #feature .fe-box {
            width: 180px;
            text-align: center;
            padding: 25px 15px;
            box-shadow: 20px 20px 34px rgba(0, 0, 0, 0.03);
            border: 1px solid #cce7d0;
            border-radius: 4px;
            margin: 15px 0;
        }

        #feature .fe-box:hover {
            box-shadow: 10px 10px 54px rgba(70, 62, 221, 0.1);
        }

        #feature .fe-box h6 {
            display: inline-block;
            padding: 9px 8px 6px 8px;
            line-height: 1;
            border-radius: 4px;
            color: #088178;
            background-color: #fddde4;
        }

        #feature .fr-box h6 {
            width: 100%;
            margin-bottom: 10px;
        }

        #feature {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        #feature .fr-box:nth-child(2) h6 {
            background-color: #fddde4;
        }

        #feature .fr-box:nth-child(3) h6 {
            background-color: #d1e8f2;
        }

        #feature .fr-box:nth-child(4) h6 {
            background-color: #cdd4f8;
        }

        #feature .fr-box:nth-child(5) h6 {
            background-color: #f6dbf6;
        }

        #feature .fr-box:nth-child(6) h6 {
            background-color: #fff2e5;
        }

        #product1 {
            text-align: center;
        }

        #product1 .pro-container {
            display: flex;
            justify-content: space-between;
            padding-top: 20px;
            flex-wrap: wrap;
        }

        #product1 .pro {
            width: 23%;
            padding: 10px 12px;
            min-width: 250px;
            border: 1px solid #cce7d0;
            border-radius: 20px;
            cursor: pointer;
            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
            margin: 15px 0;
            transition: 0.2s ease;
            position: relative;
        }

        #product1 .pro:hover {
            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
        }

        #product1 .pro img {
            width: 100%;
            border-radius: 20px;
        }

        #product1 .pro .des {
            text-align: start;
            padding: 10px 0;
        }

        #product1 .pro .des span {
            color: #606063;
            font-size: 12px;
        }

        #product1 .pro .des h5 {
            padding-top: 7px;
            color: #1a1a1a;
            font-size: 14px;
        }

        #product1 .pro .des i {
            font-size: 12px;
            color: rgba(243, 181, 25);
        }

        #product1 .pro .des h4 {
            padding-top: 7px;
            font-size: 15px;
            font-weight: 700;
            color: #088178;
        }

        #product1 .pro .cart {
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 50px;
            background-color: #e8f6ea;
            font-weight: 700;
            color: #088178;
            border: 1px solid #cce7d0;
            position: absolute;
            bottom: 20px;
            right: 10px;
        }

        #banner {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-image: url("img/banner/b2.jpg");
            width: 100%;
            height: 40vh;
            background-color: cover;
            background-position: center;
        }

        #banner h4 {
            color: #fff;
            font-size: 16px;
        }

        #banner h2 {
            color: #fff;
            font-size: 30px;
            padding: 10px 0;
        }

        #banner h2 span {
            color: #ef3636;
        }

        #banner button:hover {
            background: #088178;
            color: #fff;
        }

        #sm-banner {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        #sm-banner .banner-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            text-align: center;
            background-image: url("img/banner/b17.jpg");
            min-width: 580px;
            height: 50vh;
            background-color: cover;
            background-position: center;
            padding: 30px;
        }

        #sm-banner .banner-box2 {
            background-image: url("img/banner/b10.jpg");
        }

        .banner-box h4 {
            color: #fff;
            font-size: 20px;
            font-weight: 300;
        }

        .banner-box h2 {
            color: #fff;
            font-size: 28px;
            font-weight: 800;
        }

        #sm-banner span {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            padding-bottom: 15px;
        }

        button.white {
            font-size: 13px;
            font-weight: 600;
            padding: 11px 18px;
            background-color: transparent;
            border-radius: 4px;
            border: 1px solid #fff;
            color: #fff;
            cursor: pointer;
            outline: none;
            transition: 0.2s;
        }

        #sm-banner .banner-box:hover button {
            background: #088178;
            border: 1px solid #088178;
        }

        #banner3 .banner-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            background-image: url("img/banner/b7.jpg");
            min-width: 30%;
            height: 30vh;
            background-color: cover;
            background-position: center;
            padding: 20px;
            background-position: center;
            margin-bottom: 20px;
        }

        #banner3 .banner-box2 {
            background-image: url("img/banner/b4.jpg");

        }

        #banner3 .banner-box3 {
            background-image: url("img/banner/b18.jpg");

        }

        #banner3 h2 {
            color: #fff;
            font-weight: 900;
            font-size: 22px;
        }

        #banner3 h3 {
            color: #ec544e;
            font-weight: 800;
            font-size: 15px;
        }

        #banner3 {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 0 80px;
        }

        #newsletter {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            align-items: center;
            background-image: url("img/banner/b14.png");
            background-repeat: no-repeat;
            background-position: 20% 30%;
            background-color: #041e42;
        }

        #newsletter h4 {
            font-size: 22px;
            font-weight: 700;
            color: #fff;
        }

        #newsletter p {
            font-size: 14px;
            font-weight: 600;
            color: #818ea0;
        }

        #newsletter p span {
            color: #ffbd27;
        }

        #newsletter .form {
            display: flex;
            width: 40%;
        }

        #newsletter input {
            height: 3.125rem;
            padding: 0 1.25em;
            font-size: 14px;
            width: 100%;
            border: 1px solid transparent;
            border-radius: 4px;
            outline: none;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        #newsletter button {
            background-color: #088178;
            color: #fff;
            white-space: nowrap;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        footer {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        footer .col {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        footer .logo {
            margin-bottom: 30px;
        }

        footer h4 {
            font-size: 14px;
            padding-bottom: 20px;
        }

        footer p {
            font-size: 13px;
            margin: 0 0 8px;
        }

        footer a {
            font-size: 13px;
            text-decoration: none;
            color: #222;
            margin-bottom: 10px;
        }

        footer .follow {
            margin-top: 20px;
        }

        footer .follow i {
            color: #465b52;
            padding-right: 4px;
            cursor: pointer;
        }

        footer .install .row img {
            border: 1px solid #088178;
            border-radius: 6px;
        }

        footer .install img {
            margin: 10px 0 15px 0;
        }

        footer .follow i:hover,
        footer a:hover {
            color: #088178;
        }

        footer .copyright {
            width: 100%;
            text-align: center;
        }

        /* Start Media Query */
        @media (max-width: 799px) {
            #navbar {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: flex-start;
                position: fixed;
                top: 0;
                right: -300px;
                height: 100vh;
                width: 300px;
                background-color: #e3e6f3;
                box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
                padding: 80px 0 0 10px;
            }

            #navbar li {
                margin-bottom: 25px;
            }
        }


        /*----------  shop page  ------------------*/
        #page-header {
            background-image: url(img/banner/b1.jpg);
            width: 100%;
            height: 40vh;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 14px;
        }

        #page-header h2,
        #page-header p {
            color: #fff;
        }

        #pagination {
            text-align: center;

        }

        #pagination a {
            text-decoration: none;
            background-color: #088178;
            padding: 15px 20px;
            border-radius: 4px;
            color: #fff;
            font-weight: 600;
        }

        #pagination a i {
            font-size: 16px;
            font-weight: 600;
        }

        /*  Single Product */
        #prodetails {
            display: flex;
            margin-top: 20px;
        }

        #prodetails .single-pro-image {
            width: 40%;
            margin-right: 50px;
        }

        .small-img-group {
            display: flex;
            justify-content: space-between;
        }

        .small-img-col {
            flex-basis: 24%;
            cursor: pointer;
        }

        #prodetails .single-pro-details {
            width: 50%;
            padding-top: 30px;
        }

        #prodetails .single-pro-details h4 {
            padding: 40px 0 20px 0;
        }

        #prodetails .single-pro-details h2 {
            font-size: 26px;
        }

        #prodetails .single-pro-details select {
            display: block;
            padding: 5px 10px;
            margin-bottom: 10px;
        }

        #prodetails .single-pro-details input {
            width: 50px;
            height: 47px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }

        #prodetails .single-pro-details input:focus {
            outline: none;
        }

        #prodetails .single-pro-details button {
            background-color: #088178;
            color: #fff;
        }

        #prodetails .single-pro-details span {
            line-height: 25px;
        }

        /*  Blog page */
        #page-header.blog-header {
            background-image: url(img/banner/b19.jpg);

        }

        #blog {
            padding: 150px 150px 0 150px;
        }

        #blog .blog-box {
            display: flex;
            align-items: center;
            width: 100%;
            position: relative;
            padding-bottom: 100px;
        }


        #blog .blog-img {
            width: 50%;
            margin-right: 40px;
        }

        #blog img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        #blog .blog-details {
            width: 50%;

        }

        #blog .blog-details a {
            text-decoration: none;
            font-size: 11px;
            color: #000;
            font-weight: 700;
            position: relative;
            transition: 0.3s;
        }

        #blog .blog-details a::after {
            /* continue reading ---- */
            content: "";
            width: 50px;
            height: 1px;
            background-color: #000;
            position: absolute;
            top: 4px;
            right: -60px;

        }

        #blog .blog-details a:hover {
            color: #088178;
        }

        #blog .blog-details a:hover::after {
            background-color: #088178;
        }

        #blog .blog-details h1 {
            position: absolute;
            top: -40px;
            left: 0;
            font-size: 70px;
            font-weight: 700;
            color: #c9cbce;
            z-index: -9;
        }

        /* About Page */
        #page-header.about-header {
            background-image: url(img/about/banner.png);
        }

        #about-head {
            display: flex;
            align-items: center;
        }

        #about-app {
            text-align: center;
        }

        #about-head img {
            width: 50%;
            height: auto;
        }

        #about-head div {
            padding-left: 40px;
        }

        #about-app .video {
            width: 70%;
            height: 100%;
            margin: 30px auto 0 auto;
        }

        #about-app .video video {
            width: 100%;
            height: 100%;
            border-radius: 20px;
        }

        /* contact page */
        #contact-details.section-p1 {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #contact-details .details {
            width: 40%;
        }

        #contact-details .details span,
        #from-details form span {
            font-size: 12px;
        }

        #contact-details .details h2,
        #from-details form h2 {
            font-size: 26px;
            line-height: 35px;
            padding: 20px 0;
        }

        #contact-details .details h3 {
            font-size: 16px;
            padding-bottom: 15px;
        }

        #contact-details .details li {
            list-style: none;
            display: flex;
            padding: 10px 0;
        }

        #contact-details .details li i {
            font-size: 14px;
            padding-right: 22px;
        }

        #contact-details .details li p {
            margin: 0;
            font-size: 14px;
        }

        #contact-details .map {
            width: 55%;
            height: 400px;
        }

        #contact-details .map iframe {
            width: 100%;
            height: 100%;
        }

        #from-details {
            display: flex;
            justify-content: space-between;
            margin: 30px;
            padding: 80px;
            border: 1px solid #e1e1e1;
        }

        #from-details form {
            width: 65%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        #from-details form input,
        #from-details form textarea {
            width: 100%;
            padding: 12px 15px;
            outline: none;
            margin-bottom: 20px;
            border: 1px solid #e1e1e1;
        }

        #from-details form button {
            background-color: #088178;
            color: #fff;
        }

        #from-details .people div {
            padding-bottom: 25px;
            display: flex;
            align-items: flex-start;
        }

        #from-details .people div img {
            width: 65px;
            height: 65px;
            object-fit: cover;
            margin-right: 15px;
        }

        #from-details .people div p {
            margin: 0;
            font-size: 13px;
            line-height: 25px;
        }

        #from-details .people div p span {
            display: block;
            font-weight: 600;
            font-size: 16px;
            color: #000;
        }

        /* Cart page */
        #cart table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            white-space: nowrap;
        }

        #cart table img {
            width: 70px;
        }

        #cart table td:nth-child(1) {
            width: 100px;
            text-align: center;
        }

        #cart table td:nth-child(2) {
            width: 150px;
            text-align: center;
        }

        #cart table td:nth-child(3) {
            width: 250px;
            text-align: center;
        }

        #cart table td:nth-child(4),
        #cart table td:nth-child(5),
        #cart table td:nth-child(6) {
            width: 150px;
            text-align: center;
        }

        #cart table td:nth-child(5) input {
            width: 70px;
            padding: 10px 5px 10px 15px;
        }

        #cart table thead {
            border: 1px solid #e2e9e1;
            border-left: none;
            border-right: none;
        }

        #cart table thead td {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 13px;
            padding: 18px 0;
        }

        #cart table tbody tr td {
            padding-top: 15px;
        }

        #cart table tbody td {
            font-size: 13px;
        }

        #cart-add {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        #coupon {
            width: 50%;
            margin-bottom: 30px;
        }

        #coupon h3,
        #subtotal h3 {
            padding-bottom: 15px;
        }

        #coupon input {
            padding: 10px 20px;
            outline: none;
            width: 60%;
            margin-right: 10px;
            border: 1px solid #e2e9e1;
        }

        #coupon button,
        #subtotal button {
            background-color: #088178;
            color: #fff;
        }

        #subtotal {
            width: 50%;
            margin-bottom: 30px;
            border: 1px solid #e2e9e1;
            padding: 30px;

        }

        #subtotal table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        #subtotal table td {
            width: 50%;
            border: 1px solid #e2e9e1;
            padding: 10px;
            font-size: 13px;
        }



        /*---------  Account   --------------*/
        #account-details.section-p1 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* tạo khoảng trống giữa 2 div*/

        }

        #account-details .account {
            width: 30%;
            height: 513px;
            box-shadow: 20px 20px 20px 30px rgba(0, 0, 0, 0.05);
        }

        #account-details .account2 {
            width: 67%;
            height: 513px;
            box-shadow: 20px 20px 20px 30px rgba(0, 0, 0, 0.05);
        }

        div {
            display: block;
        }

        .section-p1 {
            padding: 40px 80px;
        }

        #account-details .account li {
            list-style: none;
            display: flex;
            padding: 10px 0;
        }

        #account-details .account li i {
            font-size: 20px;
            padding-right: 22px;
        }



        /*trang người dùng*/
        #account-details.section-p1 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 40px 80px;
        }

        #account-details .account {
            width: 30%;
            height: 513px;
            /* Adjusted height to take full height */
            box-shadow: 20px 20px 20px 30px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        #account-details .account a img {
            max-width: 100%;
            /* Ensure the image doesn't exceed the container */
        }

        #account-details .account h3,
        #account-details .account h5 {
            margin: 10px 0;
        }

        #account-details .account hr {
            width: 100%;
            margin: 15px 0;
        }

        #account-details .account div ul {
            padding: 0;
            margin: 0;
        }

        #account-details .account li {
            list-style: none;
            display: flex;
            align-items: center;
            padding: 10px 0;
        }

        #account-details .account li i {
            font-size: 20px;
            margin-right: 12px;
            /* Adjusted margin for better spacing */
        }

        #account-details .account2 {
            width: 67%;
            height: 513px;
            /* Adjusted height to take full height */
            box-shadow: 20px 20px 20px 30px rgba(0, 0, 0, 0.05);
        }


        .account2 .box1 {

            width: 100%;
            height: auto;

        }

        .account2 {
            margin: 20px;

        }

        .box1 {
            display: flex;
            align-items: center;
        }

        .a_inpor_prod1,
        .a_inpor_prod2 {
            width: 50%;
            border: 2px solid #818ea0;
            cursor: pointer;
            margin: 30px 20px;
            text-decoration: none;
        }

        .a_inpor_prod2:hover {
            background-color: #088178;
            transition: 1s;
        }

        .a_inpor_prod1:hover {
            background-color: #088178;
            transition: 1s;

        }


        .info_prod,
        .info_prod1 {
            display: flex;
            align-items: center;
            padding-left: 30px;

        }

        .info_prod span,
        .info_prod1 span {
            padding-right: 20px;
        }

        .box2 {
            width: 100%;
            height: auto;
        }

        .box2_flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: auto;
            box-shadow: 20px 20px 20px 30px rgba(0, 0, 0, 0);
            margin: 0px 20px;
            background-color: #e1e7ed;
            /*sua phan chua co san pham*/

        }

        .title_box2,
        .body_box2 {

            margin: 0px 20px;

        }

        .box2_flex .body_box2 a {
            text-decoration: none;
            color: #000;

        }

        .box2_flex .body_box2 {
            border: 2px solid #818ea0;
            margin: 10px;
            padding: 20px;


        }

        .box2_flex .body_box2:hover {
            background-color: #088178;
            transition: 1s;

        }

        .account box-icon {
            margin: 15px;
        }

        .div_check_empty_cart {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        /* css tất cả về phần thông tin của khách hàng */
        .home_acc {
            overflow: auto;
            height: 315px;
            overscroll-behavior: contain;
        }

        .info_user {
            display: flex;
            flex-direction: column;
            margin: 15px 20px;
        }

        .info_user label {
            font-size: 18px;
            margin: 3px 0px;
        }

        .info_user input {
            width: 100%;
            border-radius: 0px;
            font-size: 17px;
        }

        .update_pass {
            display: flex;
        }

        .pass {
            display: flex;
            flex-direction: column;
        }

        .title_updata_pass {
            border-bottom: 1px solid;
            margin: 0px 20px;
        }

        .update_pass {
            margin: 10px 20px;
        }

        .button_update_pass {
            margin: 0px 20px;
        }

        .button_update_pass button {
            background-color: #088178;
            color: white;
        }

        .choose_start {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    <section id="header">
        <a href="#"><img src="{{ asset('/public/img/logo.png') }}" class="logo" alt="logo"></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li><a href="account.html"><i class="fa-solid fa-user"></i></a></li>
                <li><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
            </ul>
        </div>
    </section>
    @yield('content')
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> 290 Xuan Dinh, BAc Tu Liem, Ha Noi</p>
            <p><strong>Phone: </strong> +98 396151784/ +98 0362755194</p>
            <p><strong>Hours: </strong> 10:00 - 18:00, Mon-Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-pinterest-p"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Term & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            @2021, Tech2ect - HTML CSS Ecommerce Template
        </div>
    </footer>
</body>

</html>