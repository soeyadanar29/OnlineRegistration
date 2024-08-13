<x-layout>
    <x-navbar/>
    @if (session('success'))
    <div class="alert alert-success justify-content-center">
        {{ session('success') }}
    </div>
  @endif
    <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card p-4 my-3 shadow-sm">
                <h5 class="text-secondary text-center lh-lg">
                ဘာသာရပ်များ ပြင်ဆင်ရန် <br>
                </h5>
                <form method="POST">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <label for="year_id" class="form-label">သင်တန်းနှစ်</label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <select class="form-select" id="year_id" name="year_id" class="primary">
                                @foreach($years as $item)
                                <option value="{{ $item->id}}">
                                    {{ $item->year}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <x-error name="year_id"/>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <label for="major_id" class="form-label">အဓိကဘာသာ</label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <select class="form-select" id="major_id" name="major_id" class="primary">
                                @foreach($majors as $maj)
                                <option value="{{ $maj->id}}">
                                    {{ $maj->major}}
                                </option>
                                @endforeach
                            </select>
                            <x-error name="major_id"/>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <label for="semester_id" class="form-label">နှစ်ဝက်</label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <select class="form-select" id="semester_id" name="semester_id" class="primary">
                                @foreach($semesters as $sem)
                                <option value="{{ $sem->id}}">
                                    {{ $sem->semester}}
                                </option>
                                @endforeach
                            </select>
                            <x-error name="semester_id"/>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <label for="subjectName" class="form-label">ဘာသာရပ်</label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="subjectName" name="subjectName">
                            <x-error name="subjectName"/>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <label for="subjectCode" class="form-label">ဘာသာရပ်ကုဒ်</label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="subjectCode" name="subjectCode">
                            <x-error name="subjectCode"/>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="/staff/studentLists" class="btn btn-secondary">နောက်သို့</a>
                    <button type="submit" class="btn btn-primary">ထည့်မည်</button>
                    </div>
                </form>
               
                </div>
            </div>
         
          <div class="col-md-5">
            <table class="table table-bordered table-secondary table-striped table-hover mt-3">
                <thead>
                  <tr>
                    <th scope="col">စဉ်</th>
                    <th scope="col">သင်တန်းနှစ်</th>
                    <th scope="col">ဘာသာရပ်</th>
                    <th scope="col">နှစ်ဝက်</th>
                    <th scope="col">ဘာသာရပ်</th>
                    <th scope="col">ဘာသာရပ်ကုဒ်</th>
                    <th scope="col">လုပ်ဆောင်ချက်</th>
                    <th scope="col">လုပ်ဆောင်ချက်</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($subjects as $sub)
                  <tr>
                    <th scope="row">{{$sub->id}}</th>
                    <td>{{$sub->year->year}}</td>
                    <td>{{$sub->major->major}}</td>
                    <td>{{$sub->semester->semester}}</td>
                    <td>{{$sub->subjectName}}</td>
                    <td>{{$sub->subjectCode}}</td>
                    
                    <td> <a href="/staff/subjectManagement/update/{{$sub->id}}" class="btn btn-warning">ပြင်ဆင်ရန်</a></td>
                    <td>
                        <form method="POST" action="/staff/subjectManagement/delete/{{$sub->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">ဖျက်ပစ်ရန်</button>
                        </form>
                    </a></td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
        </div>
        </div>
    </div>
       
</x-layout>