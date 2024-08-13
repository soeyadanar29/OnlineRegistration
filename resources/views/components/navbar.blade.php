<x-layout>
 <nav class="navbar navbar-expand-lg" style="background-color: #90E0EF";>
        <div class="container-fluid">
            <span class="navbar-brand my-0">
                <img src="/img/logo_processed.jpg" alt="logo" width="50px" height="50px">
                ကျောင်းသားရေးရာ
           </span>
            <div class="d-flex">
            <a href="/staff/studentLists" class="nav-link">
                <img src="/img/check.png" alt="" style="width:35px;height:35px"
                 data-bs-toggle="tooltip" data-bs-placement="top" title="ကျောင်းအပ်ကျောင်းသားများ">
            </a>
            <a href="/staff/enrollStudents" class="nav-link">
                <img src="/img/shortlist.png" alt="" style="width:35px;height:35px"
                data-bs-toggle="tooltip" data-bs-placement="top" title="ကျောင်းအပ်စီစစ်ပြီးကျောင်းသား">
            </a>
            <a href="/staff/firstYearStudents" class="nav-link">
                <img src="/img/requirements.png" alt="" style="width:35px;height:35px"
                data-bs-toggle="tooltip" data-bs-placement="top" title="ဝင်ခွင့်ရပထမနှစ် ကျောင်းသား">
            </a>
            <a href="/staff/moneyManagement" class="nav-link">
                <img src="/img/price-list.png" alt="" style="width:35px;height:35px"
                data-bs-toggle="tooltip" data-bs-placement="top" title="ကျောင်းဝင်ကြေး သက်မှတ်ရန်">
            </a>
            <a href="/staff/subjectManagement" class="nav-link">
                <img src="/img/text-books.png" alt="" style="width:35px;height:35px"
                data-bs-toggle="tooltip" data-bs-placement="top" title="ဘာသာရပ်များ သက်မှတ်ရန်">
            </a>
            <a href="/staff/notice" class="nav-link">
                <img src="/img/notice.png" alt="" style="width:35px;height:35px"
                data-bs-toggle="tooltip" data-bs-placement="top" title="ကြေငြာစာများ ထုတ်ပြန်ရန်">
             
            </a>
            </div>
        
        </div>
    </nav> 
    {{$slot}}
</x-layout>