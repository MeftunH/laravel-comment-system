@extends('layouts.frontend.app')

@section('content')
    <section>
        <div class="gap gray-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" id="page-contents">

                            <div class="col-lg-12">

                                <div class="loadMore">
                                    @foreach($posts as $post)

                                        <div class="central-meta item">
                                            <div class="user-post">
                                                <div class="friend-info">
                                                    <div class="friend-name">
                                                        <ins><a href="time-line.html" title="">{{$post->user->name}}</a>
                                                        </ins>
                                                        <span>{{$post->created_at}}</span>
                                                        <h5>Title: {{$post->title}}</h5>
                                                    </div>
                                                    <div class="post-meta">
                                                        <img src='{{asset('app/post/'.$post->image)}}'
                                                             alt="{{$post->image}}">

                                                        <div class="description">
                                                            <p>
                                                                Description: {{$post->body}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="coment-area">
                                                    <ul class="we-comet">
                                                        {{--                                                            <li>--}}
                                                        {{--                                                                <div class="we-comment">--}}
                                                        {{--                                                                    <div class="coment-head">--}}
                                                        {{--                                                                        <h5><a href="time-line.html" title="">Jason borne</a></h5>--}}
                                                        {{--                                                                        <span>1 year ago</span>--}}
                                                        {{--                                                                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                    <p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>--}}
                                                        {{--                                                                </div>--}}
                                                        {{--                                                                <ul>--}}
                                                        {{--                                                                    <li>--}}
                                                        {{--                                                                        <div class="comet-avatar">--}}
                                                        {{--                                                                            <img src="images/resources/comet-2.jpg" alt="">--}}
                                                        {{--                                                                        </div>--}}
                                                        {{--                                                                        <div class="we-comment">--}}
                                                        {{--                                                                            <div class="coment-head">--}}
                                                        {{--                                                                                <h5><a href="time-line.html" title="">alexendra dadrio</a></h5>--}}
                                                        {{--                                                                                <span>1 month ago</span>--}}
                                                        {{--                                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>--}}
                                                        {{--                                                                            </div>--}}
                                                        {{--                                                                            <p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>--}}
                                                        {{--                                                                        </div>--}}
                                                        {{--                                                                    </li>--}}
                                                        {{--                                                                    <li>--}}
                                                        {{--                                                                        <div class="comet-avatar">--}}
                                                        {{--                                                                            <img src="images/resources/comet-3.jpg" alt="">--}}
                                                        {{--                                                                        </div>--}}
                                                        {{--                                                                        <div class="we-comment">--}}
                                                        {{--                                                                            <div class="coment-head">--}}
                                                        {{--                                                                                <h5><a href="time-line.html" title="">Olivia</a></h5>--}}
                                                        {{--                                                                                <span>16 days ago</span>--}}
                                                        {{--                                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>--}}
                                                        {{--                                                                            </div>--}}
                                                        {{--                                                                            <p>i like lexus cars, lexus cars are most beautiful with the awesome features, but this car is really outstanding than lexus</p>--}}
                                                        {{--                                                                        </div>--}}
                                                        {{--                                                                    </li>--}}
                                                        {{--                                                                </ul>--}}
                                                        {{--                                                            </li>--}}
                                                        {{--                                                            <li>--}}
                                                        {{--                                                                <div class="comet-avatar">--}}
                                                        {{--                                                                    <img src="images/resources/comet-1.jpg" alt="">--}}
                                                        {{--                                                                </div>--}}
                                                        {{--                                                                <div class="we-comment">--}}
                                                        {{--                                                                    <div class="coment-head">--}}
                                                        {{--                                                                        <h5><a href="time-line.html" title="">Donald Trump</a></h5>--}}
                                                        {{--                                                                        <span>1 week ago</span>--}}
                                                        {{--                                                                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                    <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel--}}
                                                        {{--                                                                        <i class="em em-smiley"></i>--}}
                                                        {{--                                                                    </p>--}}
                                                        {{--                                                                </div>--}}
                                                        {{--                                                            </li>--}}
                                                        {{--                                                            <li>--}}
                                                        {{--                                                                <a href="#" title="" class="showmore underline">more comments</a>--}}
                                                        {{--                                                            </li>--}}
                                                        @foreach($post->comments as $comment)
                                                            <li>
                                                                <div class="we-comment">
                                                                    <div class="coment-head">
                                                                        <h5><a href="time-line.html"
                                                                               title="">{{$comment->user->name}}</a>
                                                                        </h5>
                                                                        <span>{{$comment->created_at->format('D, d M Y H:i')}}</span>
                                                                        <a class="we-reply" href="#" title="Reply"><i
                                                                                class="fa fa-reply"></i></a>
                                                                    </div>
                                                                    <p>{{$comment->comment}}</p>
                                                                </div>
                                                                <br/>
                                                                <div id="reply-form-{{$comment->id}}">
                                                                    <form
                                                                        action="{{route('reply.store',$comment->id)}}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="col-lg-12">
                                                                            @guest()
                                                                                <textarea class="form-control mb-1"
                                                                                          name="comment"
                                                                                          placeholder="Login to comment"
                                                                                          disabled></textarea>
                                                                            @else
                                                                                <textarea
                                                                                    id="reply-form-{{$comment->id}}-text"
                                                                                    cols="60"
                                                                                    rows="2"
                                                                                    class="form-control mb-10"
                                                                                    name="message"
                                                                                    placeholder="Reply"
                                                                                    onfocus="this.placeholder = ''"
                                                                                    onblur="this.placeholder = 'Reply'"
                                                                                    required=""
                                                                                ></textarea>
                                                                            @endguest
                                                                        </div>
                                                                        <button type="submit"
                                                                                class="btn-reply text-uppercase ml-3">
                                                                            Reply
                                                                        </button>
                                                                        <ul>
                                                                            @if($comment->replies->count() > 0)
                                                                                @foreach ($comment->replies as $reply)
                                                                            <li>

                                                                                <div class="we-comment">
                                                                                    <div class="coment-head">
                                                                                        <h5><a href="#">{{$reply->user->name}}</a></h5>
                                                                                        <span>{{$reply->created_at->format('D, d M Y H:i')}}</span>
                                                                                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                                    </div>
                                                                                    <p>  {{$reply->message}}</p>
                                                                                </div>

                                                                            </li>
                                                                                @endforeach
                                                                            @else
                                                                            @endif
                                                                        </ul>

                                                                    </form>
                                                                </div>
                                                        @endforeach
                                                        <li class="post-comment">
                                                            <div class="comet-avatar">
                                                                <img src="images/resources/comet-1.jpg" alt="">
                                                            </div>
                                                            <div class="post-comt-box">
                                                                <form action="{{route('comment.store',$post->id)}}"
                                                                      method="POST">
                                                                    @csrf
                                                                    @guest()
                                                                        <textarea class="form-control mb-1"
                                                                                  name="comment"
                                                                                  placeholder="Login to comment"
                                                                                  disabled></textarea>
                                                                    @else
                                                                        <textarea class="form-control mb-1"
                                                                                  name="comment"
                                                                                  placeholder="Post your comment"
                                                                                  required=""></textarea>
                                                                        <button class="btn btn-primary"
                                                                                style="color: #0e90d2" type="submit">
                                                                            Comment
                                                                        </button>
                                                                    @endguest
                                                                </form>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>


                                            </div>

                                        </div>
                                    @endforeach

                                </div>
                            </div><!-- center meta -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('footer')
    <script type="text/javascript">
        function showReplyForm(commentId, user) {
            var x = document.getElementById(`reply-form-${commentId}`);
            var input = document.getElementById(`reply-form-${commentId}-text`);
            if (x.style.display === "none") {
                x.style.display = "block";
                input.innerText = `@${user} `;
            } else {
                x.style.display = "none";
            }
        }
    </script>
@endpush
