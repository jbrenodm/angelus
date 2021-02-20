@extends('layouts.master')

@section('title') Alterar Usuario @endsection

@section('content')
 <!-- start page title -->
                    <div class="row">
<!--                 @component('common-components.breadcrumb')
                     @slot('title') Cadastro de Usuario  @endslot                     
                     @slot('li1') Lexa  @endslot
                     @slot('li2') Forms  @endslot
                     @slot('li3') Form Elements @endslot
                @endcomponent -->
                
                   
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Alterar Usuário</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="inputEmail4" class="form-label">Nome</label>
                                            <input type="email" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">Cpf</label>
                                            <input type="password" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">Identidade</label>
                                            <input type="password" class="form-control" id="inputPassword4">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                                    </div>
                                    <hr>
                                    <!-- <p class="card-title-desc">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p>-->

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Nome</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="Nome" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Identidade</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="Identidade" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Cpf</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="Cpf" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-2 col-form-label">Date Nascimento</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" value="" id="example-date-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Entidade</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="Entidade" id="example-text-input">
                                        </div>
                                    </div>



                                    <!-- <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Genero</label>
                                        <div class="col-sm-10">
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>Masculino</option>
                                                <option>Ferminino</option>
                                            </select>
                                        </div>
                                    </div>


                                    <hr><br>

                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-sm-2 col-form-label">URL</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-sm-2 col-form-label">Number</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" value="42" id="example-number-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-month-input" class="col-sm-2 col-form-label">Month</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="month" value="2011-08" id="example-month-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-week-input" class="col-sm-2 col-form-label">Week</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-sm-2 col-form-label">Time</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-color-input" class="col-sm-2 col-form-label">Color</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="color" value="#7a6fbe" id="example-color-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Select</label>
                                        <div class="col-sm-10">
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Custom Select</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input-lg" class="col-sm-2 col-form-label">Large</label>
                                        <div class="col-sm-10">
                                            <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="example-text-input-lg">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Small</label>
                                        <div class="col-sm-10">
                                            <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="example-text-input-sm">
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
@endsection