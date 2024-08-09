
<x-layout>
  <x-studentNavbar/>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card p-4 my-3 shadow-sm">
          <h3 class="text-primary text-center">
           <img src="/storage/{{ Auth::guard('student')->user()->thumbnail }}" alt="" style="width:150px; height:150px">
           <div class="text-secondary fs-5 lh-base">
            <span>သင်တန်းနှစ်  {{ Auth::guard('student')->user()->year->year }}</span><br>
            <span>အထူးပြုဘာသာ- {{ Auth::guard('student')->user()->subject->subject }} </span><br>
            <span> ခုံအမှတ်- {{ Auth::guard('student')->user()->rollno}} </span><br>
            <span> တက္ကသိုလ် ဝင်ရောက်သည့်နှစ်- {{ Auth::guard('student')->user()->entrance_year}} </span><br>
            <span> အမည်- {{ Auth::guard('student')->user()->name}} </span><br>
           </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>