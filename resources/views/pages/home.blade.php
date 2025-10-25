@extends('layouts.main')

@section('content')
<style>
    body {
        text-align: center;
    }
    input {
        padding: 10px;
        font-size: 16px;
    }
    button {
        padding: 10px 20px;
        font-size: 10px;
        margin: 5px;
    }
</style>

<form action="#">
    <input type="number"
    class="input-field" id="num1"
    placeholder="Enter a number"
    value="">
    <br>
    <br>
    
    <input type="number"
    class="input-field" id="num2"
    placeholder="Enter a number"
    value="">
    <br>
    <br>

    <button type="button" onclick="add()">+</button>
    <button type="button" onclick="sub()">-</button>
    <button type="button" onclick="mul()">*</button>
    <button type="button" onclick="div()">/</button>
    <br>
    <br>

    <input type="text" id="result" placeholder="Result" readonly>
    <br>

</form>

<script>
    function add(){
    let num1 = document.getElementById('num1').value;
    let num2 = document.getElementById('num2').value;
    let result = Number(num1) + Number(num2);
    document.getElementById('result').value = result;
    }

    function sub(){
    let num1 = document.getElementById('num1').value;
    let num2 = document.getElementById('num2').value;
    let result = Number(num1) - Number(num2);
    document.getElementById('result').value = result;
    }

    function mul(){
    let num1 = document.getElementById('num1').value;
    let num2 = document.getElementById('num2').value;
    let result = Number(num1) * Number(num2);
    document.getElementById('result').value = result;
    }

    function div(){
    let num1 = document.getElementById('num1').value;
    let num2 = document.getElementById('num2').value;
    let result = Number(num1) / Number(num2);
    document.getElementById('result').value = result;
    }
</script>
@endsection
