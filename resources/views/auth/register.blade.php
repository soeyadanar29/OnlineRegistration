
<x-layout>
  @if (session('success'))
  <div class="alert alert-success text-center">
      {{ session('success') }}
  </div>
@endif
  <x-card-wrapper>
          <h3 class="text-primary text-center">
            <img src="/img/logo_processed.jpg" alt="" style="width:50px;height:50px;" class="me-2">University of Computer Studies Pyay</h3>
          <h5 class="text-primary text-center my-2">Online Registration</h5>
          <form method="POST" action="\register" enctype="multipart/form-data">
            @csrf
          
            <div class="mb-3 col-6 float-left">
              <span class="border border-secondary" 
              style="display: inline-block;width:100px;height:100px;position: relative;">
              <label for="thumbnail" class="form-label text-center pt-3"
              style="width: 100%; height: 100%; cursor: pointer; display: flex;
               align-items: center; justify-content: center;">Add Your Photo</label>
              <input type="file" class="form-control" id="thumbnail" name="thumbnail" hidden 
              onchange="previewImage(event)">
              <img id="image-preview" src="" alt="Photo Preview" style="width: 100%; height: 100%; object-fit: cover; 
              display: none; position: absolute; top: 0; left: 0;">
            </span>
          </div>

          <div class="mb-3 col-sm-3">
           <label for="year_id" class="form-label">Year</label>
           <select class="form-select" id="year" name="year_id" class="primary">
            @foreach($years as $item)
               <option value="{{ $item->id}}">
                {{ $item->year}}
               </option>
             @endforeach
           </select>
          </div>

          <div class="mb-3 col-sm-3">
             <label for="major_id" class="form-label">Major</label>
            <select class="form-select" id="major_id" name="major_id" class="primary">
              @foreach($majors as $maj)
              <option value="{{ $maj->id }}">
               {{ $maj->major }}
              </option>
              @endforeach 
            </select>
          </div>
           
          <div class="row">
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
              <div class="my-3 col-sm-4">
                <label for="nameMyan" class="form-label mt-2">Name(Myan)</label>
                <input type="text" class="form-control" id="nameMyan" name="nameMyan" 
                placeholder="Your Name(Myan)" value="{{old('nameMyan')}}">
              </div>

              <div class="my-3 col-sm-4">
                <label for="fatherNameMyan" class="form-label mt-2">Father Name(Myan)</label>
                <input type="text" class="form-control" id="fatherNameMyan" name="fatherNameMyan" 
                placeholder="Your Father Name" value="{{old('fatherNameMyan')}}">
              </div>

              <div class="my-3 col-sm-4">
                <label for="motherNameMyan" class="form-label mt-2">Mother Name(Myan)</label>
                <input type="text" class="form-control" id="motherNameMyan" name="motherNameMyan" 
                placeholder="Your Mother Name" value="{{old('motherNameMyan')}}">
              </div>
            </div>

            <div class="row">
              <div class="my-3 col-sm-4">
                <label for="nameEng" class="form-label mt-2">Name(Eng)</label>
                <input type="text" class="form-control" id="nameEng" name="nameEng" 
                placeholder="Your Name(Eng)" value="{{old('nameEng')}}">
              </div>
              <div class="my-3 col-sm-4">
                <label for="fatherNameEng" class="form-label mt-2">Father Name(Eng)</label>
                <input type="text" class="form-control" id="fatherNameEng" name="fatherNameEng" 
                placeholder="Your Father Name(Eng)" value="{{old('fatherNameEng')}}">
              </div>
              <div class="my-3 col-sm-4">
                <label for="motherNameEng" class="form-label mt-2">Mother Name(Eng)</label>
                <input type="text" class="form-control" id="motherNameEng" name="motherNameEng" 
                placeholder="Your Mother Name(Eng)" value="{{old('motherNameEng')}}">
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
                <div class="mb-3 col-sm-4">
                  <label for="birthplaceFather" class="form-label">BirthPlace(Father)</label>
                  <input type="text" class="form-control" id="birthplaceFather" name="birthplaceFather" 
                  placeholder="Birthplace of Father" value="{{old('birthplaceFather')}}">
                  <x-error name="birthplace"/>
                </div>
                  <div class="mb-3 col-sm-4">
                    <label for="birthplaceMother" class="form-label">BirthPlace(Mother)</label>
                    <input type="text" class="form-control" id="birthplaceMother" name="birthplaceMother" 
                    placeholder="Birthplace" value="{{old('birthplaceMother')}}">
                    <x-error name="birthplace"/>
              </div>
            </div>

            <div class="row">
              <div class="mb-3 col-sm-4">
                <label for="state" class="form-label">Township/State/Division</label>
                <input type="text" class="form-control" id="state" name="state" 
                placeholder="state" value="{{old('state')}}">
              </div>
              <div class="mb-3 col-sm-4">
                <label for="fatherState" class="form-label">Township/State/Division(Father)</label>
                <input type="text" class="form-control" id="fatherState" name="fatherState" 
                placeholder="state" value="{{old('state')}}">
              </div>
              <div class="mb-3 col-sm-4">
                <label for="state" class="form-label">Township/State/Division(Mother)</label>
                <input type="text" class="form-control" id="motherState" name="motherState" 
                placeholder="state" value="{{old('state')}}">
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
            <div class="row">
            <div class="mb-3 col-sm-3">
              <label for="nation_id" class="form-label">Select Foreign or Nation</label>
             <select class="form-select" id="nation_id" name="nation_id" class="primary">
               @foreach($nations as $nat)
               <option value="{{ $nat->id }}">
                {{ $nat->type }}
               </option>
               @endforeach 
             </select>
           </div>

           {{-- <div class="mb-3 col-sm-3">
            <label for="nation_id_father" class="form-label">Select Foreign or Nation</label>
           <select class="form-select" id="nation_id_father" name="nation_id_father" class="primary">
             @foreach($nations as $nat)
             <option value="{{ $nat->id }}">
              {{ $nat->type }}
             </option>
             @endforeach 
           </select>
         </div>

         <div class="mb-3 col-sm-3">
          <label for="nation_id_mother" class="form-label">Select Foreign or Nation</label>
         <select class="form-select" id="nation_id_mother" name="nation_id_mother" class="primary">
           @foreach($nations as $nat)
           <option value="{{ $nat->id }}">
            {{ $nat->type }}
           </option>
           @endforeach 
         </select>
       </div> --}}
      </div>

         <div class="row">
            <div class="mb-3 col-sm-3">
              <label for="birthDate" class="form-label">Birth Date</label>
              <input type="date" class="form-control" id="birthDate" name="birthDate" 
              value="{{old('birthDate')}}">
            </div>
          </div>

          <div class="row"><span>တက္ကသိုလ်ဝင်တန်းအောင်မြင်သည့်</span>
            <div class="mb-3 col-sm-3">
              <label for="Mrollno" class="form-label">Roll No</label>
              <input type="text" class="form-control" id="Mrollno" name="Mrollno" 
              value="{{old('Mrollno')}}">
            </div>
            <div class="mb-3 col-sm-3">
              <label for="Myear" class="form-label">Year</label>
              <input type="text" class="form-control" id="Myear" name="Myear" 
              value="{{old('Myear')}}">
            </div>
            <div class="mb-3 col-sm-3">
              <label for="testPlace" class="form-label">စာစစ်ဌာန</label>
              <input type="text" class="form-control" id="testPlace" name="testPlace" 
              value="{{old('Mrollno')}}">
            </div>
        </div>

        <div class="row"><span>Always Living</span>
          <div class="mb-3 col-sm-3">
            <label for="fullAdd" class="form-label">Full Address</label>
            <textarea name="fullAdd" id="living" col="30" row="30" placeholder="Your current live"></textarea>
          </div>
          <div class="mb-3 col-sm-4">
            <label for="phone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="phone" name="phone" 
              placeholder="09-112233445" value="{{old('phone')}}">
        </div>
        <div class="row">
          <div class="mb-3 col-sm-3">
            <label for="fatherJob" class="form-label">Father Job</label>
            <textarea name="fatherJob" id="fatherJob" col="10" row="30" placeholder="fatherJob"></textarea>
          </div>
          <div class="mb-3 col-sm-3">
            <label for="motherJob" class="form-label">Mother Job</label>
            <textarea name="motherJob" id="motherJob" col="10" row="30" placeholder="motherJob"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
            <div id="exam-container">
              <span>ဖြေဆိုခဲ့သည့် စာမေးပွဲများ</span>
              <div class="exam-group my-3">
                <input type="text" name="exams[0][exam_type]" placeholder="Exam Type" class="form-control">
                <input type="text" name="exams[0][exam_roll_no]" placeholder="Exam Roll No" class="form-control my-2">
                <input type="text" name="exams[0][major]" placeholder="Major" class="form-control my-2">
                <input type="number" name="exams[0][passed_year]" placeholder="Passed Year" class="form-control my-2">
                <select name="exams[0][status]" aria-placeholder="pass/fail" class="form-select">
                  <option value="pass">Pass</option>
                  <option value="fail">Fail</option>
                </select>
              </div>
            </div>

          </div>
        </div>
          
            <button type="button" id="add-exam" class="btn btn-primary w-auto my-2 ms-2">Add Another Exam</button>
            {{-- <button type="submit">Save Exams</button> --}}
     
   
            <div class="row">
              <span>ကျောင်းနေရန် အထောက်အပံ့ပြုမည့် ပုဂ္ဂိုလ်</span>
              <div class="mb-3 col-sm-4">
                <label for="PName" class="form-label">Name</label>
                <input type="text" class="form-control"  name="PName" value="{{old('PName')}}">
              </div>
              <div class="mb-3 col-sm-4">
                <label for="relation" class="form-label">Relationship</label>
                <input type="text" class="form-control"  name="relation" value="{{old('relation')}}">
              </div>
              <div class="mb-3 col-sm-4">
                <label for="PJob" class="form-label">Job</label>
                <input type="text" class="form-control"  name="PJob" value="{{old('PJob')}}">
              </div>
              <div class="mb-3 col-sm-4">
                <label for="PAddress" class="form-label">Address</label>
                <input type="text" class="form-control"  name="PAddress" value="{{old('PAddress')}}">
              </div>
              <div class="mb-3 col-sm-4">
                <label for="Pphone" class="form-label">Phone</label>
                <input type="text" class="form-control"  name="Pphone" value="{{old('Pphone')}}">
              </div>
            </div>
          <div class="row">
            <div class="mb-3 col-sm-4">
              <label for="permission" class="form-label">ပညာသင်ထောက်ပံ့ကြေးပေးရန် မေတ္တာရပ်ခံခြင်း ပြု/မပြု</label>
              <input type="text" class="form-control"  name="permission" value="{{old('permission')}}">
            </div> 
          </div>
        
{{-- 
            <div class="mb-3 col-sm-4">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control"  name="password" value="{{old('password')}}">
            </div>  --}}
            {{-- <div class="row">
              <div class="mb-3 col-sm-4">
               <button type="submit" class="btn btn-primary w-10 h-10">Submit</button>
              </div> --}}
             
              {{-- <div class="mb-3 col-sm-5">
                <a href="/register/file" class="btn btn-primary text-decornation-none">
                Next to add the necessary file</a>
              </div> --}}
              <div class="row">
              <span class="text-start">ရပ်ကွက်ထောက်ခံစာ</span>
              <x-form.input type="file" id="wardPermission" name="wardPermission"/>
              <span class="text-start">ရဲစခန်းထောက်ခံစာ</span>
              <x-form.input type="file" id="policePermission" name="policePermission"/>
              <span class="text-start">အမှတ်စာရင်း</span>
              <x-form.input type="file" id="totalmarks" name="totalMarks"/>
              <span class="text-start">အိမ်ထောင်စုစာရင်း</span>
              <x-form.input type="file" id="familyFile" name="familyFile"/>
              <span class="text-start">ဆယ်တန်းအောင်လက်မှတ်</span>
              <x-form.input type="file" id="certificate" name="certificate"/>
              <span class="text-start">မှတ်ပုံတင်</span>
              <x-form.input type="file" id="nrcFile" name="nrcFile"/>
              <span class="text-start">အဘ မှတ်ပုံတင်</span>
              <x-form.input type="file" id="fatherNrcFile" name="fatherNrcFile"/>
              <span class="text-start">အမိ မှတ်ပုံတင်</span>
              <x-form.input type="file" id="motherNrcFile" name="motherNrcFile"/>
              <span class="text-start">ကိုဗစ်ဆေး ထောက်ခံစာ</span>
              <x-form.input type="file" id="covid" name="covid"/>
            
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
  </x-card-wrapper>
  <script>
    function previewImage(event) {
      const input = event.target;
      const reader = new FileReader();
  
      reader.onload = function(){
        const imagePreview = document.getElementById('image-preview');
        imagePreview.src = reader.result;
        imagePreview.style.display = 'block';
      }
  
      if (input.files && input.files[0]) {
        reader.readAsDataURL(input.files[0]);
      }
    }

    // Passed Exam show
        let examIndex = 1;
      document.getElementById('add-exam').addEventListener('click', function() {
        let newExam = document.querySelector('.exam-group').cloneNode(true);
        newExam.querySelectorAll('input, select').forEach(input => {
            input.name = input.name.replace(/\d+/, examIndex);
            input.value = '';
        });
        document.getElementById('exam-container').appendChild(newExam);
        examIndex++;
      });
      
  </script>
 </x-layout> 