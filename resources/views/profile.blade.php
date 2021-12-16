@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row text-light justify-content between " id="dashborad">
            <div class="col-xl-2 col-lg-2 col-md-0 col-sm-0 col-xs-0  d-xl-block d-lg-block d-md-block d-sm-block d-xs-block  p-0 " id="side">
              @include('layouts.sidemenu')

            </div>

            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-block  p-0  " id="content">
                <div class="row p-0 m-0">
                    <div class="col-12  p-0  ">
                        @include('layouts.searchBar')

                    </div>
                    <div class="col-6 mt-3">
                        <form action="{{ route('user.update',$user) }}" method="POST" >
                            @csrf
                        <div class="card" style="width: 35rem; background-color:#eee; ">
                            <div class="card-body">
                              <label class="text-dark text-decoration-underline fw-bold" style="font-weight:bold;">Name:</label>
                              <input style="width:35rem ; border:0px; background-color:transparent;" value="{{ $user->name }}" type="text" name="name" readonly>
                              <br><br>
                              <label class="text-dark text-decoration-underline fw-bold" style="font-weight:bold;">Email:</label>
                              <input style="width:35rem ; border:0px; background-color:transparent; "  value="{{ $user->email }}" type="email" name="email" readonly>
                              <br><br>
                              <label class="text-dark text-decoration-underline fw-bold" style="font-weight:bold;">Phone:</label>
                              <input style="width:35rem; border:0px ; background-color:transparent;" value="{{ $user->phone }}" type="number" name="phone" readonly>
                              <br><br>
                            </div>
                          </div>
                        </form>
                    </div>

                    <div class="col-12 mt-3    " id="table">
                        <table >
                            <thead>
                                <th>Days Count.</th>
                                <th>attended_at</th>
                            </thead>
                            @foreach ($attendances as $index => $attendant )
                            <tr>
                                <td>{{ $index +1 }}</td>
                                <td>{{ $attendant->attended_at }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </div>

  @endsection
