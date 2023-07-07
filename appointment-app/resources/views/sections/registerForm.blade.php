<form action="{{ route('register') }}" method="post" style="max-width: max-content; margin: 100px auto; background-color: #efefef; padding: 30px 20px; border-radius: 20px;" class="d-flex flex-column align-items-center justify-content-center">
  @csrf
  <h2>Sign Up</h2>
  <label for="email" style="margin-top: 20px;">Email</label>
  <input type="text" name="email" id="email" required class="form-control border-2" placeholder="example@gmail.com">
  @error('email')
    <p style="color: red;">Email is not formatted correctly, or already in use.</p>
  @enderror
  <label for="password" style="margin-top: 20px;">Password</label>
  <input type="password" name="password" id="password" required class="form-control border-2">
  <input type="submit" value="Submit" style="margin-top: 20px;" class="btn btn-primary">
</form>