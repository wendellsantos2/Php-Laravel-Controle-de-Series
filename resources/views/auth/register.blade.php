<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />




        <div class="container  d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="card text-center">
              <img class="card-img-top" src="https://picsum.photos/400/400" alt="Random Image">
              <div class="card-body">
                <h5 class="card-title">Registro</h5>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="">Nome</label>
                        <input class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus >
                      </div>

                      <div class="form-group">
                        <label for="">Email</label>
                        <input  id="email"  class="form-control" type="email" name="email" :value="old('email')" required >
                      </div>


                    <div class="form-group">
                        <label for="">Senha</label>
                        <input class="form-control" id="password"
                        type="password"
                        name="password"
                        required autocomplete="new-password" >
                    </div>

                    <div class="form-group">
                        <label for="">Confirmar Senha</label>
                        <input class="form-control"  id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required >
                    </div>


                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Já possui conta ?') }}
                    </a>
            <div class="flex items-center justify-end mt-4">


                <x-button class="ml-4 btn btn-primary">
                    {{ __('Criar') }}
                </x-button>
            </div>
                </form>
              </div>
            </div>
          </div>
        

    </x-auth-card>
</x-guest-layout>
