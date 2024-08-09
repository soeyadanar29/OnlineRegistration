<x-layout>
    <x-navbar/>
    <table class="table table-info table-hover">
        <thead>
          <tr>
            <th scope="col">စဉ်</th>
            <th scope="col">အမည်</th>
            <th scope="col">အဘ အမည်</th>
            <th scope="col">ဝင်ခွင့်အမှတ်စဉ်</th>
            <th scope="col">အမှတ်ပေါင်း</th>
            
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
           
          </a>
          </tr>

          @endforeach
         
        </tbody>
      
      </table>

</x-layout>