<div id="mySidebar" class="sidebar d-flex">
    <a href="javascript:void(0)" class="closebtn meus-links" onclick="closeNav()">×</a>
    <a id="btn-side-home" class="meus-links" href="{{ route('series.index') }}">Home</a>
    @auth()
        <a href="{{ route('logout') }}" class="btn btn-outline-danger align-self-end mb-5">Sair</a>
    @endauth

    @guest
        <a href="{{ route('login') }}" class="btn btn-success align-self-end mb-5">login</a>
    @endguest
</div>
<div id="main">
    <button class="openbtn" onclick="openNav()">☰</button>
    {{ $slot }}
</div>

<script>
    currentSelected();
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
    function disableAnchor(idMyAnchor) {
        let anchor = document.getElementById(idMyAnchor)
        anchor.classList.remove('active-personalized')
        anchor.classList.add('meus-links')
    }
    function enableAnchor(idMyAnchor) {
        let anchor = document.getElementById(idMyAnchor)
        anchor.classList.remove('meus-links')
        anchor.classList.add('active-personalized')
    }
    function currentSelected() {
        const currentUrl = window.location.href;
        const currentDirectoryArray = currentUrl.split('/');
        const positionArray = currentDirectoryArray.length - 1;
        const currentDirectory = currentDirectoryArray[positionArray];

        if (currentDirectory === 'series') {
            enableAnchor('btn-side-home');
        } else {
            disableAnchor('btn-side-home');
        }
    }
</script>
