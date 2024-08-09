<x-layout>
    <x-studentNavbar/>
 
 <div class="row mx-0">
  <div class="col-md-3">
  @foreach($notices as $notice)
    <div class="card my-2 mx-5 justify-content-center" style="width: 18rem;">
        <img src="/img/announcement.gif" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$notice->notice}}</h5>
          <p class="card-text">{{$notice->body}}</p>
          <a href="/student/notice/{{$notice->id}}" class="btn btn-primary">အသေးစိတ်ကြည့်ရန်</a>
        </div>
      </div>
      </div>
@endforeach
</div>
</div>
</x-layout>