<x-layout>
    <x-slot:heading>
        Criar uma nova vaga
    </x-slot:heading>

    <form method="post" action="/jobs">
        @csrf

        <div class="space-y-4">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700"> Título da vaga </label>
            </div>
            <div class="mt-2">
                <input type="text" placeholder="Ex: Engenheiro de Software" name="title" id="title"
                    class="border rounded p-2 w-full" required>
            </div>
            @error('title')
            <p class="text-xs text-red-500 font-semibold mt-1"> {{ $message }} </p>
            @enderror

            <div>
                <label for="salary" class="block text-sm font-medium text-gray-700"> Salário anual </label>
                <div class="mt-2">
                    <input type="text" placeholder="Ex: R$ 50.000" name="salary" id="salary"
                        class="border rounded p-2 w-full" required>
                </div>
            </div>

            @error('salary')
            <p class="text-xs text-red-500 font-semibold mt-1"> {{ $message }} </p>
            @enderror

        </div>

        <div class="mt-6 flex items-center justify-end gap-4">

            <a href="/jobs"
                class="rounded-md bg-red-600 px-3 text-sm font-semibold text-white shadow-sm hover:bg-red-500 px-4 py-2 rounded">Cancelar</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 px-4 py-2 rounded">Salvar
                vaga</button>

        </div>

    </form>

</x-layout>