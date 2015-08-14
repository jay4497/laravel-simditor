<link rel="stylesheet" type="text/css" href="{{ asset('plugins/editor/css/simditor.css') }}" />

<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/editor/js/module.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/editor/js/hotkeys.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/editor/js/uploader.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/editor/js/simditor.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
    var simditor = new Simditor({
        textarea: $("#{{ $editor_id }}"),
        toolbar: {{ config('simditor.'.$toolbar) }}.split(","),
        upload:{
            url: "{{ config('simditor.upload_url') }}",
            params: null,
            fileKey: "{{ config('simditor.upload_file_key') }}",
            connectionCount: 3,
            leaveConfirm: "{{ config('simditor.leave_confirm') }}"
        }
    });
});
</script>