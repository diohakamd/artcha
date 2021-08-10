{{-- font awesome --}}
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<link rel="stylesheet" href="{{ asset('css/bs-stepper.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/form-wizard.css') }}">
<style>
    input.artcha-checkbox[type="checkbox"] {
        border: 3px solid rgb(88, 88, 88) !important;
        background-color: rgb(255, 255, 255);
        border-radius: 20%;
        -webkit-appearance: none;
        width: 25pt;
        height: 27pt;
        margin-top: 42px;
        position: relative;
        z-index: 1;
    }

    input.artcha-checkbox[type="checkbox"]:checked {
        border: 3px solid rgb(255, 255, 255) !important;
        background-color: rgb(71, 238, 85);
        border-radius: 20%;
        -webkit-appearance: none;
        width: 35px;
        height: 40px;
        margin-top: 40px;
        z-index: 1;
    }

    .checkmark {
        position: relative;
        margin-top: -38px;
        margin-left: -9px;
        color: rgb(255, 255, 255);
        z-index: 100;
    }

    .hr-modal {
        border: 1px solid white;
    }

    .card-modal {
        border: 2px solid #c9c5d1;
    }

    .image-checkbox input[type="checkbox"] {
        display: none;
    }

    .image-checkbox-checked {
        border: 5px solid transparent;
        border-color: #69ff05;
        box-shadow: 3px 2px 10px #64e93c;
    }

    .img-responsive {
        width: 180px;
    }

    .image-box {
        padding: 30px;
        border: 3px solid transparent;
        border-color: #69a5d3;
        box-shadow: 2px 2px 20px #74abd8;
    }

</style>

<div class="col-md-6 offset-md-4 mb-3 mt-2">
    <div id="artcha-alert">
        <div class="alert alert-warning ml-3"  role="alert">
            <i>Fill the CAPTCHA bellow to continue</i>
        </div>
    </div>
    <div class="form-check" style="margin-top: -10px;">
        <div id="artcha" data-toggle="modal" data-target="#artcha-modal" data-backdrop="static" data-keyboard="false">
            <div class="card bg-warning mb-3 card-modal">
                <div class="row g-0">
                    <div class="col-md-10">
                        <img src="{{ asset('artcha/icon/logo.jpg') }}" style="width:100%;">
                    </div>
                    <div class="col-md-2">
                        <input class="form-check-input artcha-checkbox" type="checkbox" value="" id="artcha-checkbox"
                            disabled>
                        <p class="checkmark"><i class="fas fa-check"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="artcha-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl " style="width: 900px; margin:auto" role="document">
            <div class="modal-content bg-dark text-white">
                <div class="modal-body">
                    <!-- Modern Horizontal Wizard -->
                    <section class="modern-horizontal-wizard">
                        <div class="bs-stepper wizard-modern modern-wizard-example">
                            <div class="bs-stepper-header">
                                <div class="step" data-target="#phone-number">
                                    <button type="button" class="step-trigger">
                                        <span class="bs-stepper-box">
                                            <i class="fas fa-phone-square-alt"></i>
                                        </span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Phone Number</span>
                                            <span class="bs-stepper-subtitle">Sending Link For Scanning ARTCHA</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="line">
                                    <i data-feather="chevron-right" class="font-medium-2"></i>
                                </div>
                                <div class="step" data-target="#captcha">
                                    <button type="button" id="artcha-form" class="step-trigger" disabled>
                                        <span class="bs-stepper-box">
                                            <i class="fas fa-barcode"></i>
                                        </span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Scanning ARTCHA</span>
                                            <span class="bs-stepper-subtitle">Scan ARTCHA With Link Sent</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="line">
                                    <i data-feather="chevron-right" class="font-medium-2"></i>
                                </div>
                                <div class="step" data-target="#result">
                                    <button type="button" id="result-view" class="step-trigger" disabled>
                                        <span class="bs-stepper-box">
                                            <i class="fas fa-barcode"></i>
                                        </span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title">Result</span>
                                            <span class="bs-stepper-subtitle">Result of your answer</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <hr class="hr-modal">
                            <div class="bs-stepper-content bg-dark text-white">
                                <div id="phone-number" class="content">
                                    <div class="content-header">
                                        <h5 class="mb-0">Phone Number</h5>
                                        <small class="text-muted text-white">Enter Your Phone Number</small>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-md-2">
                                            <input type="text" value="+62" class="form-control pr-1" disabled>
                                        </div>
                                        <div class="col-md-8" style="margin-left:-5%;">
                                            <input type="text" id="phone" class="form-control" aria-describedby="no_rw"
                                                placeholder="Phone Number"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                maxlength="12" /><input type="hidden" id="ip-address">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" id="send-sms" class="btn btn-primary"><i
                                                    class="fas fa-paper-plane"></i> Send
                                            </button>
                                            <div class="countdown"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="captcha" class="content">
                                    <div class="content-header">
                                        <h5 class="mb-0">ARTCHA</h5>
                                        <small><b>"Click"</b> Image that shown 3D Object by scanning with the link sent
                                            to your phone</small>
                                    </div>
                                    <div class="form-group bg-secondary image-box">
                                        <div class="row ">
                                            <div class="col-md-4 nopad text-center">
                                                <label class="image-checkbox" id="2">
                                                    <img class="img-responsive"
                                                        src="{{ asset('artcha/marker_image/pattern-2.png') }}" />
                                                    <input type="checkbox" name="image[]" value="" />
                                                </label>
                                            </div>
                                            <div class="col-md-4 nopad text-center">
                                                <label class="image-checkbox" id="3">
                                                    <img class="img-responsive"
                                                        src="{{ asset('artcha/marker_image/pattern-3.png') }}" />
                                                    <input type="checkbox" name="image[]" value="" />
                                                </label>
                                            </div>
                                            <div class="col-md-4 nopad text-center">
                                                <label class="image-checkbox" id="4">
                                                    <img class="img-responsive p-0"
                                                        src="{{ asset('artcha/marker_image/pattern-4.png') }}" />
                                                    <input type="checkbox" name="image[]" value="" />
                                                </label>
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4 nopad text-center">
                                                <label class="image-checkbox" id="5">
                                                    <img class="img-responsive"
                                                        src="{{ asset('artcha/marker_image/pattern-5.png') }}" />
                                                    <input type="checkbox" name="image[]" value="" />
                                                </label>
                                            </div>
                                            <div class="col-md-4 nopad text-center">
                                                <label class="image-checkbox" id="6">
                                                    <img class="img-responsive"
                                                        src="{{ asset('artcha/marker_image/pattern-6.png') }}" />
                                                    <input type="checkbox" name="image[]" value="" />
                                                </label>
                                            </div>
                                            <div class="col-md-4 nopad text-center">
                                                <label class="image-checkbox" id="7">
                                                    <img class="img-responsive p-0"
                                                        src="{{ asset('artcha/marker_image/pattern-7.png') }}" />
                                                    <input type="checkbox" name="image[]" value="" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="btn-counter" value="2">
                                    <input type="hidden" id="key"><br>
                                    <div class="d-flex justify-content-between">
                                        {{-- check-btn --}}
                                        <button type="button" class="btn btn-block btn-success"
                                            id="check-btn">Check</button>
                                    </div>
                                </div>
                                <div id="result" class="content">

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Modern Horizontal Wizard -->
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/form-wizard.js') }}"></script>
<script src="{{ asset('js/bs-stepper.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $("button[type=submit]").css('visibility','hidden');
    });
    function countdownBtn() {
        $('#send-sms').attr('disabled', true);
        $('.countdown').css('visibility', 'show');
        var timer2 = "3:00";
        var interval = setInterval(function() {
            var timer = timer2.split(':');
            //by parsing integer, I avoid all extra string processing
            var minutes = parseInt(timer[0], 10);
            var seconds = parseInt(timer[1], 10);
            --seconds;
            minutes = (seconds < 0) ? --minutes : minutes;
            if (minutes < 0) clearInterval(interval);
            seconds = (seconds < 0) ? 59 : seconds;
            seconds = (seconds < 10) ? '0' + seconds : seconds;
            //minutes = (minutes < 10) ?  minutes : minutes;
            $('.countdown').html(minutes + ':' + seconds);
            timer2 = minutes + ':' + seconds;

            if (minutes == 0 && seconds == 0) {
                console.log('habis');
                $('#send-sms').attr('disabled', false);
                $('.countdown').css('visibility', 'hidden');
            }
        }, 1000);
    }

    function randomNumber() {

        const num = [];
        num[0] = 2;
        num[1] = 2;
        num[2] = 2;

        while (num[0] == num[1] || num[0] == num[2] || num[1] == num[2]) {
            num[0] = Math.floor(Math.random() * (6)) + num[0];
            num[1] = Math.floor(Math.random() * (6)) + num[1];
            num[2] = Math.floor(Math.random() * (6)) + num[2];
        }

        return num.sort();
    }

    $('.card-modal').mouseenter(function() {
        $(this).css('box-shadow', '4px 10px 10px 10px #cce3f6');
    });

    $('.card-modal').mouseleave(function() {
        $(this).css('box-shadow', 'none');
    });

    $('#send-sms').click(function() {
        var num = randomNumber();
        if ($('#phone').val().length < 1) {
            $('#phone').css('box-shadow', '2px 2px 20px rgba(200, 0, 0, 0.85)');
        } else {
            var phone = '62' + $('#phone').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: '/sms',
                data: {
                    'phone': phone,
                    'num': num
                },
                success: function(data) {
                    alert("Link Sent to +" + phone);
                    $('#artcha-form').attr('disabled', false)
                    $('#artcha-form').trigger('#send-sms').click();
                    let key = num[0] + ',' + num[1] + ',' + num[2];
                    console.log(key);
                    countdownBtn();
                    let check = checkKey("2,4,7");
                },
                error: function() {
                    alert("Phone number invalid");
                }
            });
        }
    });

    function checkKey(key) {
        $('#check-btn').click(function() {
            var checked = [],
                selected = '';
            for (var i = 0; i < $(".image-checkbox-checked").length; i++) {
                checked[i] = $(".image-checkbox-checked")[i].id;
            }
            selected = checked.toString();
            if (key != selected) {
                $('#result').html(
                    '<div class="card bg-danger"><div class="card-body text-center"><img style="width: 30%; border: 5px solid rgb(255, 255, 255); border-radius: 50%;" src="{{ asset('artcha/icon/false.svg') }}" alt=""> <div style="margin-left:-21px; margin-bottom:-21px; width: 818px;" class="alert alert-danger mt-4" role="alert"> <span class=""><b>CAPTCHA INVALID, <i>PLEASE TRY AGAIN</i> !</b></span></div></div></div><div class="text-center mt-5"><button type="button" id="reset-artcha" class="btn btn-outline-light btn-lg">Try Again</button></div>'
                );
                $('#result-view').attr('disabled', false);
                $('#result-view').trigger('#send-sms').click();
                $('#reset-artcha').click(function() {
                    var count = $('#btn-counter').val();
                    var newKey = randomNumber();
                    if (count > 0) {
                        count = parseInt(count) - 1;
                        $('#btn-counter').val(count);
                        $('#artcha-form').trigger('#reset-artcha').click();
                    } else {
                        key = '8,9,0';
                        retry(newKey);
                    }
                });

            } else {
                $('#result').html(
                    '<div class="card bg-success"><div class="card-body text-center"><img style="width: 30%; border: 5px solid rgb(255, 255, 255); border-radius: 50%;" src="{{ asset('artcha/icon/true.svg') }}" alt=""><div style="margin-left:-21px; margin-bottom:-21px; width: 818px;" class="alert alert-success mt-4" role="alert"><span class=""><b>CAPTCHA VALID</b></span></div></div></div>'
                );
                $('#result-view').attr('disabled', false);
                $('#result-view').trigger('#send-sms').click();
                $('#artcha-alert').html(null);
                setTimeout("$('#artcha-modal').modal('hide');", 1000);
                $('#artcha-checkbox').attr('checked', 'checked');
                $("#artcha").attr('data-toggle', 'valid');
                $("button[type=submit]").css('visibility','visible');
            }
        });
    }

    function retry(newKey) {
        $('#result').html(
            '<div class="alert alert-danger mt-4" role="alert"><span class=""><b>CAPTCHA Failed</b>, Your chance are out of limit</span></div><div class="card"><div class="card-header text-center"><p class="text-muted">The CAPTCHA will be reset</p><p class="text-dark" style="margin-top: -10px;">Please Click <span class="badge badge-primary">"Send"</span> to get a new link</p></div><div class="card-body text-center"> <div class="row"><div class="col-md-2"><input type="text" value="+62" class="form-control pr-1" disabled></div><div class="col-md-8" style="margin-left:-5%;"><input type="text" id="phone-retry" class="form-control" placeholder="Phone Number"oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength="12" /><input type="hidden" id="ip-address"></div><div class="col-md-2"><button type="button" id="send-sms-retry" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Send</button></div></div></div></div>'
        );
        $('#phone-retry').val($('#phone').val());
        var phone = '62' + $('#phone-retry').val();
        $('#send-sms-retry').click(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content')
                }
            });
            $.ajax({
                type: 'post',
                url: '/sms',
                data: {
                    'phone': phone,
                    'num': newKey
                },
                success: function(data) {
                    alert("Link Sent to +" + phone);
                    $('#artcha-form').trigger('#send-sms').click();
                    let strNewKey = newKey[0] + ',' + newKey[1] +
                        ',' + newKey[2];
                    console.log(strNewKey);
                    let check = checkKey(strNewKey);
                    $('#btn-counter').val(2);
                }
            });
        });
    }

    $('#check-btn').click(function() {
        var count = $('#btn-counter').val();
    });
    $('#phone').keypress(function() {
        $(this).css('box-shadow', '2px 2px 20px #cce3f6');
    });

    // sync the state to the input
    $(".image-checkbox").click(function(e) {
        $(this).toggleClass('image-checkbox-checked');
        var $checkbox = $(this).find('input[type="checkbox"]');
        $checkbox.prop("checked", !$checkbox.prop("checked"))
        e.preventDefault();
    });
</script>
