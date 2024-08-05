<x-layout>
 <nav class="navbar navbar-expand-lg" style="background-color: #90E0EF";>
        <div class="container-fluid">
            <span class="navbar-brand my-0">
                <img src="/img/logo_processed.jpg" alt="logo" width="30px" height="30px" class="ms-2">
            Admin
           </span>
            <div class="d-flex">
            <a href="/staff/studentLists" class="nav-link ps-2">
                <img src="/img/candidate.png" alt="" style="width:30px;height:30px">
            Student Lists</a>
            <a href="/staff/notice" class="nav-link ps-2">
                <img src="/img/mood-board.png" alt="" style="width:30px;height:30px">
               Announce Notice</a>
            </div>
        
        </div>
    </nav> 
    {{$slot}}
</x-layout>