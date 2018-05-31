@extends('layouts.Lfooter')
@extends('layouts.Lmain')
@section('Title')
    <title>Moj Obrtnik | Iskanje</title>
@endsection
@section('Logo')
    Iskanje
@endsection
@section('Content')
<div style="min-height:44.2em;">
      <div class="row">
        <div style="height:5em;">

        </div>
        <div class="col s10 offset-s1">
                <div class="row">
                        <form class="col s12" action="{{ route('iskanje123') }}" method="POST" type="hidden" name="_token">
                        {{ csrf_field() }}
                          <div class="row">
                            <div class="input-field col s6">
                              <i class="material-icons prefix">account_circle</i>
                              <input id="icon_prefix" type="text" class="validate" name="name">
                              <label for="icon_prefix">First Name</label>
                            </div>
                          </div>
                          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                              </button>
                        </form>
                      </div>
        </div>
      </div>
      <div class="divider">
        
    </div>
</div>
@endsection