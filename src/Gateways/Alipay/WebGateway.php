<?php

namespace ailiangkuai\payment\Gateways\Alipay;

class WebGateway extends Alipay
{
    /**
     * get method config.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @return string
     */
    protected function getMethod()
    {
        return 'alipay.trade.page.pay';
    }

    /**
     * get productCode config.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @return string
     */
    protected function getProductCode()
    {
        return 'FAST_INSTANT_TRADE_PAY';
    }

    /**
     * pay a order.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @param array $config_biz
     *
     * @return string
     */
    public function pay(array $config_biz = [])
    {
        parent::pay($config_biz);

        return $this->buildPayHtml();
    }
}
