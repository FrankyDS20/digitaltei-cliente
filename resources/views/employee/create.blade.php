@extends('layouts.base') @prepend('styles') @section('content') 
<div class="container px-6 mx-auto grid">
    <div class="grid grid-cols-6">
      <h2 class="my-6  font-semibold text-gray-700 dark:text-gray-200">
        {{$titulo}}
      </h2>
    </div>
    <!-- General elements -->
    
    <!-- Inputs with icons -->
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
<form method="post" action="{{route('employee.store')}}"  enctype="multipart/form-data">
    @csrf
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="name">
                Nombre <i class="fa-regular fas fa-circle-exclamation" title="Importante"></i>
            </label>
            <input class="block w-full mt-1 text-sm border-gray-600 text-gray-700 dark:text-gray-300 dark:bg-gray-700  form-input"
            id="name" type="text" name="name"   placeholder="Nombre">
            <span class="text-xs text-red-600 dark:text-red-400">
                @error('name') 
                {{($message)}}
                @enderror
              </span>
        </div>
        <div class="w-full mb-6 md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="lastname">
                Apellido <i class="fa-regular fas fa-circle-exclamation" title="Importante"></i>
            </label>
            <input class="block w-full mt-1 text-sm border-gray-600 text-gray-700 dark:text-gray-300 dark:bg-gray-700  form-input"
            id="lastname" type="text" name="lastname"   placeholder="Apellido">
            <span class="text-xs text-red-600 dark:text-red-400">
                @error('lastname') 
                {{($message)}}
                @enderror
              </span>
        </div>
    </div>
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="document">
                DNI <i class="fa-regular fas fa-circle-exclamation" title="Deber ser unico"></i>
            </label>
            <input class="block w-full mt-1 text-sm border-gray-600 text-gray-700 dark:text-gray-300 dark:bg-gray-700  form-input"
            id="document" type="text" name="document"   placeholder="Documento">
            <span class="text-xs text-red-600 dark:text-red-400">
                @error('document') 
                {{($message)}}
                @enderror
              </span>
        </div>
        <div class="w-full mb-6 md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="email">
                Correo Electrónico <i class="fa-regular fas fa-circle-exclamation" title="Importante"></i>
            </label>
            <input class="block w-full mt-1 text-sm border-gray-600 text-gray-700 dark:text-gray-300 dark:bg-gray-700  form-input"
            id="email" type="email" name="email"  placeholder="Correo Electrónico">
            <span class="text-xs text-red-600 dark:text-red-400">
                @error('email') 
                {{($message)}}
                @enderror
              </span>
        </div>
    </div>
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="address">
                Dirección
            </label>
            <input class="block w-full mt-1 text-sm  text-gray-700 dark:text-gray-300 dark:bg-gray-700  form-input"
            id="address" type="text" name="address"  placeholder="Dirección">
            <span class="text-xs text-red-600 dark:text-red-400">
                @error('address') 
                {{($message)}}
                @enderror
              </span>
        </div>
        <div class="w-full mb-6 md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="birthday_date">
                Fecha de Nacimiento <i class="fa-regular fas fa-circle-exclamation" title="Importante"></i>
            </label>
            <input class="block w-full mt-1 text-sm border-gray-600  text-gray-700 dark:text-gray-300 dark:bg-gray-700  form-input"
            id="birthday_date" type="date" name="birthday_date"   placeholder="Fecha de Nacimiento">
            <span class="text-xs text-red-600 dark:text-red-400">
                @error('birthday_date') 
                {{($message)}}
                @enderror
              </span>
        </div>
    </div>
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="gender">
                Género <i class="fa-regular fas fa-circle-exclamation" title="Importante"></i>
            </label>
            <select class="block w-full mt-1 text-sm text-gray-700 dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select  dark:focus:shadow-outline-gray"
            id="gender" name="gender">
            <option  value="" >Seleccione una opcion</option>
            <option value="Masculino" >Masculino</option>
            <option value="Femenino" >Femenino</option>
            </select>
            <span class="text-xs text-red-600 dark:text-red-400">
                @error('gender') 
                {{($message)}}
                @enderror
              </span>
        </div>
        <div class="w-full mb-6 md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="phone">
                Teléfono <i class="fa-regular fas fa-circle-exclamation" title="Importante"></i>
            </label>
            <input class="block w-full mt-1 text-sm border-gray-600 text-gray-700 dark:text-gray-300 dark:bg-gray-700  form-input"
            id="phone" type="tel" name="phone"   placeholder="Teléfono">
            <span class="text-xs text-red-600 dark:text-red-400">
                @error('phone') 
                {{($message)}}
                @enderror
              </span>
        </div>
    </div>
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="file">
                Documentos
            </label>
            <div class="relative w-full">
                <input id="file" name="file" type="file" class="block w-full text-sm text-slate-500
                  file:mr-4 file:py-2 file:px-4
                  file:rounded-full file:border-0
                  file:text-sm file:font-semibold
                  file:bg-amber-50 file:text-amber-700
                  hover:file:bg-amber-100 " placeholder="Seleccione un archivo">
                <span class="file:text-sm file:font-medium text-slate-500 " id="document_name"></span>
              </div>
              <span class="text-xs text-red-600 dark:text-red-400">
                @error('file')
                {{($message)}}
                @enderror
              </span>
        </div>
        <div class="w-full md:w-1/2 mb-6 px-3">
            <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="avatar">
                Avatar
            </label>
            <div class="flex items-center ">
                <div class="shrink-0">
                    <img class="h-8 w-8 mr-3 object-cover rounded-full hidden" src=""/>
                    
                  </div>
                  <label class="block w-full">
                    <input type="file" id="avatar" name="avatar" accept="image/*" class="block w-full text-sm text-slate-500
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-amber-50 file:text-amber-700
                    hover:file:bg-amber-100 "/>
                  </label>
            </div>
            <span class="text-xs text-red-600 dark:text-red-400">
                @error('avatar') 
                {{($message)}}
                @enderror
              </span>
        </div>
    </div>
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="jobs_id">
                Cargo <i class="fa-regular fas fa-circle-exclamation" title="Importante"></i>
            </label>
            <select class="block w-full mt-1 text-sm text-gray-700 dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select  dark:focus:shadow-outline-gray"
            id="jobs_id" name="jobs_id">
            <option  value="" >Seleccione una opcion</option>

                @foreach($jobs as $job)
                    <option  value="{{($job->id)}}" >{{($job->name)}}</option>
                @endforeach
            </select>
            <span class="text-xs text-red-600 dark:text-red-400">
                @error('jobs_id') 
                {{($message)}}
                @enderror
              </span>
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-400 text-xs font-bold mb-2" for="enabled">
                Habilitar usuario <i class="fa-regular fas fa-circle-question" title="Permitir creacion de usuario"></i>
            </label>
            <input class="form-checkbox text-indigo-600 dark:text-indigo-400"
            id="isUser" type="checkbox" name="isUser" value="" >
        </div>
    </div>
<div class="flex flex-wrap">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <button class="bg-amber-600 hover:bg-amber-700 text-white font-bold
         py-2 px-4 rounded focus:outline-none focus:shadow-outline"
        type="submit">
            Registrar
        </button>
        <a  href="{{(route('employee.index'))}}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            regresar
        </a>
    </div>
</div>
</form>
    </div>
  </div> @endsection