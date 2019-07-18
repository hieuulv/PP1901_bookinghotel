@extends('layouts.home_display')

@section('content')

    <div class="home">
        <img src="/upload_image/myroom.jpg" alt="">
    </div>


    <div class="site-section">
        <div class="container bootstrap snippet">
            <div class="row">
                <div class="col-sm-3"><!--left col-->

                    <div class="text-center">
                        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png"
                             class="avatar img-circle img-thumbnail"
                             alt="avatar">
                        <h6>Upload a different photo...</h6>
                        <input type="file" class="text-center center-block file-upload">
                    </div>

                </div><!--/col-3-->
                <div class="col-sm-9">

                    <div class="tab-pane" id="settings">
                        <hr>
                        <form class="form" action="#" method="post">

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label><h4>Họ và Tên</h4></label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label><h4>Sinh nhật</h4></label>
                                    <input type="text" class="form-control" name="birthday">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="phone"><h4>Phone</h4></label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                           placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success pull-right" type="submit"><i
                                                class="glyphicon glyphicon-ok-sign"></i> Save
                                    </button>
                                    <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                                </div>
                            </div>
                        </form>
                    </div>


                </div><!--/tab-content-->

            </div><!--/col-9-->
        </div>
    </div>



@endsection
