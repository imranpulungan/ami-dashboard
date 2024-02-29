<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
    <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap flex-fill mr-2">

            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                <?= isset($title) ? $title : ''; ?>
            </h5>
            <!--end::Page Title-->

            <!--begin::Actions-->
            <!-- <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200">
            </div> -->

        </div>
        <!--end::Info-->

        <!--begin::Toolbar-->
        <div class="d-flex align-items-center flex-fill" id="tableFilter">

            <select id="custom_table_length" data-toggle="tooltip" title="Menampilkan Total Data Pada Table" data-placement="bottom" class="form-control form-control-sm w-25" style="margin-right:5px">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>

            <!--begin::Dropdowns-->
            <!--end::Dropdowns-->
            <div class="input-group">
                <input type="text" data-toggle="tooltip" title="Mencari Data Pada Table" data-placement="bottom" id="custom_table_filter" class="form-control form-control-sm w-50" style="width: 72% !important;" placeholder="Pencarian...">
                <div class="input-group-append">
                    <button class="btn btn-secondary btn-sm btn-white" data-toggle="tooltip" title="Custom Filter" data-placement="bottom" style="border: 1px solid #E4E6EF;padding-left:12px" type="button">
                        <span class="svg-icon svg-icon-success">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                    <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center flex-fill justify-content-end">
            <!--begin::Button-->
            <?php if (hasPermission('IN')) : ?>
                <button class="btn btn-primary btn-sm font-weight-bolder tombolTambah">
                    <span class="svg-icon svg-icon-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000" />
                            </g>
                        </svg>
                    </span>
                    <?= getLangKey('scheduled_work_btn_add') ?>
                </button>
            <?php endif; ?>
            <!--end::Button-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->