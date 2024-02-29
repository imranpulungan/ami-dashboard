<?php

if (!function_exists('generateMenuDraggable')) {
	function generateMenuDraggable($data)
	{
		// var_dump($data);
		// exit();
		$mn = '';
		foreach ($data as $key => $value) {
			$mn .= '<div class="list-group-item nested-' . $value->level . '" id="' . $value->id_form_body . '">';
			// var_dump($value);
			// echo $value->id_form_body;
			$mn .= '<div class="d-flex align-items-center">';
			$mn .= '<div class="flex-grow-1">';
			if (isset($value->nm_form_body) && $value->nm_form_body != null && $value->nm_form_body != "") {
				// $mn .= $value->nm_form_body;
				$mn .= '<span class="nm_body" ' .
					'data-id="' . (base64_encode($value->id_form_body)) . '" ' .
					'data-tipe="' . (base64_encode($value->tipe_form_body)) . '" ' .
					'data-upload="' . (base64_encode($value->need_upload)) . '" ' .
					'data-req="' . (base64_encode($value->is_required)) . '">' . $value->nm_form_body . '</span>';
			}
			$mn .= '</div>';
			$mn .= '<div class="flex-shrink-0">';
			if ($value->is_required == 'f') {
				$mn .= '<span class="badge rounded-pill badge-outline-success mx-2">' . $value->tipe_form_body . '</span>';
			} else {
				$mn .= '<span class="badge rounded-pill badge-outline-danger mx-2">' . $value->tipe_form_body . '</span>';
			}
			$mn .= '<div class="btn-group" role="group">';
			$mn .= '<button type="button" class="btn btn-sm btn-warning btn-icon waves-effect waves-light tombolEdit" ' .
				'data-id="' . (base64_encode($value->id_form_body)) . '" ><i class="ri-edit-2-fill"></i></button>';
			$mn .= '<button type="button" class="btn btn-sm btn-danger btn-icon waves-effect waves-light tombolDelete" ' .
				'data-id="' . (base64_encode($value->id_form_body)) . '" ><i class="ri-delete-bin-5-line"></i></button>';
			$mn .= '</div>';
			$mn .= '</div>';
			$mn .= '</div>';
			$mn .= '<div class="list-group nested-list nested-sortable">';
			if (isset($value->subform_body)) {
				// foreach ($value->subform_body as $key2 => $value2) {
				$mn .= generateMenuDraggable($value->subform_body);
				// var_dump($value2);
				// }
			}
			$mn .= '</div>';
			$mn .= '</div>';
		}

		return $mn;
	}
}
?>

<div class="page-content">

	<div class="container-fluid">
		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0"><?= isset($title) && $title !== '' ? $title : 'Inalum Financial Highlights'; ?></h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<?php if (isset($grandparent) && $grandparent !== '') : ?>
								<li class="breadcrumb-item"><span><?= $grandparent; ?></span></li>
							<?php endif; ?>
							<?php if (isset($parent) && $parent !== '') : ?>
								<li class="breadcrumb-item"><span><?= $parent; ?></span></li>
							<?php endif; ?>
							<li class="breadcrumb-item active"><span><?= isset($title) && $title !== '' ? $title : 'Inalum Financial Highlights'; ?></span></li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->

		<div class="card">
			<div class="card-header align-items-center d-flex">
				<div class="mb-0 flex-grow-1">
					<?php if (hasPermission('IN')) : ?>
						<button class="btn btn-success tombolTambah" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="ri-add-circle-line align-bottom me-1"></i> Tambah Form Body</button>
					<?php endif; ?>
				</div>
				<div class="flex-shrink-0">
					<?php if (hasPermission('IN')) : ?>
						<button class="btn btn-secondary simpan"><i class="ri-checkbox-circle-line align-bottom me-1"></i> Simpan Perubahan</button>
					<?php endif; ?>
				</div>
			</div><!-- end card header -->

			<div class="card-body">
				<div class="list-group nested-list" id="body_draggable">
					<?php
					if ($form_body_all->success) {
						foreach ($form_body_all->data as $data) {
							echo '<div class="list-group-item nested-0" id="' . $data->id_form_header . '" style="border-radius: 5px;">';
							echo '<span class="nm_header fw-medium fs-15 align-items-center" data-bs-toggle="collapse" data-bs-target="#collapse' . $data->id_form_header . '" aria-expanded="true" aria-controls="collapse' . $data->id_form_header . '" style="cursor: pointer; display: flex; width: auto; min-height:30px">' . $data->nm_form_header . '</span>';
							echo '<div class="list-group nested-list nested-sortable draggable collapse" id="collapse' . $data->id_form_header . '">';
							if (isset($data->subform_body)) {
								echo generateMenuDraggable($data->subform_body);
							}
							echo '</div></div></br>';
						}
					}
					?>
				</div>
			</div><!-- end card-body -->
		</div>

	</div>
	<!-- container-fluid -->
</div>

<?php if (hasPermission('IN')) : ?>
	<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form autocomplete="off" method="post" data-type="save" id="form_tambah" class="needs-validation" novalidate>
				<div class="modal-content border-0 overflow-hidden">
					<div class="modal-header p-3">
						<h4 class="card-title mb-0">Tambah Form Body</h4>
						<button type="button" class="btn-close tutup"></button>
					</div>
					<div class="alert alert-warning rounded-0 mb-0">
						<p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
					</div>
					<div class="modal-body pb-2">
						<div class="mb-3">
							<label for="name" class="form-label">Nama Form Body <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Form Body" required>
							<div class="invalid-feedback">Nama Form Body Wajib Diisi!</div>
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">Tipe Form Body <span class="text-danger">*</span></label>
							<select class="form-control select2" required style="width: 100%" id="tipe" name="tipe"></select>
							<div class="invalid-feedback">Tipe Form Body Wajib Diisi!</div>
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">Parent <span class="text-danger">*</span></label>
							<select class="form-control select2" required style="width: 100%" id="parent" name="parent"></select>
							<div class="invalid-feedback">Parent Wajib Diisi!</div>
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">Required / Optional <span class="text-danger">*</span></label>
							<select class="form-control select2" required style="width: 100%" id="required" name="required">
								<option value="t">Required</option>
								<option value="f">Optional</option>
							</select>
							<div class="invalid-feedback">Required / Optional Wajib Diisi!</div>
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">Upload Lampiran <span class="text-danger">*</span></label>
							<select class="form-control select2" required style="width: 100%" id="upload" name="upload">
								<option value="t">Required</option>
								<option value="f">Not Required</option>
							</select>
							<div class="invalid-feedback">Upload Lampiran Wajib Diisi!</div>
						</div>
					</div>
					<div class="dropdown-divider"></div>
					<div class="modal-footer">
						<button type="button" class="tutup btn btn-danger font-weight-bold">Batal</button>
						<button type="button" class="btn btn-primary font-weight-bold" id="submit">Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php endif; ?>

<?php if (hasPermission('UP')) : ?>
	<div class="modal fade" id="modalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form autocomplete="off" method="post" data-type="save" id="form_edit" class="needs-validation" novalidate>
				<div class="modal-content border-0 overflow-hidden">
					<div class="modal-header p-3">
						<h4 class="card-title mb-0" id="modal_header_edit">Edit Menu</h4>
						<button type="button" class="btn-close tutup"></button>
					</div>
					<div class="alert alert-warning rounded-0 mb-0">
						<p class="mb-0">Tanda <span class="fw-semibold">(*)</span> Wajib Diisi</p>
					</div>
					<div class="modal-body pb-2">
						<div class="mb-3">
							<label for="name" class="form-label">Nama Form Body <span class="text-danger">*</span></label>
							<input type="hidden" name="idbody" id="id_body_edit">
							<!-- <input type="hidden" name="parent" id="parent_edit"> -->
							<input type="text" class="form-control" id="nama_edit" name="nama" placeholder="Masukkan Nama Form Body" required>
							<div class="invalid-feedback">Nama Form Body Wajib Diisi!</div>
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">Tipe Form Body <span class="text-danger">*</span></label>
							<select class="form-control select2" required style="width: 100%" id="tipe_edit" name="tipe"></select>
							<div class="invalid-feedback">Tipe Form Body Wajib Diisi!</div>
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">Required / Optional <span class="text-danger">*</span></label>
							<select class="form-control select2" required style="width: 100%" id="required_edit" name="required">
								<option value="t">Required</option>
								<option value="f">Optional</option>
							</select>
							<div class="invalid-feedback">Required / Optional Wajib Diisi!</div>
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">Upload Lampiran <span class="text-danger">*</span></label>
							<select class="form-control select2" required style="width: 100%" id="upload_edit" name="upload">
								<option value="t">Required</option>
								<option value="f">Not Required</option>
							</select>
							<div class="invalid-feedback">Upload Lampiran Wajib Diisi!</div>
						</div>
					</div>
					<div class="dropdown-divider"></div>
					<div class="modal-footer">
						<button type="button" class="tutup btn btn-danger font-weight-bold">Batal</button>
						<button type="button" class="btn btn-primary font-weight-bold" id="submitEdit">Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php endif; ?>