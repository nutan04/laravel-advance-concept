<h3 class="text-center page-title">Search for user by ID</h3>

@if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif

<form action="{{ route('users.search') }}" method="POST">
    @csrf
    <div class="form-group">
    <input id="user_id" class="form-control" name="user_id" type="text" value="{{ old('user_id') }}" placeholder="User ID">
    </div>
    <input class="btn btn-info" type="submit" value="Search">
    </form>
