<x-layout>

<div class="container">
    <div class="row">
      <div class="col-md-9 mx-auto">
            <div class="card p-4 my-3 shadow-sm" style="background-color: #90E0EF">
            <form action="/register/next">
                @csrf
                <div class="mb-3 col-sm-3">
                    <label for="wardPermission">Ward Permission</label>
                    <input type="file" class="form-control" id="wardPermission" name="wardPermission">
                </div>
            </form>

            </div>
        </div>
    </div>
</div>
</x-layout>