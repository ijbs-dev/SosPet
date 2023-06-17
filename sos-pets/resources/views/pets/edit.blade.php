
@extends('principal')

@section('titulo', 'Editar')

@section('conteudo')


  <div class="min-h-screen bg-gray-100 p-0 sm:p-12">
    <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
      <h1 class="text-2xl font-bold mb-8">Editar Pet</h1>
      <form action="{{ route('pets.update',$pet->id) }}" method="post" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')
        <div class="relative z-0 w-full mb-5">
          <input
          value="{{$pet->nome}}"
            type="text"
            name="nome"
            placeholder=" "
            required
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Nome:</label>
          <span class="text-sm text-red-600 hidden" id="error">Nome</span>
        </div>

        <div class="relative z-0 w-full mb-5">
          <input
            value="{{$pet->idade}}"
            type="text"
            name="idade"
            placeholder=" "
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Idade:</label>
          <span class="text-sm text-red-600 hidden" id="error">Idade</span>
        </div>

          <select name="type_id"
            value=""
            onclick="this.setAttribute('value', this.value);"
            class="pt-3 text-gray-500 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200">
            <option disabled selected class="text-gray-400">Selecione o tipo:</option>
            <option value="1">Cachorro</option>
            <option value="2">Gato</option>
        </select>

          <div class="relative z-0 w-full mb-5">
            <input
              value="{{$pet->raca}}"
              type="text"
              name="raca"
              placeholder=" "
              class="pt-3 pb-2 block w-full px-0 mt-6 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
            />
            <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Raça:</label>
            <span class="text-sm text-red-600 hidden" id="error">Raça</span>
          </div>

          <select name="port_id"
          value=""
          onclick="this.setAttribute('value', this.value);"
          class="pt-3 text-gray-500 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        >
        <option disabled selected class="text-gray-400">Selecione o Porte:</option>
        <option value="1">Pequeno</option>
        <option value="2">Médio</option>
        <option value="3">Grande</option>
        </select>

          <select name="sex_id"
          value=""
          onclick="this.setAttribute('value', this.value);"
          class="pt-3 text-gray-500 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200"
        >
        <option disabled selected class="text-gray-400">Selecione o Sexo:</option>
        <option value="1">Macho</option>
        <option value="2">Fêmea</option>
        <select>

          <div class="relative z-0 w-full mb-5">
            <input
              type="text"
              name="date"
              placeholder=" "
              onclick="this.setAttribute('type', 'date');"
              class="pt-3 pb-2 block w-full px-0 mt-6 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
            />
            <label for="date" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Data:</label>
            <span class="text-sm text-red-600 hidden" id="error">Date is required</span>
          </div>

          <div class="flex flex-col mb-3">
            <label class="text-gray-500"  for="message">Descrição:</label>
            <textarea
                name="descricao"
                rows="4" id="message"
                class="px-3 py-2 focus:outline-none"
            >{{$pet->descricao}}</textarea>
            </div>

            <div class="relative z-0 w-full mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-500" for="small_size">Imagem:</label>
                 <input class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="fotos" type="file">
            </div>
        <button
          type="submit"
          class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-blue-400 hover:bg-blue-600 hover:shadow-lg focus:outline-none"
        >
          Cadastrar
        </button>
      </form>
    </div>
  </div>

  <script>
    'use strict'

    document.getElementById('button').addEventListener('click', toggleError)
    const errMessages = document.querySelectorAll('#error')

    function toggleError() {
      // Show error message
      errMessages.forEach((el) => {
        el.classList.toggle('hidden')
      })

      // Highlight input and label with red
      const allBorders = document.querySelectorAll('.border-gray-200')
      const allTexts = document.querySelectorAll('.text-gray-500')
      allBorders.forEach((el) => {
        el.classList.toggle('border-red-600')
      })
      allTexts.forEach((el) => {
        el.classList.toggle('text-red-600')
      })
    }
  </script>

@endsection
