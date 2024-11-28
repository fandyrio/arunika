<div class="card card-custom gutter-b">
    <div class="card-header">
        <div class="card-title" style=''>
            <h3 class="card-label">Form Tambah Konfigurasi</h3>
        </div>
    </div>
    <div class="card-body">
        <form action="save-config">
            @csrf
            <div class='row mb-6'>
                <div class='col-lg-8'>
                    <label>Nama</label>
                    <input type='text' class='form-control required_field' name='config_name' value="">
                </div>
            </div>
            <div class='row mb-6'>
                <div class='col-lg-8'>
                    <label>Value</label>
                    <textarea class='required_fields' id="value" name="value_text"></textarea>
                </div>
            </div>
            <div class='row mb-6'>
                <div class='col-lg-8'>
                    <label>File</label>
                    <input type='file' class='form-control value_file' name='value_file'>
                </div>
            </div>
            <div class='row mb-6'>
                <div class='col-12'>
                <center>
                    <button class='btn btn-info btn-md saveArtikel'>Simpan</button>
                    <button class='btn btn-danger btn-md' onClick="callLink('list-config-web')" type='button'>Kembali</button>
                </center>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{!! asset('../resources/views/assets/js/fn_arunika.js') !!}"></script>
<script src="{!! asset('../resources/views/assets/js/arunika_services_config.js') !!}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#value").summernote({
            height:400,
            minHeight: 400,             // set minimum height of editor
            maxHeight: 400,      
            lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0', '3.0'],
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'help']],
                ['height', ['height']],
            ],
            codeviewFilter: false,
            codeviewIframeFilter: true
        });
    });
$("#textStatement").summernote("code", "<?php echo filter_var(str_replace(array("\n","\r"), '', (str_replace('"', "'", $value))), FILTER_SANITIZE_STRING) ?>");
</script>