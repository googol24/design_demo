<?php

/**
 * 试卷类
 *
 * @author googol24
 */
abstract class TestPaper
{
    public function question1()
    {
        echo '杨过得到，后来给了郭靖，炼成倚天剑、屠龙刀的玄铁可能是[ ]' . PHP_EOL;
        echo 'A.球磨铸铁 B.马口铁 C.高速合金钢 D.碳素纤维' . PHP_EOL;

        echo '答案：' . $this->answer1() . PHP_EOL;
    }

    public function question2()
    {
        echo '杨过、程英、陆无双铲除了情花，造成[ ]' . PHP_EOL;
        echo 'A.使这种植物不在害人 B.使一种珍惜物种灭绝 C.破坏了那个生物圈的生态平衡 D.造成该地区荒漠化' . PHP_EOL;

        echo '答案：' . $this->answer2() . PHP_EOL;
    }

    public function question3()
    {
        echo '蓝凤凰致使华山师徒、桃谷六仙呕吐不止，如果你是大夫，会给他们开什么药[ ]' . PHP_EOL;
        echo 'A.阿司匹林 B.牛黄解毒片 C.氟哌酸 D.让他们喝大量的生牛奶 E.以上全不对' . PHP_EOL;

        echo '答案：' . $this->answer3() . PHP_EOL;
    }

    public abstract function answer1();

    public abstract function answer2();

    public abstract function answer3();
}