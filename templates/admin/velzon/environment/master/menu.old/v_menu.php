<link rel="stylesheet" href="<?= assetsUri() ?>css/role.css" />
<link rel="stylesheet" href="<?= assetsUri() ?>css/menu.css" />
<style>
	.divider {
		border-top: 1px solid #eee;
		margin-bottom: 15px;
	}

	#iconPlace span svg {
		height: 7rem !important;
		width: auto !important;
	}

	#iconPlace i {
		font-size: 6rem !important;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-4 mb-7">
			<!--begin::Card-->
			<div class="card card-custom">
				<!--begin::Card header-->
				<div class="card-header">
					<!--begin::Card title-->
					<div class="card-title">
						<span class="card-icon">
							<i class="flaticon2-menu-2 text-success"></i>
						</span>
						<h3 class="card-label">
							Tambah Menu
						</h3>
					</div>
					<!--end::Card title-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-1 pb-0">
					<form method="post" class="mt-4" data-type="save" id="form_tambah" name="User">
						<div class="form-group">
							<label>Nama Menu <span class="text-danger">*</span></label>
							<input type="hidden" id="idmenu" name="idmenu" />
							<input type="text" class="form-control" placeholder="Masukkan nama nemu" id="nama" name="nama" />
						</div>

						<div class="form-group">
							<label>Link Menu <span class="text-danger">*</span></label>
							<input type="text" class="form-control" placeholder="Masukkan link" id="link_menu" name="link_menu" />
						</div>

						<div class="form-group" id="passwordDiv">
							<label>Icon</label>
							<span type="button" data-toggle="modal" data-target="#modalIcon" style="float: right;top: -2px;position: relative;border: 1px solid #1bc5bd;padding: 5px 15px;">Pilih Icon</span>
							<br>
							<span id="iconPlace">

							</span>
							<textarea type="textarea" class="form-control d-none" id="icon" name="icon"></textarea>
						</div>

						<div class="form-group">
							<label style="margin-top:0.5rem;">Status</label>
							<span class="switch switch-outline switch-icon switch-success" style="float:right;">
								<label>
									<input type="checkbox" checked="checked" value="A" name="status" id="status">
									<span></span>
								</label>
							</span>
							<!-- <input type="text" class="form-control" placeholder="Masukkan email" id="userEmail" name="email" /> -->
						</div>

					</form>
				</div>
				<!--end::Card body-->
				<!--begin::Card footer-->
				<div class="card-footer pt-0 pb-6 border-0 justify-content-end">
					<button type="button" class="btn btn-success btn-active-success-primary my-1 tambah" id="submit">Simpan</button>
					<button type="reset" class="btn btn-light btn-active-light-primary my-1 reset">Reset</button>
				</div>
				<!--end::Card footer-->
			</div>
			<!--end::Card-->
		</div>
		<div class="col-md-4 mb-7">
			<!--begin::Card-->
			<div class="card card-custom h-md-100">
				<div class="card-header">
					<div class="card-title">
						<span class="card-icon">
							<span class="svg-icon menu-icon svg-icon-danger svg-icon-md">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
										<path d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000"></path>
										<rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16" rx="1"></rect>
									</g>
								</svg>
							</span>
						</span>
						<h3 class="card-label">
							Drag & Drop Menu
						</h3>

					</div>
					<div class="d-flex align-items-center">
						<button class="btn btn-sm btn-warning" id="nestable-menu" data-action="collapse"><i class="fa fa-minus-square"></i> Collapse</button>
					</div>
				</div>
				<div class="card-body">
					<div class="pt-5">
						<div class="dd" id="nestable">
							<?php
							if ($menu->success) {
								echo "<ol class='dd-list'>";
								foreach ($menu->data as $menux) {
									if (isset($menux->submenu)) {
										echo "<li class='dd-item dd3-item' data-id='$menux->id_menu' data-urut='$menux->urut' data-urut_global='$menux->urut_global' data-nama='$menux->nm_menu' data-ico='$menux->icon_menu' data-link='$menux->link_menu' data-parent='$menux->id_menu' data-status='$menux->status' data-depth='$menux->level'>
											<div class='dd3-content'>$menux->nm_menu</div>
											<div class='dd-handle dd3-handle'></div>
											<div class='dd-handle-new dd3-edit-handle'></div>
											<div class='dd-handle-new dd3-delete-handle'></div>";


										echo "<ol class='dd-list'>";
										foreach ($menux->submenu as $menux2) {
											if (isset($menux2->submenu)) {
												echo "<li class='dd-item dd3-item' data-id='$menux2->id_menu' data-urut='$menux->urut' data-urut_global='$menux->urut_global' data-nama='$menux2->nm_menu' data-ico='$menux2->icon_menu' data-link='$menux2->link_menu' data-parent='$menux2->id_menu' data-status='$menux2->status' data-depth='$menux2->level'>
													<div class='dd3-content'>$menux2->nm_menu</div>
													<div class='dd-handle dd3-handle'></div>
													<div class='dd-handle-new dd3-edit-handle'></div>
													<div class='dd-handle-new dd3-delete-handle'></div>";

												echo "<ol class='dd-list'>";
												foreach ($menux2->submenu as $menux3) {
													if (isset($menux3->submenu)) {
														echo "<li class='dd-item dd3-item' data-id='$menux3->id_menu' data-urut='$menux->urut' data-urut_global='$menux->urut_global' data-nama='$menux3->nm_menu' data-ico='$menux3->icon_menu' data-link='$menux3->link_menu' data-parent='$menux3->id_menu' data-status='$menux3->status' data-depth='$menux3->level'>
															<div class='dd3-content'>$menux3->nm_menu</div>
															<div class='dd-handle dd3-handle'></div>
															<div class='dd-handle-new dd3-edit-handle'></div>
															<div class='dd-handle-new dd3-delete-handle'></div>";


														echo "<ol class='dd-list'>";
														foreach ($menux3->submenu as $menux4) {
															if (isset($menux4->submenu)) {
																echo "<li class='dd-item dd3-item' data-id='$menux4->id_menu' data-urut='$menux->urut' data-urut_global='$menux->urut_global' data-nama='$menux4->nm_menu' data-ico='$menux4->icon_menu' data-link='$menux4->link_menu' data-parent='$menux4->id_menu' data-status='$menux4->status' data-depth='$menux4->level'>
																	<div class='dd3-content'>$menux4->nm_menu</div>
																	<div class='dd-handle dd3-handle'></div>
																	<div class='dd-handle-new dd3-edit-handle'></div>
																	<div class='dd-handle-new dd3-delete-handle'></div>";


																echo "<ol class='dd-list'>";
																foreach ($menux4->submenu as $menux5) {
																	if (isset($menux5->submenu)) {
																		echo "<li class='dd-item dd3-item' data-id='$menux5->id_menu' data-urut='$menux->urut' data-urut_global='$menux->urut_global' data-nama='$menux5->nm_menu' data-ico='$menux5->icon_menu' data-link='$menux5->link_menu' data-parent='$menux5->id_menu' data-status='$menux5->status' data-depth='$menux5->level'>
																			<div class='dd3-content'>$menux5->nm_menu</div>
																			<div class='dd-handle dd3-handle'></div>
																			<div class='dd-handle-new dd3-edit-handle'></div>
																			<div class='dd-handle-new dd3-delete-handle'></div>";


																		echo "</li>";
																	} else {
																		echo "<li class='dd-item dd3-item' data-id='$menux5->id_menu' data-urut='$menux->urut' data-urut_global='$menux->urut_global' data-nama='$menux5->nm_menu' data-ico='$menux5->icon_menu' data-link='$menux5->link_menu' data-parent='$menux5->id_menu' data-status='$menux5->status' data-depth='$menux5->level'><div class='dd3-content'>$menux5->nm_menu</div>
																			<div class='dd-handle dd3-handle'></div>
																			<div class='dd-handle-new dd3-edit-handle'></div>
																			<div class='dd-handle-new dd3-delete-handle'></div></li>";
																	}
																}
																echo "</ol>";

																echo "</li>";
															} else {
																echo "<li class='dd-item dd3-item' data-id='$menux4->id_menu' data-urut='$menux->urut' data-urut_global='$menux->urut_global' data-nama='$menux4->nm_menu' data-ico='$menux4->icon_menu' data-link='$menux4->link_menu' data-parent='$menux4->id_menu' data-status='$menux4->status' data-depth='$menux4->level'><div class='dd3-content'>$menux4->nm_menu</div>
																	<div class='dd-handle dd3-handle'></div>
																	<div class='dd-handle-new dd3-edit-handle'></div>
																	<div class='dd-handle-new dd3-delete-handle'></div></li>";
															}
														}
														echo "</ol>";

														echo "</li>";
													} else {
														echo "<li class='dd-item dd3-item' data-id='$menux3->id_menu' data-urut='$menux->urut' data-urut_global='$menux->urut_global' data-nama='$menux3->nm_menu' data-ico='$menux3->icon_menu' data-link='$menux3->link_menu' data-parent='$menux3->id_menu' data-status='$menux3->status' data-depth='$menux3->level'><div class='dd3-content'>$menux3->nm_menu</div>
															<div class='dd-handle dd3-handle'></div>
															<div class='dd-handle-new dd3-edit-handle'></div>
															<div class='dd-handle-new dd3-delete-handle'></div></li>";
													}
												}
												echo "</ol>";


												echo "</li>";
											} else {
												echo "<li class='dd-item dd3-item' data-id='$menux2->id_menu' data-urut='$menux->urut' data-urut_global='$menux->urut_global' data-nama='$menux2->nm_menu' data-ico='$menux2->icon_menu' data-link='$menux2->link_menu' data-parent='$menux2->id_menu' data-status='$menux2->status' data-depth='$menux2->level'><div class='dd3-content'>$menux2->nm_menu</div>
													<div class='dd-handle dd3-handle'></div>
													<div class='dd-handle-new dd3-edit-handle'></div>
													<div class='dd-handle-new dd3-delete-handle'></div></li>";
											}
										}
										echo "</ol>";

										echo "</li>";
									} else {
										echo "<li class='dd-item dd3-item' data-id='$menux->id_menu' data-urut='$menux->urut' data-urut_global='$menux->urut_global' data-nama='$menux->nm_menu' data-ico='$menux->icon_menu' data-link='$menux->link_menu' data-parent='$menux->id_menu' data-status='$menux->status' data-depth='$menux->level'><div class='dd3-content'>$menux->nm_menu</div>
										<div class='dd-handle dd3-handle'></div>
										<div class='dd-handle-new dd3-edit-handle'></div>
										<div class='dd-handle-new dd3-delete-handle'></div></li>";
									}
								}
								echo "</ol>";
							}
							?>
						</div>
					</div>

					<textarea id="nestable-output" class="d-none"></textarea>
				</div>
			</div>
			<!--begin::Card-->
		</div>
		<div class="col-md-4 mb-7">
			<!--begin::Card-->
			<div class="card card-custom h-md-100">
				<div class="card-header">
					<div class="card-title">
						<span class="card-icon">
							<i class="flaticon2-box-1 text-primary"></i>
						</span>
						<h3 class="card-label">
							Preview
						</h3>

					</div>
					<div class="d-flex align-items-center">
						<button class="btn btn-primary btn-sm font-weight-bolder" id="saveChanged">
							<span class="svg-icon svg-icon-light">
								<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Sending.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M8,13.1668961 L20.4470385,11.9999863 L8,10.8330764 L8,5.77181995 C8,5.70108058 8.01501031,5.63114635 8.04403925,5.56663761 C8.15735832,5.31481744 8.45336217,5.20254012 8.70518234,5.31585919 L22.545552,11.5440255 C22.6569791,11.5941677 22.7461882,11.6833768 22.7963304,11.794804 C22.9096495,12.0466241 22.7973722,12.342628 22.545552,12.455947 L8.70518234,18.6841134 C8.64067359,18.7131423 8.57073936,18.7281526 8.5,18.7281526 C8.22385763,18.7281526 8,18.504295 8,18.2281526 L8,13.1668961 Z" fill="#000000" />
										<path d="M4,16 L5,16 C5.55228475,16 6,16.4477153 6,17 C6,17.5522847 5.55228475,18 5,18 L4,18 C3.44771525,18 3,17.5522847 3,17 C3,16.4477153 3.44771525,16 4,16 Z M1,11 L5,11 C5.55228475,11 6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L1,13 C0.44771525,13 6.76353751e-17,12.5522847 0,12 C-6.76353751e-17,11.4477153 0.44771525,11 1,11 Z M4,6 L5,6 C5.55228475,6 6,6.44771525 6,7 C6,7.55228475 5.55228475,8 5,8 L4,8 C3.44771525,8 3,7.55228475 3,7 C3,6.44771525 3.44771525,6 4,6 Z" fill="#000000" opacity="0.3" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							Simpan Perubahan
						</button>
					</div>
				</div>
				<div class="card-body">
					<div class="pt-3">
						<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

							<div id="kt_aside_menu_dynamic" class="aside-menu my-4 " data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
								<!--begin::Menu Nav-->
								<ul class="menu-nav pt0" style="padding-top:0px" id="menuPlaceDynamic">

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--begin::Card-->
		</div>
	</div>
</div>

<div class="modal fade" id="modalIcon" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" data-backdrop="static" data-keyboard="false" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<ul class="nav nav-tabs nav-tabs-line mb-5">
					<li class="nav-item">
						<a class="nav-link active" data-uri="svgicon" data-loadid="loadSvgIcon" data-toggle="tab" id="svg_icon" href="#svg_icon_tab">
							<span class="nav-icon">
								<span class="svg-icon">
									<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Code\CMD.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path d="M9,15 L7.5,15 C6.67157288,15 6,15.6715729 6,16.5 C6,17.3284271 6.67157288,18 7.5,18 C8.32842712,18 9,17.3284271 9,16.5 L9,15 Z M9,15 L9,9 L15,9 L15,15 L9,15 Z M15,16.5 C15,17.3284271 15.6715729,18 16.5,18 C17.3284271,18 18,17.3284271 18,16.5 C18,15.6715729 17.3284271,15 16.5,15 L15,15 L15,16.5 Z M16.5,9 C17.3284271,9 18,8.32842712 18,7.5 C18,6.67157288 17.3284271,6 16.5,6 C15.6715729,6 15,6.67157288 15,7.5 L15,9 L16.5,9 Z M9,7.5 C9,6.67157288 8.32842712,6 7.5,6 C6.67157288,6 6,6.67157288 6,7.5 C6,8.32842712 6.67157288,9 7.5,9 L9,9 L9,7.5 Z M11,13 L13,13 L13,11 L11,11 L11,13 Z M13,11 L13,7.5 C13,5.56700338 14.5670034,4 16.5,4 C18.4329966,4 20,5.56700338 20,7.5 C20,9.43299662 18.4329966,11 16.5,11 L13,11 Z M16.5,13 C18.4329966,13 20,14.5670034 20,16.5 C20,18.4329966 18.4329966,20 16.5,20 C14.5670034,20 13,18.4329966 13,16.5 L13,13 L16.5,13 Z M11,16.5 C11,18.4329966 9.43299662,20 7.5,20 C5.56700338,20 4,18.4329966 4,16.5 C4,14.5670034 5.56700338,13 7.5,13 L11,13 L11,16.5 Z M7.5,11 C5.56700338,11 4,9.43299662 4,7.5 C4,5.56700338 5.56700338,4 7.5,4 C9.43299662,4 11,5.56700338 11,7.5 L11,11 L7.5,11 Z" fill="#000000" fill-rule="nonzero" />
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>
							</span>
							<span class="nav-text">SVG Icons</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-uri="flaticon" data-loadid="loadFlatIcon" data-toggle="tab" id="flaticon" href="#flaticon_tab">
							<span class="nav-icon"><i class="flaticon-map"></i></span>
							<span class="nav-text">Flaticon</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-uri="FontAwesomeicon" data-loadid="loadFaIcon" data-toggle="tab" id="font_awesome" href="#font_awesome_tab">
							<span class="nav-icon"><i class="fab fa-500px"></i></span>
							<span class="nav-text">Font Awesome 5</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-uri="LineAwesomeicon" data-loadid="loadLaIcon" data-toggle="tab" id="line_awesome" href="#line_awesome_tab">
							<span class="nav-icon"><i class="fab la-accusoft"></i></span>
							<span class="nav-text">Line Awesome</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-uri="socialicon" data-loadid="loadSocIcon" data-toggle="tab" id="socicons" href="#socicons_tab">
							<span class="nav-icon"><i class="socicon-swarm"></i></span>
							<span class="nav-text">Social Icons</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-uri="customicon" data-loadid="loadCusIcon" data-toggle="tab" id="custom_icons" href="#custom_icons_tab">
							<span class="nav-icon"><i class="ki ki-double-arrow-next icon-nm"></i></span>
							<span class="nav-text">Custom Icons</span>
						</a>
					</li>
					<li class="nav-item" style="float: right;position: absolute;right: 20px;cursor:pointer">
						<a class="nav-link" data-dismiss="modal" aria-label="Close">
							<span class="nav-icon">
								<span class="svg-icon svg-icon-danger">
									<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Navigation\Close.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
												<rect x="0" y="7" width="16" height="2" rx="1"></rect>
												<rect opacity="0.3" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000) " x="0" y="7" width="16" height="2" rx="1"></rect>
											</g>
										</g>
									</svg>
									<!--end::Svg Icon-->
								</span>
							</span>
							<span class="nav-text text-danger">Tutup</span>
						</a>
					</li>
				</ul>
				<div class="tab-content mt-5" id="myTabContent">
					<div class="tab-pane fade show active" id="svg_icon_tab" role="tabpanel" aria-labelledby="svg_icon">
						<div id="loadSvgIcon"></div>
					</div>
					<div class="tab-pane fade" id="flaticon_tab" role="tabpanel" aria-labelledby="flaticon">
						<div id="loadFlatIcon"></div>
					</div>
					<div class="tab-pane fade" id="font_awesome_tab" role="tabpanel" aria-labelledby="font_awesome">
						<div id="loadFaIcon"></div>
					</div>
					<div class="tab-pane fade" id="line_awesome_tab" role="tabpanel" aria-labelledby="line_awesome">
						<div id="loadLaIcon"></div>
					</div>
					<div class="tab-pane fade" id="socicons_tab" role="tabpanel" aria-labelledby="socicons">
						<div id="loadSocIcon"></div>
					</div>
					<div class="tab-pane fade" id="custom_icons_tab" role="tabpanel" aria-labelledby="custom_icons">
						<div id="loadCusIcon"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <script src="<?php echo assetsUri(); ?>js/netstable.js" type="text/javascript"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.5.0/jquery.nestable.js"></script> -->
<!-- <script>
	// window.onbeforeunload = function() {
	// 	return "Do you really want to close?";
	// };

	
</script> -->