<x-layout>
    <nav class="navbar navbar-expand-lg" style="background-color: #90E0EF";>
           <div class="container-fluid">
            <a href="/student" class="text-decoration-none fs-3">
                <img src="/storage/{{ Auth::guard('student')->user()->thumbnail }}" alt="logo" 
                style="width:50px;height:50px" class="rounded-circle">
                <span class="text-secondary"> <img src="/img/welcome.png" alt="" style="width:50px;height:50px"> {{ Auth::guard('student')->user()->name }}</span>
                <img src="/img/welcome.png" alt="" style="width:50px;height:50px"></a>
               <div class="d-flex">
               <a href="/student/learningSubjects" class="nav-link ps-2">
                   <img src="/img/knowledge.png" alt="" style="width:30px;height:30px">
               Learning Subjects</a>
               <a href="/student/attendance" class="nav-link ps-2">
                   <img src="/img/report.png" alt="" style="width:30px;height:30px">
                Attendance</a>
                  <a href="/student/overallGPA" class="nav-link ps-2">
                    <img src="/img/summa-cum-laude.png" alt="" style="width:30px;height:30px">
                Overall GPA</a>
                   <a href="/student/notice" class="nav-link ps-2">
                    <img src="/img/email.png" alt="" style="width:30px;height:30px">
                Notice</a>
               </div>
           
           </div>
       </nav> 
       {{$slot}}
   </x-layout>