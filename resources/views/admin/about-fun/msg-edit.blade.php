@extends('admin.master')

@section('title')
   Function Message Edit
@endsection

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Function Message Edit</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Function Message</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Function Message Edit</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Function Message </h3>
                            </div>
                            <div class="card-body">
                                <p class="text-success">{{ session('message') }}</p>
                                <form class="needs-validation" method="POST" action="{{ route('msg-update') }}"
                                   >
                                    @csrf

                                   
                                    <div class="form-row">
                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 mb-3">
                                            <label for="name">Message</label>
                                           <textarea name="msg" id="ckeditor" cols="30" rows="10">{!!$fun_msg->msg !!}</textarea>
                                        </div>
                                    </div>
                                   


                                    <button class="btn btn-primary" type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
<style>
    .input-group-append {
  cursor: pointer;
}
</style>
<script>
    $(function(){
  $('#datepicker').datepicker();
});
</script>
 