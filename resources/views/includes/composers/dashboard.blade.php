<!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $events->count() }}</h3>

          <p>Total Events</p>
        </div>
        <div class="icon">
          <i class="fa fa-calendar"></i>
        </div>
        <a href="{{ url(config('backpack.base.route_prefix').'/event') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $staff->count() }}</h3>

          <p>Total Staff</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="{{ url(config('backpack.base.route_prefix').'/staff') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $alumni->count() }}</h3>

          <p>Total Alumni</p>
        </div>
        <div class="icon">
          <i class="fa fa-user-times"></i>
        </div>
        <a href="{{ url(config('backpack.base.route_prefix').'/alumni') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $documents->count() }}</h3>

          <p>Total Documents</p>
        </div>
        <div class="icon">
          <i class="fa fa-file-text"></i>
        </div>
        <a href="{{ url(config('backpack.base.route_prefix').'/document') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
<!-- end of styled panel-->
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="panel panel-default" style="border-top: 4px solid gray;">
        <!-- Default panel contents -->
        <div class="panel-heading">Recent Events</div>
        <!-- Table -->
        <table class="table table-striped table-responsive">
          <thead>
            <tr>
              <th>Title</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $recentEvents as $recentEvent )
            <tr>
              <td>{{ substr($recentEvent->title, 0, 40) }}</td>
              <td><?php echo substr($recentEvent->description, 0, 40) ?></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
  </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="panel panel-default" style="border-top: 4px solid gray;">
        <!-- Default panel contents -->
        <div class="panel-heading">Recent Alumni</div>
        <!-- Table -->
        <table class="table table-striped table-responsive">
          <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Contact</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $recentAlumnis as $recentAlumni )
            <tr>
              <td>{{ substr($recentAlumni->firstname, 0, 40) }}</td>
              <td>{{ substr($recentAlumni->lastname, 0, 40) }}</td>
              <td>{{ substr($recentAlumni->contact, 0, 40) }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
  </div>
</div>
