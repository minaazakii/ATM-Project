<div class="row p-2 m-0 justify-content-start border" id="searchbar">
    <!-- <div class="col-1 p-0  ">
        <button>
            <img src="./assets/img/menu2.png" >

        </button>
    </div> -->

    <div class="col-9 ">
        @if(auth()->user()->isAdmin == '1')
        <form action="{{ route('dashboard.search') }}" method="POST">
            @csrf
        <div class="input-group">
            <input name="date" class="form-control" type="date" placeholder="Search Attendance Date" aria-label="Search" >
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              <button type="submit" class="text-white ml-3" style="border: 1px solid white; border-radius:5px; padding:5px 5px">Search</button>
            </span>
          </div>
        </form>
        @endif
    </div>

    <div class="text-white col-2 border">
        Attend At: {{ Carbon\Carbon::parse($attendance->created_at->toDateTimeString())->setTimezone('egypt')->format('Y/m/d - (D), h:i') }}

    </div>

</div>
