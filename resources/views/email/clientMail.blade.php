
New client
<br>
email :{{ $request->email }}
<br>name :{{ $request->name }}
<br>phoneNumber :{{ "(+".$request->phone.")".$request->phoneNumber }}
<br>company :{{ $request->company }}
@if (!empty($request->description))
<br>description :{{ $request->description }}
@endif
@if (!empty($request->delivrables))
<br>delivrables : {{ $request->delivrables }}
@endif
@if (!empty($request->length))
<br>length : {{ $request->length }}
@endif
@if (!empty($request->type))
<br>type: {{ $request->type }}
@endif
@if (!empty($request->frequency))
<br>frequency :{{ $request->frequency }}
@endif
@if (!empty($request->startingDate))
<br>startingDate : {{ $request->startingDate }}
@endif
@if (!empty($request->number))
<br>number :{{ $request->number }}
@endif
@if ($request->sure=='on')
<br>not sure
@endif
@if (!empty($request->mandatory))
<br>mandatory :{{ $request->mandatory }}
@endif
@if (!empty($request->location))
<br>location :{{ $request->location }}
@endif
@if (!empty($request->budget))
<br>budget :{{ $request->budget }}
@endif
@if (!isset($request->dailyBudget))
<br>dailyBudget :{{ $request->dailyBudget }}
@endif
