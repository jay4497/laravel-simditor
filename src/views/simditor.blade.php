<link rel="stylesheet" type="text/css" href="{{ public_path('plugins/editor/css/simditor.css') }}" />

<script type="text/javascript" src="{{ public_path('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ public_path('plugins/editor/js/module.js') }}"></script>
<script type="text/javascript" src="{{ public_path('plugins/editor/js/hotkeys.js') }}"></script>
<script type="text/javascript" src="{{ public_path('plugins/editor/js/uploader.js') }}"></script>
<script type="text/javascript" src="{{ public_path('plugins/editor/js/simditor.js') }}"></script>
<script type="text/javascript">
    var siditor = new Simditor({
        textarea: $("#{{ $editorid }}"),
        toolbar: [{{ config('simditor.'.$toolbar_type) }}],
        upload:{
            url: "{{ config('simditor.upload_url') }}",
            params: null,
            fileKey: "{{ config('simditor.upload_file_key') }}",
            connectionCount: 3,
            leaveConfirm: "{{ config('simditor.leave_confirm') }}"
        },
    });
</script>