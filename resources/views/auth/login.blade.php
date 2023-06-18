<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
    <script src="{{ asset('assets/js/Noticme.min.js') }}"></script>
</head>
<body>
    <div class="w-[300px] sm:w-[400px] mx-auto mt-5 py-28 text-center">
        <h2 class="text-2xl font-semibold mb-2">Login to your account</h2>
        <p class="mb-4">or <a href="" class="text-primary hover:text-primary-500 ">create new one</a></p>

        <form action="{{ route('post.login') }}" method="POST">
          @csrf
          <div class="mb-3">
            <input autocomplete="off" type="email"  name="email" placeholder="Your Email" class="input-box-primary w-full @error('email') input-box-error @enderror" value="{{ old('email') }}">
            @error('email')
                <div class="w-full text-left">
                  <small class="text-red-600">{{ $message }}</small>
                </div>
            @enderror
          </div>

          <div class="mb-3">
            <input autocomplete="off" type="password"  name="password" placeholder="Your Password" class="input-box-primary w-full @error('password') input-box-error @enderror">
            @error('password')
                <div class="w-full text-left">
                  <small class="text-red-600">{{ $message }}</small>
                </div>
            @enderror
          </div>

          <div class="mb-3 flex justify-between items-center">
            <div class="flex items-center ">
              <input type="checkbox" name="remember" class="input-checkbox mr-3">
              <label for="remember">Remember Me</label>
            </div>
            <a href="" class="text-primary hover:text-primary-700">Reset Your Password</a>
          </div>

          <button class="btn-primary flex items-center w-full justify-center mt-3 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewbox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
            Login
          </button>

          <div class="my-2">
            <a class="mx-auto text-primary hover:text-primary-700" href="/">Back Home</a>
          </div>
        </form>

        <hr class="my-3">

        <div class="">
          <button onclick="location.href=``" class="group w-full h-12 px-6 border border-gray-300 rounded-lg transition duration-300 hover:border-primary focus:bg-purple-50 active:bg-purple-100">
              <div class="relative flex items-center space-x-4 justify-center">
                  <img src="https://tailus.io/sources/blocks/social/preview/images/google.svg" class="absolute left-0 w-5" alt="google logo">
                  <span class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-primary sm:text-base">Continue with Google</span>
              </div>
          </button>
        </div>

      </div>

      @if (Session::has('msg_error'))
      <script>
        Noticme.any({
            text: "{{ Session::get('msg_error') }}",
            type: "danger",
            color: "red",
            icon: "info",
            timer: 5000
        })
      </script>
      @endif
</body>
</html>
