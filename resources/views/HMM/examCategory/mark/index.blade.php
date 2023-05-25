@extends('HMM.layouts.app')

@section('content')
    <h3 class="mt-2"><i><strong>Mark</strong></i></h3>

    <div class="row">
        <div class="col-8">
            <a class="btn btn-sm btn-success text-uppercase" href="{{route('exam.mark.create')}}"
                style="width: 10rem;height: 30px;"><strong>Exam Mark Create</strong></a>
        </div>

        <div class="col-4">
            <div class="">
                <form action="" method="post">
                    <input type="text" name="search" id="" class="form-control search" placeholder="Search"
                        style="height: 30px">
                </form>
            </div>
            <div class="row mt-2">
                <div class="col-9">
                    <div class="dropdown">
                        <button class="btn btn-sm shadow-none dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-filter"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item text-dark" href="#">Action</a></li>
                            <li><a class="dropdown-item text-dark" href="#">Another action</a></li>
                            <li><a class="dropdown-item text-dark" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-3">
                    <button class="btn btn-sm"><i class="fa fa-th-large"></i></button>
                    <button class="btn btn-sm"><i class="fa fa-list"></i></button>
                </div>
            </div>
        </div>
    </div>

    <hr>
@endsection
