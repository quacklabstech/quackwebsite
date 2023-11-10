@extends('master_layout')
@section('csslink')
<style>
    .select-box-section {
        position: relative;
    }

    select,
    textarea {
        display: block;
        width: 100%;
        font-size: 16px;
        font-weight: 400;
        color: #60697b;
        background-color: #fefefe;
        background-clip: padding-box;
        border-radius: .4rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        padding: 16px 20px 16px 20px;
        border: 1px solid #e6e8ef;
        box-shadow: 0 4px 16px rgba(215, 222, 241, .4), 0 11px 24px rgba(215, 222, 241, .2);

    }

    select {
        appearance: none;
    }

    .select-box-section i {
        content: '\f063';
        font-family: "Font Awesome 6 Free";
        color: #60697b;
        font-size: 16px;

        right: 20px;
        /*Adjust for position however you want*/

        top: 18px;
        padding: 0 0 2px;
        /* border-bottom: 1px solid #999; */
        /*left line */

        position: absolute;
        pointer-events: none;
    }

    textarea::placeholder {
        font-size: 16px;
        font-weight: 400;
        color: #60697b;
    }
    .officebg{
        position: relative;
    }
    .officebg::before{
        position: absolute;
        content: '';
        left: 0 ;
        top: 29%;
        right: 0;
        bottom: 0;
        background: url('images/others/office.jpg');
    }
    .officebg::after{
        position: absolute;
        content: '';
        left: 0 ;
        top: 29%;
        right: 0;
        bottom: 0;
        opacity: 0.85;
        background: #692e97;
        
    }
</style>
@endsection
@section('content')
<!-- Header title -->
<section class="header-title head-opacity" data-background="{{asset('images/banner/office.jpg')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <!-- <h1 class="mb15">Submit Your Service Order</h1> -->
            </div>
        </div>
    </div>
</section>
<!-- Header title end -->

<!--page head-->
<section class="page-heading-sec officebg  sec-pad get-demo">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 get-demo-inner-container">
                <div class="get-quote-section">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-12 text-center mb-5">
                                <h4 class="mb-2">Submit Your Service Order</h4>
                                <p>Reach out to us from our contact form and we will get back to you shortly.</p>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="inputBox">
                                    <input type="text" placeholder="" class="floatingInput">
                                    <span class="inputTitle">Full Name *</span>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="inputBox">
                                    <input type="text" placeholder="" class="floatingInput">
                                    <span class="inputTitle">Email *</span>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="inputBox">
                                    <input type="text" placeholder="" class="floatingInput">
                                    <span class="inputTitle"> Skype ID </span>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="inputBox">
                                    <input type="text" placeholder="" class="floatingInput">
                                    <span class="inputTitle">Country * </span>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="select-box-section job-page-select">
                                    <i class="fa-solid fa-angle-down"></i>
                                    <select class="">
                                        <option value="0"> Project Type *</option>
                                        <option value="1">UX/UI Design - Website/Mobile App</option>
                                        <option value="2">PSD to HTML</option>
                                        <option value="3">WordPress Development</option>
                                        <option value="">JavaScript Development</option>
                                        <option value="">Other Framework Project</option>
                                        <option value="">QA Services</option>
                                        <option value="">SEO/Digital Marketing</option>
                                        <option value="">Website Maintenance</option>
                                        <option value="">Managed Hosting</option>
                                        <option value="">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="select-box-section job-page-select">
                                    <i class="fa-solid fa-angle-down"></i>
                                    <select class="">
                                        <option value="0">Work Type *</option>
                                        <option value="1">Hourly</option>
                                        <option value="2">Fixed Cost</option>
                                        <option value="3">Monthly</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 fieldsets mb-4">
                                <textarea name="" placeholder="Project description"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1" checked="checked">
                                    <label class="custom-control-label label-f-form" for="customCheck">I agree to
                                        the <a href="javascript:void(0)">Terms &amp; Conditions</a> of
                                        Quacklabs.</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="fieldsets mt20"> <button type="submit" name="submit" class="ree-btn  ree-btn-grdt1 w-100">Send your enquiry <i class="fas fa-arrow-right fa-btn"></i></button> </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
<!--page head end-->
@endsection