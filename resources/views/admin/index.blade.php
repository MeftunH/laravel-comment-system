@extends('layouts.backend.app')
@section('content')
<div class="col-xl-3 col-lg-6">
    <section class="card">
        <div class="twt-feed blue-bg">
            <div class="corner-ribon black-ribon">
                <i class="fa fa-twitter"></i>
            </div>
            <div class="fa fa-twitter wtt-mark"></div>

            <div class="media">
                <a href="#">
                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{asset('backend/images/admin.jpg')}}">
                </a>
                <div class="media-body">
                    <h2 class="text-white display-6">Jim Doe</h2>
                    <p class="text-light">Project Manager</p>
                </div>
            </div>
        </div>
        <div class="weather-category twt-category">
            <ul>
                <li class="active">
                    <h5>750</h5>
                    Tweets
                </li>
                <li>
                    <h5>865</h5>
                    Following
                </li>
                <li>
                    <h5>3645</h5>
                    Followers
                </li>
            </ul>
        </div>
        <div class="twt-write col-sm-12">
            <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
        </div>
        <footer class="twt-footer">
            <a href="#"><i class="fa fa-camera"></i></a>
            <a href="#"><i class="fa fa-map-marker"></i></a>
            New Castle, UK
            <span class="pull-right">
                            32
                        </span>
        </footer>
    </section>
</div>


<div class="col-xl-3 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-file text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Post count</div>
                    <div class="stat-digit">1,012</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-xl-3 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">User count</div>
                    <div class="stat-digit">961</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-comment-alt text-warning border-warning"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Comment count</div>
                    <div class="stat-digit">770</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Recent comments</strong>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
