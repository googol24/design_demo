<?php

include 'autoload.php';

/**
 * 客户端测试
 *
 * @author googol24
 */

try {
    echo '请输入促销方式：';
    $promotionType = fgets(STDIN);
    $promotionType = trim($promotionType);

    echo '请输入总金额：';
    $money = fgets(STDIN);
    $money = trim($money);

    // 策略选择
    $cashContext = new CashContext($promotionType);
    $promotionMoney = $cashContext->getResult($money);

    echo '计算后的促销金额为：' . $promotionMoney;

} catch (Throwable $e) {
    echo '异常：' . $e->getMessage();
}
