<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <style>
            body{
                background-color: #111827;
            }
            .item1 { grid-area: header; background-color: #ffffff; height: 60px; padding-top: 3px;}
            .item2 { grid-area: menu;  background-color: #FFD700; }
            .item3 { grid-area: main; background-color: #cfcdc9; height: 600px;}

            .grid-container {
                display: grid;
                grid-template-areas:
                    'header header header header header header'
                    'menu menu menu menu menu menu'
                    'main main main main main main';
                padding-top: 50px;
                padding-left: 50px;
                padding-right: 50px;
            }

            .grid-container > div {
                text-align: center;
                font-size: 30px;
            }
            .btn{
                font-weight: bold;
            }
            .dan{
                margin-left: 89%;
                margin-top: -55px;
            }
        </style>
    </head>
    <body>
        <div class="grid-container">
            <div class="item1">
                <a href="dashboard">
                    <img class="mainimg" src="../public/images/bikemen-logo-3.png" alt="Bikemen Logo" width="450px" height="55px">
                </a>
            </div>
            <div class="item2">
                <nav class="navbar">
                    <form class="container-fluid justify-content-start">
                        <a href="daily_income">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Napi Bevétel</button>
                        </a>
                        <a href="worksheet">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Munkafelvétel</button>
                        </a>
                        <a href="registration">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Regisztráció</button>
                        </a>
                        <a href="repairs">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Javítások</button>
                        </a>
                        <a href="searches">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Keresések</button>
                        </a>
                        <a href="acquisition">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Beszerzés</button>
                        </a>
                        <a href="wholesalers">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Nagykereskedések</button>
                        </a>
                        <a href="daily_closing">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Napi Zárás</button>
                        </a>
                        <a href="cash_register">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Kassza</button>
                        </a>
                        <a href="statistics">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Statisztikák</button>
                        </a>
                        <a href="rank">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Beosztás</button>
                        </a>
                        <a href="reminders">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Emlékeztetők</button>
                        </a>
                        <a href="accountant">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Könyvelőnek</button>
                        </a>
                        <a href="debts">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Tartozások</button>
                        </a>
                        <a href="tools">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Szerszám igény</button>
                        </a>
                        <a href="errors">
                            <button class="btn btn-outline-dark me-2 p-2 mb-2" type="button">Program hibák</button>
                        </a>
                    </form>
                    <form class="dan" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            <button class="btn btn-outline-danger me-2 p-2 mb-2" type="button">{{ __('Kilépés') }}</button>
                        </x-responsive-nav-link>
                    </form>
                </nav>
            </div>
            <div class="item3">@yield('content')</div>
        </div>
    </body>
</html>
