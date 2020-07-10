@extends('layouts.backend')

@section('title', __('Statistics'))

@section('content')
<div class="statistics">
<div class="card">
<div class="card-body">

<div class="alert alert-danger" role="alert">
  Sorry, this page is under development
</div>
  <h3>UrlHub Statistics</h3>
<br>
  <b>Capacity</b>   : <span title="{{number_format($keyCapacity)}}" data-toggle="tooltip">{{numberFormatShort($keyCapacity)}}</span> <br>
  <b>Remaining</b>  : <span title="{{number_format($keyRemaining)}}" data-toggle="tooltip">
                        {{numberFormatShort($keyRemaining)}}
                        @if ($keyCapacity == 0)
                          (0%)
                        @else
                          ({{round(100-((($keyCapacity-$keyRemaining)/$keyCapacity)*100))}}%)
                        @endif
                      </span> <br>

<br>

  <b>Total Short Url</b> <br>
  Value             : <span title="{{number_format($shortUrlCount)}}" data-toggle="tooltip">{{numberFormatShort($shortUrlCount)}}</span> <br>
  Value By Guest    : <span title="{{number_format($shortUrlCountByGuest)}}" data-toggle="tooltip">{{numberFormatShort($shortUrlCountByGuest)}}</span> <br>

<br>

  <b>Total Clicks</b> <br>
  Value             : <span title="{{number_format($clickCount)}}" data-toggle="tooltip">{{numberFormatShort($clickCount)}}</span> <br>
  Value By Guest    : <span title="{{number_format($clickCountFromGuest)}}" data-toggle="tooltip">{{numberFormatShort($clickCountFromGuest)}}</span> <br>

<br>

  <b>Total User</b> <br>
  Registered User   : <span title="{{number_format($userCount)}}" data-toggle="tooltip">{{numberFormatShort($userCount)}}</span> <br>
  Unregistered User : <span title="{{number_format($guestCount)}}" data-toggle="tooltip">{{numberFormatShort($guestCount)}}</span> <br>


</div>
</div>
</div>
@endsection
