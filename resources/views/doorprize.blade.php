@extends('template')
@section('title', 'Doorprize')

@section('content')
    <section class="block py-6 custom-font" style="font-size: large; margin-top: 50px; margin-left:100px">


        <div class="container">
            <h3>How Lucky are You? Choose One!!</h3>
            <br>
            <div class="btn-group-horizontal d-flex">
                    <button class="button is-danger is-focused" type="button" onclick="window.location='{{ url("prize/1") }}'" class="btn btn-primary btn-lg m-5">Prize 1</button>
                    <button class="button is-warning is-focused" type="button" onclick="window.location='{{ url("prize/2") }}'" class="btn btn-warning btn-lg m-5">Prize 2</button>
                    <button class="button is-success is-focused" type="button" onclick="window.location='{{ url("prize/3") }}'" class="btn btn-success btn-lg m-5">Prize 3</button>
                    <button class="button is-info is-focused" type="button" onclick="window.location='{{ url("prize/4") }}'" class="btn btn-info btn-lg m-5">Prize 4</button>
            </div>
        </div>





    </section>

@endsection
