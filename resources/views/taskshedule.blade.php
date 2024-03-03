<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif
    <form method="post" action="{{route('addData')}}">
      @csrf
      <h2>Employee Details</h2><br>
      <div class="form-group">
        <label>Id</label>
        <input type="number" name="e_id" class="form-control" placeholder="Enter Employee_Id">
      </div>
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="e_name" class="form-control" placeholder="Enter Your Name">
      </div>
      <div class="form-group">
        <label>Email address</label>
        <input type="email" name="e_email" class="form-control" placeholder="Enter Your Email">
      </div>
      <div class="form-group">
        <label>Manager Email Address</label>
        <input type="email" name="manager_email" class="form-control" placeholder="Enter Your Email">
      </div>
      <div class="form-group">
        <h2>Task Details</h2><br>
        <div class="form-group">
          <label>Monday</label>
          <input type="text" name="t_mon" class="form-control" placeholder="Task done by Monday">
        </div>

        <div class="form-group">
          <label>Tuesday</label>
          <input type="text" name="t_tue" class="form-control" placeholder="Task done by Tuesday">
        </div>

        <div class="form-group">
          <label>Wednesday</label>
          <input type="text" name="t_wed" class="form-control" placeholder="Task done by Wednesday">
        </div>

        <div class="form-group">
          <label>Thursday</label>
          <input type="text" name="t_thu" class="form-control" placeholder="Task done by Thursday">
        </div>

        <div class="form-group">
          <label>Friday</label>
          <input type="text" name="t_fri" class="form-control" placeholder="Task done by Friday">
        </div>
      </div>
      <div class="form-group"></div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
