简介:

	本程序为机智云客户端
	争取服务端也能开源,服务端还在完善中.
	此程序功能以打通通道为主,并带有状态接口
	其它文件查看等都是辅助功能,并不是主要设计的对象.
	本程序基于: https://github.com/chriskuehl/tap2tap.git

功能:

	1.添加了认证功能
	2.添加了多用户功能
	3.集成了webserver
	4.添加了angular-filemanager json-rpc
	5.添加了dhcp自动分配ip
	6.基于


依赖:

	1. jansson
	2. onion

编译方法:

	export CC=arm-openwrt-linux-gcc
	export STAGING_DIR=/opt/toolchain/openwrt_sdk/openwrt-sdk-18.06.0-kirkwood_gcc-7.3.0_musl_eabi.Linux-x86_64/staging_dir/
	make



使用方法: 

	natc -u <username> -p <password> -d
