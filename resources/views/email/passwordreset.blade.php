<h4>Hi {{ $user->fname }}, You requested for a password reset</h4>

<p>click <a href="{{ route('reset-page', $user->password_reset->token) }}">here</a> or copy the link below and paste on
    your browser to reset your password</p>

<a
    href="{{ route('reset-page', $user->password_reset->token) }}">{{ route('reset-page', $user->password_reset->token) }}</a>

<strong>NB: Ignore this mail if you did not initiate a password reset</strong>
