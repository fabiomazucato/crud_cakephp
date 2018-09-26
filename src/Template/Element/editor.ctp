<?php
echo $this->Html->css('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css');
echo $this->Html->css('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css');
echo $this->Html->css('assets/global/plugins/bootstrap-summernote/summernote.css');

echo $this->Html->script('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js');
echo $this->Html->script('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js');
echo $this->Html->script('assets/global/plugins/bootstrap-markdown/lib/markdown.js');
echo $this->Html->script('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js');
echo $this->Html->script('assets/global/plugins/bootstrap-summernote/summernote.min.js');
echo $this->Html->script('assets/pages/scripts/components-editors.min.js');
?>
<script>
    jQuery(document).ready(function () {
        ComponentsEditors.init();
    });
</script>