<x-layout>
    <div class="container-fluid p-5 bg-info text-center text white">
        <div class="row justify-cotent-center">
            <h1 class="display-1">
                Registrati
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                

                <form action="{{route('register')}}" class="card p-5 shadow" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input name="name" type="text" class=" @error('name') is-invalid @enderror" id="username" value="{{old('name')}}">
                        @error('name')
                            <div class="alert text-danger m-0 ">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input name="email" type="email" class="@error('email') is-invalid @enderror"" id="email" value="{{old('email')}}">
                        @error('email')
                            <div class="alert text-danger m-0 ">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input name="password" type="password" class="@error('password') is-invalid @enderror" id="password">
                        @error('password')
                            <div class="alert text-danger m-0">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password Confirmation:</label>
                        <input name="password_confirmation" type="password" class="@error('password_confirmation') is-invalid @enderror" id="password_confirmation">
                        @error('password')
                            <div class="alert text-danger m-0">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="mt-2">
                        <button class="btn bg-info text-white">Registrati</button>
                        <p class="small mt-2">Già registrato? <a href="{{route('login')}}">Clicca qui</a></p>
                    </div>
                    

                </form>


            </div>
        </div>
    </div>
</x-layout>    