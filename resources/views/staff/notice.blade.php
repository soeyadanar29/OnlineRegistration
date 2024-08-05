<x-layout>
  
    <x-navbar>
        <form method="POST">
            @csrf
            <div class="container">
                <div class="row">
                  <div class="col-md-9 mx-auto">
                    <div class="card p-4 my-3 shadow-sm">
                    <label for="title" class="mb-2">ခေါင်းစဉ်</label>
                    <input type="text" class="form-control" name="title">
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    <label for="notice" class="my-2">အကြောင်းအရာ</label>
                    <textarea name="notice" id="notice" cols="30" rows="10" class="form-control"></textarea>
                    @error('notice')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    <button type="submit" class="btn btn-info mt-2">Submit</button>
                    </div>
                </div>
            </div>
    </form>
    </x-navbar>
</x-layout>