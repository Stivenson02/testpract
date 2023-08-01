<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recargas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>Response Recharge</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Respuesta</th>
                    <th scope="col">Saldo</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>{{$data_respon['estado']}}</td>
                    <td>{{$data_respon['respuesta']}}</td>
                    <td>{{$data_respon['saldo']}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
