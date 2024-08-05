<x-layout>
  @if (session('success'))
  <div class="alert alert-success justify-content-center">
      {{ session('success') }}
  </div>
@endif
  <div class="container">
    <div class="row">
      <div class="col-md-9 mx-auto">
        <div class="card p-4 my-3 shadow-sm" style="background-color: #90E0EF" ;>
          <h3 class="text-primary text-center">
            <img src="/img/logo_processed.jpg" alt="" style="width:50px;height:50px;" class="me-2">University of Computer Studies Pyay</h3>
          <h5 class="text-primary text-center my-2">Online Registration</h5>
          <form method="POST" action="\register" enctype="multipart/form-data">
         
            @csrf

           <label for="year_id" class="form-label">Year</label>
           <select class="form-select" id="year" name="year_id" class="primary">
            @foreach($years as $item)
               <option value="{{ $item->id}}">
                {{ $item->year}}
               </option>
               @endforeach
           </select>

             <label for="subject_id" class="form-label">Subjects</label>
            <select class="form-select" id="subject" name="subject_id" class="primary">
              @foreach($subjects as $sub)
              <option value="{{ $sub->id }}">
               {{ $sub->subject }}
              </option>
              @endforeach 
                
            </select>

           
          
           <div class="mb-3 col-sm-3">
              <label for="rollNo" class="form-label">Roll No</label>
              <input type="text" class="form-control " id="rollNo" name="rollNo"
              placeholder="PaKaPaTa 000000" value="{{old('rollNo')}}">
            </div>
            <div class="mb-3 col-sm-3">
              <label for="Eyear" class="form-label">Entrance Year</label>
              <input type="text" class="form-control " id="Eyear" name="Eyear"
              placeholder="2016" value="{{old('Eyear')}}">
            </div>

            <div class="row">
              <div class="mb-3 col-sm-4">
                <label for="thumbnail" class="form-label">Add Your Photo</label>
                <input type="file" class="form-control" id="thumbnail" name="thumbnail">
              </div>
            </div>
            <div class="row">
              <div class="my-3 col-sm-4">
                <label for="name" class="form-label mt-2">Name</label>
                <input type="text" class="form-control" id="nameEng" name="name" 
                placeholder="Your Name" value="{{old('name')}}">
              </div>

              <div class="my-3 col-sm-4">
                <label for="fatherName" class="form-label mt-2">Father Name</label>
                <input type="text" class="form-control" id="nameFaEng" name="fatherName" 
                placeholder="Your Father Name" value="{{old('fatherName')}}">
              </div>

              <div class="my-3 col-sm-4">
                <label for="motherName" class="form-label mt-2">Mother Name</label>
                <input type="text" class="form-control" id="nameMomEng" name="motherName" 
                placeholder="Your Mother Name" value="{{old('motherName')}}">
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-sm-4">
                <label for="nationality" class="form-label mt-2">Nationality</label>
                <input type="text" class="form-control" id="nationality" name="nationality" 
                placeholder="Burma" value="{{old('nationality')}}">
              </div>
              <div class="mb-3 col-sm-4">
                <label for="nationalityFather" class="form-label mt-2">Father(Nationality)</label>
                <input type="text" class="form-control" id="nationalityFather" name="nationalityFather" 
                placeholder="Rahkine" value="{{old('nationalityFather')}}">
              </div>
              <div class="mb-3 col-sm-4">
                <label for="nationalityMother" class="form-labe ">Mother(Nationality)</label>
                <input type="text" class="form-control mt-2" id="nationalityMother" name="nationalityMother" 
                placeholder="Burma" value="{{old('nationalityMother')}}">
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-sm-4">
                <label for="religion" class="form-label">Religion</label>
                <input type="text" class="form-control" id="religion" name="religion" 
                placeholder="Buddha" value="{{old('religion')}}">
              </div>
              <div class="mb-3 col-sm-4">
                <label for="religionFather" class="form-label">Father(Religion)</label>
                <input type="text" class="form-control" id="religionFather" name="religionFather" 
                placeholder="Buddha" value="{{old('religionFather')}}">
              </div>
              <div class="mb-3 col-sm-4">
                <label for="religionMother" class="form-label">Mother(Religion)</label>
                <input type="text" class="form-control" id="religionMother" name="religionMother" 
                placeholder="Buddha" value="{{old('religionMother')}}">
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-sm-4">
                <label for="birthplace" class="form-label">BirthPlace</label>
                <input type="text" class="form-control" id="birthplace" name="birthplace" 
                placeholder="Your Birthplace" value="{{old('birthplace')}}">
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-sm-4">
                <label for="nrc" class="form-label">NRC</label>
                <input type="text" class="form-control" id="nrc" name="nrc" 
                placeholder="7/PaTaNa(N) 112233" value="{{old('nrc')}}">
              </div>
              <div class="mb-3 col-sm-4">
                <label for="fatherNrc" class="form-label">Father(NRC)</label>
                <input type="text" class="form-control" id="fatherNrc" name="fatherNrc" 
                placeholder="7/PaTaNa(N) 112233" value="{{old('fatherNrc')}}">
              </div>
              <div class="mb-3 col-sm-4">
                <label for="motherNrc" class="form-label">Mother(NRC)</label>
                <input type="text" class="form-control" id="motherNrc" name="motherNrc" 
                placeholder="7/PaTaNa(N) 112233" value="{{old('motherNrc')}}">
              </div>
            </div>
            <div class="mb-3 col-sm-3">
              <label for="birthDate" class="form-label">Birth Date</label>
              <input type="date" class="form-control" id="birthDate" name="birthDate" value="{{old('birthDate')}}">
            </div>
          
            <div class="row">
              <div class="mb-3 col-sm-4">
                <label for="phone" class="form-label">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" 
                  placeholder="09-112233445" value="{{old('phone')}}">
              </div>
              <div class="mb-3 col-sm-4">
                <label for="fatherPhone" class="form-label">Father Phone</label>
                <input type="text" class="form-control" id="fatherPhone" name="fatherPhone" 
                placeholder="09-112233445" value="{{old('fatherPhone')}}">
              </div>
              <div class="mb-3 col-sm-4">
                <label for="motherPhone" class="form-label">Mother Phone</label>
                <input type="text" class="form-control" id="motherPhone" name="motherPhone" 
                placeholder="09-112233445" value="{{old('motherPhone')}}">
              </div>
            </div>
           
            <div class="row">
              <div class="mb-3 col-sm-4">
                <label for="living" class="form-label">Current Living Address</label>
                <textarea name="living" id="living" col="30" row="30" placeholder="Your current live"></textarea>
              </div>
            </div>
            

            <div class="mb-3 col-sm-4">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control"  name="password" value="{{old('password')}}">
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>
      </div>
    </div>
  </div> 
 
 </x-layout> 