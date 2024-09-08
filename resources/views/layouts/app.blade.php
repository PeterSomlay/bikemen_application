<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <style>
            body{
                background-color: #16A085;
            }
            .item1 { grid-area: header; background-color: #ffffff; height: 60px;}
            .item2 { grid-area: menu;  background-color: #212529; }
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
        </style>
    </head>
    <body>
        <div class="grid-container">
            <div class="item1">
                <a href="/laravel_bikemen/public/">
                    <img src="../public/images/bikemen-logo-2.png" alt="Bikemen Logo" width="100px" height="55px">
                </a>
            </div>
            <div class="item2">
                <nav class="navbar">
                    <form class="container-fluid justify-content-start">
                        <a href="/laravel_bikemen/public/dialyIncome">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Napi Bevétel</button>
                        </a>
                        <a href="/laravel_bikemen/public/incomingWork">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Munkafelvétel</button>
                        </a>
                        <a href="/laravel_bikemen/public/registration">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Regisztráció</button>
                        </a>
                        <a href="/laravel_bikemen/public/repairs">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Javítások</button>
                        </a>
                        <a href="/laravel_bikemen/public/searches">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Keresések</button>
                        </a>
                        <a href="/laravel_bikemen/public/acquisition">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Beszerzés</button>
                        </a>
                        <a href="/laravel_bikemen/public/wholesalers">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Nagykereskedések</button>
                        </a>
                        <a href="/laravel_bikemen/public/dailyClosing">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Napi Zárás</button>
                        </a>
                        <a href="/laravel_bikemen/public/cashRegister">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Kassza</button>
                        </a>
                        <a href="/laravel_bikemen/public/statistics">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Statisztikák</button>
                        </a>
                        <a href="/laravel_bikemen/public/rank">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Beosztás</button>
                        </a>
                        <a href="/laravel_bikemen/public/reminders">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Emlékeztetők</button>
                        </a>
                        <a href="/laravel_bikemen/public/forTheAccountant">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Könyvelőnek</button>
                        </a>
                        <a href="/laravel_bikemen/public/debts">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Tartozások</button>
                        </a>
                        <a href="/laravel_bikemen/public/toolRequirement">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Szerszám igény</button>
                        </a>
                        <a href="/laravel_bikemen/public/programErrors">
                            <button class="btn btn-outline-success me-2 p-2 mb-2" type="button">Program hibák</button>
                        </a>
                    </form>
                    <form method="POST" action="{{ route('logout') }}">
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
