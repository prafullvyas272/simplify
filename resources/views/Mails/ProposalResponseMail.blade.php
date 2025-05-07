<!DOCTYPE html>
<html>
<head><title>Unify</title></head>
<body marginheight="0" marginwidth="0" topmargin="0">
<div style="border:none;width:100%;background-color:#dcb4e6;color:#333;font-family:Arial;font-size:14px;">
    <div style="max-width:500px;margin:auto;background:#dcb4e6;padding:20px">
        <img src="https://useunify.com/assets/images/logo.png" width="100px" style="margin:auto;display:block" alt="">
    </div>
    <div style="padding:30px 20px 20px 20px;max-width:500px;margin:0px auto;background-color:#ffffff;">
        <div style="font-size:24px;font-family:Arial; text-align:center; font-weight:bold">
                You Proposal to {{$coach->first_name }} {{$coach->last_name}} Has Been  <span style="color:purple"> {{$proposal->status->name}} </span> !
        </div>
        {{-- <div style="margin: 50px 0px; text-align: center">
            @if($proposal->status == \App\Enums\ProposalStatusEnum::Accepted)
                <a href="{{route("coaches.calendar" , $coach->id)}}" style="text-decoration:none;;margin:auto auto ; ;text-align:center;color:white; background-color:#170048; padding:20px 40px; border-radius:45px;"> Check The Coach Calendar To Reserve a Session </a>
            @elseif($proposal->status == \App\Enums\ProposalStatusEnum::Declined)
                <a href="{{route("users.show_coach" , $coach->id)}}" style="text-decoration:none;;margin:auto auto ; ;text-align:center;color:white; background-color:#170048; padding:20px 40px; border-radius:45px;"> Coach Has Declined The Session </a>
            @endif
        </div> --}}

    </div>
    <div style="text-align:center;color:#222;padding:10px 0 20px 0;font-size:12px;font-family:Arial;">
        If you have any questions or need assistance, feel free <br>
        to reach out to our support team at <a href="mailto:support@useunify.com">support@useunify.com</a>
    </div>
</div>
</body>
</html>
