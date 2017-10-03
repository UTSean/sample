<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign up confirm page.</title>
    </head>
    <body>
        <h1>Thank you for signing up in our Website</h1>
        <p>
            Please click this link to finish your registration:
            <a href="{{ route('confirm_email', $user->activation_token) }}">
                {{ route('confirm_email', $user->activation_token) }}
            </a>
        </p>

        <p>
            If this is not your own Registration, please ignore this email.
        </p>
    </body>
</html>
