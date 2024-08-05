
<x-layout>
 <x-navbar>
  <div class="d-flex">
    <img src="/img/candidate.png" alt="" style="width:40px;height:40px" class="mt-2">
        <h1 class="ms-2">Student Lists</h1>
        <span class="m-3 justify-content-end">
        <form action="/search" method="GET">
          <div class="d-flex">
           <input type="text"  class="form-control me-2" name="search" placeholder="search..." value="{{isset($search) ? $search : ''}}">
            <button type="submit" class="btn btn-primary animate__animated animate__flash me-2">Search</button>
          </div>
      </span>
    </div>
      <table class="table table-info table-hover">
        <thead>
          <tr>
            <th scope="col">သင်တန်းနှစ်</th>
            <th scope="col">အထူးပြုဘာသာ</th>
            <th scope="col">ခုံအမှတ်</th>
            <th scope="col">ကျောင်းသား/သူ အမည်</th>
            <th scope="col">အဘ အမည်</th>
            <th scope="col">အမိ အမည်</th>
            <th scope="col">မှတ်ပုံတင်အမှတ်</th>
            <th scope="col">အဘမှတ်ပုံတင်အမှတ်</th>
            <th scope="col">အမိမှတ်ပုံတင်အမှတ်</th>
            <th scope="col">မွေးသက္ကရာဇ်</th>
            <th scope="col">ဖုန်းနံပါတ်</th>
            <th scope="col">လက်ရှိနေထိုင်ရာ နေရာ</th>
            <th scope="col">ဓာတ်ပုံ</th>
          </tr>
        </thead>
      
        <tbody>
          @foreach ($students as $student)
          <tr><a href="">
            <th scope="row">{{$student->year->year}}</th>
            <td>{{$student->subject->subject}}</td>
            <td>{{$student->rollno}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->fatherName}}</td>
            <td>{{$student->motherName}}</td>
            <td>{{$student->nrc}}</td>
            <td>{{$student->fatherNrc}}</td>
            <td>{{$student->motherNrc}}</td>
            <td>{{$student->birth_date}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->address}}</td>
            <td><img src="/storage/{{$student->thumbnail}}" alt="" style="width:50px;height:50px"></td>
          </a>
          </tr>
          {{-- <tr>{{$student->years->year_id}}</tr>
          <tr>{{$student->subjects->subject_id}}</tr> --}}
          {{-- <tr>{{$student->}}</tr>
          <tr>{{$student->motherName}}</tr>
          <tr>{{$student->nrc}}</tr>
          <tr>{{$student->fatherNrc}}</tr>
          <tr>{{$student->motherNrc}}</tr> --}}
          @endforeach
        </tbody>
       
      </table>
    </form>
    </x-navbar>
</x-layout>