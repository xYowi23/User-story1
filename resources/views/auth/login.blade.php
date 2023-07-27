<x-layout>
    <div class="container-fluid p-5 bg-info text-center text white">
        <div class="row justify-cotent-center">
            <h1 class="display-1">
                Accedi
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
               
                
                <form action="{{route('login')}}" class="card p-5 shadow" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input name="email" type="email" class="@error('email') is-invalid @enderror" name="email" id="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input name="password" type="password" class="@error('password') is-invalid @enderror" name="passwordl" id="password">
                    </div>
                    <div class="mt-2">
                        <button class="btn bg-info text-white">Accedi</button>
                        <p class="small mt-2">Non sei registrato? <a href="{{route('register')}}">Clicca qui</a></p>
                    </div>
                    

                </form>


            </div>
        </div>
    </div>
</x-layout>    