<x-layout>
        <h1>Register User</h1>
        <form method="POST" action="/users">
            @csrf
            <div class="row mb-3">
              <label for="name" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" name="name" 
                value="{{old('name')}}" 
                class="form-control @error('name') is-invalid @enderror"/>
                <div class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
              </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" name="email" value="{{old('email')}}" 
                  class="form-control @error('email') is-invalid @enderror">
                  <div class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" name="password" 
                  value="{{old('password')}}" 
                  class="form-control @error('password') is-invalid @enderror">
                  <div class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                  <input type="password" name="password_confirmation" 
                  value="{{old('password_confirmation')}}" 
                  class="form-control @error('password_confirmation') is-invalid @enderror">
                  <div class="text-danger">
                    @error('password_confirmation')
                        {{ $message }}
                    @enderror
                </div>
                </div>
            </div>
            <div class="row mb-3">
                <span> Already have an acount? <a href='/login'>Login here. </a></span>
            </div>
            <button class="btn btn-primary">Register</button>
        </form>
</x-layout>