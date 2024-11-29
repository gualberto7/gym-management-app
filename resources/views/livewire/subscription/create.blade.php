<div class="w-full flex gap-4 justify-around">
    <div class="w-full md:w-80">
        <h2 class="font-bold mb-6">Register nuevo usuario</h2>
        <form action="">
            <div class="mb-4">
                <x-label for="name">Nombre</x-label>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required/>
            </div>
            <div class="mb-4">
                <x-label for="ci">CI</x-label>
                <x-input id="ci" class="block mt-1 w-full" type="text" name="ci" :value="old('ci')" required/>
            </div>
            <div class="mb-4">
                <x-label for="phone">Celular</x-label>
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required/>
            </div>
            <div class="mb-4">
                <x-label for="email">Correo</x-label>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required/>
            </div>
        </form>
    </div>
    <div>
        <h2>Registrar inscripcion</h2>
    </div>
</div>
