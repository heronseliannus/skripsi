@extends('home')

@section('title') cek nilai
@endsection

@section('content')

<div class="col-xs-12 col-md-8">
    <form action="process.php" id="contact-form" method="post" class="contact-form">
        <div class="form-double">
            <input type="text" id="form-name" name="form-name" placeholder="First name" class="form-control" required="required">
            <input type="text" id="form-name" name="form-name" placeholder="Last name" class="form-control" required="required">
        </div>
    </form>
</div>
@endsection