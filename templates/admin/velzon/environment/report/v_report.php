<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Report</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                            <li class="breadcrumb-item active">Report</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-4">
                <div class="card">
                    <form id="form_weekly" action="<?= $report_url; ?>weekly_report.php" method="POST">
                        <div class="card-header">
                            Generate Weekly Report
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Dari Tanggal</label>
                                <input type="text" data-pickr="flatpickr" data-date-format="d F Y" class="form-control" id="dari_weekly" name="dari_weekly" placeholder="Masukkan Dari Tanggal">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Sampai Tanggal</label>
                                <input type="text" data-pickr="flatpickr" data-date-format="d F Y" class="form-control" id="sampai_weekly" name="sampai_weekly" placeholder="Masukkan Sampai Tanggal">
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="reset" class="btn btn-danger" title="Reset">Reset</button>
                            <button type="submit" class="btn btn-primary" title="Generate">Generate</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <form id="form_compli" action="<?= $report_url; ?>compreport.php" method="POST">
                    <!-- <form id="form_compli" action="report/comp_report" method="POST"> -->
                        <div class="card-header">
                            Generate PM Compliance Report
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Tahun</label>
                                <select name="tahun_report" id="tahun_report" class="form-select select2" title="tahun_report">
                                    <option></option>
                                    <?php
                                    $start = 2019;
                                    $end = date('Y');
                                    for ($i = $end; $i >= $start; $i--) {
                                        echo "<option value='$i'>$i</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="group_kerja1" class="form-label">Group Kerja</label>
                                <select name="group_kerja1" id="group_kerja1" class="form-select select2" title="group_kerja1">
                                    <option></option>
                                    <?php
                                    if ($grup->success) {
                                        foreach ($grup->data as $key => $value) {
                                            echo "<option value='$value->kd_group_kerja'>$value->nama</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="reset" class="btn btn-danger" title="Reset">Reset</button>
                            <button class="btn btn-primary" title="Generate">Generate</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Generate PM Compliance Form
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="bulan" class="form-label">Bulan</label>
                            <select name="bulan" id="bulan" class="form-select select2" title="bulan">
                                <option></option>
                                <?php
                                $month = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                                for ($i = 1; $i <= 12; $i++) {
                                    echo "<option value='$i'>" . $month[$i - 1] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun</label>
                            <select name="tahun" id="tahun" class="form-select select2" title="tahun">
                                <option></option>
                                <?php
                                $start = 2019;
                                $end = date('Y');
                                for ($i = $end; $i >= $start; $i--) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="group_kerja" class="form-label">Group Kerja</label>
                            <select name="group_kerja" id="group_kerja" class="form-select select2" title="group_kerja">
                                <option></option>
                                <?php
                                if ($grup->success) {
                                    foreach ($grup->data as $key => $value) {
                                        echo "<option value='$value->kd_group_kerja'>$value->nama</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-danger" title="Reset">Reset</button>
                        <button class="btn btn-primary" title="Generate">Generate</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>