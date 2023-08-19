<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="{{ route('series.index') }}">Home</a>
    <a href="{{ route('series.create') }}">Nova Série</a>
</div>
<div id="main">
    <button class="openbtn" onclick="openNav()">☰</button>
    {{ $slot }}
</div>

<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>
