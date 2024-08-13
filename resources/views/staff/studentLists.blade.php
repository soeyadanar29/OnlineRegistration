
<x-layout>
 <x-navbar>

  <div class="d-flex">
    <img src="/img/check.png" alt="" style="width:40px;height:40px" class="ms-2 mt-2">
        <h3 class="ms-2 mt-2">ကျောင်းအပ်ထားသော ကျောင်းသားများ</h3>
        <span class="m-3 justify-content-end">
        <form action="/search" method="GET">
          <div class="d-flex">
           <input type="text"  class="form-control me-2" name="search" placeholder="search..." value="{{isset($search) ? $search : ''}}">
            <button type="submit" class="btn btn-primary animate__animated animate__flash me-2">search</button>
          </div>
      </span>
    </div>
      <table class="table table-info table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col">သင်တန်းနှစ်</th>
            <th scope="col">အထူးပြုဘာသာ</th>
            <th scope="col">ခုံအမှတ်</th>
            <th scope="col">ကျောင်းသား/သူ အမည်</th>
            <th scope="col">အဘ အမည်</th>
            <th scope="col">အမိ အမည်</th>
            <th scope="col">ဓာတ်ပုံ</th>
            <th scope="col"></th>
          </tr>
        </thead>
      
        <tbody>
          @foreach ($students as $student)
          <tr><a href="">
            <th scope="row">{{$student->year->year}}</th>
            <td>{{$student->major->major}}</td>
            <td>{{$student->rollno}}</td>
            <td>{{$student->nameMyan}}</td>
            <td>{{$student->fatherNameMyan}}</td>
            <td>{{$student->motherNameMyan}}</td>
            <td><img src="/storage/{{$student->thumbnail}}" alt="" style="width:50px;height:50px"></td>
            <td> <a href="/staff/enrollStudents" class="btn btn-primary">လက်ခံမည်</a></td>
          </a>
          </tr>

          @endforeach
         
        </tbody>
      
      </table>
    </form>
    </x-navbar>
</x-layout>