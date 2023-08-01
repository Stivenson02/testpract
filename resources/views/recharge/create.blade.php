<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recargas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>Create Recharge</h1>
            <form method="POST" action="{{ route('recharge.store') }}">
                @csrf
                <div class="row m-4">
                    <div class="col col-lg-4">
                        <div class="row">
                            <div class="col col-sm-12">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="type_company">Numero</label>
                                    <x-input id="phone" class="form-control form-control-xl" type="number" name="phone"
                                             :value="old('phone')"
                                             placeholder="Celular"
                                             required autofocus/>
                                    <div class="form-control-icon">
                                        <i class="bi bi-lightbulb"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4">
                        <div class="row">
                            <div class="col col-sm-12">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="type_company">Operador</label>
                                    <select id="operator" class="form-control form-control-xl" name="operator"
                                            required autofocus>
                                        <option value="fc">fc</option>
                                        <option value="pc">pc</option>
                                    </select>
                                    <div class="form-control-icon mt-2">
                                        <i class="bi bi-building"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4">
                        <div class="row">
                            <div class="col col-sm-12">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <label for="type_company">Monto</label>
                                    <x-input id="amount" class="form-control form-control-xl" type="number" name="amount"
                                             :value="old('amount')"
                                             placeholder="Monto"
                                             required autofocus/>
                                    <div class="form-control-icon">
                                        <i class="bi bi-lightbulb"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <x-button data-toggle="tooltip" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>"
                                  class="btn btn-primary  btn-lg shadow-lg  btn_guest mb-3">Hacer Recarga
                        </x-button>
                    </div>
                </div>
            </form>


        </div>
    </div>

</x-app-layout>
