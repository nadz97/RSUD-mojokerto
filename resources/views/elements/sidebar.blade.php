<div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-heart"></i>
							<span class="nav-text">PONEK</span>
						</a>
                        <ul aria-expanded="false">
							{{-- <li><a href="{!! url('index'); !!}">Dashboard</a></li> --}}
							<li><a href="{{ url('/admin/ponekbayi') }}">Pengkajian awal bayi</a></li>
							<li><a href="{{ url('/admin/ponekpasien') }}">Pengkajian awal pasien</a></li>
							{{-- <li><a href="{{ url('/admin/ponekasesmen') }}">Asesmen pasien kebidanan</a></li> --}}
							{{-- <li><a href="{!! url('doctors-details'); !!}">Doctors Details</a></li>
							<li><a href="{!! url('doctors-review'); !!}">Doctors Review</a></li>
							<li><a href="{!! url('patient-details'); !!}">Patient Details</a></li> --}}
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-heart"></i>
							<span class="nav-text">RME PONEK</span>
						</a>
                        <ul aria-expanded="false">
							{{-- <li><a href="{!! url('index'); !!}">Dashboard</a></li> --}}
							{{-- <li><a href="{{ url('/admin/ponekbayi') }}">Pengkajian awal bayi</a></li> --}}
							<li><a href="{{ url('/admin/asesmenbayi') }}">Asesmen awal bayi baru lahir</a></li>
							<li><a href="{{ url('/admin/ponekasesmen') }}">Asesmen pasien kebidanan</a></li>
							{{-- <li><a href="{!! url('doctors-details'); !!}">Doctors Details</a></li>
							<li><a href="{!! url('doctors-review'); !!}">Doctors Review</a></li>
							<li><a href="{!! url('patient-details'); !!}">Patient Details</a></li> --}}
                            <li><a href="{{ URL::to('/admin/igd/formulir_triage') }}"> Folmulir Triage PONEK </a></li>
                            <li><a href="{{ URL::to('/admin/rme-ponek/pengkajian_bayi') }}"> Pengkajian PONEK </a></li>
                            <li><a href="{{ URL::to('/admin/rme-ponek/edukasi_ponek') }}"> Edukasi PONEK </a></li>
                            <li><a href="{{ URL::to('/admin/rme-ponek/edukasipasien_ponek') }}"> Edukasi Pasien PONEK</a></li>
                            <li><a href="{{ URL::to('/admin/rme-ponek/identifikasi_bayi') }}"> Identifikasi Bayi</a></li>
                            <li><a href="{!! url('doctors-details'); !!}"> Konsultasi </a></li>
                            <li><a href="{{ URL::to('/admin/rme-ponek/penempelan_surat') }}"> Penempelan </a></li>
						</ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text"> IGD </span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ URL::to('/admin/igd/triage_igd') }}"> Folmulir Triage IGD </a></li>
                            <li><a href="{{ URL::to('/admin/igd/pengkajian_igd') }}"> Pengkajian IGD </a></li>
                            <li><a href="{{ URL::to('/admin/igd/edukasi_pasien') }}"> Edukasi Pasien </a></li>
                            <li><a href="{{ URL::to('/admin/igd/konsultasi') }}"> Konsultasi </a></li>
                            <li><a href="{{ URL::to('/admin/igd/penempelan_surat') }}"> Penempelan </a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-heart"></i>
							<span class="nav-text">RI PONEK</span>
						</a>
                        <ul aria-expanded="false">
							{{-- <li><a href="{!! url('index'); !!}">Dashboard</a></li> --}}
							{{-- <li><a href="{{ url('/admin/ponekbayi') }}">Pengkajian awal bayi</a></li> --}}
							<li><a href="{{ url('/admin/asesmenperawat') }}">Asesmen Perawat</a></li>
							{{-- <li><a href="{{ url('/admin/ponekasesmen') }}">Asesmen pasien kebidanan</a></li> --}}
							{{-- <li><a href="{!! url('doctors-details'); !!}">Doctors Details</a></li>
							<li><a href="{!! url('doctors-review'); !!}">Doctors Review</a></li>
							<li><a href="{!! url('patient-details'); !!}">Patient Details</a></li> --}}
						</ul>

                    </li>
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
						<i class="flaticon-381-television"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('./app-profile'); !!}">Profile</a></li>
                            <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="{!! url('./email-compose'); !!}">Compose</a></li>
                                    <li><a href="{!! url('./email-inbox'); !!}">Inbox</a></li>
                                    <li><a href="{!! url('./email-read'); !!}">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="{!! url('./app-calender'); !!}">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="{!! url('./ecom-product-grid'); !!}">Product Grid</a></li>
									<li><a href="{!! url('./ecom-product-list'); !!}">Product List</a></li>
									<li><a href="{!! url('./ecom-product-detail'); !!}">Product Details</a></li>
									<li><a href="{!! url('./ecom-product-order'); !!}">Order</a></li>
									<li><a href="{!! url('./ecom-checkout'); !!}">Checkout</a></li>
									<li><a href="{!! url('./ecom-invoice'); !!}">Invoice</a></li>
									<li><a href="{!! url('./ecom-customers'); !!}">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('./chart-flot'); !!}">Flot</a></li>
                            <li><a href="{!! url('./chart-morris'); !!}">Morris</a></li>
                            <li><a href="{!! url('./chart-chartjs'); !!}">Chartjs</a></li>
                            <li><a href="{!! url('./chart-chartist'); !!}">Chartist</a></li>
                            <li><a href="{!! url('./chart-sparkline'); !!}">Sparkline</a></li>
                            <li><a href="{!! url('./chart-peity'); !!}">Peity</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-internet"></i>
							<span class="nav-text">Bootstrap</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('./ui-accordion'); !!}">Accordion</a></li>
                            <li><a href="{!! url('./ui-alert'); !!}">Alert</a></li>
                            <li><a href="{!! url('./ui-badge'); !!}">Badge</a></li>
                            <li><a href="{!! url('./ui-button'); !!}">Button</a></li>
                            <li><a href="{!! url('./ui-modal'); !!}">Modal</a></li>
                            <li><a href="{!! url('./ui-button-group'); !!}">Button Group</a></li>
                            <li><a href="{!! url('./ui-list-group'); !!}">List Group</a></li>
                            <li><a href="{!! url('./ui-media-object'); !!}">Media Object</a></li>
                            <li><a href="{!! url('./ui-card'); !!}">Cards</a></li>
                            <li><a href="{!! url('./ui-carousel'); !!}">Carousel</a></li>
                            <li><a href="{!! url('./ui-dropdown'); !!}">Dropdown</a></li>
                            <li><a href="{!! url('./ui-popover'); !!}">Popover</a></li>
                            <li><a href="{!! url('./ui-progressbar'); !!}">Progressbar</a></li>
                            <li><a href="{!! url('./ui-tab'); !!}">Tab</a></li>
                            <li><a href="{!! url('./ui-typography'); !!}">Typography</a></li>
                            <li><a href="{!! url('./ui-pagination'); !!}">Pagination</a></li>
                            <li><a href="{!! url('./ui-grid'); !!}">Grid</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-heart"></i>
							<span class="nav-text">Plugins</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('./uc-select2'); !!}">Select 2</a></li>
                            <li><a href="{!! url('./uc-nestable'); !!}">Nestedable</a></li>
                            <li><a href="{!! url('./uc-noui-slider'); !!}">Noui Slider</a></li>
                            <li><a href="{!! url('./uc-sweetalert'); !!}">Sweet Alert</a></li>
                            <li><a href="{!! url('./uc-toastr'); !!}">Toastr</a></li>
                            <li><a href="{!! url('./map-jqvmap'); !!}">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li><a href="{!! url('widget-basic'); !!}" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Widget</span>
						</a>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Forms</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('./form-element'); !!}">Form Elements</a></li>
                            <li><a href="{!! url('./form-wizard'); !!}">Wizard</a></li>
                            <li><a href="{!! url('./form-editor-summernote'); !!}">Summernote</a></li>
                            <li><a href="{!! url('form-pickers'); !!}">Pickers</a></li>
                            <li><a href="{!! url('form-validation-jquery'); !!}">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-network"></i>
							<span class="nav-text">Table</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('table-bootstrap-basic'); !!}">Bootstrap</a></li>
                            <li><a href="{!! url('table-datatable-basic'); !!}">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{!! url('./page-register'); !!}">Register</a></li>
                            <li><a href="{!! url('./page-login'); !!}">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="{!! url('./page-error-400'); !!}">Error 400</a></li>
                                    <li><a href="{!! url('./page-error-403'); !!}">Error 403</a></li>
                                    <li><a href="{!! url('./page-error-404'); !!}">Error 404</a></li>
                                    <li><a href="{!! url('./page-error-500'); !!}">Error 500</a></li>
                                    <li><a href="{!! url('./page-error-503'); !!}">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="{!! url('./page-lock-screen'); !!}">Lock Screen</a></li>
                        </ul>
                    </li> --}}
                </ul>

				{{-- <div class="plus-box">
					<p>Create new appointment</p>
				</div>
				<div class="copyright">
					<p><strong> Medica </strong> ?? 2022 All Rights Reserved</p>
					<p>Made with <i class="fa fa-heart"></i> by Team </p>
				</div> --}}
			</div>
        </div>
