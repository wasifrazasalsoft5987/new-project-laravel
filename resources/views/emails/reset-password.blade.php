<div>
    <h2>Hi {{ $user->first_name }},</h2>
    <p>
        Need to reset your password?<br>
        Use your secret code!
    </p>
    <h3>{{ $code }}</h3>
    <p>
        If you did not forget your password, you can ignore this email.
    </p>
    <p>
        Regards,
        <br>
        Team Lip Sync
    </p>
</div>