<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
    <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">

            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                <?= isset($title) ? $title : ''; ?>
            </h5>
            <!--end::Page Title-->

            <!--begin::Actions-->
            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200">
            </div>

            <div class="d-flex align-items-center flex-wrap mr-2" id="tableFilter">
                <select id="datatable_length" data-toggle="tooltip" title="Menampilkan Total Data Pada Table" data-placement="bottom" class="form-control form-control-sm w-25" style="margin-right:5px">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>

                <!--begin::Dropdowns-->
                <input type="text" data-toggle="tooltip" title="Mencari Data Pada Table" data-placement="bottom" id="datatable_filter" class="form-control form-control-sm w-50" style="width: 72% !important;" placeholder="Pencarian...">
                <!--end::Dropdowns-->
            </div>
        </div>
        <!--end::Info-->

        <!--begin::Toolbar-->
        <!-- <div class="align-items-center d-none" id="saveChanges"> -->
        <div class="align-items-center" id="saveChanges">
            <!--begin::Button-->

            <!--end::Button-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->