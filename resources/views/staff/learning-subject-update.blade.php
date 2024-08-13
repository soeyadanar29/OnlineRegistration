
<x-layout>
    <x-navbar />
    @if (session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
  @endif
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="card p-4 my-3 shadow-sm">
                    <h5 class="text-secondary text-center lh-lg">
                        ဘာသာရပ်များ <br>
                    </h5>
                    <form method="POST" action="/staff/subjectManagement/update/{{$subjects->id}}">
                        @method('PATCH')
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <label for="year_id" class="form-label">Year</label>
                            </div>
                            <div class="col-md-4 mb-3">
                                <select class="form-select" id="year_id" name="year_id" class="primary">
                                    @foreach($years as $year)
                                    <option {{$year->id== $subjects->year_id ? 'selected':''}}
                                    value="{{$year->id}}">
                                        {{ $year->year}}
                                    </option>
                                    @endforeach
                                </select>
                                <x-error name="year_id" />
                            </div>
                          
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <label for="major_id" class="form-label">Major</label>
                            </div>
                            <div class="col-md-4 mb-3">
                                <select class="form-select" id="major_id" name="major_id" class="primary">
                                    @foreach($majors as $maj)
                                    <option {{$maj->id==$subjects->major_id ? 'selected' : ''}}
                                        value="{{ $maj->id}}">
                                        {{ $maj->major}}
                                    </option>
                                    @endforeach
                                </select>
                                <x-error name="major_id" />
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <label for="semester_id" class="form-label">Semester</label>
                            </div>
                            <div class="col-md-4 mb-3">
                                <select class="form-select" id="semester_id" name="semester_id" class="primary">
                                    @foreach($semesters as $sem)
                                    <option {{$sem->id==$subjects->semester_id ? 'selected' : ''}}
                                    value="{{ $sem->id}}">
                                        {{ $sem->semester}}
                                    </option>
                                    @endforeach
                                </select>
                                <x-error name="semester_id" />
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <label for="subjectName" class="form-label">Subject</label>
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="text" class="form-control" id="subjectName" name="subjectName"
                                value="{{$subjects->subjectName}}">
                                <x-error name="subjectName" />
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <label for="subjectCode" class="form-label">Subject Code</label>
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="text" class="form-control" id="subjectCode" name="subjectCode"
                                value="{{$subjects->subjectCode}}">
                                <x-error name="subjectCode" />
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="/staff/subjectManagement" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</x-layout>