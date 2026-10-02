<x-layout>
    <x-slot:heading>
        Editar a vaga: {{ $job->title }}
    </x-slot:heading>

    <form method="post" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-4">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700"> Título da vaga </label>
            </div>
            <div class="mt-2">
                <input type="text" placeholder="Ex: Engenheiro de Software" name="title" id="title"
                    value="{{ $job->title }}" class="border rounded p-2 w-full" required>
            </div>
            @error('title')
            <p class="text-xs text-red-500 font-semibold mt-1"> {{ $message }} </p>
            @enderror

            <div>
                <label for="salary" class="block text-sm font-medium text-gray-700"> Salário anual </label>
                <div class="mt-2">
                    <input type="text" placeholder="Ex: R$ 50.000" name="salary" id="salary" value="{{ $job->salary }}"
                        class="border rounded p-2 w-full" required>
                </div>
            </div>

            @error('salary')
            <p class="text-xs text-red-500 font-semibold mt-1"> {{ $message }} </p>
            @enderror

        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div>
                <button></button>
            </div>
            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{ $job->id }}"
                    class="rounded-md bg-red-600 px-3 text-sm font-semibold text-white shadow-sm hover:bg-red-500 px-4 py-2 rounded">Cancelar</a>
                <div>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 px-4 py-2 rounded">Atualizar
                    </button>
                </div>
            </div>
        </div>

    </form>

</x-layout>