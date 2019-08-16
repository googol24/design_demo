<?php

// 自动加载
spl_autoload_register(function ($class) {
    include "$class.php";
});

// 生成一个具体的主题
$concreteSubject = new ConcreteSubject();

// 生成观察者
$observer1 = new ConcreteObserver($concreteSubject, 'Alice');
$observer2 = new ConcreteObserver($concreteSubject, 'Bob');
$observer3 = new ConcreteObserver($concreteSubject, 'TracySwh');

// 观察者订阅主题
$concreteSubject->attach($observer1);
$concreteSubject->attach($observer2);
$concreteSubject->attach($observer3);

// 主题状态更新
$concreteSubject->setSubjectStatus('NEW');

// 剔除一个订阅
$concreteSubject->detach($observer2);

// 通知观察者相应更新状态
$concreteSubject->notify();

//class People
//{
//    private $name;
//
//    public function __construct($name)
//    {
//        $this->name = $name;
//    }
//
//    public function __toString()
//    {
//        return serialize($this);
//    }
//
//    /**
//     * 对象比较
//     *
//     * @param People $person1
//     * @param People $person2
//     *
//     * @return bool
//     *
//     */
//    public static function equals($person1, $person2)
//    {
//        if ($person1->__toString() === $person2->__toString()) {
//            return true;
//        }
//
//        return false;
//    }
//}
//
//$p1 = new People('Alice');
//$p2 = new People('Bob');
//$p3 = new People('Alice');
//
//var_dump(People::equals($p1, $p1));
//var_dump(People::equals($p1, $p2));
//var_dump(People::equals($p1, $p3));
//var_dump(People::equals($p2, $p3));