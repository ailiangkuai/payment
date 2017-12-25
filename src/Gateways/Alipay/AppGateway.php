<?php

namespace ailiangkuai\payment\Gateways\Alipay;

class AppGateway extends Alipay
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
        return 'alipay.trade.app.pay';
    }

    /**
     * get productCode method.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @return string
     */
    protected function getProductCode()
    {
        return 'QUICK_MSECURITY_PAY';
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

        return http_build_query($this->config);
    }
}
