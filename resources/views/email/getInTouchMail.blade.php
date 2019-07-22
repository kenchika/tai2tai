
email :{{ $request->email }}
<br>name :{{ $request->name }}
<br>phoneNumber :{{ $request->phoneNumber }}
@if (!empty($request->wechatid))
<br>wechatid :{{ $request->wechatid }}
@endif
<br>company :{{ $request->company }}
<br>description :{{ $request->description }}
