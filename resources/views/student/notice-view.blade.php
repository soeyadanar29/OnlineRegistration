<x-layout>
    <x-studentNavbar/>
    <div class="container">
        <div class="row">
          <div class="col-md-9 mx-auto">
            <div class="card p-4 my-3 shadow-sm">
                <h5 class="text-primary text-center lh-lg">
                    <img src="/img/logo_processed.jpg" alt="" style="width:50px;height:50px;" class="me-2">
                    ပြည်ထောင်စုသမ္မတ မြန်မာနိုင်ငံတော်အစိုးရ<br>
                    သိပ္ပံနှင့် နည်းပညာဝန်ကြီးဌာန<br>
                    အဆင့်မြင့်သိပ္ပံနှင့် နည်းပညာဦးစီးဌာန<br>
                    ကွန်ပျူတာတက္ကသိုလ်(ပြည်)
                </h5>
                <p class="text-end">စာအမှတ် - {{$notice->no}} <br>
                    ရက်စွဲ - {{$notice->date}}
                </p>
            <div class="flex">
                <p>အကြောင်းအရာ။&nbsp;&nbsp;&nbsp;&nbsp;။
                    {{$notice->notice}}
                </p>
            </div>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$notice->body}}</p>
            <div class="text-end">
                <p>အမည် - 
                    {{$notice->name}}
                </p>
                <p>ရာထူး - 
                    {{$notice->sign}}
                </p>
            </div>
            </div>
          </div>
        </div>
    </div>
</x-layout>