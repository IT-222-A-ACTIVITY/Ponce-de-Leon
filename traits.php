<?php

trait Logger
{
    public function log($message)
    {
        echo date("D M j G:i:s T Y") . ':' . '(' . __CLASS__ . ') ' . $message . PHP_EOL;

    }
}



class BankAccount
{
    use Logger;

    private $accountNumber;

    public function __construct($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        $this->log("A new $accountNumber bank account created");
    }
}

class user {
    use Logger;

    private $savings;

    public function __construct($user)
    {
        $this->log("New User: $user");
    }

}

class savings {
    use Logger;

    private $savings;

    public function __construct($savings)
    {
        $this->savings = $savings;
        $this->log("YOUR MONEY : $savings has been shown");
    }

}

$bank = new BankAccount("OC001");
$bank1 = new BankAccount("OC003");
$savings = new savings("1000");
$user = new user("ky0le");
echo PHP_EOL;


//IDE Process
trait preprocess
{
    public function preprocess()
    {
        echo "Preprocess .. done" . PHP_EOL;

    }
}

trait compiler
{
    public function compile()
    {
        echo "Compile Code .. done" . PHP_EOL;

    }
}

trait assembler
{
    public function createExec()
    {
        echo "Create the object code files .. done" . PHP_EOL;

    }
}

trait linker
{
    public function createObject()
    {
        echo "Create the executable file .. done" . PHP_EOL;

    }
}

class IDE {
    use preprocess, compiler, assembler, linker;
    public function run()
    {
        $this->preprocess();
        $this->compile();
        $this->createExec();
        $this->CreateObject();

        echo "Execute the file .. done" . PHP_EOL;
    }

}

$ide = new IDE();
$ide->run();

trait read{
    public function read($source){
        echo sprintf('Read from %s'.PHP_EOL. $source);
    }
}
trait write{
    public function write($destination){
        echo sprintf(''.PHP_EOL. $destination);
    }
}

trait copier{
    use read, write;

    public function copy($source, $destination){
        $this->read($source);
        $this->write($destination);
    }
}

class FileUtil{
    use copier;

    public function copyFile($source, $destination){
        $this->copy($source,$destination);    
    }   
}

$util = new FileUtil();