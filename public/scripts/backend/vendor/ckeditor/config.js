CKEDITOR.editorConfig = function(config) {
	config.toolbar = [{
		name: 'basicstyles',
		groups: ['basicstyles', 'cleanup'],
		items: ['Bold', 'Italic', 'Underline', '-', 'RemoveFormat']
	}, {
		name: 'paragraph',
		groups: ['list', 'indent', 'blocks', 'align'],
		items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-',
				'Blockquote', '-', 'JustifyLeft', 'JustifyCenter',
				'JustifyRight']
	}, {
		name: 'clipboard',
		groups: ['clipboard'],
		items: ['Cut', 'Copy', 'Paste', 'PasteText']
	}, {
		name: 'styles',
		items: ['Format', 'Font', 'FontSize']
	}, {
		name: 'colors',
		items: ['TextColor', 'BGColor']
	}, {
		name: 'links',
		items: ['Link', 'Unlink']
	}, {
		name: 'insert',
		items: ['Image']
	}, {
		name: 'tools',
		items: ['Maximize']
	}];

	config.format_tags = 'p;h1;h2;h3;pre';
	config.removeDialogTabs = 'image:advanced;link:advanced';
    config.height = 450;
	config.language = 'zh-CN';
};
