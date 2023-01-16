@extends('layouts.main')
@section('main')
<div class="container mx-auto mt-10" id="load">

</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('#load').load('load_cart')
    });
    // let tambah = document.querySelectorAll('.plus');
    // let kurang = document.querySelectorAll('.minus');

    // tambah.forEach(btn => {
    //     btn.addEventListener('click', function (event) {
    //         var btnTambahClicked = event.target;
    //         var input = btnTambahClicked.previousElementSibling;
    //         var inputValue = input.value;
    //         var newValue = parseInt(inputValue) + 1;
    //         input.value = newValue;
    //     })
    // });

    // kurang.forEach(btn => {
    //     btn.addEventListener('click', function (event) {
    //         var btnKurangClicked = event.target;
    //         var input = btnKurangClicked.nextElementSibling;
    //         var inputValue = input.value;
    //         var newValue = parseInt(inputValue) - 1;
    //         if (inputValue == 0) {
    //             return false;
    //         } else {
    //             input.value = newValue;
    //         }
    //     })
    // });

</script>
@endsection
