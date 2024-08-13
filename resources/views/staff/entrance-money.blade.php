<x-layout>
    <x-navbar/>
    @if (session('success'))
    <div class="alert alert-success justify-content-center">
        {{ session('success') }}
    </div>
  @endif
    
 <div class="container">
    <div class="row">
        <div class="col-md-9 mx-auto">
            <div class="card p-4 my-3 shadow-sm">
                <h4 class="text-center mb-3">
                    <img src="/img/logo_processed.jpg" alt="logo" width="50px" height="50px">
                    ကွန်ပျူတာတက္ကသိုလ်(ပြည်)</h4>
                <h5 class="text-center mb-3">ငွေသွင်းပြေစာ</h5>
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
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <label for="entrance">ကျောင်းလခ</label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="entrance" name="entrance"
                                onInput="calculateSum()">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <label for="sport" class="me-2">အားကစား</label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="sport" name="sport" onInput="calculateSum()">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <label for="laboratory" class="me-2">ဓာတ်ခွဲခန်းကြေး</label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="laboratory" name="laboratory"
                                onInput="calculateSum()">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <label for="exam" class="me-2">စာမေးပွဲကြေး</label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="exam" name="exam" onInput="calculateSum()">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <label for="library" class="me-2">စာကြည့်တိုက်ကြေး</label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="library" name="library"
                                onInput="calculateSum()">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <label for="total" class="me-2">စုစုပေါင်း</label>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="total" name="total" readonly>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-3 ">လုပ်ဆောင်မည်</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function calculateSum() {
        var entrance = parseInt(document.getElementById('entrance').value)||0;
        var sport = parseInt(document.getElementById('sport').value)||0;
        var laboratory = parseInt(document.getElementById('laboratory').value)||0;
        var exam = parseInt(document.getElementById('exam').value)||0;
        var library = parseInt(document.getElementById('library').value)||0;
        var total = entrance + sport + laboratory + exam + library ;
        document.getElementById('total').value = total;
    }
</script>
</x-layout>