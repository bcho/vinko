<?php

return array(
	'custom' => array(
		// BackendCompany
		'logo' => array(
			'image' => '请上传图片！'
		),
		'name' => array(
			'required' => '名称不能为空！',
			'max' => '名称不能超过 :max 个字！'
		),
		'address' => array(
			'required' => '地址不能为空！',
			'max' => '地址不能超过 :max 个字！'
		),
		'zip' => array(
			'required' => '邮编不能为空！',
			'min' => '邮编不能少于 :min 个数字！'
		),
		'phone' => array(
			'required' => '电话号码不能为空',
			'min' => '电话号码不能少于 :min 个字'
		),
		'fax' => array(
			'required' => '传真不能为空！',
			'min' => '传真不能少于 :min 个数字！'
		),
		'mail' => array(
			'required' => '邮件地址不能为空！',
			'email' => '邮件地址格式错误！'
		),
		'vision' => array(
			'max' => '正文不能超过 :max 个字！'
		),
		'description' => array(
			'required' => '描述不能为空！',
			'max' => '正文不能超过 :max 个字！'
		),
		'qualification' => array(
			'max' => '正文不能超过 :max 个字！'
		),

		// BackendPost
		'title' => array(
			'required' => '标题不能为空！',
			'max' => '标题不能超过 :max 个字！'
		),
		'content' => array(
			'required' => '正文不能为空！',
			'max' => '正文不能超过 :max 个字！'
		),

		// BackendProduct
		'image' => array(
			'required' => '图片不能为空！',
			'image' => '请上传图片文件！'
		),

		// BackendUser
		'username' => array(
			'required' => '登录名不能为空！'
		),
		'password' => array(
			'required' => '密码不能为空！',
			'min' => '密码至少 :min 位！',
			'max' => '密码至多 :max 位！'
		),
		'display_name' => array(
			'required' => '显示名不能为空！',
			'field_unique' => '显示名已经被使用！'
		),
		'orig_password' => array(
			'required' => '原始密码不能为空！',
			'password_match' => '和原密码匹配错误！'
		)
	)
);
