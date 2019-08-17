# design_demo
brief samples about the design pattern

# 简单工厂模式
> 简单工厂模式专门定义一个类来负责创建其他类的实例，被创建的实例通常都具有共同的父类

# 策略模式
> 它定义了算法家族，分别封装起来，让它们之间可以相互替换。改模式让算法的变化不会影响到使用算法的用户

# 单一职责原则
> 对于一个类而言，应当仅有一个引起它变化的原因（一个类只有一个职责）

# 开放关闭原则
> 软件实体（类、模块、函数等）应该可以扩展，但是不能被修改（对扩展开放，对更改关闭）

# 依赖倒转原则
> 抽象不应该依赖细节，细节应该依赖于抽象（针对接口编程，不要针对实现编程）
* 高层模块不应该依赖于低层模块，两者都应该依赖于抽象
* 抽象不应该依赖细节，细节应该依赖于抽象
* 里式替换原则：子类型必须能够替换掉他们的父类型（子类型的可替换性使得使用父类型的模块在无需修改的情况下就可以扩展，开放关闭）

# 装饰模式(Decorator)
> 动态地给一个对象添加额外的职责。就增加功能来说，装饰模式比生成子类更为灵活
* 额外添加的职责一般都是仅仅为了满足某种特定情况下才会执行的特殊行为的需要
* 装饰模式把要装饰的功能单独得放在一个类中，并让这个类包装它所要装饰的对象（把类的核心职责与它的装饰功能分开，简化了原有的类）
* 因此，需要执行特殊行为的时候，客户代码可以在运行时有需要的、按照指定顺序使用装饰功能来包装对象

# 代理模式
> 为其他对象提供一种代理，以控制对这个对象的访问
* 给某一个对象提供一个代理对象，并由代理对象控制对原对象的引用
* 中介隔离作用：在某些情况下，一个客户类不想或者不能直接引用一个委托对象，而代理类对象可以在客户类和委托对象之间起到中介的作用，其特征是代理类和委托类实现相同的接口
* 开闭原则，增加功能：代理类除了是客户类和委托类的中介之外，我们还可以通过给代理类增加额外的功能来扩展委托类的功能(只需要修改代理类而不需要再修改委托类)

# 工厂方法模式
> 定义一个用于创建对象的接口，让子类决定实例化哪一个类。工厂方法使一个类的实例化延迟到其子类
* 简单工厂模式的进一步抽象和推广
* 与简单工厂相比，遵循了开放关闭原则，增加一种工厂类型只需要增加一个对应的工厂子类即可（不需要更改其他工厂子类。PS:在简单工厂模式中需要更改工厂类）

# 原型模式
> 用原型实例指定创建对象的种类，并且通过拷贝这些原型创建新的对象
* 原型模式其实就是从一个对象在创建另外一个可定制的对象，而且不需要知道任何创建的细节，也提升了性能
* 浅复制：被复制的对象的所有（值类型）变量都含有与原来对象相同的值，而所有对其他对象的引用都仍指向原来的对象
* 深复制：被复制的对象的所有（值类型）变量都含有与原来对象相同的值，并且把引用对象的变量指向复制过的新对象，而不是原有被引用的对象

# 模板方法模式
> 定义一个操作中的算法骨架，而将一些步骤延迟到子类中。模板方法可以使得子类可以不改变一个算法的结构即可重定义该算法的某些特定步骤
* 当我们要完成在某一细节层次一致的一个过程或一系列步骤，但是其个别步骤在更详细的层次上的实现可能有所不同的时候，通常考虑用模板方法模式来处理
* 模板方法模式是通过把不变的行为搬移到超类，去除子类中重复的代码来体现它的优势（一个很好的代码复用平台）
* 当不变的和可变的行为在子类的实现中混合在一起的时候，不变的行为就会在子类中重复出现。通过模板方法模式可以把这些行为搬移到单一的地方，这样就帮助子类摆脱了重复的不变行为的纠缠

# 迪米特法则（最少知识原则）
> 如果两个类不必彼此通信，那么这两个类就不应当发生直接的相互作用。如果其中一个类需要调用另一个类的某一个方法的话，可以通过第三者转发这个调用
* 迪米特法则强调的前提是在类的结构设计上，每一个类都应当尽量降低成员的访问权限（一个类包装好自己的private状态，不需要让别的类知道的字段或者行为就不需要公开）
* 迪米特法则的根本思想，是强调了类之间的松耦合
* 类之间的耦合越弱，越有利于复用。一个处于弱耦合的类被修改，不会对有关系的类造成波及（信息隐藏促进软件复用）

# 外观模式（门面模式）
> 为子系统中的一组接口提供一个一致的界面，此模式定义了一个高层接口，这一接口使得这一子系统更加容易使用
* 首先，在设计初期阶段，应该要有意识地将不同的两个层分离，在层与层之间建立外观Facade,为复杂的子系统提供简单的接口
* 其次，在开发阶段，子系统往往因为不断地重构演化而变得越来越复杂，此时增加Facade可以提供一个简单的接口，减少外部用户程序与复杂的子系统之间的依赖
* 第三，在维护一个大型系统时，可能这个系统已经非常难以维护和扩展了，当新功能开发依赖于它的时候，可以增加Facade类，让新功能与Facade交互,Facade与遗留代码交互

# 建造者模式
> 建造者模式，将一个复杂对象的构建与它的表示分离，使得同样的构建过程可以创建不同的表示
* 使用了建造者模式，用户只需要指定需要建造的类型就可以得到建造的产品，不用去关心具体的建造过程和细节
* 该模式主要用于创建一些复杂的对象，这些对象内部构建之间的建造顺序通常是稳定的，但对象内部的构建通常面临着复杂的变化
* 该模式使得对象的建造代码与表示代码分离，由于建造者隐藏了该产品是如何组装的，所以若需要改变一个产品的内部表示，只需要再定义一个具体的建造者就可以了
* 当创建对象的复杂算法应该独立于该对象的组成部分以及它们的装配方式的时候，适用建造者模式
* 与工厂模式的区别：粒度上

# 观察者模式（发布/订阅模式）
> 观察者模式定义了一种一对多的依赖关系，让多个观察者对象同时监听某一个主体对象。这个主题对象在状态发生变化的时候，会通知所有观察者对象，使他们能够自己更新自己
* 使用观察者模式的动机：将一个系统分割成一系列相互作用的类有一个很不好的副作用，那就是需要维护相关对象间的一致性。我们不希望为了维护一致性而使得各类紧密耦合，这样会给维护、扩展和重用都带来不便
* 什么情况下使用该模式：当一个对象的改变需要同时改变其他对象，而且它不知道具体有哪些对象有待改变的时候（比如：下单完成之后需要扣减库存、扣减优惠券等等）ps:类似于消息服务发送广播主题
* 当一个抽象模型有两个方面，其中一个方面(观察者)依赖于另一个方面(主题)，这时用观察者模式可以将这两者封装在独立的对象中使他们各自独立地改变和复用
* 总而言之，观察者模式所做的事情其实也就是在解除耦合。让耦合的双方都依赖于抽象，而不是依赖于具体。从而使得各自的变化都不会影响另一边的变化

# 抽象工厂模式（Abstract Factory）
> 提供一个创建一系列相关或相互依赖对象的接口，而无需指定它们具体的类
* IFactory是一个抽象工厂接口，它里面包含所有产品创建的抽象方法
* 抽象工厂模式最大的好处是易于交换产品系列（改变一个应用的具体工厂变得十分容易，只需要再初始化的时候改变一次即可。比如由Sql Server改变为Access）
* 抽象工厂模式让具体的创建实例过程与客户端分离，客户端是通过它们的抽象接口来操纵实例，产品的具体类名也被具体工厂的实现分离，不会出现在客户端代码中
* 与工厂方法模式的区别：
    * 工厂方法模式：只有一个抽象产品类，具体工厂类只能创建一个具体产品类的实例 
    * 抽象工厂模式：有多个抽象产品类 ，具体工厂类能创建多个具体产品类的实例
    
# 状态模式（State）
> 当一个对象内在状态改变时允许改变其行为，这个对象看起来像是改变了其类
* 状态模式主要解决的是控制一个对象状态的条件表达式过于复杂的时的情况。把状态的判断逻辑转移到表示不同状态的一系列类中，可以把复杂的判断逻辑简单化
* 当然，如果这个状态很简单，就没必要用状态模式了
* 状态模式的好处是将与特定状态相关的行为局部化，并且将不同状态的行为分割开来。由于特定的状态相关的行为都放入一个对象中，由于所有与状态相关的代码都存在于某个具体状态类（ConcreteState）中，所以通过定义新的子类可以很容易地增加新的状态和转换
* 状态模式通过把各种状态转移逻辑分布到State的子类之间，减少了相互的依赖，使得维护和扩展变得容易
* 什么时候考虑使用状态模式：当一个对象的行为取决于它的状态，并且它必须在运行时刻根据状态改变它的行为的时候考虑使用状态模式
   