<x-layout>
<x-card-wrapper>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" 
                        id="flexRadioDefault1" value="student" onclick="showLoginForm()">
                        <label class="form-check-label" for="flexRadioDefault1">
                         Student
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                        value="staff" onclick="showLoginForm()">
                        <label class="form-check-label" for="flexRadioDefault2">
                        Staff
                        </label>
                    </div>
                    <form method="POST" action="/login/student">
                        @csrf
                        <div id="studentLoginForm" class="mt-4" style="display: none;">
                        <h3 class="text-primary text-center my-2">Student Login Form</h3>
                        <div class="mb-3">
                            <label
                                for="name"
                                class="form-label"
                            >Name</label>
                            <input
                                required
                                type="text"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                name="name"
                                value="{{old('name')}}"
                            >
                         
                        </div>
                        <div class="mb-3">
                            <label
                                for="password"
                                class="form-label"
                            >Password</label>
                            <input
                                required
                                type="password"
                                name="password"
                                class="form-control"
                                id="exampleInputPassword1"
                            >
                        </div>
                        <button
                            type="submit"
                            class="btn btn-primary"
                        >Submit</button>
                    </div>
                    </form>
                    <form method="POST" action="/login/staff">
                        @csrf
                        <div id="staffLoginForm" class="mt-4" style="display: none;">
                        <h3 class="text-primary text-center my-2">Staff Login Form</h3>
                        <div class="mb-3">
                            <label
                                for="name"
                                class="form-label"
                            >Name</label>
                            <input
                                required
                                type="text"
                                class="form-control"
                                id="exampleInputEmail1"
                                aria-describedby="emailHelp"
                                name="name"
                                value="{{old('name')}}"
                            >
                         
                        </div>
                        <div class="mb-3">
                            <label
                                for="password"
                                class="form-label"
                            >Password</label>
                            <input
                                required
                                type="password"
                                name="password"
                                class="form-control"
                                id="exampleInputPassword1"
                            >
                        </div>
                        <button
                            type="submit"
                            class="btn btn-primary"
                        >Submit</button>
                    </div>
                    </form>
</x-card-wrapper>
    <script>
        function showLoginForm() {
            var studentForm = document.getElementById('studentLoginForm');
            var staffForm = document.getElementById('staffLoginForm');
            var selectedValue = document.querySelector('input[name="flexRadioDefault"]:checked').value;

            if (selectedValue === 'student') {
                studentForm.style.display = 'block';
                staffForm.style.display = 'none';
            } else {
                studentForm.style.display = 'none';
                staffForm.style.display = 'block';
            }
        }

        // Call the function on page load to set the default view
        document.addEventListener('DOMContentLoaded', function() {
            showLoginForm();
        });
    </script>
</x-layout>