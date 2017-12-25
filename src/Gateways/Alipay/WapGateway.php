<?php

namespace ailiangkuai\payment\Gateways\Alipay;

class WapGateway extends Alipay
{
    /**
     * get method config.
     *
     * @author Ricoyao <ailiangkuai@qq.com>
     *
     * @version 2017-08-10
     *
     * @return string [description]
     */
    protected function getMethod()
    {
        return 'alipay.trade.wap.pay';
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
        return 'QUICK_WAP_WAY';
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
