<x-layout>
    <x-navbar>
        @if (session('success'))
        <div class="alert alert-success justify-content-center">
            {{ session('success') }}
        </div>
      @endif
        <form method="POST">
            @csrf
            <div class="container">
                <div class="row">
                  <div class="col-md-9 mx-auto">
                    <div class="card p-4 my-3 shadow-sm">
                        <h5 class="text-secondary text-center lh-lg">
                            <img src="/img/logo_processed.jpg" alt="" style="width:50px;height:50px;" class="me-2">
                            ပြည်ထောင်စုသမ္မတ မြန်မာနိုင်ငံတော်အစိုးရ<br>
                            သိပ္ပံနှင့် နည်းပညာဝန်ကြီးဌာန<br>
                            အဆင့်မြင့်သိပ္ပံနှင့် နည်းပညာဦးစီးဌာန<br>
                            ကွန်ပျူတာတက္ကသိုလ်(ပြည်)
                        </h5>
                <div class="col-4">
                    <label for="no" class="mb-2">စာအမှတ်</label>
                    <input type="text" class="form-control" name="no">
                   <x-error name="no"/>
                </div>
                <div class="col-4">
                    <label for="date" class="mb-2">ရက်စွဲ</label>
                    <input type="date" class="form-control" name="date">
                    <x-error name="date"/>
                </div>
                    <label for="notice" class="my-2">အကြောင်းအရာ။ &nbsp;&nbsp;&nbsp;&nbsp;။</label>
                    <input type="text" class="form-control" name="notice">
                    <x-error name="notice"/>

                    <label for="body" class="my-2">စာကိုယ်</label>
                  <textarea name="body" id="body" cols="30" rows="10"></textarea>
                  <x-error name="body"/>

                    <div class="col-3">
                        <label for="name" class="mt-2 mx-2">အမည်</label>
                        <input type="text" class="form-control float-end mt-2" name="name" >
                        <x-error name="name"/>

                    </div>
                    <div class="col-3">
                        <label for="sign" class="mt-2 mx-2">ရာထူး</label>
                        <input type="text" class="form-control float-end mt-2" name="sign" >
                    <x-error name="sign"/>
                    </div>
                    
                    <button type="submit" class="btn btn-info mt-2">တင်မည်</button>
                    </div>
                </div>
            </div>
    </form>
    </x-navbar>
</x-layout>