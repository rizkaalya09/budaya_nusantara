<!DOCTYPE HTML>
<html>

<head>
    <title>Alat Musik Daerah</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f1de;
            /* overflow-x: hidden; */
            overflow-y: scroll;
        }

        #header .user-logo {
            padding-top: 100px;
        }

        #nav img {
            width: 20px;
            height: 20px;
            vertical-align: middle;
            margin-right: 5px;
        }

        #nav h1 a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: inherit;
        }

        .container-province {
            margin: 0 auto;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .search-container {
            margin-top: 60px;
            width: 100%;
            max-width: 90vw;
        }

        #province-select {
            margin-right: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            font-size: 16px;
            color: #333;
            appearance: none;
            background-repeat: no-repeat;
            background-position: right 10px center;
            cursor: pointer;
            width: 100%;
        }

        #province-select:hover {
            background-color: #f0f0f0;
        }

        #province-select:focus {
            outline: none;
            border-color: #D2B48C;
        }

        #province-select option:hover {
            background-color: #D2B48C;
            color: #fff;
        }

        .province-dropdown {
            position: relative;
            width: 200px;
        }

        .province-dropdown::after {
            content: '\25BC';
            font-size: 14px;
            color: #555;
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
        }

        #search {
            flex-grow: 1;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        #search-btn {
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            background-color: #D2B48C;
            color: white;
            cursor: pointer;
        }

        #search-btn:hover {
            background-color: #D2B48C;
        }

        .province-info {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            width: 80vw;
        }

        .province-info img {
            max-width: 100%;
            max-height: 400px;
            min-height: 30vw;
            min-width: 30vw;
            border-radius: 5px;
        }

        .province-info {
            display: flex;
            align-items: center;
        }

        .info-content {
            display: flex;
            flex-direction: column;
        }

        .info-details {
            display: flex;
            align-items: center;
        }

        .info-details img {
            max-width: 50%;
            margin-right: 20px;
            /* Adjust margin as needed */
        }

        #province-description {
            flex-grow: 1;
        }

        .province-title {
            margin-bottom: 20px;
            text-align: center;
            font-size: 3rem;
        }
    </style>
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        @include('pages.components.header')
        @yield('header')
        <!-- Main Content -->
        @yield('content')
</body>

</html>