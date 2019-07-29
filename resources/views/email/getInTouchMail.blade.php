
email :{{ $request->email }}
<br>name :{{ $request->name }}
<br>phoneNumber :{{ $request->phoneNumber }}
@if (!empty($request->wechatid))
<br>wechatid :{{ $request->wechatid }}
@endif
@if (!empty($request->company))
<br>company :{{ $request->company }}
@endif

<br>description :{{ $request->description }}
