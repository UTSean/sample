<form class="" action="{{ route('statuses.store') }}" method="post">
    @include('shared._errors')
    {{ csrf_field() }}
    <textarea name="content" rows="3" class="form-control" placeholder="Say something new.">{{ old('content') }}</textarea>
    <button type="submit" class="btn btn-primary pull-right">Submit</button>
</form>
