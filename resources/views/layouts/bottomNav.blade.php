<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="/dashboard" class="item {{ request()->is('dashboard') ? 'active' : '' }}">
        <div class="col">
            <ion-icon name="home-outline" role="img" class="md hydrated" aria-label="file tray full outline"></ion-icon>
            <strong>Home</strong>
        </div>
    </a>
    <a href="/editprofile" class="item {{ request()->is('editprofile') ? 'active' : '' }}">
        <div class="col">
            <ion-icon name="person-outline"></ion-icon>
            <strong>Update Profile</strong>
        </div>
    </a>
    <a href="/presensi/create" class="item {{ request()->is('presensi/create') ? 'active' : '' }}">
        <div class="col">
            <ion-icon name="location-outline" role="img" class="md hydrated" aria-label="add outline"></ion-icon>
            <strong>Halaman Absensi</strong>
        </div>
    </a>
    <a href="/presensi/histori" class="item {{ request()->is('presensi/histori') ? 'active' : '' }}">
        <div class="col">
            <ion-icon name="document-text-outline" role="img" class="md hydrated"
                aria-label="document text outline"></ion-icon>
            <strong>Histori Absensi</strong>
        </div>
    </a>
    <a href="/proseslogout" class="item {{ request()->is('proseslogout') ? 'active' : '' }}">
    <div class="col">
            <ion-icon name="power-outline" role="img" class="md hydrated"
                aria-label="power-outline"></ion-icon>
            <strong>Log Out</strong>
        </div>
    </a>
</div>
