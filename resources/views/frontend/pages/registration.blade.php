@extends('frontend.layouts.master')
@section('content')
<br>
<br>
<br>
<br>

<h1 class="text-center">Global Business</h1>

<section id="form_main">
    <div class="container">
        <form class="form" action="" method="" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" id="form_main_content">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="company">Company/Home Owner</label>
                            <div class="input-group" style="width: 100%;">
                                <!-- <span class="input-group-addon" id="whatsapp_number"></span> -->
                                <input type="text" class="form-control" id="company" name="company" style="width: 100%;" placeholder="Company/Home Owner" aria-describedby="basic-addon2">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="mobile">Mobile no*:</label>
                            <div class="input-group" style="width: 100%;">
                                <!-- <span class="input-group-addon" id="basic-addon3"></span> -->
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile No" style="width: 100%;" aria-describedby="basic-addon3">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="Whatsapp">Whatsapp Number*</label>
                            <div class="input-group" style="width: 100%;">
                                <!-- <span class="input-group-addon" id="location"></span> -->
                                <input type="text" id="Whatsapp" name="Whatsapp" class="form-control" style="width: 100%;" placeholder="Whatsapp Number" aria-describedby="basic-addon2">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="project_name">Project Name*</label>
                            <div class="input-group" style="width: 100%;">
                                <!-- <span class="input-group-addon" id="location"></span> -->
                                <input type="text" id="project_name" name="project_name" class="form-control" style="width: 100%;" placeholder="Project Name" aria-describedby="basic-addon2">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="location">Project Location*</label>
                            <div class="input-group" style="width: 100%;">
                                <!-- <span class="input-group-addon" id="location"></span> -->
                                <input type="text" id="location" name="location" class="form-control" style="width: 100%;" placeholder="Project Location" aria-describedby="basic-addon2">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6" class="form-control">
                            <label for="service_res">Service Reserve*</label>
                            <select class="form-control abc" name="service_res" id="service_res">
                                <option value="Basement W/P Grade A" a="10">Basement W/P Grade A</option>
                                <option value="Basement W/P Grade C" a="20">Basement W/P Grade C</option>
                                <option value="Roof waterproofing Grade A" a="30">Roof waterproofing Grade A</option>
                                <option value="Roof waterproofing Grade B" a="40">Roof waterproofing Grade B</option>
                                <option value="Roof waterproofing Grade C" a="50">Roof waterproofing Grade C</option>
                                <option value="Roof waterproofing Grade D" a="60">Roof waterproofing Grade D</option>
                                <option value="Heat Proofing Grade A" a="70">Heat Proofing Grade A </option>
                                <option value="Heat Proofing Grade B" a="80">Heat Proofing Grade B</option>
                                <option value="Roof Gardening" a="90">Roof Gardening</option>
                                <option value="Paint & Coating" a="100">Paint & Coating </option>
                                <option value="Other Report" a="110" selected>Other Report</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="tasf">Total area in sft *</label>
                            <div class="input-group ta" style="width: 100%;">
                                <!-- <span class="input-group-addon" id="length_in_m"></span> -->
                                <input type="number" id="tasf" name="tasf" class="form-control tasf" placeholder="Total area in sft" style="width: 100%;" aria-describedby="basic-addon2">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row efg">
                        <div class="col-md-6">
                            <label for="tcpsf">Cost Per/SFT</label>
                            <div class="input-group tcpsf" id="tcpsf" style="width: 100%;">
                            </div>
                        </div>
                        <div class="col-md-6 hij">
                            <label for="tc">Total Cost</label>
                            <div class="input-group totalcost" id="tc" name="tc" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row" id="area_of_expertise">

                                <div class="col-md-12">
                                    <button type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </form>

    </div>
</section>

<script type="text/javascript">
    $(document).ready(function() {
        $('.abc').on('change', function() {
            var value = $('.abc').find(":selected").attr('a');

            $('.efg').find('.tcpsf').text(value)

            var abc = $('.ta').find('.tasf').val()
            value = parseFloat(value)
            var total = value * abc


            $('.hij').find('.totalcost').text(total)
        })

        $('.ta').find('.tasf').on('keyup', function() {
            var value = $(this).val()
            var abc = $('.abc').find(":selected").attr('a');

            abc = parseFloat(abc)

            var total = value * abc

            $('.hij').find('.totalcost').text(total)
        })

        $("form").on("submit", function(event) {
            event.preventDefault();
            var company = $('#company').val()
            var mobile = $('#mobile').val()
            var Whatsapp = $('#Whatsapp').val()
            var project_name = $('#project_name').val()
            var location = $('#location').val()
            var service_res = $('#service_res').val()
            var tasf = $('#tasf').val()
            var totalcost = parseFloat($('.hij').find('.totalcost').text())
            var costpersf = parseFloat($('.tcpsf').text())
            $.ajax({
                url: "{{ route('storeregistration') }}",
                method: "post",
                data: {
                    company,
                    mobile,
                    Whatsapp,
                    project_name,
                    location,
                    service_res,
                    tasf,
                    totalcost,
                    costpersf,
                    _token: '{{csrf_token()}}'
                },
                success: function(data) {

                    alert(data)
                }
            })
        });
    })
</script>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>