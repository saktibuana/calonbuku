@extends('layouts.main')
@section('main')

<div id="load_checkout"
    class="lg:container lg:mx-auto grid grid-cols-1 my-10 lg:grid-cols-2 outline outline-1 outline-slate-200">

</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $("#load_checkout").load('load_checkout')
    });

</script>
@endsection
