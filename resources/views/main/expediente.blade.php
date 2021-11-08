<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expediente</title>

    <link rel="stylesheet" href="{{ asset('css/SidebarEstilos.css') }}">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>


</head>

<body >
    <div class="sidebar ">
        <div class="logo-details">
            <i class='bx bx-user icon'></i>
            <div class="logo_name">{{ auth()->user()->name }}</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{route('main.expedientes')}}" style="{{ request()->routeIS('main.expedientes') ? 'background:#fff' : '' }}">
                    <i class='bx bx-folder'
                        style="{{ request()->routeIS('main.expedientes') ? 'color:#000' : '' }}"></i>
                    <span class="links_name"
                        style="{{ request()->routeIS('main.expedientes') ? 'color:#000' : '' }}">Expedientes</span>
                </a>
                <span class="tooltip">Expedientes</span>
            </li>
            <li>
                <a  href="{{route('main.notificaciones')}}">
                    @if(count(auth()->user()->unreadNotifications))
                        <i style="color: orange"  class='bx bxs-bell bx-tada '></i>

                    @else
                        <i class='bx bxs-bell '></i>
                    @endif

                    <span class="links_name">Notificaciones: {{count(auth()->user()->unreadNotifications)}}</span> </span>

                </a>
                <span class="tooltip">Notificaciones: {{count(auth()->user()->unreadNotifications)}}</span>
            </li>


            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                    tabindex="-1" id="user-menu-item-2"
                    onclick="event.preventDefault();this.closest('form').submit();">
                        <i class='bx bx-log-out'></i>
                        <span class="links_name">Salir</span>
                    </a>
                </form>
            </li>



        </ul>
    </div>

    <section class="home-section">

        <div class="text">Sistema de Gestion de Expedientes</div>

        <div class="body-section">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Nro.</th>
                        <th>Fecha de Ingreso</th>
                        <th>Proceso</th>
                        <th>Tribunal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($result as $exp)
                        <tr {{-- class="animate__animated animate__lightSpeedInRight" --}}>
                            <td>{{ $exp->NroExpediente }}</td>
                            <td>{{ \Carbon\Carbon::parse($exp->create_at)->format('d-m-Y') }}</td>
                            <td>{{ $exp->proceso }}</td>
                            <td>{{ $exp->tribunal }}</td>
                            <td><a href="{{ route('admin.home', $exp) }}" class="boton">Ver</a></td>


                        </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

    </section>




    {{-- Script --}}
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");


        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }

    </script>

</body>

</html>
