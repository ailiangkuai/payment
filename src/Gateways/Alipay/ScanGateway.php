<?php

namespace ailiangkuai\payment\Gateways\Alipay;

class ScanGateway extends Alipay
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
        return 'alipay.trade.precreate';
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
        return '';
    }

    /**
     * pay a order.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @param array $config_biz
     *
     * @return array|bool
     */
    public function pay(array $config_biz = [])
    {
        return $this->getResult($config_biz, $this->getMethod());
    }
}
