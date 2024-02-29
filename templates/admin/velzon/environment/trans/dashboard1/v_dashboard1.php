<style>
    td:last-child {
        padding: 0 !important;
    }

    #table .input-group>.input-group-append>button:first-child {
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }
</style>

<div class=" container ">

    <div class="row">
        <div class="col-lg-6">
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Execution Rate
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin::Chart-->
                    <div id="chart_1" class="d-flex justify-content-center"></div>
                    <!--end::Chart-->
                </div>
            </div>
            <!--end::Card-->
        </div>

        <div class="col-lg-6">
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Downtime Ratio
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin::Chart-->
                    <div id="chart_2" class="d-flex justify-content-center"></div>
                    <!--end::Chart-->
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            Availability ACC (%)
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin::Chart-->
                    <div id="chart_3" class="d-flex justify-content-center"></div>
                    <!--end::Chart-->
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            MTBF (Jam) & Trouble Freq ACC
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin::Chart-->
                    <div id="chart_4" class="d-flex justify-content-center"></div>
                    <!--end::Chart-->
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">
                            MTTR ACC (Jam)
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin::Chart-->
                    <div id="chart_5" class="d-flex justify-content-center"></div>
                    <!--end::Chart-->
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>
</div>