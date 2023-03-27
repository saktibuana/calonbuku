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

</script>
@endsection
