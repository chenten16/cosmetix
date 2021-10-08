@extends('adminViews.base')
@section('css')

@endsection
@section('breadcrumbs')
<div class="toolbar">
	<!--begin::Toolbar-->
	<div class="container-fluid py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column me-5">
			<!--begin::Title-->
			<h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">Dashboard</h1>
			<!--end::Title-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
				<!--begin::Item-->
				<li class="breadcrumb-item text-muted">
					<a href="{{route('adminIndex')}}" class="text-muted text-hover-primary">Home</a>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item">
					<span class="bullet bg-gray-200 w-5px h-2px"></span>
				</li>
				<!--end::Item-->
				<!--begin::Item-->
				<a href="{{route('adminProducts')}}" class="text-muted text-hover-primary">Products</a>
				<!--end::Item-->
			</ul>
			<!--end::Breadcrumb-->
		</div>
		<!--end::Page title-->

	</div>
	<!--end::Toolbar-->
</div>
@endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

	<livewire:admin.datatables.products />
	<livewire:admin.modal.product-modal />
</div>
@endsection



@section('js')

<script src="{{asset('adminAssets/js/custom/apps/customers/add.js')}}"></script>
<script src="{{asset('adminAssets/js/custom/widgets.js')}}"></script>
<script src="{{asset('adminAssets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('adminAssets/js/custom/modals/create-app.js')}}"></script>
<script src="{{asset('adminAssets/js/custom/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('adminAssets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script>
	$("#featured_image").change(function() {
		var file = $("#featured_image")[0].files[0];
		var reader = new FileReader();
		// it's onload event and you forgot (parameters)
		reader.onload = function(e) {
			var image = $("#featured-preview")
			// the result image data
			image.attr('src', e.target.result)

		}
		// you have to declare the file loading
		reader.readAsDataURL(file);
	});

	$("#gallery_images").change(function() {
		var files = $("#gallery_images")[0].files;
		const galleryContainer = $("#gallery-preview")
		for (const file of files) {
			let reader = new FileReader();
			// it's onload event and you forgot (parameters)
			reader.onload = function(e) {
				galleryContainer.append(`<img src="${e.target.result}" id="featured-preview" class="d-block my-2 col-xl-3" style="max-width: 100px;" alt="">`)
			}
			// you have to declare the file loading
			reader.readAsDataURL(file);
		}

	});
	let tagify = []
	const initTagify = () => {
		let input = document.querySelectorAll(".option_value")
		input.forEach(el => {
			tagify.push(new Tagify(el))
		})

	}
	initTagify()

	const generateSelect = (values, name) => {

		let data = JSON.parse(values)
		let select = ` <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container col-xl-3"><select class='form-control' name='selected_${name}[]'><option value=''>Select ${name}</option>`
		data.forEach(el => {
			select += `<option value='${el.value}'>${el.value}</option>`
		})
		select += `</select></div>`
		return select
	}

	$("#addVariant").click(() => {

		let variantValues = $(".option")
		let html = `<div class="row mt-3">`
		for (const variant of variantValues) {
			if (variant.querySelector(".option_value").value != "" || variant.querySelector(".option_name").value != "")
				html += generateSelect(variant.querySelector("input.option_value").value, variant.querySelector(".option_name").value)
		}
		html += `<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container col-xl-3">
				<!--begin::Input-->
				<input type='number' required class="form-control form-control-solid" name='variant_price[]'  placeholder="Price" />
				<!--end::Input-->
				<div class="fv-plugins-message-container invalid-feedback"></div>
				</div>`
		$("#variantContainer").append(html)
	})



	$("#addOption").click(() => {

		$("#optionsContainer").append(`<div class="row option">
                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container col-xl-4">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">Option name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid option_name" required placeholder="" name="option_name[]">
                                        <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container col-xl-8">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold mb-2">Option values</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid option_value" required placeholder="" name="option_value[]">
                                        <!--end::Input-->
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                </div>`)
		let inputs = document.querySelectorAll(".option_value")
		tagify.push(new Tagify(inputs[inputs.length - 1]))
	})

	$("#product_form").submit(function(e) {
		e.preventDefault();
		let formData = new FormData(this);
		formData.append('_token', '{{ csrf_token() }}')
		$.ajax({
			type: 'POST',
			url: "{{ url('admin/addProduct')}}",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			success: (data) => {},
			error: function(data) {
				console.log(data);
			}
		});
	})

	let datatable = $("#product_table").DataTable({
		"columnDefs": [{
			"width": "40%",
			"targets": 1
		}],
		searching: true
	});
	$("#searchProduct").change(function() {
		console.log('hi')
		datatable.search($(this).val()).draw()
	})
	Livewire.on('toggleModal', () => {
		$("#cat_modal").modal('toggle')

		// window.location.reload()
	})
	Livewire.on('updateUi', () => {
		window.location.reload()
	})
</script>
@endsection