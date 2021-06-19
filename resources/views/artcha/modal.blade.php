{{-- font awesome --}}
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<link rel="stylesheet" href="{{ asset('css/bs-stepper.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/form-wizard.css') }}">

<div class="col-md-6 offset-md-4 mb-3">
    <h4 id="artcha" data-toggle="modal" data-target="#exampleModalCenter">
        FILL THIS CAPTCHA (ARTCHA:Augmented Reality Captcha)
    </h4>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" style="width: 800px; margin:auto" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Modern Horizontal Wizard -->
                    <section class="modern-horizontal-wizard">
                        <div class="bs-stepper wizard-modern modern-wizard-example">
                            <div class="bs-stepper-header">
                                <div class="step" data-target="#account-details-modern">
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
                                <div class="step" data-target="#personal-info-modern">
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
                            </div>
                            <div class="bs-stepper-content">
                                <div id="account-details-modern" class="content">
                                    <div class="content-header">
                                        <h5 class="mb-0">Phone Number</h5>
                                        <small class="text-muted">Enter Your Phone Number</small>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <input type="text" value="+62" class="form-control pr-1" disabled>
                                        </div>
                                        <div class="col-md-7" style="margin-left:-5%;">
                                            <input type="text" id="phone" class="form-control" aria-describedby="no_rw"
                                                placeholder="Phone Number"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                maxlength="12" /><input type="hidden" id="ip-address">
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" id="send-sms" class="btn btn-primary"><i
                                                    class="fas fa-paper-plane"></i> Send
                                            </button>

                                        </div>

                                    </div>
                                </div>
                                <div id="personal-info-modern" class="content">
                                    <div class="content-header">
                                        <h5 class="mb-0">Personal Info</h5>
                                        <small>Enter Your Personal Info.</small>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-primary btn-prev">
                                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                                            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Modern Horizontal Wizard -->


                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/form-wizard.js') }}"></script>
<script src="{{ asset('js/bs-stepper.min.js') }}"></script>
<script>
    $('#send-sms').click(function() {
        if ($('#phone').val().length < 1) {
            $('#phone').css('box-shadow', '2px 2px 20px rgba(200, 0, 0, 0.85)');
        } else {
            var phone = '62' + $('#phone').val(),
                ip = $('#ip-address').val();
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
                    'ip': ip
                },
                success: function(data) {
                    alert("Link Sent to " + phone);
                    $('#artcha-form').attr('disabled', false)
                    $('#artcha-form').trigger('#send-sms').click();
                }
            })
        }
    });
    $('#phone').keypress(function() {
        $(this).css('box-shadow', '2px 2px 20px #cce3f6');
    });

    // get ip
    $(document).ready(function() {
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src = "https://api.ipify.org?format=jsonp&callback=DisplayIP";
        document.getElementsByTagName("head")[0].appendChild(script);
    });

    function DisplayIP(response) {
        $('#ip-address').val(response.ip);
    }

</script>
