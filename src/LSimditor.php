<?php
namespace LSimditor;

class LSimditor{
    public static function show($editor_id, $tool_bar = 'toolbar'){
        $editorid = $editor_id;
        $toolbar = $tool_bar;
        return view('vendor.editor', compact('editorid', 'toolbar_type'));
    }
}