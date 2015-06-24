<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<p>This page uses frames. The current browser you are using does not
		support frames.</p>
    <?php
    define("PI", 3.14); // 定义一个常量
    define("R123", 5); // 定义一个常量
    $area = PI * R123 * R123; // 计算圆的面积
    echo "圆的面积是：" . $area;
    
    define("URL", "http://www.jb51.net");
    echo "我的网址是：" . URL;
    
    // echo phpinfo();
    echo "Hello World!";

    class MyClass
    {

        const CT_GOPAL_TEST01 = "asd";

        public $public = 'Public';

        protected $protected = 'Protected';

        private $private = 'Private';

        function printHello()
        {
            echo self::CT_GOPAL_TEST01;
            echo $this->public;
            echo $this->protected;
            echo $this->private;
        }

        public static function printHelloSta()
        {
            echo self::CT_GOPAL_TEST01;
        }
    }
    echo "<br/>";
    echo MyClass::CT_GOPAL_TEST01; // 这行能被正常执行
    MyClass::printHelloSta();
    
    echo "<br/>";
    $obj = new MyClass();
    echo $obj::CT_GOPAL_TEST01; // 这行能被正常执行
    echo $obj->public; // 这行能被正常执行
                       // echo $obj->protected; // 这行会产生一个致命错误
                       // echo $obj->private; // 这行也会产生一个致命错误
    
    echo "<br/>";
    $obj->printHello(); // 输出 Public、Protected 和 Private
    echo "<br/>";
    $obj->printHelloSta();
    
    // PHP isset()与empty()的使用区别详解
    echo "<br/>";
    $var = 0;
    // 结果为 true，因为 $var 为空
    if (empty($var)) {
        echo '$var is either 0 or not set at all';
    }
    // 结果为 false，因为 $var 已设置
    if (! isset($var)) {
        echo '$var is not set at all';
    }
    ?>
    </body>
</html>