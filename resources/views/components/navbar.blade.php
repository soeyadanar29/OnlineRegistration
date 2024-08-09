<x-layout>
 <nav class="navbar navbar-expand-lg" style="background-color: #90E0EF";>
        <div class="container-fluid">
            <span class="navbar-brand my-0">
                <img src="/img/logo_processed.jpg" alt="logo" width="30px" height="30px" class="ms-2">
            ကျောင်းသားရေးရာ
           </span>
            <div class="d-flex">
            <a href="/staff/studentLists" class="nav-link ps-2">
                <img src="/img/candidate.png" alt="" style="width:30px;height:30px">
            ကျောင်းအပ် ကျောင်းသားများ</a>
            <a href="/staff/enrollStudents" class="nav-link ps-2">
                <img src="/img/candidate.png" alt="" style="width:30px;height:30px">
            ကျောင်းအပ်လက်ခံပြီး ကျောင်းသားများ</a>
            <a href="/staff/firstYearStudents" class="nav-link ps-2">
                <img src="/img/candidate.png" alt="" style="width:30px;height:30px">
            ဝင်ခွင့်ရ ပထမနှစ် ကျောင်းသားများ</a>
            <a href="/staff/notice" class="nav-link ps-2">
                <img src="/img/mood-board.png" alt="" style="width:30px;height:30px">
               ကြေငြာစာများ ထုတ်ပြန်ရန်
            </a>
            </div>
        
        </div>
    </nav> 
    {{$slot}}
</x-layout>